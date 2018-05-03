<?php
 // created: 2018-05-02 10:49:19
$layout_defs["abc_Transfers"]["subpanel_setup"]['abc_transfers_asd_payments_1'] = array (
  'order' => 100,
  'module' => 'asd_Payments',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC_TRANSFERS_ASD_PAYMENTS_1_FROM_ASD_PAYMENTS_TITLE',
  'get_subpanel_data' => 'abc_transfers_asd_payments_1',
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
