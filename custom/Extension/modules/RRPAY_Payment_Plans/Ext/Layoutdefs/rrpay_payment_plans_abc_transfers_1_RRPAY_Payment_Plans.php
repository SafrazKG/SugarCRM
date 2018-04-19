<?php
 // created: 2018-04-18 14:35:27
$layout_defs["RRPAY_Payment_Plans"]["subpanel_setup"]['rrpay_payment_plans_abc_transfers_1'] = array (
  'order' => 100,
  'module' => 'abc_Transfers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_TRANSFERS_1_FROM_ABC_TRANSFERS_TITLE',
  'get_subpanel_data' => 'rrpay_payment_plans_abc_transfers_1',
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
