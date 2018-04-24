<?php
// created: 2018-04-20 10:17:14
$dictionary["INTWS_WorkStreams"]["fields"]["abc_inventories_intws_workstreams_1"] = array (
  'name' => 'abc_inventories_intws_workstreams_1',
  'type' => 'link',
  'relationship' => 'abc_inventories_intws_workstreams_1',
  'source' => 'non-db',
  'module' => 'abc_Inventories',
  'bean_name' => 'abc_Inventories',
  'side' => 'right',
  'vname' => 'LBL_ABC_INVENTORIES_INTWS_WORKSTREAMS_1_FROM_INTWS_WORKSTREAMS_TITLE',
  'id_name' => 'abc_inventories_intws_workstreams_1abc_inventories_ida',
  'link-type' => 'one',
);
$dictionary["INTWS_WorkStreams"]["fields"]["abc_inventories_intws_workstreams_1_name"] = array (
  'name' => 'abc_inventories_intws_workstreams_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_INVENTORIES_INTWS_WORKSTREAMS_1_FROM_ABC_INVENTORIES_TITLE',
  'save' => true,
  'id_name' => 'abc_inventories_intws_workstreams_1abc_inventories_ida',
  'link' => 'abc_inventories_intws_workstreams_1',
  'table' => 'abc_inventories',
  'module' => 'abc_Inventories',
  'rname' => 'name',
);
$dictionary["INTWS_WorkStreams"]["fields"]["abc_inventories_intws_workstreams_1abc_inventories_ida"] = array (
  'name' => 'abc_inventories_intws_workstreams_1abc_inventories_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_INVENTORIES_INTWS_WORKSTREAMS_1_FROM_INTWS_WORKSTREAMS_TITLE_ID',
  'id_name' => 'abc_inventories_intws_workstreams_1abc_inventories_ida',
  'link' => 'abc_inventories_intws_workstreams_1',
  'table' => 'abc_inventories',
  'module' => 'abc_Inventories',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
