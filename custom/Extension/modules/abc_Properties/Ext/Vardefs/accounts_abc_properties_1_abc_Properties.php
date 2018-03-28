<?php
// created: 2018-03-16 12:49:59
$dictionary["abc_Properties"]["fields"]["accounts_abc_properties_1"] = array (
  'name' => 'accounts_abc_properties_1',
  'type' => 'link',
  'relationship' => 'accounts_abc_properties_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_ABC_PROPERTIES_1_FROM_ABC_PROPERTIES_TITLE',
  'id_name' => 'accounts_abc_properties_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["abc_Properties"]["fields"]["accounts_abc_properties_1_name"] = array (
  'name' => 'accounts_abc_properties_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ABC_PROPERTIES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_abc_properties_1accounts_ida',
  'link' => 'accounts_abc_properties_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["abc_Properties"]["fields"]["accounts_abc_properties_1accounts_ida"] = array (
  'name' => 'accounts_abc_properties_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ABC_PROPERTIES_1_FROM_ABC_PROPERTIES_TITLE_ID',
  'id_name' => 'accounts_abc_properties_1accounts_ida',
  'link' => 'accounts_abc_properties_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
