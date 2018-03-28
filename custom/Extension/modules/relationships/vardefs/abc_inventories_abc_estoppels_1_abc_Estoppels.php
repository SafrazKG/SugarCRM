<?php
// created: 2018-03-20 09:03:07
$dictionary["abc_Estoppels"]["fields"]["abc_inventories_abc_estoppels_1"] = array (
  'name' => 'abc_inventories_abc_estoppels_1',
  'type' => 'link',
  'relationship' => 'abc_inventories_abc_estoppels_1',
  'source' => 'non-db',
  'module' => 'abc_Inventories',
  'bean_name' => 'abc_Inventories',
  'vname' => 'LBL_ABC_INVENTORIES_ABC_ESTOPPELS_1_FROM_ABC_INVENTORIES_TITLE',
  'id_name' => 'abc_inventories_abc_estoppels_1abc_inventories_ida',
);
$dictionary["abc_Estoppels"]["fields"]["abc_inventories_abc_estoppels_1_name"] = array (
  'name' => 'abc_inventories_abc_estoppels_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_INVENTORIES_ABC_ESTOPPELS_1_FROM_ABC_INVENTORIES_TITLE',
  'save' => true,
  'id_name' => 'abc_inventories_abc_estoppels_1abc_inventories_ida',
  'link' => 'abc_inventories_abc_estoppels_1',
  'table' => 'abc_inventories',
  'module' => 'abc_Inventories',
  'rname' => 'name',
);
$dictionary["abc_Estoppels"]["fields"]["abc_inventories_abc_estoppels_1abc_inventories_ida"] = array (
  'name' => 'abc_inventories_abc_estoppels_1abc_inventories_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_INVENTORIES_ABC_ESTOPPELS_1_FROM_ABC_INVENTORIES_TITLE_ID',
  'id_name' => 'abc_inventories_abc_estoppels_1abc_inventories_ida',
  'link' => 'abc_inventories_abc_estoppels_1',
  'table' => 'abc_inventories',
  'module' => 'abc_Inventories',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
