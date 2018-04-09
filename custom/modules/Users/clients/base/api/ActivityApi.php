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
        return array();
    }
    
    public function checkNotifications($api, $args) {
        $admin = BeanFactory::newBean('RRAPT_Admin');
        $ret = array();
        $db = DBManagerFactory::getInstance();
        if ($admin->hasRole('calendar_admin')) {
            $q = $db->query("SELECT * FROM rrapt_calendar Calendar INNER JOIN rrapt_calendar_cstm Calendar_cstm ON (Calendar_cstm.id_c=Calendar.id) WHERE Calendar.deleted=0");
        }
        return $ret;
    }

}