<?php
// created: 2018-04-20 10:16:43
$dictionary["INTWS_WorkStreams"]["fields"]["abc_estoppels_intws_workstreams_1"] = array (
  'name' => 'abc_estoppels_intws_workstreams_1',
  'type' => 'link',
  'relationship' => 'abc_estoppels_intws_workstreams_1',
  'source' => 'non-db',
  'module' => 'abc_Estoppels',
  'bean_name' => 'abc_Estoppels',
  'side' => 'right',
  'vname' => 'LBL_ABC_ESTOPPELS_INTWS_WORKSTREAMS_1_FROM_INTWS_WORKSTREAMS_TITLE',
  'id_name' => 'abc_estoppels_intws_workstreams_1abc_estoppels_ida',
  'link-type' => 'one',
);
$dictionary["INTWS_WorkStreams"]["fields"]["abc_estoppels_intws_workstreams_1_name"] = array (
  'name' => 'abc_estoppels_intws_workstreams_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_ESTOPPELS_INTWS_WORKSTREAMS_1_FROM_ABC_ESTOPPELS_TITLE',
  'save' => true,
  'id_name' => 'abc_estoppels_intws_workstreams_1abc_estoppels_ida',
  'link' => 'abc_estoppels_intws_workstreams_1',
  'table' => 'abc_estoppels',
  'module' => 'abc_Estoppels',
  'rname' => 'name',
);
$dictionary["INTWS_WorkStreams"]["fields"]["abc_estoppels_intws_workstreams_1abc_estoppels_ida"] = array (
  'name' => 'abc_estoppels_intws_workstreams_1abc_estoppels_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_ESTOPPELS_INTWS_WORKSTREAMS_1_FROM_INTWS_WORKSTREAMS_TITLE_ID',
  'id_name' => 'abc_estoppels_intws_workstreams_1abc_estoppels_ida',
  'link' => 'abc_estoppels_intws_workstreams_1',
  'table' => 'abc_estoppels',
  'module' => 'abc_Estoppels',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
