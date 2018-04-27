<?php

use DRI_Workflow_Task_Templates\Activity\ActivityHandlerFactory;

require_once "modules/DRI_Workflow_Task_Templates/Activity/ActivityHooks.php";

/**
 * @author Emil Kilhage <emil.kilhage@addoptify.com>
 */
class DRI_SubWorkflow extends Basic
{

    const STATE_NOT_STARTED = 'not_started';
    const STATE_IN_PROGRESS = 'in_progress';
    const STATE_NOT_COMPLETED = 'not_completed';
    const STATE_COMPLETED = 'completed';

    /**
     * Retrieves a DRI_SubWorkflow with id $id and
     * returns a instance of the retrieved bean
     *
     * @param string $id: the id of the DRI_SubWorkflow that should be retrieved
     * @return DRI_SubWorkflow
     * @throws DRI_SubWorkflows_Exception_IdNotFound: if not found
     */
    public static function getById($id)
    {
        if (empty($id)) {
            require_once 'modules/DRI_SubWorkflows/Exception/IdNotFound.php';
            throw new DRI_SubWorkflows_Exception_IdNotFound($id);
        }

        /** @var DRI_SubWorkflow $bean */
        $bean = BeanFactory::retrieveBean('DRI_SubWorkflows', $id);

        if (null === $bean)
        {
            require_once 'modules/DRI_SubWorkflows/Exception/IdNotFound.php';
            throw new DRI_SubWorkflows_Exception_IdNotFound($id);
        }

        return $bean;
    }

    /**
     * @param string $cycleId
     * @param string $name
     * @param string $skipId
     * @return DRI_SubWorkflow
     * @throws DRI_SubWorkflows_Exception_NameNotFound
     */
    public static function getByCycleIdAndName($cycleId, $name, $skipId = null)
    {
        $db = DBManagerFactory::getInstance();

        $sql = <<<SQL
            SELECT id
            FROM dri_subworkflows
            WHERE name = '%s'
              AND deleted = 0
              AND dri_workflow_id = '%s'
SQL;

        if (null !== $skipId) {
            $sql .= " AND id != '$skipId'";
        }

        $sql = sprintf($sql, $db->quote($name), $cycleId);
        $id = $db->getOne($sql);

        if (empty($id)) {
            require_once 'modules/DRI_SubWorkflows/Exception/NameNotFound.php';
            throw new DRI_SubWorkflows_Exception_NameNotFound($name);
        }

        return self::getById($id);
    }

    /**
     * @param string $cycleId
     * @param string $order
     * @param string $skipId
     * @return DRI_SubWorkflow
     * @throws DRI_SubWorkflows_Exception_NameNotFound
     */
    public static function getByCycleIdAndOrder($cycleId, $order, $skipId = null)
    {
        $db = DBManagerFactory::getInstance();

        $sql = <<<SQL
            SELECT id
            FROM dri_subworkflows
            WHERE sort_order = '%s'
              AND deleted = 0
              AND dri_workflow_id = '%s'
SQL;

        if (null !== $skipId) {
            $sql .= " AND id != '$skipId'";
        }

        $sql = sprintf($sql, $order, $cycleId);
        $id = $db->getOne($sql);

        if (empty($id)) {
            require_once 'modules/DRI_SubWorkflows/Exception/NameNotFound.php';
            throw new DRI_SubWorkflows_Exception_NameNotFound($order);
        }

        return self::getById($id);
    }

    public $disable_row_level_security = false;
    public $new_schema = true;
    public $module_dir = 'DRI_SubWorkflows';
    public $object_name = 'DRI_SubWorkflow';
    public $table_name = 'dri_subworkflows';
    public $importable = false;

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
    public $state;
    public $progress;
    public $points;
    public $score;
    public $sort_order;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $label;
    public $activities;
    public $following;
    public $following_link;
    public $favorite_link;
    public $tag;
    public $tag_link;
    public $current_stage_at;
    public $locked_fields;
    public $locked_fields_link;
    public $acl_team_set_id;
    public $acl_team_names;
    public $date_started;
    public $date_completed;

    /**
     * @var Link2
     */
    public $dri_workflows;
    public $dri_workflow_id;
    public $dri_workflow_name;

    /**
     * @var Link2
     */
    public $dri_workflow_link;
    public $dri_subworkflow_template_id;
    public $dri_subworkflow_template_name;

    /**
     * @var Link2
     */
    public $dri_subworkflow_template_link;

    /**
     * @var Link2
     */
    public $tasks;

    /**
     * @var Link2
     */
    public $meetings;

    /**
     * @var Link2
     */
    public $calls;

    /**
     * @var SugarBean[]
     */
    private $activitiesCache;

    /**
     * @param string $interface
     * @return bool
     */
    public function bean_implements($interface)
    {
        switch ($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
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
     * Calculates the progress of the
     * subworkflow based on the related tasks
     */
    private function calculateProgress()
    {
        $calculator = new \DRI_SubWorkflows\ProgressCalculator($this);
        $calculator->calculate();
    }

    /**
     * @return bool
     */
    public function isCompleted()
    {
        return $this->state === DRI_SubWorkflow::STATE_COMPLETED;
    }

    /**
     * @return bool
     */
    public function hasStartedLaterStages()
    {
        $stages = $this->getJourney()->getStages();

        foreach ($stages as $stage) {
            if ($stage->sort_order > $this->sort_order
                && in_array($stage->state, array (self::STATE_IN_PROGRESS, self::STATE_COMPLETED))) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return bool
     */
    public function isDuplicateStageByOrder()
    {
        $stages = $this->getJourney()->getStages();

        foreach ($stages as $stage) {
            if ($stage->sort_order == $this->sort_order) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return bool
     */
    public function isAllPreviousStagesCompleted()
    {
        $stages = $this->getJourney()->getStages();

        foreach ($stages as $stage) {
            if ($stage->sort_order < $this->sort_order && $stage->state !== self::STATE_COMPLETED) {
                return false;
            }
        }

        return true;
    }

    /**
     * @return bool
     */
    public function isNextStageStarted()
    {
        $stages = $this->getJourney()->getStages();

        foreach ($stages as $stage) {
            if ($stage->sort_order > $this->sort_order) {
                return $stage->state !== self::STATE_NOT_STARTED;
            }
        }

        return true;
    }

    /**
     * @return bool
     */
    public function isFirstStage()
    {
        $stages = $this->getJourney()->getStages();
        $first = array_shift($stages);
        return $first->id === $this->id;
    }

    /**
     * @return bool
     */
    public function isLastStage()
    {
        $stages = $this->getJourney()->getStages();
        $last = array_pop($stages);
        return $last->id === $this->id;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function isFieldChanged($name)
    {
        $value = $this->{$name};

        if ($this->isNew()) {
            $def = $this->getFieldDefinition($name);
            return isset($def['default']) ? $def['default'] != $value : !empty($value);
        }

        return is_array($this->fetched_row)
            && isset($this->fetched_row[$name])
            && $this->fetched_row[$name] != $value;
    }

    /**
     *
     */
    public function moveDuplicatedStagesForward()
    {
        $sql = <<<SQL
          UPDATE %s
          SET sort_order = sort_order + 1
          WHERE dri_workflow_id = '%s'
            AND sort_order >= %s
            AND deleted = 0
SQL;
        $sql = sprintf($sql, $this->getTableName(), $this->dri_workflow_id, $this->sort_order);
        $this->db->query($sql);
    }

    /**
     * @return bool
     */
    public function shouldStart()
    {
        return $this->changedToInProgress() || $this->skippedToCompleted() || $this->changedToNotCompleted();
    }

    /**
     * @param boolean $check_notify
     * @return string
     */
    public function save($check_notify = FALSE)
    {
        if ($this->isNew() && $this->isDuplicateStageByOrder()) {
            $this->moveDuplicatedStagesForward();
        }

        $this->validateUniqueName();
        $this->setLabel();

        $isNew = $this->isNew();
        $start = $this->shouldStart();

        // when the bean is new the progress should be 0 until the activities is created
        if ($isNew) {
            $this->progress = 0;
            $this->score = 0;
        } else {
            $this->calculateProgress();
        }

        if ($start) {
            $this->start();
        }

        if ($this->state === self::STATE_COMPLETED && empty($this->date_completed)) {
            $this->date_completed = \TimeDate::getInstance()->now();
        }

        if ($this->state === self::STATE_IN_PROGRESS && empty($this->date_started)) {
            $this->date_started = \TimeDate::getInstance()->now();
        }

        $return = parent::save($check_notify);

        if ($start) {
            $this->startActivities();
        }

        return $return;
    }

    /**
     * @param $state
     * @return bool
     */
    private function stateChangedTo($state)
    {
        return $this->isFieldChanged('state') && $this->state === $state;
    }

    /**
     * @return bool
     */
    public function changedToInProgress()
    {
        return $this->stateChangedTo(self::STATE_IN_PROGRESS);
    }

    /**
     * @return bool
     */
    public function changedToNotCompleted()
    {
        return $this->stateChangedTo(self::STATE_NOT_COMPLETED);
    }

    /**
     * @return bool
     */
    public function skippedToCompleted()
    {
        return $this->stateChangedTo(self::STATE_COMPLETED)
            && $this->fetched_row['state'] === self::STATE_NOT_STARTED;
    }

    /**
     *
     */
    private function start()
    {
        if ($this->getAssigneeRule() === \DRI_Workflow_Template::ASSIGNEE_RULE_STAGE_START) {
            $this->assigned_user_id = $this->getTargetAssigneeId();
            $this->team_id = $this->getTargetTeamId();
            $this->team_set_id = $this->getTargetTeamSetId();
        }
    }

    /**
     *
     */
    private function startActivities()
    {
        require_once 'modules/DRI_Workflow_Task_Templates/Activity/ActivityHooks.php';
        DRI_Workflow_Task_Templates_Activity_ActivityHooks::setInternalSave(true);

        foreach ($this->getActivities() as $activity) {
            $handler = ActivityHandlerFactory::factory($activity->module_dir);
            if (!$activity->deleted && true === $handler->start($activity)) {
                $activity->save($activity->assigned_user_id !== $GLOBALS['current_user']->id);
            }
        }

        DRI_Workflow_Task_Templates_Activity_ActivityHooks::setInternalSave(false);
    }

    /**
     * @return string
     */
    public function getAssigneeRule()
    {
        return $this->getJourney()->getAssigneeRule();
    }

    /**
     * @return string
     */
    public function getTargetAssigneeId()
    {
        return $this->getJourney()->getTargetAssigneeId();
    }

    /**
     * @return string
     */
    public function getTargetTeamId()
    {
        return $this->getJourney()->getTargetTeamId();
    }

    /**
     * @return string
     */
    public function getTargetTeamSetId()
    {
        return $this->getJourney()->getTargetTeamSetId();
    }

    /**
     *
     */
    private function setLabel()
    {
        $order = "{$this->sort_order}";

        if (strlen($order) === 1) {
            $order = "0{$order}";
        }

        $this->label = sprintf('%s. %s', $order, $this->name);
    }

    /**
     * @throws SugarApiExceptionInvalidParameter
     */
    private function validateUniqueName()
    {
        try {
            self::getByCycleIdAndName($this->dri_workflow_id, $this->name, $this->id);
            throw new SugarApiExceptionInvalidParameter(sprintf('stage with name %s does already exist', $this->name));
        } catch (DRI_SubWorkflows_Exception_NotFound $e) {}
    }

    /**
     * @return DRI_SubWorkflow[]
     * @throws DRI_SubWorkflows_Exception_IdNotFound
     * @throws SugarQueryException
     */
    public function getPreviousSubWorkflowsPendingStart()
    {
        $query = new SugarQuery();
        $query->from(new self());
        $query->select('id');

        $where = $query->where();
        $where->lt('sort_order', $this->sort_order);
        $where->equals('dri_workflow_id', $this->dri_workflow_id);
        $where->equals('stage', self::STATE_NOT_STARTED);

        $rows = array ();
        $results = $query->execute();

        foreach ($results as $result) {
            $rows[] = self::getById($result['id']);
        }

        return $rows;
    }

    /**
     * @param DRI_SubWorkflow_Template $template
     */
    public function populateFromTemplate(DRI_SubWorkflow_Template $template)
    {
        $this->dri_subworkflow_template_id = $template->id;
        $this->dri_subworkflow_template_name = $template->name;
        $this->name = $template->name;
        $this->sort_order = $template->sort_order;
        $this->description = $template->description;
        $this->points = $template->points ? : 0;
    }

    /**
     * @param DRI_Workflow $journey
     */
    public function populateFromJourney(DRI_Workflow $journey)
    {
        $this->dri_workflow_id = $journey->id;

        if ($this->getAssigneeRule() === \DRI_Workflow_Template::ASSIGNEE_RULE_CREATE) {
            $this->assigned_user_id = $this->getTargetAssigneeId();
            $this->team_id = $this->getTargetTeamId();
            $this->team_set_id = $this->getTargetTeamSetId();
        }
    }

    /**
     * Creates tasks based on the task templates
     * linked to the related subworkflow template
     *
     * @param bool $start
     */
    public function createActivitiesFromTemplate($start)
    {
        $activities = array ();
        $template = $this->getTemplate();
        $parent = $this->getParent();

        require_once 'modules/DRI_Workflow_Task_Templates/Activity/ActivityHooks.php';
        DRI_Workflow_Task_Templates_Activity_ActivityHooks::setInternalSave(true);

        foreach ($template->getActivityTemplates() as $activityTemplate) {
            $handler = ActivityHandlerFactory::factory($activityTemplate->activity_type);
            $activity = $handler->createFromTemplate($activityTemplate, $this, $parent);

            if ($start) {
                $handler->start($activity);
            }

            $activity->save($activity->assigned_user_id !== $GLOBALS['current_user']->id);
            $activities[] = $activity;

            $handler->afterCreate($activity, $parent);

            if ($activityTemplate->is_parent) {
                foreach ($activityTemplate->getChildren() as $childTemplate) {
                    $handler = ActivityHandlerFactory::factory($childTemplate->activity_type);
                    $child = $handler->createFromTemplate($childTemplate, $this, $parent);
                    $handler->populateFromParentActivity($child, $activity);

                    if ($start) {
                        $handler->start($child);
                    }

                    $child->save($child->assigned_user_id !== $GLOBALS['current_user']->id);

                    $handler->afterCreate($child, $parent);
                }
            }
        }

        DRI_Workflow_Task_Templates_Activity_ActivityHooks::setInternalSave(false);

        $this->setActivities($activities);
    }

    /**
     * Retrieves the next activity in the stage after a given activity
     *
     * @param \SugarBean $activity
     * @return \SugarBean|false
     */
    public function getNextActivity(\SugarBean $activity)
    {
        $aHandler = ActivityHandlerFactory::factory($activity->module_dir);

        foreach ($this->getActivities() as $next) {
            $bHandler = ActivityHandlerFactory::factory($next->module_dir);
            if (!$next->deleted && $bHandler->getSortOrder($next) > $aHandler->getSortOrder($activity)) {
                return $next;
            }
        }

        return false;
    }

    /**
     * @return \SugarBean|false
     */
    public function getFirstActivity()
    {
        $activities = $this->getActivities();
        return array_shift($activities);
    }

    /**
     * @return DRI_SubWorkflow_Template
     * @throws DRI_SubWorkflow_Templates_Exception_IdNotFound
     */
    public function getTemplate()
    {
        return DRI_SubWorkflow_Template::getById($this->dri_subworkflow_template_id);
    }

    /**
     * @param string $module
     * @return SugarBean
     * @throws DRI_Workflows_Exception_ParentNotFound
     */
    public function getParent($module = null)
    {
        return $this->getJourney()->getParent($module);
    }

    /**
     * @return DRI_Workflow
     * @throws DRI_Workflows_Exception_IdNotFound
     */
    public function getJourney()
    {
        return DRI_Workflow::getById($this->dri_workflow_id);
    }

    /**
     * @param SugarBean $activity
     */
    public function insertActivity(\SugarBean $activity)
    {
        foreach ($this->getActivities() as $i => $potential) {
            if ($potential->id === $activity->id) {
                $this->activitiesCache[$i] = $activity;
                break;
            }
        }
    }

    /**
     * @param SugarBean $activity
     * @return bool
     */
    public function hasActivity(\SugarBean $activity)
    {
        foreach ($this->getActivities() as $potential) {
            if ($potential->id === $activity->id) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param array $activities
     */
    private function setActivities(array $activities)
    {
        $this->activitiesCache = $activities;
    }

    /**
     * @param array $activities
     */
    public function setLoadedActivities(array $activities)
    {
        $activities = $this->sortActivities($activities);
        $this->setActivities($activities);
    }

    /**
     *
     */
    public function loadActivities()
    {
        if (null === $this->activitiesCache) {
            $activities = array ();

            foreach (ActivityHandlerFactory::all() as $activityHandler) {
                $activities = array_merge($activities, $activityHandler->load($this));
            }

            $this->setLoadedActivities($activities);
        }
    }

    /**
     * @return \SugarBean[]
     */
    public function getActivities()
    {
        $this->loadActivities();

        return $this->activitiesCache;
    }

    /**
     * Since all php functions that sorts an array based on a function is blacklisted by the package scanner
     * we have to implement our own algorithm, this is based on quicksort
     *
     * @param \SugarBean[] $activities
     * @return array
     */
    private function sortActivities($activities) {
        if (count($activities) < 2) {
            return $activities;
        }

        $left = $right = array ();
        reset($activities);
        $pivot_key = key($activities);
        $pivotActivity = array_shift($activities);
        $pivot = ActivityHandlerFactory::factory($pivotActivity->module_dir)->getSortOrder($pivotActivity);

        foreach ($activities as $k => $activity) {
            $order = ActivityHandlerFactory::factory($activity->module_dir)->getSortOrder($activity);
            if ($order < $pivot) {
                $left[$k] = $activity;
            } else {
                $right[$k] = $activity;
            }
        }

        return array_merge(
            $this->sortActivities($left),
            array($pivot_key => $pivotActivity),
            $this->sortActivities($right)
        );
    }

    /**
     * Removes all related tasks on delete
     *
     * @param string $id
     */
    public function mark_deleted($id)
    {
        if ($this->id != $id) {
            $this->retrieve($id);
        }

        $activities = $this->getActivities();

        try {
            $journey = $this->getJourney();
        } catch (\Exception $e) {
            $journey = null;
        }

        parent::mark_deleted($id);

        foreach ($activities as $activity) {
            $activity->mark_deleted($activity->id);
        }

        if (null !== $journey && !$journey->deleted) {
            $journey->save();
        }
    }
}
