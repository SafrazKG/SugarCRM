<?php
// created: 2018-03-16 13:32:17
$dictionary["abc_Transfers"]["fields"]["abc_transfers_abc_inventories_1"] = array (
  'name' => 'abc_transfers_abc_inventories_1',
  'type' => 'link',
  'relationship' => 'abc_transfers_abc_inventories_1',
  'source' => 'non-db',
  'module' => 'abc_Inventories',
  'bean_name' => 'abc_Inventories',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_INVENTORIES_1_FROM_ABC_INVENTORIES_TITLE',
  'id_name' => 'abc_transfers_abc_inventories_1abc_inventories_idb',
);
$dictionary["abc_Transfers"]["fields"]["abc_transfers_abc_inventories_1_name"] = array (
  'name' => 'abc_transfers_abc_inventories_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_INVENTORIES_1_FROM_ABC_INVENTORIES_TITLE',
  'save' => true,
  'id_name' => 'abc_transfers_abc_inventories_1abc_inventories_idb',
  'link' => 'abc_transfers_abc_inventories_1',
  'table' => 'abc_inventories',
  'module' => 'abc_Inventories',
  'rname' => 'name',
);
$dictionary["abc_Transfers"]["fields"]["abc_transfers_abc_inventories_1abc_inventories_idb"] = array (
  'name' => 'abc_transfers_abc_inventories_1abc_inventories_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_INVENTORIES_1_FROM_ABC_INVENTORIES_TITLE_ID',
  'id_name' => 'abc_transfers_abc_inventories_1abc_inventories_idb',
  'link' => 'abc_transfers_abc_inventories_1',
  'table' => 'abc_inventories',
  'module' => 'abc_Inventories',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
