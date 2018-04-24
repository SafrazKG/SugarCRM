<?php
$viewdefs['Users'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'form' => 
      array (
        'headerTpl' => 'modules/Users/tpls/DetailViewHeader.tpl',
        'footerTpl' => 'modules/Users/tpls/DetailViewFooter.tpl',
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_USER_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EMPLOYEE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 'full_name',
          1 => 'user_name',
        ),
        1 => 
        array (
          0 => 'status',
          1 => 
          array (
            'name' => 'UserType',
            'customCode' => '{$USER_TYPE_READONLY}',
          ),
        ),
        2 => 
        array (
          0 => 'picture',
        ),
      ),
      'LBL_EMPLOYEE_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 'employee_status',
          1 => 'show_on_employees',
        ),
        1 => 
        array (
          0 => 'title',
          1 => 'phone_work',
        ),
        2 => 
        array (
          0 => 'department',
          1 => 'phone_mobile',
        ),
        3 => 
        array (
          0 => 'reports_to_name',
          1 => 'phone_other',
        ),
        4 => 
        array (
          0 => 'phone_home',
          1 => 'phone_fax',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'payroll_name_c',
            'label' => 'LBL_PAYROLL_NAME',
          ),
          1 => 
          array (
            'name' => 'fresh_c',
            'label' => 'LBL_FRESH',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'sstransfer_c',
            'label' => 'LBL_SSTRANSFER',
          ),
          1 => 
          array (
            'name' => 'ssmortgage_c',
            'label' => 'LBL_SSMORTGAGE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'crm_access_c',
            'label' => 'LBL_CRM_ACCESS',
          ),
          1 => 
          array (
            'name' => 'reservegroup_c',
            'label' => 'LBL_RESERVEGROUP',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'salesfusion_c',
            'label' => 'LBL_SALESFUSION',
          ),
          1 => 
          array (
            'name' => 'asterisk_c',
            'label' => 'LBL_ASTERISK',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'term_date_c',
            'label' => 'LBL_TERM_DATE',
          ),
          1 => '',
        ),
        10 => 
        array (
          0 => 'messenger_type',
          1 => 'messenger_id',
        ),
        11 => 
        array (
          0 => 'address_street',
          1 => 'address_city',
        ),
        12 => 
        array (
          0 => 'address_state',
          1 => 'address_postalcode',
        ),
        13 => 
        array (
          0 => 'address_country',
        ),
        14 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
