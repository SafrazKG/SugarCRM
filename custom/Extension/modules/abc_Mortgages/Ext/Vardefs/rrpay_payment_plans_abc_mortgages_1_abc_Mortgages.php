<?php
// created: 2018-04-04 05:08:19
$dictionary["abc_Mortgages"]["fields"]["rrpay_payment_plans_abc_mortgages_1"] = array (
  'name' => 'rrpay_payment_plans_abc_mortgages_1',
  'type' => 'link',
  'relationship' => 'rrpay_payment_plans_abc_mortgages_1',
  'source' => 'non-db',
  'module' => 'RRPAY_Payment_Plans',
  'bean_name' => 'RRPAY_Payment_Plans',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_MORTGAGES_1_FROM_RRPAY_PAYMENT_PLANS_TITLE',
  'id_name' => 'rrpay_payment_plans_abc_mortgages_1rrpay_payment_plans_ida',
);
$dictionary["abc_Mortgages"]["fields"]["rrpay_payment_plans_abc_mortgages_1_name"] = array (
  'name' => 'rrpay_payment_plans_abc_mortgages_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_MORTGAGES_1_FROM_RRPAY_PAYMENT_PLANS_TITLE',
  'save' => true,
  'id_name' => 'rrpay_payment_plans_abc_mortgages_1rrpay_payment_plans_ida',
  'link' => 'rrpay_payment_plans_abc_mortgages_1',
  'table' => 'rrpay_payment_plans',
  'module' => 'RRPAY_Payment_Plans',
  'rname' => 'name',
);
$dictionary["abc_Mortgages"]["fields"]["rrpay_payment_plans_abc_mortgages_1rrpay_payment_plans_ida"] = array (
  'name' => 'rrpay_payment_plans_abc_mortgages_1rrpay_payment_plans_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRPAY_PAYMENT_PLANS_ABC_MORTGAGES_1_FROM_RRPAY_PAYMENT_PLANS_TITLE_ID',
  'id_name' => 'rrpay_payment_plans_abc_mortgages_1rrpay_payment_plans_ida',
  'link' => 'rrpay_payment_plans_abc_mortgages_1',
  'table' => 'rrpay_payment_plans',
  'module' => 'RRPAY_Payment_Plans',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
