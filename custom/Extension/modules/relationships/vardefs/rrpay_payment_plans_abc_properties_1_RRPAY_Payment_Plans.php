<?php
// created: 2018-04-04 05:08:57
$dictionary["RRPAY_Payment_Plans"]["fields"]["rrpay_payment_plans_abc_properties_1"] = array (
  'name' => 'rrpay_payment_plans_abc_properties_1',
  'type' => 'link',
  'relationship' => 'rrpay_payment_plans_abc_properties_1',
  'source' => 'non-db',
  'module' => 'abc_Properties',
  'bean_name' => 'abc_Properties',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_PROPERTIES_1_FROM_ABC_PROPERTIES_TITLE',
  'id_name' => 'rrpay_payment_plans_abc_properties_1abc_properties_idb',
);
$dictionary["RRPAY_Payment_Plans"]["fields"]["rrpay_payment_plans_abc_properties_1_name"] = array (
  'name' => 'rrpay_payment_plans_abc_properties_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_PROPERTIES_1_FROM_ABC_PROPERTIES_TITLE',
  'save' => true,
  'id_name' => 'rrpay_payment_plans_abc_properties_1abc_properties_idb',
  'link' => 'rrpay_payment_plans_abc_properties_1',
  'table' => 'abc_properties',
  'module' => 'abc_Properties',
  'rname' => 'name',
);
$dictionary["RRPAY_Payment_Plans"]["fields"]["rrpay_payment_plans_abc_properties_1abc_properties_idb"] = array (
  'name' => 'rrpay_payment_plans_abc_properties_1abc_properties_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_PROPERTIES_1_FROM_ABC_PROPERTIES_TITLE_ID',
  'id_name' => 'rrpay_payment_plans_abc_properties_1abc_properties_idb',
  'link' => 'rrpay_payment_plans_abc_properties_1',
  'table' => 'abc_properties',
  'module' => 'abc_Properties',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
