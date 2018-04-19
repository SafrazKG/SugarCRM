<?php

$viewdefs['RRAPT_Calendar']['base']['filter']['basic']['filters'][] = array(
    'id' => 'filterAllTodaysConfirmed',
    'name' => 'LBL_FILTER_TODAYS_CONFIRMED',
    'filter_definition' => array(
        array(
            'date_field_c' => array(
                '$dateRange' => 'today',
            ),
        ),
        array(
            'disposition_c' => array(
                '$in' => array('Confirmed')
            )
        ),
    ),
    'editable' => false,
    'is_template' => false,
);