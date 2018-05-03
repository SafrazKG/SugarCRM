<?php
// created: 2018-05-03 04:46:46
$dictionary["asd_Payments"]["fields"]["accounts_asd_payments_1"] = array (
  'name' => 'accounts_asd_payments_1',
  'type' => 'link',
  'relationship' => 'accounts_asd_payments_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_ASD_PAYMENTS_1_FROM_ASD_PAYMENTS_TITLE',
  'id_name' => 'accounts_asd_payments_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["asd_Payments"]["fields"]["accounts_asd_payments_1_name"] = array (
  'name' => 'accounts_asd_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ASD_PAYMENTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_asd_payments_1accounts_ida',
  'link' => 'accounts_asd_payments_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["asd_Payments"]["fields"]["accounts_asd_payments_1accounts_ida"] = array (
  'name' => 'accounts_asd_payments_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ASD_PAYMENTS_1_FROM_ASD_PAYMENTS_TITLE_ID',
  'id_name' => 'accounts_asd_payments_1accounts_ida',
  'link' => 'accounts_asd_payments_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
