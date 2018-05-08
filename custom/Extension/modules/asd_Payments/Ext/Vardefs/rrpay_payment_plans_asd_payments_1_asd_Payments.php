<?php
// created: 2018-05-07 10:21:42
$dictionary["asd_Payments"]["fields"]["rrpay_payment_plans_asd_payments_1"] = array (
  'name' => 'rrpay_payment_plans_asd_payments_1',
  'type' => 'link',
  'relationship' => 'rrpay_payment_plans_asd_payments_1',
  'source' => 'non-db',
  'module' => 'RRPAY_Payment_Plans',
  'bean_name' => 'RRPAY_Payment_Plans',
  'side' => 'right',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ASD_PAYMENTS_1_FROM_ASD_PAYMENTS_TITLE',
  'id_name' => 'rrpay_payment_plans_asd_payments_1rrpay_payment_plans_ida',
  'link-type' => 'one',
);
$dictionary["asd_Payments"]["fields"]["rrpay_payment_plans_asd_payments_1_name"] = array (
  'name' => 'rrpay_payment_plans_asd_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ASD_PAYMENTS_1_FROM_RRPAY_PAYMENT_PLANS_TITLE',
  'save' => true,
  'id_name' => 'rrpay_payment_plans_asd_payments_1rrpay_payment_plans_ida',
  'link' => 'rrpay_payment_plans_asd_payments_1',
  'table' => 'rrpay_payment_plans',
  'module' => 'RRPAY_Payment_Plans',
  'rname' => 'name',
);
$dictionary["asd_Payments"]["fields"]["rrpay_payment_plans_asd_payments_1rrpay_payment_plans_ida"] = array (
  'name' => 'rrpay_payment_plans_asd_payments_1rrpay_payment_plans_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ASD_PAYMENTS_1_FROM_ASD_PAYMENTS_TITLE_ID',
  'id_name' => 'rrpay_payment_plans_asd_payments_1rrpay_payment_plans_ida',
  'link' => 'rrpay_payment_plans_asd_payments_1',
  'table' => 'rrpay_payment_plans',
  'module' => 'RRPAY_Payment_Plans',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
