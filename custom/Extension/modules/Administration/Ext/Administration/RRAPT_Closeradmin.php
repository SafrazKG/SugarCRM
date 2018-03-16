<?php

$admin_option_defs = array();
$admin_option_defs['Administration']['RRAPT_Closeradmin'] = array(
    //Icon name. Available icons are located in ./themes/default/images
    'rraptadmin',
    //Link name label
    'Closer Availability Administration',
    //Link description label
    'Closer Availability Administration - Set Default Availability',
    //Link URL - For Sidecar modules
    'javascript:parent.SUGAR.App.router.navigate("#RRAPT_Closeradmin", {trigger: true});',
);

$admin_group_header[] = array(
    'Closer Availability Administration',
    '',
    false,
    $admin_option_defs,
    "Closer Availability Administration - Set Default Availability"
);