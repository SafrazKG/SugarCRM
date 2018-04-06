<?php
// created: 2018-04-05 04:49:15
$dictionary["RRPAY_Payment_Plans"]["fields"]["abc_deedbacks_rrpay_payment_plans_1"] = array (
  'name' => 'abc_deedbacks_rrpay_payment_plans_1',
  'type' => 'link',
  'relationship' => 'abc_deedbacks_rrpay_payment_plans_1',
  'source' => 'non-db',
  'module' => 'abc_Deedbacks',
  'bean_name' => 'abc_Deedbacks',
  'vname' => 'LBL_ABC_DEEDBACKS_RRPAY_PAYMENT_PLANS_1_FROM_ABC_DEEDBACKS_TITLE',
  'id_name' => 'abc_deedbacks_rrpay_payment_plans_1abc_deedbacks_ida',
);
$dictionary["RRPAY_Payment_Plans"]["fields"]["abc_deedbacks_rrpay_payment_plans_1_name"] = array (
  'name' => 'abc_deedbacks_rrpay_payment_plans_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_DEEDBACKS_RRPAY_PAYMENT_PLANS_1_FROM_ABC_DEEDBACKS_TITLE',
  'save' => true,
  'id_name' => 'abc_deedbacks_rrpay_payment_plans_1abc_deedbacks_ida',
  'link' => 'abc_deedbacks_rrpay_payment_plans_1',
  'table' => 'abc_deedbacks',
  'module' => 'abc_Deedbacks',
  'rname' => 'name',
);
$dictionary["RRPAY_Payment_Plans"]["fields"]["abc_deedbacks_rrpay_payment_plans_1abc_deedbacks_ida"] = array (
  'name' => 'abc_deedbacks_rrpay_payment_plans_1abc_deedbacks_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_DEEDBACKS_RRPAY_PAYMENT_PLANS_1_FROM_ABC_DEEDBACKS_TITLE_ID',
  'id_name' => 'abc_deedbacks_rrpay_payment_plans_1abc_deedbacks_ida',
  'link' => 'abc_deedbacks_rrpay_payment_plans_1',
  'table' => 'abc_deedbacks',
  'module' => 'abc_Deedbacks',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
