<?php
// created: 2018-03-16 12:57:39
$dictionary["abc_Properties"]["fields"]["abc_transfers_abc_properties_1"] = array (
  'name' => 'abc_transfers_abc_properties_1',
  'type' => 'link',
  'relationship' => 'abc_transfers_abc_properties_1',
  'source' => 'non-db',
  'module' => 'abc_Transfers',
  'bean_name' => 'abc_Transfers',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_PROPERTIES_1_FROM_ABC_TRANSFERS_TITLE',
  'id_name' => 'abc_transfers_abc_properties_1abc_transfers_ida',
);
$dictionary["abc_Properties"]["fields"]["abc_transfers_abc_properties_1_name"] = array (
  'name' => 'abc_transfers_abc_properties_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_PROPERTIES_1_FROM_ABC_TRANSFERS_TITLE',
  'save' => true,
  'id_name' => 'abc_transfers_abc_properties_1abc_transfers_ida',
  'link' => 'abc_transfers_abc_properties_1',
  'table' => 'abc_transfers',
  'module' => 'abc_Transfers',
  'rname' => 'name',
);
$dictionary["abc_Properties"]["fields"]["abc_transfers_abc_properties_1abc_transfers_ida"] = array (
  'name' => 'abc_transfers_abc_properties_1abc_transfers_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_PROPERTIES_1_FROM_ABC_TRANSFERS_TITLE_ID',
  'id_name' => 'abc_transfers_abc_properties_1abc_transfers_ida',
  'link' => 'abc_transfers_abc_properties_1',
  'table' => 'abc_transfers',
  'module' => 'abc_Transfers',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
