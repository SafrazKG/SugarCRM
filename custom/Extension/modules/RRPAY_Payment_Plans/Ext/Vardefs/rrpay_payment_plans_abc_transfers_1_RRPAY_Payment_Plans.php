<?php
// created: 2018-04-04 05:08:36
$dictionary["RRPAY_Payment_Plans"]["fields"]["rrpay_payment_plans_abc_transfers_1"] = array (
  'name' => 'rrpay_payment_plans_abc_transfers_1',
  'type' => 'link',
  'relationship' => 'rrpay_payment_plans_abc_transfers_1',
  'source' => 'non-db',
  'module' => 'abc_Transfers',
  'bean_name' => 'abc_Transfers',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_TRANSFERS_1_FROM_ABC_TRANSFERS_TITLE',
  'id_name' => 'rrpay_payment_plans_abc_transfers_1abc_transfers_idb',
);
$dictionary["RRPAY_Payment_Plans"]["fields"]["rrpay_payment_plans_abc_transfers_1_name"] = array (
  'name' => 'rrpay_payment_plans_abc_transfers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_TRANSFERS_1_FROM_ABC_TRANSFERS_TITLE',
  'save' => true,
  'id_name' => 'rrpay_payment_plans_abc_transfers_1abc_transfers_idb',
  'link' => 'rrpay_payment_plans_abc_transfers_1',
  'table' => 'abc_transfers',
  'module' => 'abc_Transfers',
  'rname' => 'name',
);
$dictionary["RRPAY_Payment_Plans"]["fields"]["rrpay_payment_plans_abc_transfers_1abc_transfers_idb"] = array (
  'name' => 'rrpay_payment_plans_abc_transfers_1abc_transfers_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_TRANSFERS_1_FROM_ABC_TRANSFERS_TITLE_ID',
  'id_name' => 'rrpay_payment_plans_abc_transfers_1abc_transfers_idb',
  'link' => 'rrpay_payment_plans_abc_transfers_1',
  'table' => 'abc_transfers',
  'module' => 'abc_Transfers',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
