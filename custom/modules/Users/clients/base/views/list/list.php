<?php
$viewdefs['Users'] = 
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
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '30',
              ),
              1 => 
              array (
                'name' => 'user_name',
                'label' => 'LBL_USER_NAME',
                'sortable' => true,
                'width' => '5',
                'default' => true,
                'enabled' => true,
              ),
              2 => 
              array (
                'name' => 'title',
                'label' => 'LBL_TITLE',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '15',
              ),
              3 => 
              array (
                'name' => 'department',
                'label' => 'LBL_DEPARTMENT',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '15',
              ),
              4 => 
              array (
                'name' => 'email',
                'label' => 'LBL_EMAIL',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '30',
              ),
              5 => 
              array (
                'name' => 'phone_work',
                'label' => 'LBL_OFFICE_PHONE',
                'default' => true,
                'enabled' => true,
                'sortable' => true,
                'width' => '25',
              ),
              6 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '10',
              ),
              7 => 
              array (
                'name' => 'crm_access_c',
                'label' => 'LBL_CRM_ACCESS',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'is_admin',
                'label' => 'LBL_IS_ADMIN',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
                'width' => '10',
              ),
              9 => 
              array (
                'name' => 'is_group',
                'label' => 'LBL_GROUP_USER',
                'enabled' => true,
                'width' => '10',
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);