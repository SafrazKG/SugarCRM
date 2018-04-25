<?php
$module_name = 'abc_Estoppels';
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
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              2 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'status_c',
                'label' => 'LBL_STATUS',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'date_of_last_status_change_c',
                'label' => 'LBL_DATE_OF_LAST_STATUS_CHANGE',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'abc_transfers_abc_estoppels_1_name',
                'label' => 'LBL_ABC_TRANSFERS_ABC_ESTOPPELS_1_FROM_ABC_TRANSFERS_TITLE',
                'enabled' => true,
                'id' => 'ABC_TRANSFERS_ABC_ESTOPPELS_1ABC_TRANSFERS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'days_since_status_change_c',
                'label' => 'LBL_DAYS_SINCE_STATUS_CHANGE',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'usage_type_c',
                'label' => 'LBL_USAGE_TYPE',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
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
