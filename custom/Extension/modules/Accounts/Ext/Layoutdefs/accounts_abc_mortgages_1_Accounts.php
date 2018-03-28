<?php
 // created: 2018-03-16 08:51:29
$layout_defs["Accounts"]["subpanel_setup"]['accounts_abc_mortgages_1'] = array (
  'order' => 100,
  'module' => 'abc_Mortgages',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_ABC_MORTGAGES_1_FROM_ABC_MORTGAGES_TITLE',
  'get_subpanel_data' => 'accounts_abc_mortgages_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
