<?php

   $dependencies['RRAPT_Calendar']['assigned_to_readonly'] = array(
        'hooks' => array("all"),
        'trigger' => 'true', 
        'onload' => true,
        'actions' => array(
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'assigned_user_name',
                    'value' => 'true' 
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'date_field_c',
                    'value' => 'true' 
                ),
            ),
        ),
    );