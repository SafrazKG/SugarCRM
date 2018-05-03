<?php
$module_name = 'asd_Payments';
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
                'name' => 'accounts_asd_payments_1_name',
                'label' => 'LBL_ACCOUNTS_ASD_PAYMENTS_1_FROM_ACCOUNTS_TITLE',
                'enabled' => true,
                'id' => 'ACCOUNTS_ASD_PAYMENTS_1ACCOUNTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'abc_mortgages_asd_payments_1_name',
                'label' => 'LBL_ABC_MORTGAGES_ASD_PAYMENTS_1_FROM_ABC_MORTGAGES_TITLE',
                'enabled' => true,
                'id' => 'ABC_MORTGAGES_ASD_PAYMENTS_1ABC_MORTGAGES_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'abc_transfers_asd_payments_1_name',
                'label' => 'LBL_ABC_TRANSFERS_ASD_PAYMENTS_1_FROM_ABC_TRANSFERS_TITLE',
                'enabled' => true,
                'id' => 'ABC_TRANSFERS_ASD_PAYMENTS_1ABC_TRANSFERS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'payment_product_type_c',
                'label' => 'LBL_PAYMENT_PRODUCT_TYPE',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'payment_source_c',
                'label' => 'LBL_PAYMENT_SOURCE',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'date_entered',
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
