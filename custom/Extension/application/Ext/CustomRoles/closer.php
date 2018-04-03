<?php

$customRoles['closer'] = array(
    'name' => 'Closer', 
    'description' => 'Closer users',
    'modules' => array(
        'RRAPT_Calendar' => array(
            'access' => 'enabled', // enabled/disabled
            'admin' => 'normal', // normal/admin/developer/admin_developer
            'delete' => 'none', // all/owner/none
            'edit' => 'owner', // all/owner/none
            'export' => 'none', // all/owner/none
            'import' => 'none', // all/owner/none
            'list' => 'owner', // all/owner/none
            'massupdate' => 'none', // all/none
            'view' => 'owner', // all/owner/none
            'fields' => array(
                'assigned_user_name' => 'readonly',
                'users_rrapt_calendar_1_name' => 'readonly',
                'users_rrapt_calendar_3_name' => 'readonly',
            ),
        ),
        'RRAPT_Admin' => array(
            'access' => 'disabled',
            'admin' => 'normal', // normal/admin/developer/admin_developer
            'delete' => 'none', // all/owner/none
            'edit' => 'none', // all/owner/none
            'export' => 'none', // all/owner/none
            'import' => 'none', // all/owner/none
            'list' => 'none', // all/owner/none
            'massupdate' => 'none', // all/none
            'view' => 'none', // all/owner/none
        )
    ),
);
 