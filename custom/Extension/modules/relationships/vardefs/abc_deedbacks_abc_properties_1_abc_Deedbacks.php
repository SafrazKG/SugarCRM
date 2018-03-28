<?php
// created: 2018-03-19 10:37:34
$dictionary["abc_Deedbacks"]["fields"]["abc_deedbacks_abc_properties_1"] = array (
  'name' => 'abc_deedbacks_abc_properties_1',
  'type' => 'link',
  'relationship' => 'abc_deedbacks_abc_properties_1',
  'source' => 'non-db',
  'module' => 'abc_Properties',
  'bean_name' => 'abc_Properties',
  'vname' => 'LBL_ABC_DEEDBACKS_ABC_PROPERTIES_1_FROM_ABC_PROPERTIES_TITLE',
  'id_name' => 'abc_deedbacks_abc_properties_1abc_properties_idb',
);
$dictionary["abc_Deedbacks"]["fields"]["abc_deedbacks_abc_properties_1_name"] = array (
  'name' => 'abc_deedbacks_abc_properties_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_DEEDBACKS_ABC_PROPERTIES_1_FROM_ABC_PROPERTIES_TITLE',
  'save' => true,
  'id_name' => 'abc_deedbacks_abc_properties_1abc_properties_idb',
  'link' => 'abc_deedbacks_abc_properties_1',
  'table' => 'abc_properties',
  'module' => 'abc_Properties',
  'rname' => 'name',
);
$dictionary["abc_Deedbacks"]["fields"]["abc_deedbacks_abc_properties_1abc_properties_idb"] = array (
  'name' => 'abc_deedbacks_abc_properties_1abc_properties_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_DEEDBACKS_ABC_PROPERTIES_1_FROM_ABC_PROPERTIES_TITLE_ID',
  'id_name' => 'abc_deedbacks_abc_properties_1abc_properties_idb',
  'link' => 'abc_deedbacks_abc_properties_1',
  'table' => 'abc_properties',
  'module' => 'abc_Properties',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
