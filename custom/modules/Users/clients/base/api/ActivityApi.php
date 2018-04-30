<?php

class ActivityApi extends SugarApi {

    public function registerApiRest()
    {
        return array(
            'active' => array(
                'reqType' => 'GET',
                'path' => array('Users', 'setactive'),
                'pathVars' => array('module'),
                'method' => 'setActive',
            ),
            'notifications' => array(
                'reqType' => 'GET',
                'path' => array('Users', 'notifications'),
                'pathVars' => array('module'),
                'method' => 'checkNotifications',
            ),
       );
    }
    
    public function setActive($api, $args) {
        global $current_user;
        $db = DBManagerFactory::getInstance();
        $db->query("INSERT INTO users_cstm (id_c, last_activity_c) VALUES ('".$db->quote($current_user->id)."', ".time().") ON DUPLICATE KEY UPDATE last_activity_c=".time());
        $admin = BeanFactory::newBean('RRAPT_Admin');
        $ret = array();
        // return notifications for calendar admin
        if ($admin->hasRole('calendar_admin')) {
            $now = TimeDate::getInstance()->getNow();
            $min = $now->format('i') + 0;
            while ($min%5) {
                $now->sub(new DateInterval('PT1M'));
                $min = $now->format('i') + 0;
            }
            $hour = $now->format('G') + 0;
            $now->setTime($hour, $min);
            $now->add(new DateInterval('PT10M'));
            $forDb10 = $now->asDb();
            $now->add(new DateInterval('PT10M'));
            $forDb20 = $now->asDb();
            $q = $db->query("SELECT Calendar.name, Calendar.assigned_user_id, Calendar_cstm.date_field_c FROM rrapt_calendar Calendar INNER JOIN rrapt_calendar_cstm Calendar_cstm ON (Calendar_cstm.id_c=Calendar.id) LEFT JOIN users ON (users.deleted=0 AND users.id=Calendar.assigned_user_id) LEFT JOIN users_cstm ON (users_cstm.id_c=users.id) WHERE Calendar.deleted=0 AND Calendar_cstm.disposition_c IN ('Set', 'Confirmed') AND (date_field_c='".$db->quote($forDb10)."' OR date_field_c='".$db->quote($forDb20)."')");
            while ($row = $db->fetchByAssoc($q)) {
                if ($row['date_field_c']==$forDb20) {
                    if (!isUserActive($row)) {
                        $ret[] = array(
                                        'type' => 1,
                                        'date' => $row['date_field_c'],
                                        'inactive_user' => true,
                                        'name' => htmlspecialchars($row['name']),
                                       );
                    }
                } else {
                    $ret[] = array(
                                    'type' => 2,
                                    'date' => $row['date_field_c'],
                                    'inactive_user' => false,
                                    'name' => htmlspecialchars($row['name']),
                                   );
                }
            }
        }
        return $ret;
    }

}