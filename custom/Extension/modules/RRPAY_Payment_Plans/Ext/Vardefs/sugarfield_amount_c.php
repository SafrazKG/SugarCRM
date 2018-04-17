<?php
 // created: 2018-04-11 13:28:24
$dictionary['RRPAY_Payment_Plans']['fields']['amount_c']['duplicate_merge_dom_value']=0;
$dictionary['RRPAY_Payment_Plans']['fields']['amount_c']['labelValue']='Amount';
$dictionary['RRPAY_Payment_Plans']['fields']['amount_c']['calculated']='true';
$dictionary['RRPAY_Payment_Plans']['fields']['amount_c']['formula']='rollupSum($rrpay_payment_plans_asd_payments_1,"amount_c")';
$dictionary['RRPAY_Payment_Plans']['fields']['amount_c']['enforced']='true';
$dictionary['RRPAY_Payment_Plans']['fields']['amount_c']['dependency']='';
$dictionary['RRPAY_Payment_Plans']['fields']['amount_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>