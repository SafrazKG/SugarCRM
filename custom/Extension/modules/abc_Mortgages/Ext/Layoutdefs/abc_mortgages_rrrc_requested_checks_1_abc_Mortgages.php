<?php
 // created: 2018-04-10 11:47:23
$layout_defs["abc_Mortgages"]["subpanel_setup"]['abc_mortgages_rrrc_requested_checks_1'] = array (
  'order' => 100,
  'module' => 'RRRC_Requested_Checks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC_MORTGAGES_RRRC_REQUESTED_CHECKS_1_FROM_RRRC_REQUESTED_CHECKS_TITLE',
  'get_subpanel_data' => 'abc_mortgages_rrrc_requested_checks_1',
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
