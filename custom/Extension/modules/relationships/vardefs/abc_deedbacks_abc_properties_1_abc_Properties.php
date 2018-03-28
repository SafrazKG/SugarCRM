<?php
// created: 2018-03-19 10:37:34
$dictionary["abc_Properties"]["fields"]["abc_deedbacks_abc_properties_1"] = array (
  'name' => 'abc_deedbacks_abc_properties_1',
  'type' => 'link',
  'relationship' => 'abc_deedbacks_abc_properties_1',
  'source' => 'non-db',
  'module' => 'abc_Deedbacks',
  'bean_name' => 'abc_Deedbacks',
  'vname' => 'LBL_ABC_DEEDBACKS_ABC_PROPERTIES_1_FROM_ABC_DEEDBACKS_TITLE',
  'id_name' => 'abc_deedbacks_abc_properties_1abc_deedbacks_ida',
);
$dictionary["abc_Properties"]["fields"]["abc_deedbacks_abc_properties_1_name"] = array (
  'name' => 'abc_deedbacks_abc_properties_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_DEEDBACKS_ABC_PROPERTIES_1_FROM_ABC_DEEDBACKS_TITLE',
  'save' => true,
  'id_name' => 'abc_deedbacks_abc_properties_1abc_deedbacks_ida',
  'link' => 'abc_deedbacks_abc_properties_1',
  'table' => 'abc_deedbacks',
  'module' => 'abc_Deedbacks',
  'rname' => 'name',
);
$dictionary["abc_Properties"]["fields"]["abc_deedbacks_abc_properties_1abc_deedbacks_ida"] = array (
  'name' => 'abc_deedbacks_abc_properties_1abc_deedbacks_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_DEEDBACKS_ABC_PROPERTIES_1_FROM_ABC_DEEDBACKS_TITLE_ID',
  'id_name' => 'abc_deedbacks_abc_properties_1abc_deedbacks_ida',
  'link' => 'abc_deedbacks_abc_properties_1',
  'table' => 'abc_deedbacks',
  'module' => 'abc_Deedbacks',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
