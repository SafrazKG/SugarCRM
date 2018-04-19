<?php
$module_name = 'INTDB_Dashboards';

$viewdefs[$module_name]['base']['view']['config-headerpane'] = array (
    'template' => 'headerpane',
    'buttons' => array (
        array (
            'name' => 'close',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'events' => array (
                'click' => 'settings:close',
            ),
            'css_class' => 'btn-invisible btn-link',
        ),
        array (
            'name' => 'save_button',
            'type' => 'button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'primary' => true,
            'events' => array (
                'click' => 'settings:save',
            ),
        ),
        array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
        ),
    ),
);
