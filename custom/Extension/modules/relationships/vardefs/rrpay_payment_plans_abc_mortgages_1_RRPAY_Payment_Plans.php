<?php
// created: 2018-04-04 05:08:19
$dictionary["RRPAY_Payment_Plans"]["fields"]["rrpay_payment_plans_abc_mortgages_1"] = array (
  'name' => 'rrpay_payment_plans_abc_mortgages_1',
  'type' => 'link',
  'relationship' => 'rrpay_payment_plans_abc_mortgages_1',
  'source' => 'non-db',
  'module' => 'abc_Mortgages',
  'bean_name' => 'abc_Mortgages',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_MORTGAGES_1_FROM_ABC_MORTGAGES_TITLE',
  'id_name' => 'rrpay_payment_plans_abc_mortgages_1abc_mortgages_idb',
);
$dictionary["RRPAY_Payment_Plans"]["fields"]["rrpay_payment_plans_abc_mortgages_1_name"] = array (
  'name' => 'rrpay_payment_plans_abc_mortgages_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_MORTGAGES_1_FROM_ABC_MORTGAGES_TITLE',
  'save' => true,
  'id_name' => 'rrpay_payment_plans_abc_mortgages_1abc_mortgages_idb',
  'link' => 'rrpay_payment_plans_abc_mortgages_1',
  'table' => 'abc_mortgages',
  'module' => 'abc_Mortgages',
  'rname' => 'name',
);
$dictionary["RRPAY_Payment_Plans"]["fields"]["rrpay_payment_plans_abc_mortgages_1abc_mortgages_idb"] = array (
  'name' => 'rrpay_payment_plans_abc_mortgages_1abc_mortgages_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_MORTGAGES_1_FROM_ABC_MORTGAGES_TITLE_ID',
  'id_name' => 'rrpay_payment_plans_abc_mortgages_1abc_mortgages_idb',
  'link' => 'rrpay_payment_plans_abc_mortgages_1',
  'table' => 'abc_mortgages',
  'module' => 'abc_Mortgages',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
