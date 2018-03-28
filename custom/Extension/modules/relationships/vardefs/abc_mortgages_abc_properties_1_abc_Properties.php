<?php
// created: 2018-03-16 08:52:32
$dictionary["abc_Properties"]["fields"]["abc_mortgages_abc_properties_1"] = array (
  'name' => 'abc_mortgages_abc_properties_1',
  'type' => 'link',
  'relationship' => 'abc_mortgages_abc_properties_1',
  'source' => 'non-db',
  'module' => 'abc_Mortgages',
  'bean_name' => 'abc_Mortgages',
  'vname' => 'LBL_ABC_MORTGAGES_ABC_PROPERTIES_1_FROM_ABC_MORTGAGES_TITLE',
  'id_name' => 'abc_mortgages_abc_properties_1abc_mortgages_ida',
);
$dictionary["abc_Properties"]["fields"]["abc_mortgages_abc_properties_1_name"] = array (
  'name' => 'abc_mortgages_abc_properties_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_MORTGAGES_ABC_PROPERTIES_1_FROM_ABC_MORTGAGES_TITLE',
  'save' => true,
  'id_name' => 'abc_mortgages_abc_properties_1abc_mortgages_ida',
  'link' => 'abc_mortgages_abc_properties_1',
  'table' => 'abc_mortgages',
  'module' => 'abc_Mortgages',
  'rname' => 'name',
);
$dictionary["abc_Properties"]["fields"]["abc_mortgages_abc_properties_1abc_mortgages_ida"] = array (
  'name' => 'abc_mortgages_abc_properties_1abc_mortgages_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_MORTGAGES_ABC_PROPERTIES_1_FROM_ABC_MORTGAGES_TITLE_ID',
  'id_name' => 'abc_mortgages_abc_properties_1abc_mortgages_ida',
  'link' => 'abc_mortgages_abc_properties_1',
  'table' => 'abc_mortgages',
  'module' => 'abc_Mortgages',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
