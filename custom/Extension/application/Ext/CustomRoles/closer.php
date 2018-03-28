<?php

$customRoles['closer'] = array(
    'name' => 'Closer', 
    'description' => 'Closer users',
    'modules' => array(
        'RRAPT_Calendar' => array(
            'access' => 'enabled', // enabled/disabled
            'admin' => 'normal', // normal/admin/developer/admin_developer
            'delete' => 'owner', // all/owner/none
            'edit' => 'owner', // all/owner/none
            'export' => 'owner', // all/owner/none
            'import' => 'owner', // all/owner/none
            'list' => 'all', // all/owner/none
            'massupdate' => 'none', // all/none
            'view' => 'all', // all/owner/none
        ),
    ),
);
 