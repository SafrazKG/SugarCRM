<?php

require_once('custom/AvailableSlotsTrait.php');

class CalendarFilterApi extends FilterApi {
    
    use AvailableSlotsTrait;

    public function registerApiRest()
    {
        return array(
            'filterModuleAll' => array(
                'reqType' => 'GET',
                'path' => array('RRAPT_Calendar'),
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
                'path' => array('RRAPT_Calendar', 'count'),
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
    
    public function extendedFilterList($api, $args) {
        // we need to add available slots if user is fronter
        if (!$GLOBALS['current_user']->isAdmin() && !$this->hasRole('calendar_admin')) throw new SugarApiExceptionNotAuthorized();
        if (!isset($args['filter'])) return array('next_offset' => -1, 'records' => []);
        if ($this->hasRole('fronter')) {
            $args['module'] = 'RRAPT_Admin';
            $args['fields'] = 'start_time_c,end_time_c,active_c';
            foreach (['transfer', 'mortgage'] as $product) {
                foreach ($this->times as $time) {
                    $args['fields'] .= ','.$product.'_'.strtolower($time).'_c';
                }
            }
            list($args, $q, $options, $seed) = $this->filterListSetup($api, $args, 'list');
            $result = $q->execute();            
            $list = $this->getAvailableSlotsFromQuery($result, true);
            $ret = array('next_offset' => -1, 'records' => array());
            $minTime = $maxTime = false;
            foreach ($list as $entry) {
                foreach ($entry['slots'] as $slotName => $slot) {
                    foreach ($slot as $slotData) {
                        $slotNameData = explode('_', $slotName);
                        $minTime = $this->slotTimeLT($minTime, $slotNameData[1]);
                        $maxTime = $this->slotTimeGT($maxTime, $slotNameData[1]);
                        $record = array(
                            'id' => $slotData['id'],
                            'name' => $slotData['name'],
                            'product_c' => $slotData['product_c'],
                            'date_field_c' => $this->toUserTimeInDBFormat($slotData['date_field_c']),
                            'disposition_c' => $slotData['disposition_c'],
                            'assigned_user_name' => $slotData['assigned_user_name']?$slotData['assigned_user_name']:'',
                            'users_rrapt_calendar_3_name' => $slotData['users_rrapt_calendar_3_name']?$slotData['users_rrapt_calendar_3_name']:'',
                        );
                        $ret['records'][] = $record;
                    }
                }
            }
            if (!empty($ret['records'])) {
                $ret['records'][0]['minTime'] = $this->timeToDbTime($minTime);
                $ret['records'][0]['maxTime'] = $this->timeToDbTime($this->nextTime($maxTime));
            }
        } else {
            $ret = $this->filterList($api, $args);
        }
        return $ret;
    }
    
    public function extendedGetFilterListCount($api, $args) {
        return $this->getFilterListCount($ap, $args);
    }

    /*
     * Helper function to get user's role ids
     *
     * @return array
     * 
     */    
    private function getUserRoleIds() {
        if (!isset($GLOBALS['AMPgetUserRolesIds'])) {
            $ids = [];
            $roles = ACLRole::getUserRoles($GLOBALS['current_user']->id, false);
            foreach ($roles as $r) {
                $ids[] = $r->id;
            }
            $GLOBALS['AMPgetUserRolesIds'] = $ids;
        }
        return $GLOBALS['AMPgetUserRolesIds'];
    }
    
    /*
     * Helper function to check does user belongs to specific role
     *
     * @return boolean
     * 
     */    
    private function hasRole($role, $roles = null) {
        if (!$roles) $roles = $this->getUserRoleIds();
        foreach ($roles as $r) {
            if ($r==$role) return true;
        }
        return false;
    }
    
    private function slotTimeLT($original, $compaareWith) {
        if (!$original) return $compaareWith;
        $original = strtoupper($original);
        $compaareWith = strtoupper($compaareWith);
        $foundOriginal = $foundWith = false;
        foreach ($this->times as $time) {
            if ($time==$original) $foundOriginal = true;
            if ($foundOriginal && !$foundWith) return $original;
            if ($time==$compaareWith) $foundWith = true;
            if ($foundWith && !$foundOriginal) return $compaareWith;
        }
        return $compaareWith;
    }

    private function slotTimeGT($original, $compaareWith) {
        if (!$original) return $compaareWith;
        $original = strtoupper($original);
        $compaareWith = strtoupper($compaareWith);
        $foundOriginal = $foundWith = false;
        foreach ($this->times as $time) {
            if ($time==$original) $foundOriginal = true;
            if ($foundOriginal && !$foundWith) return $compaareWith;
            if ($time==$compaareWith) $foundWith = true;
            if ($foundWith && !$foundOriginal) return $original;
        }
        return $original;
    }

}