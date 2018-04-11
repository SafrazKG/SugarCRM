<?php
// created: 2018-04-10 10:07:07
$dictionary["RRPAY_Payment_Plans"]["fields"]["accounts_rrpay_payment_plans_1"] = array (
  'name' => 'accounts_rrpay_payment_plans_1',
  'type' => 'link',
  'relationship' => 'accounts_rrpay_payment_plans_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_RRPAY_PAYMENT_PLANS_1_FROM_RRPAY_PAYMENT_PLANS_TITLE',
  'id_name' => 'accounts_rrpay_payment_plans_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["RRPAY_Payment_Plans"]["fields"]["accounts_rrpay_payment_plans_1_name"] = array (
  'name' => 'accounts_rrpay_payment_plans_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_RRPAY_PAYMENT_PLANS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_rrpay_payment_plans_1accounts_ida',
  'link' => 'accounts_rrpay_payment_plans_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["RRPAY_Payment_Plans"]["fields"]["accounts_rrpay_payment_plans_1accounts_ida"] = array (
  'name' => 'accounts_rrpay_payment_plans_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_RRPAY_PAYMENT_PLANS_1_FROM_RRPAY_PAYMENT_PLANS_TITLE_ID',
  'id_name' => 'accounts_rrpay_payment_plans_1accounts_ida',
  'link' => 'accounts_rrpay_payment_plans_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
