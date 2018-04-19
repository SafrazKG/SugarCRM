<?php

    $admin_option_defs = array();
    $admin_option_defs['Administration']['INTDB_Dashboards'] = array(
        //Icon name. Available icons are located in ./themes/default/images
        'intdbd',
        //Link name label
        'LBL_INTDB_NAME',
        //Link description label
        'LBL_INTDB_DESCRIPTION',
        //Link URL - For Sidecar modules
        'javascript:parent.SUGAR.App.router.navigate("#INTDB_Dashboards", {trigger: true});',
    );

    $admin_option_defs['Administration']['INTDB_Dashboards_Config'] = array (
        'Administration',
        'LBL_INTDB_CONFIG_NAME',
        'LBL_INTDB_CONFIG_DESCRIPTION',
        'javascript:parent.SUGAR.App.router.navigate("#INTDB_Dashboards/layout/config", {trigger: true});',
    );

    $admin_group_header[] = array(
        //Section header label
        'LBL_INTDB_ADMIN_HEADER',

        '',

        false,

        //Section links
        $admin_option_defs,

        //Section description label
        'LBL_INTDB_ADMIN_DESCRIPTION'
    );
