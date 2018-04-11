<?php
 // created: 2018-04-10 05:57:08
$dictionary['RRPAY_Payment_Plans']['fields']['unpaid_amount_c']['duplicate_merge_dom_value']=0;
$dictionary['RRPAY_Payment_Plans']['fields']['unpaid_amount_c']['labelValue']='Unpaid Amount';
$dictionary['RRPAY_Payment_Plans']['fields']['unpaid_amount_c']['calculated']='true';
$dictionary['RRPAY_Payment_Plans']['fields']['unpaid_amount_c']['formula']='subtract($amount_c,$amount_paid_c)';
$dictionary['RRPAY_Payment_Plans']['fields']['unpaid_amount_c']['enforced']='true';
$dictionary['RRPAY_Payment_Plans']['fields']['unpaid_amount_c']['dependency']='';
$dictionary['RRPAY_Payment_Plans']['fields']['unpaid_amount_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>