<?php
 // created: 2018-04-10 11:49:18
$layout_defs["abc_Transfers"]["subpanel_setup"]['abc_transfers_rrrc_requested_checks_1'] = array (
  'order' => 100,
  'module' => 'RRRC_Requested_Checks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC_TRANSFERS_RRRC_REQUESTED_CHECKS_1_FROM_RRRC_REQUESTED_CHECKS_TITLE',
  'get_subpanel_data' => 'abc_transfers_rrrc_requested_checks_1',
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
