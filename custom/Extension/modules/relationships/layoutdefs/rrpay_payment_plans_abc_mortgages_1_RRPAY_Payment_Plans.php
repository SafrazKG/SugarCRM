<?php
 // created: 2018-04-18 14:37:23
$layout_defs["RRPAY_Payment_Plans"]["subpanel_setup"]['rrpay_payment_plans_abc_mortgages_1'] = array (
  'order' => 100,
  'module' => 'abc_Mortgages',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_MORTGAGES_1_FROM_ABC_MORTGAGES_TITLE',
  'get_subpanel_data' => 'rrpay_payment_plans_abc_mortgages_1',
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
