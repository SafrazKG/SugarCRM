<?php
 // created: 2018-04-05 04:52:21
$layout_defs["abc_Transfers"]["subpanel_setup"]['abc_transfers_rrpay_payment_plans_1'] = array (
  'order' => 100,
  'module' => 'RRPAY_Payment_Plans',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC_TRANSFERS_RRPAY_PAYMENT_PLANS_1_FROM_RRPAY_PAYMENT_PLANS_TITLE',
  'get_subpanel_data' => 'abc_transfers_rrpay_payment_plans_1',
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