<?php
$viewdefs['base']['view']['transfer_dashlet'] = array(
    'dashlets' => array(
        array(
            'label'       => 'Transfer info',
            'description' => 'Transfer info Dashlet. Shows current Transfer state and related dates.',
            'config'      => array(),
            'preview'     => array(
            ),
            'filter'      => array(
                'module' => array(
                    'abc_Transfers'
                ),
                'view'   => array(
                    'record',
                    'roles/fronter/record'
                )
            )
        )
    )
);
