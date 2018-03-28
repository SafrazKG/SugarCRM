<?php
 // created: 2018-03-16 13:30:25
$layout_defs["abc_Transfers"]["subpanel_setup"]['abc_transfers_abc_maintenance_fees_1'] = array (
  'order' => 100,
  'module' => 'abc_Maintenance_Fees',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC_TRANSFERS_ABC_MAINTENANCE_FEES_1_FROM_ABC_MAINTENANCE_FEES_TITLE',
  'get_subpanel_data' => 'abc_transfers_abc_maintenance_fees_1',
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
