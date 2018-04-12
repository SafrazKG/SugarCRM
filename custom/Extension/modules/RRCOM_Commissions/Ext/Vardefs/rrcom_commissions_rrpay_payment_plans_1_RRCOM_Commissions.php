<?php
// created: 2018-04-10 09:14:01
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_rrpay_payment_plans_1"] = array (
  'name' => 'rrcom_commissions_rrpay_payment_plans_1',
  'type' => 'link',
  'relationship' => 'rrcom_commissions_rrpay_payment_plans_1',
  'source' => 'non-db',
  'module' => 'RRPAY_Payment_Plans',
  'bean_name' => 'RRPAY_Payment_Plans',
  'vname' => 'LBL_RRCOM_COMMISSIONS_RRPAY_PAYMENT_PLANS_1_FROM_RRPAY_PAYMENT_PLANS_TITLE',
  'id_name' => 'rrcom_commissions_rrpay_payment_plans_1rrpay_payment_plans_idb',
);
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_rrpay_payment_plans_1_name"] = array (
  'name' => 'rrcom_commissions_rrpay_payment_plans_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRCOM_COMMISSIONS_RRPAY_PAYMENT_PLANS_1_FROM_RRPAY_PAYMENT_PLANS_TITLE',
  'save' => true,
  'id_name' => 'rrcom_commissions_rrpay_payment_plans_1rrpay_payment_plans_idb',
  'link' => 'rrcom_commissions_rrpay_payment_plans_1',
  'table' => 'rrpay_payment_plans',
  'module' => 'RRPAY_Payment_Plans',
  'rname' => 'name',
);
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_rrpay_payment_plans_1rrpay_payment_plans_idb"] = array (
  'name' => 'rrcom_commissions_rrpay_payment_plans_1rrpay_payment_plans_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRCOM_COMMISSIONS_RRPAY_PAYMENT_PLANS_1_FROM_RRPAY_PAYMENT_PLANS_TITLE_ID',
  'id_name' => 'rrcom_commissions_rrpay_payment_plans_1rrpay_payment_plans_idb',
  'link' => 'rrcom_commissions_rrpay_payment_plans_1',
  'table' => 'rrpay_payment_plans',
  'module' => 'RRPAY_Payment_Plans',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
