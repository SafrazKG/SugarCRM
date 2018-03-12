<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('modules/ACLActions/actiondefs.php');
require_once('modules/ACLFields/actiondefs.php');
require_once('include/SugarQuery/SugarQuery.php');
require_once('ModuleInstall/ModuleInstaller.php');

class INT_DeployHelperApi extends SugarApi
{
    protected $actiondefs =  array(
        'default' => ACL_ALLOW_DEFAULT,
        'admin_developer' => ACL_ALLOW_ADMIN_DEV,
        'admin' => ACL_ALLOW_ADMIN,
        'developer' => ACL_ALLOW_DEV,
        'normal' => ACL_ALLOW_NORMAL,
        'owner' => ACL_ALLOW_OWNER,
        'all' => ACL_ALLOW_ALL,
        'none' => ACL_ALLOW_NONE,
        'disabled' => ACL_ALLOW_DISABLED,
        'enabled' => ACL_ALLOW_ENABLED,
    );

    protected $fielddefs =  array(
        'readonly' => ACL_READ_ONLY,
        'readwrite' => ACL_READ_WRITE,
        'teams_write' => ACL_READ_SELECTED_TEAMS_WRITE,
        'teams_read_ownerwrite' => ACL_SELECTED_TEAMS_READ_OWNER_WRITE,
        'teams_readwrite' => ACL_SELECTED_TEAMS_READ_WRITE,
        'owner_readwrite' => ACL_OWNER_READ_WRITE,
        'read_ownerwrite' => ACL_READ_OWNER_WRITE,
        'none' => ACL_ALLOW_NONE,
        'default' => ACL_FIELD_DEFAULT,
        'notset' => 0,
    );

    protected $rpde_tables = array(
        'saved_reports',
        'report_cache',
        'report_maker',
        'report_schedules',
        'pmse_bpm_activity_definition',
        'pmse_bpm_activity_step',
        'pmse_bpm_activity_user',
        'pmse_bpm_config',
        'pmse_bpm_dynamic_forms',
        'pmse_bpm_event_definition',
        'pmse_bpm_flow',
        'pmse_bpm_form_action',
        'pmse_bpm_gateway_definition',
        'pmse_bpm_group',
        'pmse_bpm_group_user',
        'pmse_bpm_notes',
        'pmse_bpm_process_definition',
        'pmse_bpm_related_dependency',
        'pmse_bpm_thread',
        'pmse_bpmn_activity',
        'pmse_bpmn_artifact',
        'pmse_bpmn_bound',
        'pmse_bpmn_data',
        'pmse_bpmn_diagram',
        'pmse_bpmn_documentation',
        'pmse_bpmn_event',
        'pmse_bpmn_extension',
        'pmse_bpmn_flow',
        'pmse_bpmn_gateway',
        'pmse_bpmn_lane',
        'pmse_bpmn_laneset',
        'pmse_bpmn_participant',
        'pmse_bpmn_process',
        'pmse_business_rules',
        'pmse_emails_templates',
        'pmse_inbox',
        'pmse_project',
        'dashboards',
        'filters',
        'schedulers',
        'workflow',
        'workflow_actions',
        'workflow_actionshells',
        'workflow_alerts',
        'workflow_alertshells',
        'workflow_schedules',
        'workflow_triggershells',
        'expressions',
        'email_templates',
    );

    protected $job_strings = array (
        0 => 'refreshJobs',
        1 => 'pollMonitoredInboxes',
        2 => 'runMassEmailCampaign',
        5 => 'pollMonitoredInboxesForBouncedCampaignEmails',
        3 => 'pruneDatabase',
        4 => 'trimTracker',
        /*4 => 'securityAudit()',*/
        6 => 'processWorkflow',
        7 => 'processQueue',
        9 => 'updateTrackerSessions',
        12 => 'sendEmailReminders',
        15 => 'cleanJobQueue',
        //Add class to build additional TimePeriods as necessary
        16 => 'class::SugarJobCreateNextTimePeriod',
        17 => 'class::SugarJobHeartbeat',
        20 => 'cleanOldRecordLists',
        21 => 'class::SugarJobRemovePdfFiles',
        22 => 'class::SugarJobKBContentUpdateArticles',
        23 => 'class::\Sugarcrm\Sugarcrm\Elasticsearch\Queue\Scheduler',
        24 => 'class::SugarJobRemoveDiagnosticFiles',
        25 => 'class::SugarJobRemoveTmpFiles',

    );

    protected $actions = array(
        'access' => array(
            'enabled',
            'disabled'
        ),
        'admin' => array(
            'normal',
            'admin',
            'developer',
            'admin_developer'
        ),
        'view' => array(
            'all',
            'owner',
            'none'
        ),
        'list' => array(
            'all',
            'owner',
            'none'
        ),
        'edit' => array(
            'all',
            'owner',
            'none'
        ),
        'delete' => array(
            'all',
            'owner',
            'none'
        ),
        'import' => array(
            'all',
            'owner',
            'none'
        ),
        'export' => array(
            'all',
            'owner',
            'none'
        ),
        'massupdate' => array(
            'all',
            'none'
        )
    );


    public function registerApiRest()
    {
        return array(
            'rebuildRoles' => array(
                'reqType' => 'GET',
                'path' => array('INT_DeployHelper', 'rebuildRoles'),
                'pathVars' => array('module'),
                'method' => 'rebuildRoles',
                'shortHelp' => 'Rebuild Custom Roles From Filesystem',
                'longHelp' => '',
            ),
            'storeCustomFields' => array(
                'reqType' => 'POST',
                'path' => array('INT_DeployHelper', 'storeCustomFields'),
                'pathVars' => array('module'),
                'method' => 'storeCustomFields',
                'shortHelp' => 'Store fields_meta_data to files',
                'longHelp' => '',
            ),
            'getRestoreCustomFields' => array(
                'reqType' => 'GET',
                'path' => array('INT_DeployHelper', 'getRestoreCustomFields'),
                'pathVars' => array('module'),
                'method' => 'getRestoreCustomFields',
                'shortHelp' => 'Get restore fields_meta_data from files',
                'longHelp' => '',
            ),
            'restoreCustomFields' => array(
                'reqType' => 'POST',
                'path' => array('INT_DeployHelper', 'restoreCustomFields'),
                'pathVars' => array('module'),
                'method' => 'restoreCustomFields',
                'shortHelp' => 'Restore fields_meta_data from files',
                'longHelp' => '',
            ),
            'restoreRequireAccounts' => array(
                'reqType' => 'POST',
                'path' => array('INT_DeployHelper', 'restoreRequireAccounts'),
                'pathVars' => array('module'),
                'method' => 'restoreRequireAccounts',
                'shortHelp' => 'Restore require_accounts option in config_override',
                'longHelp' => '',
            ),
            'storeMiscData' => array(
                'reqType' => 'POST',
                'path' => array('INT_DeployHelper', 'storeMiscData'),
                'pathVars' => array('module'),
                'method' => 'storeMiscData',
                'shortHelp' => 'Stores Reports, Dashboards, Process Definitions and Email templates to filesystem',
                'longHelp' => '',
            ),
            'restoreMiscData' => array(
                'reqType' => 'POST',
                'path' => array('INT_DeployHelper', 'restoreMiscData'),
                'pathVars' => array('module'),
                'method' => 'restoreMiscData',
                'shortHelp' => 'Restores Reports, Dashboards, Process Definitions and Email templates from filesystem',
                'longHelp' => '',
            ),
        );
    }

    /*
     * Rebuild Roles
     *
     * @param $api
     * @param $args
     * 
     * @return array    list of roles updated
     */
    public function rebuildRoles($api, $args) {
        $db = DBManagerFactory::getInstance();
        $this->checkAccess();
        $roles = array();
        $fieldAdded = array();
        $customRoles = array();
        include('custom/application/Ext/CustomRoles/customroles.ext.php');
        foreach ($customRoles as $id => $def) {
            $bean = BeanFactory::retrieveBean('ACLRoles', $id, array(), false);
            if ($bean->deleted=='1') {
                $db->query("DELETE FROM acl_roles WHERE id='".$db->quote($bean->id)."'");
                $bean = null;
            }
            if (!$bean) {
                $bean = BeanFactory::getBean('ACLRoles');
                $bean->new_with_id = true;
                $bean->id = $id;
                $bean->save();
                $bean->new_with_id = false;
                if (!isset($def['name'])) $def['name'] = 'Role without name';
            }
            if (isset($def['name'])) {
                $bean->name = $def['name'];
            }
            if (isset($def['description'])) {
                $bean->description = $def['description'];
            }
            if (isset($def['name']) || isset($def['description'])) {
                $bean->save();
            }
            if ($bean->id) {
                $roles[] = $bean->name;
                if (isset($def['modules']) && is_array($def['modules'])) {
                    foreach ($def['modules'] as $module => $modDef) {
                        if (isset($modDef['fields'])) {
                            $fields = $modDef['fields'];
                            unset($modDef['fields']);
                            $moduleBean = BeanFactory::getBean($module);
                            $moduleFields = array_keys($moduleBean->field_defs);
                            foreach ($fields as $f => $fieldAccess) {
                                if (!in_array($f, $moduleFields)) continue;
                                $Query = new SugarQuery();
                                $Query->from(BeanFactory::getBean('ACLFields'));
                                $Query->where()->equals('name', $f)->equals('category', $module)->equals('role_id', $bean->id);
                                $existingField = $Query->getOne();
                                $fieldsBean = BeanFactory::getBean('ACLFields', $existingField);
                                $fieldsBean->name = $f;
                                $fieldsBean->category = $module;
                                $fieldsBean->role_id = $bean->id;
                                $fieldsBean->aclaccess = isset($this->fielddefs[$fieldAccess])?$this->fielddefs[$fieldAccess]:$this->fielddefs['default'];
                                $fieldsBean->save();
                                if (!isset($fieldAdded[$bean->name])) $fieldAdded[$bean->name] = array();
                                $fieldAdded[$bean->name][] = $f;
                            }
                        }
                        foreach ($this->actions as $action => $allowed) {
                            $rights = $this->actiondefs['default'];
                            if (isset($modDef[$action]) && (in_array($modDef[$action], $allowed) || $modDef[$action]=='default')) {
                                $rights = $this->actiondefs[$modDef[$action]];
                            } else {
                                continue;
                            }
                            $Query = new SugarQuery();
                            $Query->from(BeanFactory::getBean('ACLActions'));
                            $Query->where()->equals('name', $action)->equals('category', $module);
                            $actionID = $Query->getOne();
                            $bean->setAction($bean->id, $actionID, $rights);
                        }
                    }
                }
            }
        }
        return array('roles' => $roles, 'fields' => $fieldAdded);
    }

    /*
     * Store fields_meta_data table
     *
     */
    public function storeCustomFields($api, $args) {
        $db = DBManagerFactory::getInstance();
        $query = $db->query('SELECT * FROM fields_meta_data');
        $results = array();
        while ($row = $db->fetchByAssoc($query)) {
            $results[] = $row;
        }
        sugar_mkdir('custom/Extension/application/Ext/CustomFields');
        write_array_to_file('fieldsMetaData[]', $results, 'custom/Extension/application/Ext/CustomFields/customfields'.time().'.php');
        // write in customroles.ext.php so that on next run we don't overwrite previous changes if no rebuild was done in meantime
        $installer = new ModuleInstaller();
        $installer->merge_files('Ext/CustomFields', 'customfields.ext.php', '', true);
        return array();
    }

    /*
     * Create fieldsMetaData and deleteFields array from latest updated fields
     * 
     */
    private function createArray() {
        $ret = array();
        $fieldsMetaData = array();
        $deleteFields = array();
        include('custom/application/Ext/CustomFields/customfields.ext.php');
        $tmp = array();
        foreach ($fieldsMetaData as $data) {
            foreach ($data as $field) {
                $dontAdd = false;
                foreach ($ret as $k => $r) {
                    if ($r['id']==$field['id']) {
                        $dontAdd = true;
                        if (strtotime($r['date_modified'])<strtotime($field['date_modified'])) {
                            $ret[$k] = $field;
                        }
                        break;
                    }
                }
                if (!$dontAdd) $ret[] = $field;
            }
        }
        return array('fieldsMetaData' => $ret, 'deleteFields' => $deleteFields);
    }

    /*
     * Rebuild fields_meta_data table
     *
     * @return array    list of fields that would be added/updated/deleted
     */
    public function getRestoreCustomFields($api, $args) {
        $db = DBManagerFactory::getInstance();
        $tmp = $this->createArray();
        $fieldsMetaData = $tmp['fieldsMetaData'];
        $deleteFields = $tmp['deleteFields'];
        $deletedFieldsMetaData = array();
        $ids = array();
        $added = array();
        $deleted = array();
        foreach ($fieldsMetaData as $row) {
            // check modified date if exists
            if (!empty($deleteFields) && in_array($row['id'], $deleteFields)) continue;
            $ids[] = "'".$db->quote($row['id'])."'";
            $existing = $db->query("SELECT date_modified FROM fields_meta_data WHERE id='".$db->quote($row['id'])."'");
            $rowExisting = $db->fetchByAssoc($existing);
            if ($rowExisting) {
                // if db change is newer or same do nothing
                if (strtotime($rowExisting['date_modified'])>=strtotime($row['date_modified'])) continue;
            }
            $added[] = $row['custom_module'].'/'.$row['name'];
        }
        // check missing
        $deleteCond = '';
        if (!empty($deleteFields)) {
            $tmp = array();
            foreach ($deleteFields as $d) {
                $tmp[] = "'".$db->quote($d)."'";
            }
            $deleteCond = " OR id IN (".implode(",", $tmp).")";
        }
        $GLOBALS['log']->debug('SELECT * FROM fields_meta_data WHERE id NOT IN ('.implode(',', $ids).')'.$deleteCond);
        $missingQuery = $db->query('SELECT * FROM fields_meta_data WHERE id NOT IN ('.implode(',', $ids).')'.$deleteCond);
        while ($row = $db->fetchByAssoc($missingQuery)) {
            $deleted[] = $row['custom_module'].'/'.$row['name'];
            if(($key = array_search($row['custom_module'].'/'.$row['name'], $added)) !== false) {
                unset($added[$key]);
            }
        }
        return array('added' => $added, 'deleted' => $deleted);
    }

    /*
     * Rebuild fields_meta_data table
     *
     * @return array    list of added/updated and deleted fields
     */
    public function restoreCustomFields($api, $args) {
        $installer = new ModuleInstaller();
        $installer->merge_files('Ext/CustomFields', 'customfields.ext.php', '', true);
        $db = DBManagerFactory::getInstance();
        $tmp = $this->createArray();
        $fieldsMetaData = $tmp['fieldsMetaData'];
        $deleteFields = $tmp['deleteFields'];
        $deletedFieldsMetaData = array();
        $ids = array();
        $added = array();
        $deleted = array();
        // insert/update
        foreach ($fieldsMetaData as $row) {
            // check modified date if exists
            if (!empty($deleteFields) && in_array($row['id'], $deleteFields)) continue;
            $ids[] = "'".$db->quote($row['id'])."'";
            $result = $db->query("SELECT date_modified FROM fields_meta_data WHERE id='".$db->quote($row['id'])."'");
            $rowExisting = $db->fetchByAssoc($result);
            if ($rowExisting) {
                // if db change is newer or same do nothing
                if (strtotime($rowExisting['date_modified'])>=strtotime($row['date_modified'])) continue;

            }
            $set = array();

            foreach ($row as $k => $v) {
                if ($v===null) {
                    $value = "NULL";
                } else {
                    $value = "'" . $db->quote($v) . "'";
                }
                $row[$k] = $value;
                $set[] = $k."=" .$value ;
            }

            if ($rowExisting) {
                $query = "UPDATE fields_meta_data SET " .implode(',', $set) . " WHERE id=" . $row['id'];
            }
            else{
                $query = "INSERT INTO fields_meta_data ( " . implode(', ',array_keys($row)) . ") VALUES (" . implode(', ',array_values($row)) . ")";
            }
            $GLOBALS['log']->debug($query);
            $db->query($query);
            $added[] = $row['custom_module'].'/'.$row['name'];
        }
        // check missing
        $deleteCond = '';
        if (!empty($deleteFields)) {
            $tmp = array();
            foreach ($deleteFields as $d) {
                $tmp[] = "'".$db->quote($d)."'";
            }
            $deleteCond = " OR id IN (".implode(",", $tmp).")";
        }
        $GLOBALS['log']->debug('SELECT * FROM fields_meta_data WHERE id NOT IN ('.implode(',', $ids).')'.$deleteCond);
        $missingQuery = $db->query('SELECT * FROM fields_meta_data WHERE id NOT IN ('.implode(',', $ids).')'.$deleteCond);
        $tmp = array();
        while ($row = $db->fetchByAssoc($missingQuery)) {
            $db->query("DELETE FROM fields_meta_data WHERE id='".$db->quote($row['id'])."'");
            $tmp[] = $row;
            $deleted[] = $row['custom_module'].'/'.$row['name'];
            if(($key = array_search($row['custom_module'].'/'.$row['name'], $added)) !== false) {
                unset($added[$key]);
            }
        }
        if (count($tmp)) {
            $deletedFieldsMetaData[date('m/d/Y H:i:s')] = $tmp;
            sugar_mkdir('custom/Extension/application/Ext/CustomFields');
            write_array_to_file('deletedFieldsMetaData', $deletedFieldsMetaData, 'custom/Extension/application/Ext/CustomFields/deleted_fields_meta_data.php');
        }
        return array('added' => $added, 'deleted' => $deleted);
    }

    /*
     * Check user access to plugin
     *
     * @param $api
     * @param $args
     *
     * @throws SugarApiExceptionNotAuthorized
     */
    private function checkAccess() {
        if (!$GLOBALS['current_user']->isAdmin()) {
            throw new SugarApiExceptionNotAuthorized('No access');
        }
    }

    /*
     * Restore require accounts
     * Will restore state of require_accounts in config and views
     * Definitions for this should be in custom/Extension/application/Ext/RequireAccounts in format:
     * $requireAccounts[<module>] = {boolean}
     * Where module can be one of 'Contacts', 'Opportunities', 'Cases', 'Contracts'
     * By default require_accounts is set to true for all
     *
     * @param $api
     * @param $args
     *
     * @return array    list of roles updated
     */
    public function restoreRequireAccounts($api, $args) {
        $this->checkAccess();
        $requireAccounts = array(
            'Contacts' => true,
            'Opportunities' => true,
            'Cases' => true,
            'Contracts' => true
        );
        $configs = array();
        @include('custom/application/Ext/RequireAccounts/requireaccounts.ext.php');
        // fix for 7.9
        if (!defined(MB_RECORDVIEW)) include_once('modules/ModuleBuilder/parsers/constants.php');
        $filterOut = array();
        foreach ($requireAccounts as $key => $val) {
            if (in_array($key, array('Contacts', 'Opportunities', 'Cases', 'Contracts'))) $filterOut[$key] = $val;
        }
        $requireAccounts = $filterOut;
        $requires = true;
        foreach ($requireAccounts as $module => $requiresForModule) {
            if (!$requiresForModule) {
                $requires = false;
                break;
            }
        }
        require_once 'modules/Configurator/Configurator.php';
        $configuratorObj = new Configurator();
        //Load config
        $configuratorObj->loadConfig();
        //Update a specific setting
        $configuratorObj->config['require_accounts'] = $requires;
        $configuratorObj->config = array_merge($configuratorObj->config, $configs);
        //Save the new setting
        $configuratorObj->saveConfig();
        // set record views per module
        $relationships = SugarRelationshipFactory::getInstance()->getRelationshipDefs();
        $standardViews = array(MB_RECORDVIEW, MB_LISTVIEW, MB_SIDECARDUPECHECKVIEW, MB_SIDECARPOPUPVIEW);
        $subpanels = array();
        foreach ($requireAccounts as $module => $requiresForModule) {
            $this->setRecordViewAccountRequired($module, $requiresForModule, $standardViews);
            foreach ($relationships as $relationship) {
                if ($relationship['join_table'] && ($relationship['relationship_type']=='one-to-many' || $relationship['relationship_type']=='many-to-many') && $relationship['rhs_module']==$module) {
                    try {
                        if ($this->setRecordViewAccountRequired($relationship['lhs_module'], $requiresForModule, array('subpanel#'.$relationship['rhs_table']))) $subpanels[] = $relationship['name'];
                    } catch (Exception $e) {
                        $GLOBALS['log']->fatal('Relationship='.var_export($relationship,true));
                    }
                }

            }
        }
        return array('requires' => $requires?'true':false, 'views' => $standardViews, 'subpanels' => $subpanels);
    }
    
    /**
     * Sets record view definitions for module so required_accounts is properly propagated in UI
     */
    private function setRecordViewAccountRequired($module, $requires, $views = array()) {
        // no user defined fields we create default ones
        require_once('modules/ModuleBuilder/parsers/ParserFactory.php');
        // get module subpanels
        foreach ($views as $view) {
            set_time_limit(30);
            $subpanelName = null;
            $handleSave = true;
            if (substr($view,0,strlen('subpanel#'))=='subpanel#') {
                $tmp = explode('#', $view);
                $view = MB_LISTVIEW;
                $subpanelName = $tmp[1];
                $GLOBALS['log']->debug('Rebuilding subpanel: '.$module.'-'.$view.'-'.$subpanelName);
            }
            $viewVar = ($view==MB_LISTVIEW)?MB_SIDECARLISTVIEW:$view;
            $parser = ParserFactory::getParser($view, $module, null, $subpanelName);
            $viewdefs = $parser->_viewdefs;
            if ($view==MB_LISTVIEW && isModuleBWC($module)) {
                $panels = $this->_setRequiresViewValues(array(array('fields' => $viewdefs)), $requires);
                $parser->_viewdefs = $panels[0]['fields'];
            } else if (method_exists($parser, 'convertToCanonicalForm')) {
                $panels = $parser->convertToCanonicalForm($viewdefs['panels'], $parser->_fielddefs);
                if (is_array($panels)) {
                    $parser->_viewdefs['panels'] = $this->_setRequiresViewValues($panels, $requires);
                    $parser->getImplementation()->deploy(MetaDataFiles::mapPathToArray(MetaDataFiles::getViewDefVar($view),$parser->_viewdefs));
                    $handleSave = false;
                }
            } else if (isset($viewdefs['base']['view'][$view]['panels'])) {
                $parser->_viewdefs['base']['view'][$view]['panels'] = $this->_setRequiresViewValues($viewdefs['base']['view'][$view]['panels'], $requires);
            } else if (isset($viewdefs['base']['view'][$viewVar]['panels'])) {
                $parser->_viewdefs['base']['view'][$viewVar]['panels'] = $this->_setRequiresViewValues($viewdefs['base']['view'][$viewVar]['panels'], $requires);
            } else if ($subpanelName && isset($viewdefs['panels'])) {
                $parser->_viewdefs['panels'] = $this->_setRequiresViewValues($viewdefs['panels'], $requires);
            } else {
                $GLOBALS['log']->fatal($view.'-'.$module);
                $GLOBALS['log']->fatal('Can not handle:'.$view."->".$module);
                $GLOBALS['log']->fatal(var_export($viewdefs,true));
            }
            if ($handleSave) $parser->handleSave(false);
            return true;
        }
    }

    /**
     * Helper function
     */
    private function _setRequiresViewValues($panels, $requires) {
        if (is_array($panels)) {
            foreach ($panels as $panelKey => $panel) {
                $fields = $panel['fields'];
                if (is_array($fields)) {
                    foreach ($fields as $fieldKey => $field) {
                        if ($fieldKey==='account_name') {
                            $field['required'] = $requires;
                        } else if (is_array($field) && $field['name']=='account_name') {
                            $field['required'] = $requires;
                        } else if ($field==='account_name') {
                            $field = array(
                                'name' => 'account_name',
                                'required' => $requires,
                            );
                        }
                        $panels[$panelKey]['fields'][$fieldKey] = $field;
                    }
                }
            }
        }
        return $panels;
    }

    /**
     * Stores Reports, Dashboards, Process Definitions and Email templates to filesystem
     */
    public function storeMiscData($api, $args) {
        $this->checkAccess();
        $data = array();
        $db = DBManagerFactory::getInstance();
        foreach ($this->rpde_tables as $table) {
            $q = $db->query("SELECT * FROM ".$table);
            while ($row = $db->fetchByAssoc($q)) {
                if ($table=='schedulers' && in_array($row['job'], $this->job_strings)) continue; // don't store standard schedulers
                $data[$table][] = $row;
            }
        }
        sugar_mkdir('custom/Extension/application/Ext/INT_RDPDET');
        write_array_to_file('rpde_tables[]', $data, 'custom/Extension/application/Ext/INT_RDPDET/tables'.time().'.php');
        // write in customroles.ext.php so that on next run we don't overwrite previous changes if no rebuild was done in meantime
        $installer = new ModuleInstaller();
        $installer->merge_files('Ext/INT_RDPDET', 'rpde.ext.php', '', true);
    }

    /**
     * Stores Reports, Dashboards, Process Definitions and Email templates to filesystem
     */
    public function restoreMiscData($api, $args) {
        global $sugar_config;
        $this->checkAccess();
        $installer = new ModuleInstaller();
        $installer->merge_files('Ext/INT_RDPDET', 'rpde.ext.php', '', true);
        $db = DBManagerFactory::getInstance();
        $data = array();
        $rpde_tables = array();
        include('custom/application/Ext/INT_RDPDET/rpde.ext.php');
        foreach ($rpde_tables as $tables) {
            foreach ($tables as $table => $rows) {
                if (!isset($data[$table])) $data[$table] = array();
                foreach ($rows as $row) {
                    if ($table=='schedulers' && in_array($row['job'], $this->job_strings)) continue; // don't restore standard schedulers
                    if (!isset($data[$table][$row['id']]) || strtotime($data[$table][$row['id']]['date_modified'])<strtotime($row['date_modified'])) $data[$table][$row['id']] = $row;
                }
            }
        }
        $total = 0;
        foreach ($data as $table => $rows) {
            if (!in_array($table, $this->rpde_tables)) continue;
            foreach ($rows as $row) {
                if ($table=='dashboards' && $row['name']=='LBL_DEFAULT_HELP_DASHBOARD_TITLE') continue;

                $result = $db->query("SELECT id FROM $table WHERE id='".$db->quote($row['id'])."'");
                $exists = $db->fetchByAssoc($result);

                $set = array();
                $keys = array();
                $values = array();
                foreach ($row as $key => $value) {
                    if ($sugar_config['sugar_version']+0>7.8 && $table=='dashboards' && $key=='dashboard_type') continue;
                    if ($value===null)
                    {
                        $valueQuoted = 'NULL';
                    } else {
                        $valueQuoted = "'".$db->quote($value)."'";
                    }
                    $row[$key] = $valueQuoted;
                    $set[] = $db->quote($key)."=".$valueQuoted;
                    $keys[] = $key;
                    $values[] = $valueQuoted;
                }

                if ($exists) {
                    // update
                    $query = "UPDATE $table SET " .implode(',', $set) . " WHERE id=" . $row['id'];
                }
                else{
                    // insert
                    $query = "INSERT INTO $table ( " . implode(', ', $keys) . ") VALUES (" . implode(', ', $values) . ")";
                }
                $GLOBALS['log']->debug($query);
                $db->query($query);
                $total++;
            }
        }
        return array('total' => $total);
    }
}

?>