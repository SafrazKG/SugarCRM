<?php
// created: 2018-04-10 11:46:55
$dictionary["RRRC_Requested_Checks"]["fields"]["accounts_rrrc_requested_checks_1"] = array (
  'name' => 'accounts_rrrc_requested_checks_1',
  'type' => 'link',
  'relationship' => 'accounts_rrrc_requested_checks_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_RRRC_REQUESTED_CHECKS_1_FROM_RRRC_REQUESTED_CHECKS_TITLE',
  'id_name' => 'accounts_rrrc_requested_checks_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["RRRC_Requested_Checks"]["fields"]["accounts_rrrc_requested_checks_1_name"] = array (
  'name' => 'accounts_rrrc_requested_checks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_RRRC_REQUESTED_CHECKS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_rrrc_requested_checks_1accounts_ida',
  'link' => 'accounts_rrrc_requested_checks_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["RRRC_Requested_Checks"]["fields"]["accounts_rrrc_requested_checks_1accounts_ida"] = array (
  'name' => 'accounts_rrrc_requested_checks_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_RRRC_REQUESTED_CHECKS_1_FROM_RRRC_REQUESTED_CHECKS_TITLE_ID',
  'id_name' => 'accounts_rrrc_requested_checks_1accounts_ida',
  'link' => 'accounts_rrrc_requested_checks_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
