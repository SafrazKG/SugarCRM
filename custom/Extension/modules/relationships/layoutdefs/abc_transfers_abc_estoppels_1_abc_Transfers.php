<?php
 // created: 2018-04-27 09:22:26
$layout_defs["abc_Transfers"]["subpanel_setup"]['abc_transfers_abc_estoppels_1'] = array (
  'order' => 100,
  'module' => 'abc_Estoppels',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC_TRANSFERS_ABC_ESTOPPELS_1_FROM_ABC_ESTOPPELS_TITLE',
  'get_subpanel_data' => 'abc_transfers_abc_estoppels_1',
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
