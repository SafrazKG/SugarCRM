<?php
// created: 2018-03-16 13:30:25
$dictionary["abc_Maintenance_Fees"]["fields"]["abc_transfers_abc_maintenance_fees_1"] = array (
  'name' => 'abc_transfers_abc_maintenance_fees_1',
  'type' => 'link',
  'relationship' => 'abc_transfers_abc_maintenance_fees_1',
  'source' => 'non-db',
  'module' => 'abc_Transfers',
  'bean_name' => 'abc_Transfers',
  'side' => 'right',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_MAINTENANCE_FEES_1_FROM_ABC_MAINTENANCE_FEES_TITLE',
  'id_name' => 'abc_transfers_abc_maintenance_fees_1abc_transfers_ida',
  'link-type' => 'one',
);
$dictionary["abc_Maintenance_Fees"]["fields"]["abc_transfers_abc_maintenance_fees_1_name"] = array (
  'name' => 'abc_transfers_abc_maintenance_fees_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_MAINTENANCE_FEES_1_FROM_ABC_TRANSFERS_TITLE',
  'save' => true,
  'id_name' => 'abc_transfers_abc_maintenance_fees_1abc_transfers_ida',
  'link' => 'abc_transfers_abc_maintenance_fees_1',
  'table' => 'abc_transfers',
  'module' => 'abc_Transfers',
  'rname' => 'name',
);
$dictionary["abc_Maintenance_Fees"]["fields"]["abc_transfers_abc_maintenance_fees_1abc_transfers_ida"] = array (
  'name' => 'abc_transfers_abc_maintenance_fees_1abc_transfers_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_MAINTENANCE_FEES_1_FROM_ABC_MAINTENANCE_FEES_TITLE_ID',
  'id_name' => 'abc_transfers_abc_maintenance_fees_1abc_transfers_ida',
  'link' => 'abc_transfers_abc_maintenance_fees_1',
  'table' => 'abc_transfers',
  'module' => 'abc_Transfers',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
