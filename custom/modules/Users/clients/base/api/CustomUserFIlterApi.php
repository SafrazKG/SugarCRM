<?php

class CustomUserFIlterApi extends FilterApi {
    
    protected $roleId = null;

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
                } else {
                    $newFilters[] = $filter;
                }
            }
            $args['filter'] = $newFilters;
        }
        $args['max_num'] = 2;
        return $args;
    }
    
    public function extendedFilterList($api, $args) {
        $args = $this->checkArgs($args);
        if (!$this->roleId) return $this->filterList($api, $args);
        // if we have filters on role_id
        list($args, $q, $options, $seed) = $this->filterListSetup($api, $args);
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
        list($args, $q, $options, $seed) = $this->filterListSetup($api, $args);
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