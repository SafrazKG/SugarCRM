<?php
// created: 2018-03-16 13:33:01
$dictionary["abc_Transfers"]["fields"]["abc_transfers_abc_estoppels_1"] = array (
  'name' => 'abc_transfers_abc_estoppels_1',
  'type' => 'link',
  'relationship' => 'abc_transfers_abc_estoppels_1',
  'source' => 'non-db',
  'module' => 'abc_Estoppels',
  'bean_name' => 'abc_Estoppels',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_ESTOPPELS_1_FROM_ABC_ESTOPPELS_TITLE',
  'id_name' => 'abc_transfers_abc_estoppels_1abc_estoppels_idb',
);
$dictionary["abc_Transfers"]["fields"]["abc_transfers_abc_estoppels_1_name"] = array (
  'name' => 'abc_transfers_abc_estoppels_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_ESTOPPELS_1_FROM_ABC_ESTOPPELS_TITLE',
  'save' => true,
  'id_name' => 'abc_transfers_abc_estoppels_1abc_estoppels_idb',
  'link' => 'abc_transfers_abc_estoppels_1',
  'table' => 'abc_estoppels',
  'module' => 'abc_Estoppels',
  'rname' => 'name',
);
$dictionary["abc_Transfers"]["fields"]["abc_transfers_abc_estoppels_1abc_estoppels_idb"] = array (
  'name' => 'abc_transfers_abc_estoppels_1abc_estoppels_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_ESTOPPELS_1_FROM_ABC_ESTOPPELS_TITLE_ID',
  'id_name' => 'abc_transfers_abc_estoppels_1abc_estoppels_idb',
  'link' => 'abc_transfers_abc_estoppels_1',
  'table' => 'abc_estoppels',
  'module' => 'abc_Estoppels',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
