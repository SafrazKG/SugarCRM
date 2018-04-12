<?php
 // created: 2018-04-05 04:37:47
$layout_defs["RRPAY_Payment_Plans"]["subpanel_setup"]['rrpay_payment_plans_rrcom_commissions_1'] = array (
  'order' => 100,
  'module' => 'RRCOM_Commissions',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_RRPAY_PAYMENT_PLANS_RRCOM_COMMISSIONS_1_FROM_RRCOM_COMMISSIONS_TITLE',
  'get_subpanel_data' => 'rrpay_payment_plans_rrcom_commissions_1',
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
