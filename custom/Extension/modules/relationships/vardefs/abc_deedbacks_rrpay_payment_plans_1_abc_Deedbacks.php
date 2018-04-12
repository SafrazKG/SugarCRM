<?php
// created: 2018-04-05 04:49:15
$dictionary["abc_Deedbacks"]["fields"]["abc_deedbacks_rrpay_payment_plans_1"] = array (
  'name' => 'abc_deedbacks_rrpay_payment_plans_1',
  'type' => 'link',
  'relationship' => 'abc_deedbacks_rrpay_payment_plans_1',
  'source' => 'non-db',
  'module' => 'RRPAY_Payment_Plans',
  'bean_name' => 'RRPAY_Payment_Plans',
  'vname' => 'LBL_ABC_DEEDBACKS_RRPAY_PAYMENT_PLANS_1_FROM_RRPAY_PAYMENT_PLANS_TITLE',
  'id_name' => 'abc_deedbacks_rrpay_payment_plans_1rrpay_payment_plans_idb',
);
$dictionary["abc_Deedbacks"]["fields"]["abc_deedbacks_rrpay_payment_plans_1_name"] = array (
  'name' => 'abc_deedbacks_rrpay_payment_plans_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_DEEDBACKS_RRPAY_PAYMENT_PLANS_1_FROM_RRPAY_PAYMENT_PLANS_TITLE',
  'save' => true,
  'id_name' => 'abc_deedbacks_rrpay_payment_plans_1rrpay_payment_plans_idb',
  'link' => 'abc_deedbacks_rrpay_payment_plans_1',
  'table' => 'rrpay_payment_plans',
  'module' => 'RRPAY_Payment_Plans',
  'rname' => 'name',
);
$dictionary["abc_Deedbacks"]["fields"]["abc_deedbacks_rrpay_payment_plans_1rrpay_payment_plans_idb"] = array (
  'name' => 'abc_deedbacks_rrpay_payment_plans_1rrpay_payment_plans_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_DEEDBACKS_RRPAY_PAYMENT_PLANS_1_FROM_RRPAY_PAYMENT_PLANS_TITLE_ID',
  'id_name' => 'abc_deedbacks_rrpay_payment_plans_1rrpay_payment_plans_idb',
  'link' => 'abc_deedbacks_rrpay_payment_plans_1',
  'table' => 'rrpay_payment_plans',
  'module' => 'RRPAY_Payment_Plans',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
