<?php

$customRoles['calendar_admin'] = array(
    'name' => 'Calendar Admin', 
    'description' => 'Calendar Admin', 
    'modules' => array(
        'RRAPT_Calendar' => array(
            'access' => 'enabled', // enabled/disabled
            'admin' => 'normal', // normal/admin/developer/admin_developer
            'delete' => 'all', // all/owner/none
            'edit' => 'all', // all/owner/none
            'export' => 'none', // all/owner/none
            'import' => 'none', // all/owner/none
            'list' => 'all', // all/owner/none
            'massupdate' => 'none', // all/none
            'view' => 'all', // all/owner/none
        ),
    ),
);
 