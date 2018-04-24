<?php
 // created: 2018-04-20 14:35:00
$dictionary['RRPAY_Payment_Plans']['fields']['name']['len']='255';
$dictionary['RRPAY_Payment_Plans']['fields']['name']['audited']=false;
$dictionary['RRPAY_Payment_Plans']['fields']['name']['massupdate']=false;
$dictionary['RRPAY_Payment_Plans']['fields']['name']['importable']='false';
$dictionary['RRPAY_Payment_Plans']['fields']['name']['duplicate_merge']='disabled';
$dictionary['RRPAY_Payment_Plans']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['RRPAY_Payment_Plans']['fields']['name']['merge_filter']='disabled';
$dictionary['RRPAY_Payment_Plans']['fields']['name']['unified_search']=false;
$dictionary['RRPAY_Payment_Plans']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['RRPAY_Payment_Plans']['fields']['name']['calculated']='true';
$dictionary['RRPAY_Payment_Plans']['fields']['name']['formula']='concat(related($rrpay_payment_plans_abc_transfers_1,"name"),related($rrpay_payment_plans_abc_mortgages_1,"name")," - Payment Plan")';
$dictionary['RRPAY_Payment_Plans']['fields']['name']['enforced']=true;

 ?>