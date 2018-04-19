<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/SugarQuery/SugarQuery.php');
require_once('modules/INTDB_Dashboards/ExceptionLicenseInvalid.php');
require_once('modules/INTDB_Dashboards/LicenseChecker.php');

class INTDasboardsApi extends FilterApi
{
    public function registerApiRest()
    {
        return array(
            'getData' => array(
                'reqType' => 'GET',
                'path' => array('INTDB_Dashboards'),
                'pathVars' => array('module'),
                'method' => 'getData',
                'shortHelp' => 'Get Users',
                'longHelp' => '',
            ),
            'count' => array(
                'reqType' => 'GET',
                'path' => array('INTDB_Dashboards', 'count'),
                'pathVars' => array('module', ''),
                'method' => 'count',
                'shortHelp' => 'Get Users count',
                'longHelp' => '',
            ),
            'deploy' => array(
                'reqType' => 'POST',
                'path' => array('INTDB_Dashboards', 'deploy'),
                'pathVars' => array('', '', 'module'),
                'method' => 'deploy',
                'shortHelp' => 'Deploy dashboards',
                'longHelp' => '',
            ),
        );
    }
    
    /**
     * Check full_name in search for users
     */
    private function checkFilters($args) {
        if (!isset($args['filter'])) return $args;
        foreach ($args['filter'] as $k => $filter) {
            if (isset($filter['$and'])) {
                foreach ($filter['$and'] as $k2 => $filter2) {
                    $args['filter'][$k]['$and'][$k2] = $this->_checkOneFilter($filter2);
                }
            } else if (isset($filter['$or'])) {
                foreach ($filter['$or'] as $k2 => $filter2) {
                    $args['filter'][$k]['$or'][$k2] = $this->_checkOneFilter($filter2);
                }
            } else {
                $args['filter'][$k] = $this->_checkOneFilter($filter);
            }
        }
        return $args;
    }
    
    private function _checkOneFilter($filter) {
        if (isset($filter['full_name'])) {
            $val = $filter['full_name'];
            unset($filter['full_name']);
            $filter['$or'] = array(
                array('first_name' => $val),
                array('last_name' => $val),
            );
        }
        return $filter;
    }
    
    /*
     * Get list data
     *
     * @param $api
     * @param $args
     * 
     * @return array    list of users with their dashboards
     */    
    public function getData($api, $args) {
        $db = DBManagerFactory::getInstance();
        // get users
        $this->checkAccess($api, $args);
        $args = $this->checkFilters($args);
        $q = $db->query('SELECT DISTINCT(assigned_user_id) user_id FROM dashboards');
        $userids = array();
        while ($row=$db->fetchByAssoc($q)) {
            $userids[] = $row['user_id'];
        }
        $args['module'] = 'Users';
        if (!isset($args['filter'])) $args['filter'] = array();
        $args['filter'][] = array('id' => array('$in' => $userids));
        $results = $this->filterList($api, $args);
        foreach ($results['records'] as &$r) {
            $r['_module'] = 'INTDB_Dasboards';
            $r['dashboards'] = $this->usersDashboards($r['id']);
        }
        return $results;
    }

    /*
     * Get users count
     *
     * @param $api
     * @param $args
     * 
     * @return array    list of users with their dashboards
     */    
    public function count($api, $args) {
        $db = DBManagerFactory::getInstance();
        // get users
        $this->checkAccess($api, $args);
        $args = $this->checkFilters($args);
        $q = $db->query('SELECT DISTINCT(assigned_user_id) user_id FROM dashboards');
        $userids = array();
        while ($row=$db->fetchByAssoc($q)) {
            $userids[] = $row['user_id'];
        }
        $args['module'] = 'Users';
        if (!isset($args['filter'])) $args['filter'] = array();
        $args['filter'][] = array('id' => array('$in' => $userids));
        return $this->getFilterListCount($api, $args);
    }

    /*
     * Deploy selected dashboards
     *
     * @param $api
     * @param $args
     *      $args['dashboards'] should contain list of dashboards to be deployed
     *      $args['module']     Users/Teams/ACLRoles
     *      $args['data']       list of ids from module
     *      
     * @return array    count: number of users per dashboard
     */
    public function deploy($api, $args) {
        $db = DBManagerFactory::getInstance();
        $this->checkAccess($api, $args);
        $user_ids = $this->getUserIds($args);
        $dashboard_ids = $args['dashboards'];
        $ret = array();
        $dashboard = BeanFactory::newBean('Dashboards');
        $allFields = $dashboard->getFieldDefinitions();
        $fields = array();
        foreach ($allFields as $field) {
            if ($field['source']=='non-db' || $field['name']=='id') continue;
            $fields[] = $field['name'];
        }
        foreach ($dashboard_ids as $dashboard_id) {
            if (!isset($ret[$dashboard_id])) $ret[$dashboard_id] = 0;
            $dashboard = BeanFactory::retrieveBean('Dashboards', $dashboard_id, array('disable_row_level_security' => true));
            foreach ($user_ids as $user_id) {
                if ($dashboard->assigned_user_id==$user_id || ($dashboard->created_by==$user_id && $dashboard->modified_user_id==$user_id)) continue;
                $newDashboard = BeanFactory::newBean('Dashboards');
                foreach ($fields as $field) {
                    if ($field != 'metadata') {
                        $newDashboard->$field = $dashboard->$field;
                    } else {
                        // Expand the metadata for processing.
                        $metadata = json_decode($dashboard->metadata);

                        // If we don't have a components in metadata for whatever reason, we're out, send back unchanged.
                        if(!$metadata || !isset($metadata->components)) {
                            $newDashboard->metadata = $dashboard->metadata;
                        } else {
                            $isMetadataChanged = false;
                            foreach($metadata->components as $component_key => $component) {
                                foreach($component->rows as $row_key => $row) {
                                    foreach($row as $item_key => $item) {
                                        // Check if this user has access to the module upon which this dashlet is based.
                                        if(isset($item->view) && isset($item->view->filter_id)) {
                                            $filterBean = BeanFactory::retrieveBean('Filters', $item->view->filter_id, array('disable_row_level_security' => true));
                                            if($filterBean instanceof SugarBean && !empty($filterBean->id)) {
                                                $newFilterBean = BeanFactory::newBean('Filters');
                                                $newFilterBean->name = $filterBean->name;
                                                $newFilterBean->description = $filterBean->description;
                                                $newFilterBean->deleted = $filterBean->deleted;
                                                $newFilterBean->filter_definition = $filterBean->filter_definition;
                                                $newFilterBean->filter_template = $filterBean->filter_template;
                                                $newFilterBean->module_name = $filterBean->module_name;
                                                $newFilterBean->team_id = $filterBean->team_id;
                                                $newFilterBean->team_set_id = $filterBean->team_set_id;

                                                $newFilterBean->save();

                                                $metadata->components[$component_key]->rows[$row_key][$item_key]->view->filter_id = $newFilterBean->id;
                                                $isMetadataChanged = true;
                                                $db->query("UPDATE ".$newFilterBean->table_name." SET assigned_user_id='".$db->quote($user_id)."', created_by='".$db->quote($user_id)."', modified_user_id='".$db->quote($user_id)."' WHERE id='".$db->quote($newFilterBean->id)."'");
                                            }
                                        }
                                    }
                                }
                            }
                            if ($isMetadataChanged) {
                                $newDashboard->metadata = json_encode($metadata);
                            } else {
                                $newDashboard->metadata = $dashboard->metadata;
                            }
                        }
                    }

                }
                $newDashboard->update_date_modified = false;
                $newDashboard->save();
                $db->query("UPDATE ".$newDashboard->table_name." SET assigned_user_id='".$db->quote($user_id)."', created_by='".$db->quote($dashboard->created_by)."', modified_user_id='".$db->quote($dashboard->modified_user_id)."' WHERE id='".$db->quote($newDashboard->id)."'");
                if ($newDashboard->id) $ret[$dashboard_id]++;
            }
        }
        return $ret;
    }
        
    /*
     * Check user access to plugin
     *
     * @param $api
     * @param $args
     *
     * @throws SugarApiExceptionNotAuthorized
     */    
    private function checkAccess($api, $args) {
        $users = BeanFactory::getBean('Users');
        if ( !$users->ACLAccess('edit') ) {
            throw new SugarApiExceptionNotAuthorized('No access');
        }
        $data = $this->checkLicense($api, $args);
        if (isset($data['errors']) && $data['errors']) {
            throw new SugarApiExceptionNotAuthorized('No access');
        }
    }
    
    /*
     * Parse list query arguments
     *
     * @param $api
     * @param $args
     * @param $seed SugarBean
     * @param $options array
     * 
     * @return array
     */    
    private function getQueryUsers($api, $args, $seed, &$options) {
        $options = $this->parseArguments($api, $args, $seed);
        $listQueryParts = $seed->create_new_list_query($options['orderBy'], $options['where'], $options['userFields'], $options['params'], $options['deleted'], '', true, null, false, false);
        $listQueryParts['select'] = " SELECT users.*, CONCAT(first_name,' ',last_name) as name ";
        $listQueryParts['from'] .= " INNER JOIN dashboards ON dashboards.assigned_user_id=users.id ";
        $listQueryParts['from_min'] .= " INNER JOIN dashboards ON dashboards.assigned_user_id=users.id ";
        $listQueryParts['secondary_from'] .= " INNER JOIN dashboards ON dashboards.assigned_user_id=users.id ";
        $listQueryParts['order_by'] = ' GROUP BY users.id '.$listQueryParts['order_by'];
        return $listQueryParts;
    }
    
    /*
     * Get dashboards for user
     *
     * @param $id string    User id
     * 
     * @return array
     */    
    private function usersDashboards($id)
    {
        $sugarQuery = new SugarQuery();
        $sugarQuery->from(BeanFactory::newBean('Dashboards'), array('team_security' => false));
        //$sugarQuery->where()->queryOr()->equals('created_by', $id)->equals('modified_user_id', $id);
        $sugarQuery->where()->equals('assigned_user_id', $id);
        $sugarQuery->orderBy('date_modified:desc');
        $sugarQuery->select(array('id', 'name', 'dashboard_module', 'date_entered', 'date_modified'));
        return $sugarQuery->execute();
    }
    
    /*
     * Get user ids for selected users/teams/roles
     *
     * @param $args
     * 
     * @return array
     */    
    private function getUserIds($args) {
        $db = DBManagerFactory::getInstance();
        $module = $args['module'];
        $ids = array();
        foreach ($args['data'] as $u) {
            $ids[] = $u['id'];
        }
        if ($module=='Users') return $ids;
        $ret = array();
        switch ($module) {
            case 'ACLRoles':
                $query = 'SELECT user_id FROM acl_roles_users WHERE role_id IN ('.implode(',', $this->ids2db($ids)).')';
                break;
            case 'Teams':
                $query = 'SELECT user_id FROM team_memberships WHERE team_id IN ('.implode(',', $this->ids2db($ids)).')';
                break;
        }
        $q = $db->query($query, true);
        $userids = array();
        while ($row=$db->fetchByAssoc($q)) {
            $userids[] = $row['user_id'];
        }
        // check deleted
        $q = $db->query('SELECT id FROM users WHERE id IN ('.implode(',', $this->ids2db($userids)).') AND deleted=0');
        while ($row=$db->fetchByAssoc($q)) {
            $ret[] = $row['id'];
        }
        return $ret;
    }

    /*
     * Format list of string ids for database
     *
     * @param $ids array
     * 
     * @return array    Quoted array of ids
     */    
    private function ids2db($ids) {
        $db = DBManagerFactory::getInstance();
        $ret = array();
        foreach ($ids as $id) {
            $ret[] = "'".$db->quote($id)."'";
        }
        return $ret;
    }

    /**
     * Check license from saved config values
     * @param ServiceBase $api
     * @param $args
     * @return array
     * @throws SugarApiExceptionNotAuthorized
     */
    public function checkLicense(ServiceBase $api, $args) {
        $data = array();
        $this->requireArgs($args, array('module'));
        if (!empty($args['module'])) {
            try {
                $validator = new \INTDB_Dashboards\LicenseChecker();
                if (!$validator->validateLicense()) {
                    $message = translate('LBL_INVALID_OR_EXPIRED_LICENCE', 'INTDB_Dashboards');
                    $data['errors'] = $message;
                }
                $expiryDate = $validator->getLicenseExpirationDate();
                if ($expiryDate) {
                    $data['expiryDate'] = $expiryDate;
                }
            } catch (Exception $e) {
                $message = translate('LBL_INVALID_OR_EXPIRED_LICENCE', 'INTDB_Dashboards');
                $data['errors'] = $message;
            }
        }
        return $data;
    }
}
