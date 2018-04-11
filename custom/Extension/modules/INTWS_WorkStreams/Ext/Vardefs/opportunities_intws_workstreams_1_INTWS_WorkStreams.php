<?php
// created: 2017-11-23 13:33:02
$dictionary["INTWS_WorkStreams"]["fields"]["opportunities_intws_workstreams_1"] = array (
  'name' => 'opportunities_intws_workstreams_1',
  'type' => 'link',
  'relationship' => 'opportunities_intws_workstreams_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_INTWS_WORKSTREAMS_1_FROM_INTWS_WORKSTREAMS_TITLE',
  'id_name' => 'opportunities_intws_workstreams_1opportunities_ida',
  'link-type' => 'one',
);
$dictionary["INTWS_WorkStreams"]["fields"]["opportunities_intws_workstreams_1_name"] = array (
  'name' => 'opportunities_intws_workstreams_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_INTWS_WORKSTREAMS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_intws_workstreams_1opportunities_ida',
  'link' => 'opportunities_intws_workstreams_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["INTWS_WorkStreams"]["fields"]["opportunities_intws_workstreams_1opportunities_ida"] = array (
  'name' => 'opportunities_intws_workstreams_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_INTWS_WORKSTREAMS_1_FROM_INTWS_WORKSTREAMS_TITLE_ID',
  'id_name' => 'opportunities_intws_workstreams_1opportunities_ida',
  'link' => 'opportunities_intws_workstreams_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
