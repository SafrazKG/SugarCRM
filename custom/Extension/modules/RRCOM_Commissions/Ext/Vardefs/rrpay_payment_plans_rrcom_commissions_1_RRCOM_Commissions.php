<?php
// created: 2018-04-05 04:37:47
$dictionary["RRCOM_Commissions"]["fields"]["rrpay_payment_plans_rrcom_commissions_1"] = array (
  'name' => 'rrpay_payment_plans_rrcom_commissions_1',
  'type' => 'link',
  'relationship' => 'rrpay_payment_plans_rrcom_commissions_1',
  'source' => 'non-db',
  'module' => 'RRPAY_Payment_Plans',
  'bean_name' => 'RRPAY_Payment_Plans',
  'side' => 'right',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_RRCOM_COMMISSIONS_1_FROM_RRCOM_COMMISSIONS_TITLE',
  'id_name' => 'rrpay_payment_plans_rrcom_commissions_1rrpay_payment_plans_ida',
  'link-type' => 'one',
);
$dictionary["RRCOM_Commissions"]["fields"]["rrpay_payment_plans_rrcom_commissions_1_name"] = array (
  'name' => 'rrpay_payment_plans_rrcom_commissions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_RRCOM_COMMISSIONS_1_FROM_RRPAY_PAYMENT_PLANS_TITLE',
  'save' => true,
  'id_name' => 'rrpay_payment_plans_rrcom_commissions_1rrpay_payment_plans_ida',
  'link' => 'rrpay_payment_plans_rrcom_commissions_1',
  'table' => 'rrpay_payment_plans',
  'module' => 'RRPAY_Payment_Plans',
  'rname' => 'name',
);
$dictionary["RRCOM_Commissions"]["fields"]["rrpay_payment_plans_rrcom_commissions_1rrpay_payment_plans_ida"] = array (
  'name' => 'rrpay_payment_plans_rrcom_commissions_1rrpay_payment_plans_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_RRCOM_COMMISSIONS_1_FROM_RRCOM_COMMISSIONS_TITLE_ID',
  'id_name' => 'rrpay_payment_plans_rrcom_commissions_1rrpay_payment_plans_ida',
  'link' => 'rrpay_payment_plans_rrcom_commissions_1',
  'table' => 'rrpay_payment_plans',
  'module' => 'RRPAY_Payment_Plans',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
