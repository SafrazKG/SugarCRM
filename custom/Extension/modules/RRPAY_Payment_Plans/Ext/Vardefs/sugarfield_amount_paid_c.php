<?php
 // created: 2018-04-11 13:26:49
$dictionary['RRPAY_Payment_Plans']['fields']['amount_paid_c']['duplicate_merge_dom_value']=0;
$dictionary['RRPAY_Payment_Plans']['fields']['amount_paid_c']['labelValue']='Amount Paid';
$dictionary['RRPAY_Payment_Plans']['fields']['amount_paid_c']['calculated']='true';
$dictionary['RRPAY_Payment_Plans']['fields']['amount_paid_c']['formula']='rollupConditionalSum($rrpay_payment_plans_asd_payments_1,"$amount_c","status_c","Paid")';
$dictionary['RRPAY_Payment_Plans']['fields']['amount_paid_c']['enforced']='true';
$dictionary['RRPAY_Payment_Plans']['fields']['amount_paid_c']['dependency']='';
$dictionary['RRPAY_Payment_Plans']['fields']['amount_paid_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>