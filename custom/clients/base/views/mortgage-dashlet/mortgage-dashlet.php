<?php
$viewdefs['base']['view']['mortgage-dashlet'] = array(
    'dashlets' => array(
        array(
            'label'       => 'Mortgage info',
            'description' => 'Mortgage info Dashlet. Shows current Mortgage state and related data.',
            'config'      => array(),
            'preview'     => array(
            ),
            'filter'      => array(
                'module' => array(
                    'abc_Mortgages'
                ),
                'view'   => array(
                    'record'
                )
            )
        )
    )
);
