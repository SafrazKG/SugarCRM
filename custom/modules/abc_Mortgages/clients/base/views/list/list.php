<?php
$module_name = 'abc_Mortgages';
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
                'name' => 'mortgage_status_c',
                'label' => 'LBL_MORTGAGE_STATUS',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              3 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'start_date_c',
                'label' => 'LBL_START_DATE',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'est_date_c',
                'label' => 'LBL_EST_DATE',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'trf_date_c',
                'label' => 'LBL_TRF_DATE',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'doc_date_c',
                'label' => 'LBL_DOC_DATE',
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
