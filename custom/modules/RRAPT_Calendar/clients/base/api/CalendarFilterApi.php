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
        if (!isset($args['view']) || $args['view']!='calendarlist') return $this->listForListView($api, $args);
        if (!isset($args['filter'])) return array('next_offset' => -1, 'records' => []);
        foreach ($args['filter'] as $k => $filter) {
            if (isset($filter['date_field_c'])) {
                if (isset($filter['date_field_c']['$gte'])) {
                    $start = $filter['date_field_c']['$gte'];
                    $startDate = explode("T", $start)[0];
                    $args['filter'][$k]['date_field_c']['$gte'] = $startDate."T00:00:00";
                } else if (isset($filter['date_field_c']['$lte'])) {
                    $end = $filter['date_field_c']['$lte'];
                    $endDate = explode("T", $end)[0];
                    $args['filter'][$k]['date_field_c']['$lte'] = $endDate."T00:00:00";
                }
            }
        }
        if (!$start || !$end) return array('next_offset' => -1, 'records' => []);
        $admin = BeanFactory::newBean('RRAPT_Admin');
        $isFronter = $admin->hasRole('fronter');
        $args['module'] = 'RRAPT_Admin';
        $args['fields'] = 'start_time_c,end_time_c,active_c';
        foreach (['transfer', 'mortgage'] as $product) {
            foreach ($this->times as $time) {
                $args['fields'] .= ','.$product.'_'.strtolower($time).'_c';
            }
        }
        list($args, $q, $options, $seed) = $this->filterListSetup($api, $args, 'list');
        $result = $q->execute();
        $list = $this->getAvailableSlotsFromQuery($result, true, $start, $end);
        $ret = array('next_offset' => -1, 'records' => array());
        $minTime = $maxTime = false;
        foreach ($list as $entry) {
            if (isset($entry['slots']) && is_array($entry['slots'])) {
                foreach ($entry['slots'] as $slotName => $slot) {
                    foreach ($slot as $slotData) {
                        $slotNameData = explode('_', $slotName);
                        $minTime = $this->slotTimeLT($minTime, $slotNameData[1]);
                        $maxTime = $this->slotTimeGT($maxTime, $slotNameData[1]);
                        if ($isFronter || strpos($slotData['id'], 'free_')===false) {
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
            }
        }
        if (!empty($ret['records'])) {
            $ret['records'][0]['minTime'] = $this->timeToDbTime($minTime);
            $ret['records'][0]['maxTime'] = $this->timeToDbTime($this->nextTime($maxTime));
        }
        return $ret;
    }
    
    public function extendedGetFilterListCount($api, $args) {
        return $this->getFilterListCount($ap, $args);
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
    
    private function listForListView($api, $args) {
        // if we have filters on related fields we need to add group by
        if (!isset($args['view']) || $args['view']!='subpanel') {
            $args['filter'][] = array('disposition_c' => array('$in' => array('Set', 'Confirmed')));
        }
        if (!empty($args['q'])) {
            if (!empty($args['filter']) || !empty($args['filter_id']) || !empty($args['deleted'])) {
                throw new SugarApiExceptionInvalidParameter();
            }
            require_once('clients/base/api/UnifiedSearchApi.php');
            $search = new UnifiedSearchApi();
            $args['module_list'] = $args['module'];
            return $search->globalSearch($api, $args);
        }
        $api->action = 'list';
        list($args, $q, $options, $seed) = $this->filterListSetup($api, $args, 'list');
        $linkAlias = $q->getJoinTableAlias('users_cstm');
        $q->joinTable('users_cstm', array(
                                    'joinType' => 'LEFT',
                                    'alias' => $linkAlias
                                ))
            ->on()
            ->equalsField($linkAlias.'.id_c', 'rrapt_calendar.assigned_user_id');
        $q->select->fieldRaw($linkAlias.'.last_activity_c+300>=UNIX_TIMESTAMP()', 'user_active_c');
        return $this->runQuery($api, $args, $q, $options, $seed);
    }

}