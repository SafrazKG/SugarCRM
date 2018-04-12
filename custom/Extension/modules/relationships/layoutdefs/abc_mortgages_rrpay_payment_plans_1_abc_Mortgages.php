<?php
 // created: 2018-04-10 10:09:19
$layout_defs["abc_Mortgages"]["subpanel_setup"]['abc_mortgages_rrpay_payment_plans_1'] = array (
  'order' => 100,
  'module' => 'RRPAY_Payment_Plans',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC_MORTGAGES_RRPAY_PAYMENT_PLANS_1_FROM_RRPAY_PAYMENT_PLANS_TITLE',
  'get_subpanel_data' => 'abc_mortgages_rrpay_payment_plans_1',
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
