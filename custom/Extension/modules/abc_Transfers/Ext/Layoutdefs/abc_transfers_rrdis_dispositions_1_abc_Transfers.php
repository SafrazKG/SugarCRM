<?php
 // created: 2018-04-27 10:31:46
$layout_defs["abc_Transfers"]["subpanel_setup"]['abc_transfers_rrdis_dispositions_1'] = array (
  'order' => 100,
  'module' => 'RRDIS_Dispositions',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC_TRANSFERS_RRDIS_DISPOSITIONS_1_FROM_RRDIS_DISPOSITIONS_TITLE',
  'get_subpanel_data' => 'abc_transfers_rrdis_dispositions_1',
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