<?PHP
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/INTWG_WorkStreamGenerators/INTWG_WorkStreamGenerators_sugar.php');
class INTWG_WorkStreamGenerators extends INTWG_WorkStreamGenerators_sugar {
    /**
     * @var string
     */
    public $report_name_c;

    /**
     * @var string
     */
    public $notifies_c;

    /**
     * @var string
     */
    public $generator_type_c;

    /**
     * @var string
     */
    public $work_stream_desc_template_c;

    /**
     * @var string
     */
    public $mob_ws_desc_template_c;

    /**
     * Work Stream module bean
     */
    const WORK_STREAM = 'INTWS_WorkStreams';

    /**
     * Link between Work Stream Generator and Work Streams
     */
    const WG_WS_LINK = 'intwg_workstreamgenerators_intws_workstreams_1';

    /**
     * Work Stream Generator ID key on Work Stream Bean
     */
    const WS_WG_ID = 'intwg_workcb55erators_ida';

    /**
     * Mapping between module name and ID key on Work Stream Bean
     */
    const IDS = [
//        'abc_Transfers' => 'abc_transfers_intws_workstreams_1abc_transfers_ida'
    ];

    const FIELD_NOT_AVAILABLE = "**FIELD NOT AVAILABLE**";
    const VALUE_NOT_SET = "**N/A**";
    const NO_MODULE_REL = "**NO MODULE RELATIONSHIP**";
    const MOD_RECORD_NOT_AVAILABLE = "**MODULE RECORD NOT AVAILABLE**";
    /**
     * @var array | INTWS_WorkStreams[]
     */
    protected $updateWorkStreams = [];

    protected $base_module = null;

    public function __construct()
    {
        parent::__construct();
    }

    public function generate()
    {
        if ($this->status_c === 'Inactive') { return; }

        $report = $this->getReport();

        if (empty($report)) {
            return;
        }

        $this->base_module = $report->module;

        $result = $report->runReportQuery();
        $parsedResult =  $this->parseAliasedResults($result);
        $baseModuleBeans = $this->getBaseModuleBeans($parsedResult);

        $this->deleteInvalidWorkStreams(array_keys($baseModuleBeans));
        $this->createWorkStreams($parsedResult, $baseModuleBeans);
        $this->updateWorkStreams($this->updateWorkStreams, $baseModuleBeans);
    }

    /**
     * @return SavedReport | null
     */
    protected function getReport()
    {
        if (empty($this->report_name_c)) {
            return null;
        }

        /**
         * @var $reportBean SavedReport
         */
        $reportBean = BeanFactory::retrieveBean('Reports', $this->report_name_c);

        if (!($reportBean instanceof SavedReport) || !$reportBean->id) {
            return null;
        }

        return $reportBean;
    }

    /**
     * @param $result array
     * @return array
     */
    protected function parseAliasedResults($result)
    {
        global $used_aliases, $alias_map;

        $parsedResults = [];

        foreach ($result as $row) {
            $parsedResult = [];

            foreach($row as $key => $value) {
                if(isset($used_aliases[$key])) {
                    $alias = array_search($key, $alias_map, true);
                    $parsedResult[$alias] = $value;
                } else {
                    $parsedResult[$key] = $value;
                }
            }

            $parsedResults[] = $parsedResult;
        }

        return $parsedResults;
    }

    /**
     * @param $data array
     * @param $baseModuleBeans SugarBean[]
     */
    protected function createWorkStreams($data, $baseModuleBeans)
    {
        foreach ($data as $record) {
            $baseBeanId = $record['primaryid'];

            if (!isset($baseModuleBeans[$baseBeanId])) { continue; }

            $notifyUsers = $this->getUsersToNotify($baseModuleBeans[$baseBeanId]);

            if (empty($notifyUsers)) { continue; }

            foreach ($notifyUsers as $userId) {
                $this->createWorkStream($userId, $baseModuleBeans[$baseBeanId]);
            }
        }
    }

    /**
     * @param $data array
     * @return array|null
     */
    protected function getBaseModuleBeans($data)
    {
        $beans = [];

        foreach ($data as $record) {
            if (!isset($record['primaryid'])) { continue; }

            $beanId = $record['primaryid'];
            $bean = $this->createBaseModuleBean($beanId);

            if (empty($bean)) { continue; }

            $beans[$bean->id] = $bean;
        }

        if (empty($beans)) {
            return null;
        }

        return $beans;
    }

    /**
     * @param $recordId
     * @return null|SugarBean
     */
    protected function createBaseModuleBean($recordId)
    {
        $name = $this->base_module;
        $bean = BeanFactory::retrieveBean($name, $recordId);

        if (!($bean instanceof SugarBean) || !$bean->id) {
            return null;
        }

        return $bean;
    }

    /**
     * @param $bean SugarBean
     * @return array|null
     */
    protected function getUsersToNotify($bean)
    {
        $notifyList = $this->notifies_c;

        if (empty($notifyList)) {
            return null;
        }

        $notifyListArray = explode(',', str_replace('^', '', $notifyList));
        $userIds = [];

        foreach ($notifyListArray as $userIdentifier) {
            if (empty($bean->{$userIdentifier})) { continue; }

            $userIds[] = $bean->{$userIdentifier};
        }

        return array_unique($userIds);
    }

    /**
     * @param $userId
     * @param $baseBean SugarBean
     * @throws Exception
     */
    protected function createWorkStream($userId, &$baseBean)
    {
        if ($this->userHasWorkStream($userId, $baseBean)) {
            return;
        }

        $workStream = BeanFactory::retrieveBean(self::WORK_STREAM);

        $workStream->name = $this->generateWorkStreamName($this->generator_type_c, $baseBean->name);
        $workStream->type_c = $this->generator_type_c;
        $workStream->assigned_user_id = $userId;
        $workStream->{$this->getBaseBeanFieldId()} = $baseBean->id;
        $workStream->{self::WS_WG_ID} = $this->id;
        $workStream->description = $this->parseDescriptionTemplate($baseBean, $this->work_stream_desc_template_c);
        $workStream->description_mobile_c = $this->parseDescriptionTemplate($baseBean, $this->mob_ws_desc_template_c);

        $workStream->save();
    }

    /**
     * Returns the field id for the link table.
     * If its not defined on the code we try to generate it
     * @return mixed
     */
    protected function getBaseBeanFieldId()
    {
        if (array_key_exists($this->base_module, self::IDS)) {
            return self::IDS[$this->base_module];
        }
        $module_small_case = strtolower($this->base_module);
        return "{$module_small_case}_intws_workstreams_1{$module_small_case}_ida";
    }

    /**
     * @param $workStreams array
     * @param $baseBeans SugarBean[]
     */
    protected function updateWorkStreams($workStreams, $baseBeans)
    {
        /**
         * @var $baseBeanWorkStreams INTWS_WorkStreams[]
         */
        foreach ($workStreams as $baseBeanId => $baseBeanWorkStreams) {
            $baseBean = $baseBeans[$baseBeanId];

            foreach ($baseBeanWorkStreams as $workStream) {
                $workStream->description = $this->parseDescriptionTemplate($baseBean, $this->work_stream_desc_template_c);
                $workStream->description_mobile_c = $this->parseDescriptionTemplate($baseBean, $this->mob_ws_desc_template_c);
                $workStream->save();
            }
        }
    }

    /**
     * @param $baseModuleIDs array;
     */
    public function deleteInvalidWorkStreams($baseModuleIDs)
    {
        /**
         * @var $invalidWorkStreams INTWS_WorkStreams[]
         */
        $invalidWorkStreams = $this->getInvalidWorkStreams($baseModuleIDs);

        foreach ($invalidWorkStreams as $invalidWorkStream) {
            $invalidWorkStream->mark_deleted($invalidWorkStream->id);
        }
    }

    public function deleteAllWorkStreams()
    {
        /**
         * @var $workStreams INTWS_WorkStreams[] | [] | null
         */
        $workStreams = $this->get_linked_beans(self::WG_WS_LINK, self::WORK_STREAM);

        if (empty($workStreams)) { return; }

        foreach ($workStreams as $workStream) {
            $workStream->mark_deleted($workStream->id);
        }
    }

    /**
     * @param $baseModuleIDs array
     * @return array
     */
    public function getInvalidWorkStreams($baseModuleIDs)
    {
        /**
         * @var $workStreamBean SugarBean
         */
        $workStreamBean = BeanFactory::retrieveBean(self::WORK_STREAM);

        $a = $this->getBaseBeanFieldId();

        $query = new SugarQuery();
        $query->select([]);
        $query->from($workStreamBean);
        $query->where()->equals('type_c', $this->generator_type_c);
        $query->where()->equals(self::WS_WG_ID, $this->id);

        if (!empty($baseModuleIDs)) {
            $query->where()->notIn($this->getBaseBeanFieldId(), $baseModuleIDs);
        }

        $preparedStmt = $query->compile();
        $sql = $preparedStmt->getSQL();
        $parameters = $preparedStmt->getParameters();

        $invalidWorkStreams = $workStreamBean->fetchFromQuery($query);

        if(empty($invalidWorkStreams)) {
            return [];
        }

        return $invalidWorkStreams;
    }

    /**
     * @param $userId string
     * @param $baseBean SugarBean
     * @return bool
     * @throws Exception
     */
    protected function userHasWorkStream($userId, &$baseBean)
    {
        $workStreamType = $this->generator_type_c;
        $whereStatement = "assigned_user_id = '$userId' AND type_c = '$workStreamType'";
        $fieldDefs = $baseBean->getFieldDefinitions('module', [self::WORK_STREAM]);

        if (empty($fieldDefs)) {
            throw new Exception("Field defs for " . self::WORK_STREAM . " don't existing in module " . $baseBean->module_dir . ".");
        }

        $fieldDef = reset($fieldDefs);

        if (!isset($fieldDef['relationship'])) {
            throw new Exception("Relationship field defs for " . self::WORK_STREAM . " don't existing in module " . $baseBean->module_dir . ".");
        }

        $existingWorkStreams = $baseBean->get_linked_beans($fieldDef['relationship'], self::WORK_STREAM, [], 0, -1, 0, $whereStatement);

        if (!empty($existingWorkStreams)) {
            foreach ($existingWorkStreams as $workStream) {
                $this->updateWorkStreams[$baseBean->id][] = $workStream;
            }
        }

        return (!empty($existingWorkStreams));
    }

    /**
     * @param $type string
     * @param $baseBeanName string
     * @return string
     */
    protected function generateWorkStreamName($type, $baseBeanName)
    {
        return $type . ' ' . $baseBeanName;
    }

    protected function parseDescriptionTemplate(&$baseBean, $template)
    {
        $tokens = $this->getDescriptionTemplateTokes($template);

        if (empty($tokens)) {
            return $template;
        }

        $tokenValues = $this->getTokenValues($tokens, $baseBean);

        foreach ($tokenValues as $token => $tokenValue) {
            if (is_numeric($tokenValue) && is_float(floatval($tokenValue))) {
                $tokenValue = intval($tokenValue);
            }

            $template = str_replace($token, $tokenValue, $template);
        }

        return $template;
    }

    protected function getDescriptionTemplateTokes($template)
    {
        $regEx = '/\{\{[a-zA-z0-9_\.]*\}\}/';
        $tokens = [];

        preg_match_all($regEx, $template, $tokens);

        if (empty($tokens[0])) {
            return null;
        }

        return $tokens[0];
    }

    /**
     * @param $tokens array
     * @param $baseBean SugarBean
     * @return array
     */
    protected function getTokenValues($tokens, &$baseBean)
    {
        $parsedTokens = $this->parseTemplateTokens($tokens);
        $tokenValues = [];

        foreach ($parsedTokens as $token => $parsedToken) {
            if ($baseBean->module_name === $parsedToken['module']) {
                if (!isset($baseBean->{$parsedToken['field']})) {
                    $tokenValues[$token] = self::FIELD_NOT_AVAILABLE;
                    continue;
                }

                if (empty($baseBean->{$parsedToken['field']})) {
                    $tokenValues[$token] = self::VALUE_NOT_SET;
                    continue;
                }

                $tokenValues[$token] = $baseBean->{$parsedToken['field']};
                continue;
            }

            $relDefs = $baseBean->getFieldDefinitions('module', [$parsedToken['module']]);

            if(empty($relDefs)) {
                $tokenValues[$token] = self::NO_MODULE_REL;
                continue;
            }

            $relDef = reset($relDefs);
            $relBeans = $baseBean->get_linked_beans($relDef['relationship'], $parsedToken['module']);

            if (empty($relBeans)) {
                $tokenValues[$token] = self::MOD_RECORD_NOT_AVAILABLE;
                continue;
            }

            $relBean = reset($relBeans);

            if (empty($relBean->{$parsedToken['field']})) {
                $tokenValues[$token] = self::VALUE_NOT_SET;
                continue;
            }

            $tokenValues[$token] = $relBean->{$parsedToken['field']};
        }

        return $tokenValues;
    }

    protected function parseTemplateTokens($tokens)
    {
        $parsedTokens = [];

        foreach($tokens as $token) {
            $fieldIdentifier =  $this->extractTokenVariable($token);
            $field = $this->extractTokenField($fieldIdentifier);
            $module = $this->extractTokenModule($fieldIdentifier);

            $parsedTokens[$token]['field_identifier'] = $fieldIdentifier;
            $parsedTokens[$token]['field'] = $field;
            $parsedTokens[$token]['module'] = $module;
        }

        return $parsedTokens;
    }

    protected function extractTokenVariable($token)
    {
        $regEx = '/[\{\}]/';

        return preg_replace($regEx, '', $token);
    }

    /**
     * @param $fieldIdentifier string
     * @return bool
     */
    protected function isBaseModuleField($fieldIdentifier)
    {
        $pieces = $this->splitModuleField($fieldIdentifier);

        return count($pieces) === 1;
    }

    /**
     * @param $fieldIdentifier string
     * @return mixed|null
     */
    protected function extractTokenField($fieldIdentifier)
    {
        if ($this->isBaseModuleField($fieldIdentifier)) {
            return $fieldIdentifier;
        }

        $pieces = $this->splitModuleField($fieldIdentifier);

        if (count($pieces) < 2) {
            return null;
        }

        return $pieces[1];
    }

    /**
     * @param $fieldIdentifier string
     * @return array
     */
    protected function splitModuleField($fieldIdentifier)
    {
        $pieces = explode('.', $fieldIdentifier);

        return $pieces;
    }

    protected function extractTokenModule($fieldIdentifier)
    {
        if ($this->isBaseModuleField($fieldIdentifier)) {
            return $this->base_module;
        }

        $pieces = $this->splitModuleField($fieldIdentifier);

        if (!is_array($pieces) || count($pieces) < 2) {
            return null;
        }

        return $pieces[0];
    }

    /**
     * @param $reportID string
     * @return INTWG_WorkStreamGenerators[] | array
     */
    public function retrieveByReportID($reportID)
    {
        $query = new SugarQuery();
        $query->select([]);
        $query->from($this);
        $query->where()->equals('report_name_c', $reportID);

        $generators = $this->fetchFromQuery($query);

        if(empty($generators)) {
            return [];
        }

        return $generators;
    }

    /**
     * @param $generators INTWG_WorkStreamGenerators[]
     * @param $reason string
     */
    public function setInactive(&$generators, $reason)
    {
        foreach ($generators as $key => &$generator) {
            $generator->status_c = 'Inactive';

            if(!empty($reason)) {
                $generator->description = translate($reason, $this->module_name);
            }

            $generator->save();
            $generator->deleteAllWorkStreams();
        }

        unset($generator);
    }
}

