<?php
 // created: 2018-04-04 05:07:51
$layout_defs["RRPAY_Payment_Plans"]["subpanel_setup"]['rrpay_payment_plans_asd_payments_1'] = array (
  'order' => 100,
  'module' => 'asd_Payments',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RRPAY_PAYMENT_PLANS_ASD_PAYMENTS_1_FROM_ASD_PAYMENTS_TITLE',
  'get_subpanel_data' => 'rrpay_payment_plans_asd_payments_1',
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
