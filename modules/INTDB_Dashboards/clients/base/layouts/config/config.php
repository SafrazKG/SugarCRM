<?php
$module_name = 'INTDB_Dashboards';
$viewdefs[$module_name]['base']['layout']['config'] = array (
    'components' => array (
        array (
            'layout' => array (
                'components' => array (
                    array (
                        'layout' => array (
                            'components' => array (
                                array (
                                    'view' => 'config-headerpane',
                                ),
                                array (
                                    'view' => 'config-content',
                                ),
                            ),
                            'type' => 'simple',
                            'name' => 'main-pane',
                            'span' => 8,
                        ),
                    ),
                    array (
                        'layout' => array (
                            'components' => array (
                                array(
                                    'view' => 'config-help-pane'
                                )
                            ),
                            'type' => 'simple',
                            'name' => 'side-pane',
                            'span' => 4,
                        ),
                    ),
                ),
                'type' => 'default',
                'name' => 'sidebar',
                'span' => 12,
            ),
        ),
    ),
    'type' => 'simple',
    'name' => 'base',
    'span' => 12,
);
