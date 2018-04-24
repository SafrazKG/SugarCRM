<?php
 // created: 2018-04-20 09:25:31
$layout_defs["abc_Transfers"]["subpanel_setup"]['abc_transfers_intws_workstreams_1'] = array (
  'order' => 100,
  'module' => 'INTWS_WorkStreams',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC_TRANSFERS_INTWS_WORKSTREAMS_1_FROM_INTWS_WORKSTREAMS_TITLE',
  'get_subpanel_data' => 'abc_transfers_intws_workstreams_1',
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
