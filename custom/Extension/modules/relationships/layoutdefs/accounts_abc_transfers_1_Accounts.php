<?php
 // created: 2018-03-16 13:27:37
$layout_defs["Accounts"]["subpanel_setup"]['accounts_abc_transfers_1'] = array (
  'order' => 100,
  'module' => 'abc_Transfers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_ABC_TRANSFERS_1_FROM_ABC_TRANSFERS_TITLE',
  'get_subpanel_data' => 'accounts_abc_transfers_1',
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
