<?php
// created: 2018-04-20 10:17:41
$dictionary["INTWS_WorkStreams"]["fields"]["abc_deedbacks_intws_workstreams_1"] = array (
  'name' => 'abc_deedbacks_intws_workstreams_1',
  'type' => 'link',
  'relationship' => 'abc_deedbacks_intws_workstreams_1',
  'source' => 'non-db',
  'module' => 'abc_Deedbacks',
  'bean_name' => 'abc_Deedbacks',
  'side' => 'right',
  'vname' => 'LBL_ABC_DEEDBACKS_INTWS_WORKSTREAMS_1_FROM_INTWS_WORKSTREAMS_TITLE',
  'id_name' => 'abc_deedbacks_intws_workstreams_1abc_deedbacks_ida',
  'link-type' => 'one',
);
$dictionary["INTWS_WorkStreams"]["fields"]["abc_deedbacks_intws_workstreams_1_name"] = array (
  'name' => 'abc_deedbacks_intws_workstreams_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_DEEDBACKS_INTWS_WORKSTREAMS_1_FROM_ABC_DEEDBACKS_TITLE',
  'save' => true,
  'id_name' => 'abc_deedbacks_intws_workstreams_1abc_deedbacks_ida',
  'link' => 'abc_deedbacks_intws_workstreams_1',
  'table' => 'abc_deedbacks',
  'module' => 'abc_Deedbacks',
  'rname' => 'name',
);
$dictionary["INTWS_WorkStreams"]["fields"]["abc_deedbacks_intws_workstreams_1abc_deedbacks_ida"] = array (
  'name' => 'abc_deedbacks_intws_workstreams_1abc_deedbacks_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_DEEDBACKS_INTWS_WORKSTREAMS_1_FROM_INTWS_WORKSTREAMS_TITLE_ID',
  'id_name' => 'abc_deedbacks_intws_workstreams_1abc_deedbacks_ida',
  'link' => 'abc_deedbacks_intws_workstreams_1',
  'table' => 'abc_deedbacks',
  'module' => 'abc_Deedbacks',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
