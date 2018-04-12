<?php
// created: 2018-04-10 11:00:17
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_accounts_1"] = array (
  'name' => 'rrcom_commissions_accounts_1',
  'type' => 'link',
  'relationship' => 'rrcom_commissions_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'rrcom_commissions_accounts_1accounts_idb',
);
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_accounts_1_name"] = array (
  'name' => 'rrcom_commissions_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'rrcom_commissions_accounts_1accounts_idb',
  'link' => 'rrcom_commissions_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_accounts_1accounts_idb"] = array (
  'name' => 'rrcom_commissions_accounts_1accounts_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'rrcom_commissions_accounts_1accounts_idb',
  'link' => 'rrcom_commissions_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
