<?php
// created: 2018-04-10 11:47:49
$dictionary["RRRC_Requested_Checks"]["fields"]["abc_properties_rrrc_requested_checks_1"] = array (
  'name' => 'abc_properties_rrrc_requested_checks_1',
  'type' => 'link',
  'relationship' => 'abc_properties_rrrc_requested_checks_1',
  'source' => 'non-db',
  'module' => 'abc_Properties',
  'bean_name' => 'abc_Properties',
  'side' => 'right',
  'vname' => 'LBL_ABC_PROPERTIES_RRRC_REQUESTED_CHECKS_1_FROM_RRRC_REQUESTED_CHECKS_TITLE',
  'id_name' => 'abc_properties_rrrc_requested_checks_1abc_properties_ida',
  'link-type' => 'one',
);
$dictionary["RRRC_Requested_Checks"]["fields"]["abc_properties_rrrc_requested_checks_1_name"] = array (
  'name' => 'abc_properties_rrrc_requested_checks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_PROPERTIES_RRRC_REQUESTED_CHECKS_1_FROM_ABC_PROPERTIES_TITLE',
  'save' => true,
  'id_name' => 'abc_properties_rrrc_requested_checks_1abc_properties_ida',
  'link' => 'abc_properties_rrrc_requested_checks_1',
  'table' => 'abc_properties',
  'module' => 'abc_Properties',
  'rname' => 'name',
);
$dictionary["RRRC_Requested_Checks"]["fields"]["abc_properties_rrrc_requested_checks_1abc_properties_ida"] = array (
  'name' => 'abc_properties_rrrc_requested_checks_1abc_properties_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_PROPERTIES_RRRC_REQUESTED_CHECKS_1_FROM_RRRC_REQUESTED_CHECKS_TITLE_ID',
  'id_name' => 'abc_properties_rrrc_requested_checks_1abc_properties_ida',
  'link' => 'abc_properties_rrrc_requested_checks_1',
  'table' => 'abc_properties',
  'module' => 'abc_Properties',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
