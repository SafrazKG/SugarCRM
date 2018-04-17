<?php

/**
 * @author Emil Kilhage <emil.kilhage@addoptify.com>
 */
class DRI_Workflow_Template extends Basic
{
    const ASSIGNEE_RULE_NONE = 'none';
    const ASSIGNEE_RULE_CREATE = 'create';
    const ASSIGNEE_RULE_STAGE_START = 'stage_start';

    const TARGET_ASSIGNEE_CURRENT_USER = 'current_user';
    const TARGET_ASSIGNEE_PARENT = 'parent_assignee';

    /**
     * Retrieves a DRI_Workflow_Template with id $id and
     * returns a instance of the retrieved bean
     *
     * @param string $id: the id of the DRI_Workflow_Template that should be retrieved
     * @return DRI_Workflow_Template
     * @throws DRI_Workflow_Templates_Exception_IdNotFound: if not found
     */
    public static function getById($id)
    {
        if (empty($id)) {
            require_once 'modules/DRI_Workflow_Templates/Exception/IdNotFound.php';
            throw new DRI_Workflow_Templates_Exception_IdNotFound($id);
        }

        /** @var DRI_Workflow_Template $bean */
        $bean = BeanFactory::retrieveBean('DRI_Workflow_Templates', $id, array (
            'disable_row_level_security' => true,
        ));

        if (null === $bean) {
            require_once 'modules/DRI_Workflow_Templates/Exception/IdNotFound.php';
            throw new DRI_Workflow_Templates_Exception_IdNotFound($id);
        }

        return $bean;
    }

    /**
     * Retrieves a DRI_Workflow_Template with name $name and
     * returns a instance of the retrieved bean
     *
     * @param string $name: the name of the DRI_Workflow_Template that should be retrieved
     * @param string $skipId
     * @return DRI_Workflow_Template
     * @throws DRI_Workflow_Templates_Exception_NameNotFound
     */
    public static function getByName($name, $skipId = null)
    {
        $db = DBManagerFactory::getInstance();

        $sql = <<<SQL
            SELECT id
            FROM dri_workflow_templates
            WHERE name = '%s' AND
                deleted = 0
SQL;

        if (!empty($skipId)) {
            $sql .= " AND id != '$skipId'";
        }

        $sql = sprintf($sql, $db->quote($name));
        $id = $db->getOne($sql);

        if (empty($id)) {
            require_once 'modules/DRI_Workflow_Templates/Exception/NameNotFound.php';
            throw new DRI_Workflow_Templates_Exception_NameNotFound($name);
        }

        return self::getById($id);
    }

    /**
     * @param string $module
     * @return array
     */
    public static function listEnumValuesByModule($module)
    {
        $query = new SugarQuery();
        $query->from(new self());
        $query->select(array ('id', 'name'));
        $query->orderBy('name', 'ASC');
        $query->where()
            ->contains('available_modules', "^$module^")
            ->equals('active', true);

        $results = $query->execute();

        $values = array ('' => '');

        foreach ($results as $result) {
            $values[$result['id']] = $result['name'];
        }

        return $values;
    }

    /**
     * @return DRI_Workflow_Template[]
     * @throws SugarQueryException
     */
    public static function all()
    {
        $query = new SugarQuery();
        $query->from(new self());
        $query->select(array ('id'));
        $results = $query->execute();

        $templates = array ();

        foreach ($results as $result) {
            $templates[] = self::getById($result['id']);
        }

        return $templates;
    }

    public $disable_row_level_security = false;
    public $new_schema = true;
    public $module_dir = 'DRI_Workflow_Templates';
    public $object_name = 'DRI_Workflow_Template';
    public $table_name = 'dri_workflow_templates';
    public $importable = true;

    public $team_id;
    public $team_set_id;
    public $team_count;
    public $team_name;
    public $team_link;
    public $team_count_link;
    public $teams;
    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $available_modules;
    public $assignee_rule;
    public $target_assignee;
    public $activities;
    public $following;
    public $following_link;
    public $favorite_link;
    public $tag;
    public $tag_link;
    public $points;
    public $related_activities;
    public $active;
    public $locked_fields;
    public $locked_fields_link;
    public $acl_team_set_id;
    public $acl_team_names;
    public $dri_workflow_task_templates;
    public $tasks;
    public $meetings;
    public $calls;

    /**
     * @var string
     */
    public $type;

    /**
     * @var Link2
     */
    public $dri_workflows;

    /**
     * @var Link2
     */
    public $dri_subworkflow_templates;

    /**
     * @var string
     */
    public $copied_template_id;

    /**
     * @var string
     */
    public $copied_template_name;

    /**
     * @var Link2
     */
    public $copied_template_link;

    /**
     * @var Link2
     */
    public $copies;

    /**
     * @param string $interface
     * @return boolean
     */
    public function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL':
                return true;
        }

        return false;
    }

    /**
     * @return DRI_SubWorkflow_Template[]
     */
    public function getStageTemplates()
    {
        $bean = \BeanFactory::newBean('DRI_SubWorkflow_Templates');

        $query = new \SugarQuery();
        $query->from($bean, array ('team_security' => false));
        $query->select('*');
        $query->orderBy('sort_order', 'ASC');
        $query->where()
            ->equals('dri_workflow_template_id', $this->id);

        return $bean->fetchFromQuery($query);
    }

    /**
     * @return DRI_SubWorkflow_Template
     * @throws SugarApiExceptionNotFound
     */
    public function getLastStage()
    {
        $stages = $this->getStageTemplates();

        if (count($stages) === 0) {
            throw new SugarApiExceptionNotFound();
        }

        return array_pop($stages);
    }

    /**
     * {@inheritdoc}
     */
    public function save($check_notify = false)
    {
        $this->validateUniqueName();

        $isNew = $this->isNew();
        $nameChanged = isset($this->fetched_row['name']) && $this->fetched_row['name'] != $this->name;

        $this->calculatePoints();
        $this->calculateRelatedActivities();

        $return = parent::save($check_notify);

        if ($isNew && !empty($this->copied_template_id)) {
            $this->copyFromTemplate();
        }

        if (!$isNew && $nameChanged) {
            $db = DBManagerFactory::getInstance();
            $sql = "UPDATE dri_workflows SET name = '%s' WHERE dri_workflow_template_id = '%s'";
            $sql = sprintf($sql, $db->quote($this->name), $this->id);
            $db->query($sql);
        }

        return $return;
    }

    /**
     *
     */
    private function copyFromTemplate()
    {
        try {
            $template = self::getById($this->copied_template_id);

            $this->dri_subworkflow_templates = null;
            $this->load_relationship('dri_subworkflow_templates');
            foreach ($template->getStageTemplates() as $stageTemplateBase) {
                $stageTemplate = clone $stageTemplateBase;
                $stageTemplate->id = \Sugarcrm\Sugarcrm\Util\Uuid::uuid4();
                $stageTemplate->new_with_id = true;
                $stageTemplate->dri_workflow_template_id = $this->id;
                $stageTemplate->dri_workflow_template_name = $this->name;
                $stageTemplate->save();

                $this->dri_subworkflow_templates->add($stageTemplate);

                $stageTemplate->dri_workflow_task_templates = null;
                $stageTemplate->load_relationship('dri_workflow_task_templates');
                foreach ($stageTemplateBase->getActivityTemplates() as $activityTemplateBase) {
                    $activityTemplate = clone $activityTemplateBase;
                    $activityTemplate->id = \Sugarcrm\Sugarcrm\Util\Uuid::uuid4();
                    $activityTemplate->new_with_id = true;
                    $activityTemplate->dri_subworkflow_template_id = $stageTemplate->id;
                    $activityTemplate->dri_subworkflow_template_name = $stageTemplate->name;
                    $activityTemplate->save();
                    $stageTemplate->dri_workflow_task_templates->add($activityTemplate);

                    foreach ($activityTemplateBase->getChildren() as $childTemplateBase) {
                        $childTemplate = clone $childTemplateBase;
                        $childTemplate->id = \Sugarcrm\Sugarcrm\Util\Uuid::uuid4();
                        $childTemplate->new_with_id = true;
                        $childTemplate->parent_id = $activityTemplate->id;
                        $childTemplate->dri_subworkflow_template_id = $stageTemplate->id;
                        $childTemplate->dri_subworkflow_template_name = $stageTemplate->name;
                        $childTemplate->parent_name = $activityTemplate->name;
                        $childTemplate->save();
                    }
                }
            }
        } catch (\DRI_Workflow_Templates_Exception_IdNotFound $e) {
            // omit if not found
        }
    }

    /**
     * Checks if the bean in
     * its current state is new
     * @return boolean
     */
    private function isNew()
    {
        return empty($this->id) || (!empty($this->id) && !empty($this->new_with_id));
    }

    /**
     * @param string $id
     */
    public function mark_deleted($id)
    {
        if ($this->id != $id) {
            $this->retrieve($id);
        }

        $subWorkflowTemplates = $this->getStageTemplates();

        parent::mark_deleted($id);

        foreach ($subWorkflowTemplates as $subWorkflowTemplate) {
            $subWorkflowTemplate->mark_deleted($subWorkflowTemplate->id);
        }
    }

    /**
     * @throws SugarApiExceptionInvalidParameter
     */
    private function validateUniqueName()
    {
        try {
            self::getByName($this->name, $this->id);
            throw new SugarApiExceptionInvalidParameter(sprintf('template with name %s does already exist', $this->name));
        } catch (DRI_Workflow_Templates_Exception_NotFound $e) {}
    }

    /**
     *
     */
    private function calculatePoints()
    {
        $sql = "SELECT SUM(points) FROM dri_subworkflow_templates WHERE deleted = 0 AND dri_workflow_template_id = '%s'";
        $sql = sprintf($sql, $this->id);
        $this->points = \DBManagerFactory::getInstance()->getOne($sql);
    }

    /**
     *
     */
    private function calculateRelatedActivities()
    {
        $sql = "SELECT SUM(related_activities) FROM dri_subworkflow_templates WHERE deleted = 0 AND dri_workflow_template_id = '%s'";
        $sql = sprintf($sql, $this->id);
        $this->related_activities = \DBManagerFactory::getInstance()->getOne($sql);
    }
}
