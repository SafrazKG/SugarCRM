<?php
$module_name = 'INTDB_Dashboards';

$viewdefs[$module_name]['base']['layout']['list'] = array(
    'components' => array(
        array(
            'view' => 'recordlist',
            'primary' => true,
        ),
        array(
            'view' => 'list-bottom',
        ),
    ),
);
