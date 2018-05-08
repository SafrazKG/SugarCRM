<?php
// created: 2018-05-07 10:40:20
$viewdefs['Notes']['base']['view']['subpanel-for-abc_mortgages-abc_mortgages_notes_1'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_LIST_SUBJECT',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'type_rr_c',
          'label' => 'LBL_TYPE_RR',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'label' => 'LBL_LIST_DATE_ENTERED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_entered',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);