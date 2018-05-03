<?php
 // created: 2018-05-01 14:39:13
$dictionary['RRPAY_Payment_Plans']['fields']['amount_c']['labelValue']='Invoice';
$dictionary['RRPAY_Payment_Plans']['fields']['amount_c']['formula']='rollupSum($rrpay_payment_plans_asd_payments_1,"amount_c")';
$dictionary['RRPAY_Payment_Plans']['fields']['amount_c']['enforced']='false';
$dictionary['RRPAY_Payment_Plans']['fields']['amount_c']['dependency']='';
$dictionary['RRPAY_Payment_Plans']['fields']['amount_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>