<?php
// created: 2018-04-20 10:19:02
$dictionary["INTWS_WorkStreams"]["fields"]["abc_mortgages_intws_workstreams_1"] = array (
  'name' => 'abc_mortgages_intws_workstreams_1',
  'type' => 'link',
  'relationship' => 'abc_mortgages_intws_workstreams_1',
  'source' => 'non-db',
  'module' => 'abc_Mortgages',
  'bean_name' => 'abc_Mortgages',
  'side' => 'right',
  'vname' => 'LBL_ABC_MORTGAGES_INTWS_WORKSTREAMS_1_FROM_INTWS_WORKSTREAMS_TITLE',
  'id_name' => 'abc_mortgages_intws_workstreams_1abc_mortgages_ida',
  'link-type' => 'one',
);
$dictionary["INTWS_WorkStreams"]["fields"]["abc_mortgages_intws_workstreams_1_name"] = array (
  'name' => 'abc_mortgages_intws_workstreams_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_MORTGAGES_INTWS_WORKSTREAMS_1_FROM_ABC_MORTGAGES_TITLE',
  'save' => true,
  'id_name' => 'abc_mortgages_intws_workstreams_1abc_mortgages_ida',
  'link' => 'abc_mortgages_intws_workstreams_1',
  'table' => 'abc_mortgages',
  'module' => 'abc_Mortgages',
  'rname' => 'name',
);
$dictionary["INTWS_WorkStreams"]["fields"]["abc_mortgages_intws_workstreams_1abc_mortgages_ida"] = array (
  'name' => 'abc_mortgages_intws_workstreams_1abc_mortgages_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_MORTGAGES_INTWS_WORKSTREAMS_1_FROM_INTWS_WORKSTREAMS_TITLE_ID',
  'id_name' => 'abc_mortgages_intws_workstreams_1abc_mortgages_ida',
  'link' => 'abc_mortgages_intws_workstreams_1',
  'table' => 'abc_mortgages',
  'module' => 'abc_Mortgages',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
