<?php

$admin_option_defs = array();
$admin_option_defs['Administration']['INT_DeployHelper_Roles'] = array(
    //Icon name. Available icons are located in ./themes/default/images
    'int',
    //Link name label
    'Custom Roles Rebuild',
    //Link description label
    'Rebuild Custom Roles from custom/Extension/application/Ext/CustomRoles $customRoles array',
    //Link URL - For Sidecar modules
    'javascript:parent.INT_DEPLOY_HELPER.rebuildRoles();',
);

$admin_option_defs['Administration']['INT_DeployHelper_RequiredAccounts'] = array(
    'int',
    'Rebuild configs',
    'Rebuilds configs from custom/Extension/application/Ext/RequireAccounts',
    'javascript:parent.INT_DEPLOY_HELPER.restoreRequiredAccounts();',
);

$admin_option_defs['Administration']['INT_DeployHelper_CustomFields_Store'] = array(
    'int',
    'Store Custom Fields',
    'Store Custom Fields to filesystem',
    'javascript:parent.INT_DEPLOY_HELPER.storeCustomFields();',
);


$admin_option_defs['Administration']['INT_DeployHelper_CustomFields_Restore'] = array(
    'int',
    'Custom Fields Rebuild',
    'Rebuild Custom Fields from filesystem',
    'javascript:parent.INT_DEPLOY_HELPER.restoreCustomFields();',
);


$admin_option_defs['Administration']['INT_CustomFields_rpde'] = array(
    'int',
    'Store Reports, Dashboards, Process Definitions and Email templates',
    'Stores Reports, Dashboards, Process Definitions and Email templates to filesystem',
    'javascript:parent.INT_DEPLOY_HELPER.storeMiscData();',
);


$admin_option_defs['Administration']['INT_CustomFields_rpde_r'] = array(
    'int',
    'Restore Reports, Dashboards, Process Definitions and Email templates',
    'Restores Reports, Dashboards, Process Definitions and Email templates from filesystem',
    'javascript:parent.INT_DEPLOY_HELPER.restoreMiscData();',
);

$admin_group_header[] = array(
    'Intelestream Deploy Helper',
    '',
    false,
    $admin_option_defs,
    "Deploy helper tools makes easier to deploy changes from development to production server"
);