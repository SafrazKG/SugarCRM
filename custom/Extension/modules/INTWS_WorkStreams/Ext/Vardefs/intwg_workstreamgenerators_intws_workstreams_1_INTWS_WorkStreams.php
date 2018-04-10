<?php
// created: 2017-11-27 14:38:21
$dictionary["INTWS_WorkStreams"]["fields"]["intwg_workstreamgenerators_intws_workstreams_1"] = array (
  'name' => 'intwg_workstreamgenerators_intws_workstreams_1',
  'type' => 'link',
  'relationship' => 'intwg_workstreamgenerators_intws_workstreams_1',
  'source' => 'non-db',
  'module' => 'INTWG_WorkStreamGenerators',
  'bean_name' => 'INTWG_WorkStreamGenerators',
  'side' => 'right',
  'vname' => 'LBL_INTWG_WORKSTREAMGENERATORS_INTWS_WORKSTREAMS_1_FROM_INTWS_WORKSTREAMS_TITLE',
  'id_name' => 'intwg_workcb55erators_ida',
  'link-type' => 'one',
);
$dictionary["INTWS_WorkStreams"]["fields"]["intwg_workstreamgenerators_intws_workstreams_1_name"] = array (
  'name' => 'intwg_workstreamgenerators_intws_workstreams_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_INTWG_WORKSTREAMGENERATORS_INTWS_WORKSTREAMS_1_FROM_INTWG_WORKSTREAMGENERATORS_TITLE',
  'save' => true,
  'id_name' => 'intwg_workcb55erators_ida',
  'link' => 'intwg_workstreamgenerators_intws_workstreams_1',
  'table' => 'intwg_workstreamgenerators',
  'module' => 'INTWG_WorkStreamGenerators',
  'rname' => 'name',
);
$dictionary["INTWS_WorkStreams"]["fields"]["intwg_workcb55erators_ida"] = array (
  'name' => 'intwg_workcb55erators_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_INTWG_WORKSTREAMGENERATORS_INTWS_WORKSTREAMS_1_FROM_INTWS_WORKSTREAMS_TITLE_ID',
  'id_name' => 'intwg_workcb55erators_ida',
  'link' => 'intwg_workstreamgenerators_intws_workstreams_1',
  'table' => 'intwg_workstreamgenerators',
  'module' => 'INTWG_WorkStreamGenerators',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
