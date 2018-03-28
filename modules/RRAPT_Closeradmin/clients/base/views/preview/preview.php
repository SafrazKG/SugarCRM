<?php


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$viewdefs['RRAPT_Closeradmin']['base']['view']['preview'] = array(
    'panels' => array(
        array(
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_HEADER',
            'header' => true,
            'fields' => array(
                array(
                    'name' => 'day_field',
                    'vname' => 'Day',
                    'label' => 'Day',
                    'type' => 'text',
                    'readonly' => true,
                    'len' => 100,
                    'sortable' => false,
                ),
            )
        ),
        array(
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => array(
                array(
                    'enabled' => true,
                    'default' => true,
                    'name' => 'transfer',
                    'vname' => 'Transfer Appointments per hour',
                    'label' => 'Transfer Appointments per hour',
                    'type' => 'int',
                    'sortable' => false,
                ),
                array(
                    'enabled' => true,
                    'default' => true,
                    'name' => 'mortgage',
                    'vname' => 'Mortgage Appointments per hour',
                    'label' => 'Mortgage Appointments per hour',
                    'type' => 'int',
                    'sortable' => false,
                ),
                array(
                    'enabled' => true,
                    'default' => true,
                    'name' => 'start_time',
                    'vname' => 'Start Time',
                    'label' => 'Start Time',
                    'type' => 'enum',
                    'options' => 'start_time_list',
                    'sortable' => false,
                ),
                array(
                    'enabled' => true,
                    'default' => true,
                    'name' => 'end_time',
                    'vname' => 'End Time',
                    'label' => 'End Time',
                    'type' => 'enum',
                    'options' => 'end_time_list',
                    'sortable' => false,
                ),
            ),
        ),
    ),
);
