<?php
 // created: 2018-04-10 11:46:55
$layout_defs["Accounts"]["subpanel_setup"]['accounts_rrrc_requested_checks_1'] = array (
  'order' => 100,
  'module' => 'RRRC_Requested_Checks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_RRRC_REQUESTED_CHECKS_1_FROM_RRRC_REQUESTED_CHECKS_TITLE',
  'get_subpanel_data' => 'accounts_rrrc_requested_checks_1',
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
