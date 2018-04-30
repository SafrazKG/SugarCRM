<?php

   $dependencies['RRAPT_Calendar']['not_editable_records'] = array(
        'hooks' => array("all"),
        'trigger' => 'true', 
        'triggerFields' => array('disposition_c'), 
        'onload' => true,
        'actions' => array(
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'name',
                    'value' => 'not(isInList($disposition_c, createList("Set", "Confirmed")))' 
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'description',
                    'value' => 'not(isInList($disposition_c, createList("Set", "Confirmed")))' 
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'disposition_c',
                    'value' => 'not(isInList($disposition_c, createList("Set", "Confirmed")))' 
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'product_c',
                    'value' => 'not(isInList($disposition_c, createList("Set", "Confirmed")))' 
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'leads_rrapt_calendar_1_name',
                    'value' => 'not(isInList($disposition_c, createList("Set", "Confirmed")))' 
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'users_rrapt_calendar_1_name',
                    'value' => 'not(isInList($disposition_c, createList("Set", "Confirmed")))' 
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'users_rrapt_calendar_3_name',
                    'value' => 'not(isInList($disposition_c, createList("Set", "Confirmed")))' 
                ),
            ),
        ),
    );