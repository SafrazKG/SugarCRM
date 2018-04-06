<?php
// created: 2018-04-05 04:41:25
$dictionary["abc_Properties"]["fields"]["rrpay_payment_plans_abc_properties_2"] = array (
  'name' => 'rrpay_payment_plans_abc_properties_2',
  'type' => 'link',
  'relationship' => 'rrpay_payment_plans_abc_properties_2',
  'source' => 'non-db',
  'module' => 'RRPAY_Payment_Plans',
  'bean_name' => 'RRPAY_Payment_Plans',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_PROPERTIES_2_FROM_RRPAY_PAYMENT_PLANS_TITLE',
  'id_name' => 'rrpay_payment_plans_abc_properties_2rrpay_payment_plans_ida',
);
$dictionary["abc_Properties"]["fields"]["rrpay_payment_plans_abc_properties_2_name"] = array (
  'name' => 'rrpay_payment_plans_abc_properties_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_PROPERTIES_2_FROM_RRPAY_PAYMENT_PLANS_TITLE',
  'save' => true,
  'id_name' => 'rrpay_payment_plans_abc_properties_2rrpay_payment_plans_ida',
  'link' => 'rrpay_payment_plans_abc_properties_2',
  'table' => 'rrpay_payment_plans',
  'module' => 'RRPAY_Payment_Plans',
  'rname' => 'name',
);
$dictionary["abc_Properties"]["fields"]["rrpay_payment_plans_abc_properties_2rrpay_payment_plans_ida"] = array (
  'name' => 'rrpay_payment_plans_abc_properties_2rrpay_payment_plans_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_PROPERTIES_2_FROM_RRPAY_PAYMENT_PLANS_TITLE_ID',
  'id_name' => 'rrpay_payment_plans_abc_properties_2rrpay_payment_plans_ida',
  'link' => 'rrpay_payment_plans_abc_properties_2',
  'table' => 'rrpay_payment_plans',
  'module' => 'RRPAY_Payment_Plans',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
