<?php

class CustomUserFilterApi extends FilterApi {
    
    protected $roleId = null;
    protected $appointmentId = null;

    public function registerApiRest()
    {
        return array(
            'filterModuleAll' => array(
                'reqType' => 'GET',
                'path' => array('Users'),
                'pathVars' => array('module'),
                'method' => 'extendedFilterList',
                'jsonParams' => array('filter'),
                'shortHelp' => 'List of all records in this module',
                'longHelp' => 'include/api/help/module_filter_get_help.html',
                'exceptions' => array(
                    // Thrown in getPredefinedFilterById
                    'SugarApiExceptionNotFound',
                    'SugarApiExceptionError',
                    // Thrown in filterList and filterListSetup
                    'SugarApiExceptionInvalidParameter',
                    // Thrown in filterListSetup, getPredefinedFilterById, and parseArguments
                    'SugarApiExceptionNotAuthorized',
                ),
            ),
            'filterModuleAllCount' => array(
                'reqType' => 'GET',
                'path' => array('Users', 'count'),
                'pathVars' => array('module', ''),
                'jsonParams' => array('filter'),
                'method' => 'extendedGetFilterListCount',
                'shortHelp' => 'List of all records in this module',
                'longHelp' => 'include/api/help/module_filter_get_help.html',
                'exceptions' => array(
                    // Thrown in getPredefinedFilterById
                    'SugarApiExceptionNotFound',
                    'SugarApiExceptionError',
                    // Thrown in filterListSetup and getPredefinedFilterById
                    'SugarApiExceptionNotAuthorized',
                ),
            ),
       );
    }
    
    public function checkArgs($args) {
        if (isset($args['filter']) && is_array($args['filter'])) {
            $newFilters = array();
            foreach ($args['filter'] as $k => $filter) {
                if (isset($filter['role_id'])) {
                    $this->roleId = $filter['role_id'];
                } else if (isset($filter['appointment_id'])) {
                    $this->appointmentId = $filter['appointment_id'];
                } else {
                    $newFilters[] = $filter;
                }
            }
            $args['filter'] = $newFilters;
        }
        return $args;
    }
    
    public function extendedFilterList($api, $args) {
        $args = $this->checkArgs($args);
        if (!$this->roleId) return $this->filterList($api, $args);
        if ($this->roleId=='closer' && $this->appointmentId) {
            if (!isset($args['order_by'])) $args['order_by'] = 'closer_score_c:desc';
            if ($args['fields']) {
                $fields = explode(',', $args['fields']);
                $fields[] = 'closer_score_c';
                $fields = array_unique($fields);
                $args['fields'] = implode(',', $fields);
            }
        }
        // if we have filters on role_id
        list($args, $q, $options, $seed) = $this->filterListSetup($api, $args);
        if ($this->roleId=='closer' && $this->appointmentId) {
            $q->select->fieldRaw("CLOSER_SCORE('".$GLOBALS['db']->quote($this->appointmentId)."', users.id)", 'closer_score_c');
            $q->havingRaw('closer_score_c!=-1');
            $orderBy = strtolower($args['order_by']);
            if (substr($orderBy, 0, strlen('closer_score_c'))=='closer_score_c') {
                $tmp = explode(':', $orderBy);
                $sorting = isset($tmp[1])?$tmp[1]:'desc';
                if (substr($sorting, 0, 1)=='d') $sorting = 'DESC';
                else $sorting = 'ASC';
                $q->orderByRaw('closer_score_c '.$sorting.', users.id');
            }
        }
        $q->joinTable('acl_roles_users', array(
                                    'joinType' => 'INNER',
                                    'alias' => 'UserRoles',
                                ))
            ->on()
            ->equals('UserRoles.deleted', 0)
            ->equalsField('UserRoles.user_id', 'users.id')
            ->equals('UserRoles.role_id', $this->roleId);
        
        return $this->runQuery($api, $args, $q, $options, $seed);
    }

    public function extendedGetFilterListCount($api, $args) {
        $args = $this->checkArgs($args);
        if (!$this->roleId) return $this->getFilterListCount($api, $args);
        // if we have filters on role_id
        if ($this->roleId=='closer') {
            $args['filters'][] = array('closer_score_c' => array('$not_equals' => -1));
        }
        list($args, $q, $options, $seed) = $this->filterListSetup($api, $args);
        if ($this->roleId=='closer' && $this->appointmentId) {
            $q->select->fieldRaw("CLOSER_SCORE('".$GLOBALS['db']->quote($this->appointmentId)."', users.id)", 'closer_score_c');
            $q->havingRaw('closer_score_c!=-1');
        }
        $q->joinTable('acl_roles_users', array(
                                    'joinType' => 'INNER',
                                    'alias' => 'UserRoles',
                                ))
            ->on()
            ->equals('UserRoles.deleted', 0)
            ->equalsField('UserRoles.user_id', 'users.id')
            ->equals('UserRoles.role_id', $this->roleId);

        $api->action = 'list';

        $q->select->selectReset()->setCountQuery();
        $q->orderByReset();
        $q->limit = null;
        return $q->execute()[0];
    }

}