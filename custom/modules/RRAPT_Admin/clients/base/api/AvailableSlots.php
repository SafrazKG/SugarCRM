<?php

class AvailableSlots extends SugarApi {
    
    private $times = [ '8AM', '9AM', '10AM', '11AM', '12PM', '1PM', '2PM', '3PM', '4PM', '5PM', '6PM', '7PM', '8PM', '9PM', '10PM' ];

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
        if (!empty($result) && $result[0]['active_c']=='Active') {
            $startTime = $result[0]['start_time_c'];
            $endTime = $result[0]['end_time_c'];
            $slots = array();
            $started = $nomore = false;
            foreach ($this->times as $time) {
                if ($time==$startTime) $started = true;
                if ($started && !$nomore) {
                    $slots['transfer_'.strtolower($time)] = $this->isSlotAvailable($result[0]['date_field_c'], $time, $result[0]['transfer_'.strtolower($time).'_c'], 'Transfer');
                    $slots['mortgage_'.strtolower($time)] = $this->isSlotAvailable($result[0]['date_field_c'], $time, $result[0]['transfer_'.strtolower($time).'_c'], 'Mortgage');
                }
                if ($time==$endTime) $nomore = true;
            }
            return array(
                            'active' => true,
                            'start_time' => $startTime,
                            'start_db' => $this->timeToDbTime($startTime),
                            'end_time' => $endTime,
                            'end_db' => $this->timeToDbTime($endTime),
                            'slots' => $slots
                        );
        }
        return array('active' => false);
    }
    
    private function isSlotAvailable($date, $time, $maxSlots, $product) {
        $db = DBManagerFactory::getInstance();
        $res = array();
        $q = $db->query("SELECT id FROM rrapt_calendar INNER JOIN rrapt_calendar_cstm ON (rrapt_calendar_cstm.id_c=rrapt_calendar.id) WHERE deleted=0 AND start_date_c='".$db->quote($date." ".$this->timeToDbTime($time, $date))."' AND product_c='".$product."'");
        while ($row = $db->fetchByAssoc($q)) {
            $res[] = $row['id'];
        }
        return $res;
    }
    
    private function timeToDbTime($time, $date = false) {
        $mapping = array(
                        '8AM' => '08',
                        '9AM' => '09',
                        '10AM' => '10',
                        '11AM' => '11',
                        '12PM' => '12',
                        '1PM' => '13',
                        '2PM' => '14',
                        '3PM' => '15',
                        '4PM' => '16',
                        '5PM' => '17',
                        '6PM' => '18',
                        '7PM' => '19',
                        '8PM' => '20',
                        '9PM' => '21',
                        '10PM' => '22',
                    );
        if (!$date) return $mapping[strtoupper($time)].":00:00";
        $dt = SugarDateTime::createFromFormat("Y-m-d h:i:s", $date . ' ' . $mapping[strtoupper($time)].":00:00", new DateTimeZone($GLOBALS['current_user']->getPreference('timezone')));
        $db = $dt->asDb();
        $db = explode(' ', $db);
        return $db[1];
    }
}