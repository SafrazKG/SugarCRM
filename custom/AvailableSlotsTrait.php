<?php

trait AvailableSlotsTrait {

    private $times = [ '8AM', '9AM', '10AM', '11AM', '12PM', '1PM', '2PM', '3PM', '4PM', '5PM', '6PM', '7PM', '8PM', '9PM', '10PM' ];

    public function getAvailableSlotsFromQuery($result, $fullresultset = false) {
        $ret = array();
        foreach ($result as $res) {
            if ($res['active_c']=='Active') {
                if (!isset($res['date_field_c']) && isset($res['rrapt_admin_cstm__date_field_c'])) $res['date_field_c'] = $res['rrapt_admin_cstm__date_field_c'];
                $startTime = $res['start_time_c'];
                $endTime = $res['end_time_c'];
                $slots = array();
                $started = $nomore = false;
                foreach ($this->times as $time) {
                    if ($time==$startTime) $started = true;
                    if ($started && !$nomore) {
                        $slots['transfer_'.strtolower($time)] = $this->isSlotAvailable($res['date_field_c'], $time, $res['transfer_'.strtolower($time).'_c'], 'Transfer', $fullresultset);
                        $slots['mortgage_'.strtolower($time)] = $this->isSlotAvailable($res['date_field_c'], $time, $res['mortgage_'.strtolower($time).'_c'], 'Mortgage', $fullresultset);
                    }
                    if ($time==$endTime) $nomore = true;
                }
                $ret[] = array(
                                'date_field_c' => $res['date_field_c'],
                                'active' => true,
                                'start_time' => $startTime,
                                'start_db' => $this->timeToDbTime($startTime),
                                'end_time' => $endTime,
                                'end_db' => $this->timeToDbTime($endTime),
                                'slots' => $slots,
                            );
            } else {
                $ret[] = array('active' => false);
            }
        }
        if (empty($ret)) $ret[] = array('active' => false);
        return $ret;
    }
    
    private function isSlotAvailable($date, $time, $maxSlots, $product, $fullresultset = false) {
        $db = DBManagerFactory::getInstance();
        $fields = 'Calendar.id';
        $joins = '';
        if ($fullresultset) {
            $fields = "Calendar.id, Calendar.name, Calendar_cstm.product_c, Calendar_cstm.date_field_c, Calendar_cstm.disposition_c, CONCAT(users1.first_name,' ',users1.last_name) AS assigned_user_name, CONCAT(users3.first_name,' ',users3.last_name) AS users_rrapt_calendar_3_name";
            $joins = "LEFT JOIN users users1 ON (users1.deleted=0 AND users1.id=Calendar.assigned_user_id) ";
            $joins .= "LEFT JOIN users_rrapt_calendar_3_c ON (users_rrapt_calendar_3_c.deleted=0 AND users_rrapt_calendar_3_c.users_rrapt_calendar_3rrapt_calendar_idb=Calendar.id) LEFT JOIN users users3 ON (users3.deleted=0 AND users1.id=users_rrapt_calendar_3_c.users_rrapt_calendar_3users_ida) ";
        }
        $res = array();
        $q = $db->query("SELECT ".$fields." FROM rrapt_calendar Calendar INNER JOIN rrapt_calendar_cstm Calendar_cstm ON (Calendar_cstm.id_c=Calendar.id) ".$joins." WHERE Calendar.deleted=0 AND Calendar_cstm.date_field_c='".$db->quote($date." ".$this->timeToDbTime($time, $date))."' AND Calendar_cstm.product_c='".$product."'");
        while ($row = $db->fetchByAssoc($q)) {
            $res[] = $row;
        }
        if ($fullresultset) {
            while (count($res)<$maxSlots) {
                $dt = SugarDateTime::createFromFormat('Y-m-d gA', $date." ".$time, new DateTimeZone($GLOBALS['current_user']->getPreference('timezone')));
                $res[] = array(
                    'id' => 'free_'.md5(rand()),
                    'name' => '',
                    'product_c' => $product,
                    'date_field_c' => $dt->asDb(),
                    'disposition_c' => 'free',
                    'assigned_user_name' => '',
                    'users_rrapt_calendar_3_name' => '',
                );
            }
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
        $dt = SugarDateTime::createFromFormat("Y-m-d H:i:s", $date . ' ' . $mapping[strtoupper($time)].":00:00", new DateTimeZone($GLOBALS['current_user']->getPreference('timezone')));
        $db = $dt->asDb();
        $db = explode(' ', $db);
        return $db[1];
    }
    
    private function nextTime($time) {
        $time = strtoupper($time);
        $found = false;
        foreach ($this->times as $t) {
            if ($found) return $t;
            if ($t==$time) $found = true;
        }
        return $time;
    }
    
    private function toUserTimeInDBFormat($date) {
        $usertz = new DateTimeZone($GLOBALS['current_user']->getPreference('timezone'));
        $dt = SugarDateTime::createFromFormat("Y-m-d H:i:s", $date, new DateTimeZone("UTC"));
        if (!$dt) $GLOBALS['log']->fatal(var_export($date,true));
        $dt->setTimezone($usertz);
        return $dt->formatDateTime('datetimecombo', 'iso');
    }

}