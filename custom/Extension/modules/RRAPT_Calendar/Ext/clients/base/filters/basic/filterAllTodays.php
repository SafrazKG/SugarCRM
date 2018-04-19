<?php

$viewdefs['RRAPT_Calendar']['base']['filter']['basic']['filters'][] = array(
    'id' => 'filterAllTodays',
    'name' => 'LBL_FILTER_TODAYS',
    'filter_definition' => array(
        array(
            'date_field_c' => array(
                '$dateRange' => 'today',
            ),
        ),
    ),
    'editable' => false,
    'is_template' => false,
);