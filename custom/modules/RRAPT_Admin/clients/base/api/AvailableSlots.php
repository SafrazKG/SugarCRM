<?php
require_once('custom/AvailableSlotsTrait.php');

class AvailableSlots extends SugarApi {
    
    use AvailableSlotsTrait;
    
    public function registerApiRest()
    {
        return array(
            'getAvailableSlots' => array(
                'reqType' => 'GET',
                'path' => array('RRAPT_Admin', 'getAvailableSlots', '?'),
                'pathVars' => array('module', 'method', 'date'),
                'method' => 'getAvailableSlots',
            ),
        );
    }

    public function getAvailableSlots($api, $args) {
        $date = $args['date'];
        $q = new SugarQuery();
        $q->from(BeanFactory::newBean('RRAPT_Admin'));
        $q->where()->equals('date_field_c', $date);
        $q->limit(1);
        $result = $q->execute();
        return $this->getAvailableSlotsFromQuery($result)[0];
    }
}