<?php
$viewdefs['RRAPT_Closeradmin'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
                array(
                    'enabled' => true,
                    'default' => true,
                    'name' => 'day_field',
                    'vname' => 'Day',
                    'label' => 'Day',
                    'type' => 'text',
                    'readonly' => true,
                    'len' => 100,
                    'sortable' => false,
                ),
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
      ),
    ),
  ),
);
