<?php

$viewdefs['RRAPT_Calendar']['base']['filter']['basic']['filters'][] = array(
    'id' => 'filterAllTodaysUnconfirmed',
    'name' => 'LBL_FILTER_TODAYS_UNCONFIRMED',
    'filter_definition' => array(
        array(
            'date_field_c' => array(
                '$dateRange' => 'today',
            ),
        ),
        array(
            'disposition_c' => array(
                '$not_in' => array('Confirmed')
            )
        ),
    ),
    'editable' => false,
    'is_template' => false,
);