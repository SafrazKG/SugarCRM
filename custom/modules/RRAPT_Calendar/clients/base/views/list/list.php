<?php
$module_name = 'RRAPT_Calendar';
$viewdefs[$module_name] = 
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
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'product_c',
                'label' => 'LBL_PRODUCT',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'date_field_c',
                'label' => 'LBL_START_DATE',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'leads_rrapt_calendar_1_name',
                'label' => 'LBL_LEADS_RRAPT_CALENDAR_1_FROM_LEADS_TITLE',
                'enabled' => true,
                'id' => 'LEADS_RRAPT_CALENDAR_1LEADS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'disposition_c',
                'label' => 'LBL_DISPOSITION',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              6 => 
              array (
                'name' => 'users_rrapt_calendar_3_name',
                'label' => 'LBL_USERS_RRAPT_CALENDAR_3_FROM_USERS_TITLE',
                'enabled' => true,
                'id' => 'USERS_RRAPT_CALENDAR_3USERS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'users_rrapt_calendar_1_name',
                'label' => 'LBL_USERS_RRAPT_CALENDAR_1_FROM_USERS_TITLE',
                'enabled' => true,
                'id' => 'USERS_RRAPT_CALENDAR_1USERS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
