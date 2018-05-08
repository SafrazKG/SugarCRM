<?php
// created: 2018-05-07 10:38:04
$dictionary["Note"]["fields"]["abc_mortgages_notes_1"] = array (
  'name' => 'abc_mortgages_notes_1',
  'type' => 'link',
  'relationship' => 'abc_mortgages_notes_1',
  'source' => 'non-db',
  'module' => 'abc_Mortgages',
  'bean_name' => 'abc_Mortgages',
  'side' => 'right',
  'vname' => 'LBL_ABC_MORTGAGES_NOTES_1_FROM_NOTES_TITLE',
  'id_name' => 'abc_mortgages_notes_1abc_mortgages_ida',
  'link-type' => 'one',
);
$dictionary["Note"]["fields"]["abc_mortgages_notes_1_name"] = array (
  'name' => 'abc_mortgages_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_MORTGAGES_NOTES_1_FROM_ABC_MORTGAGES_TITLE',
  'save' => true,
  'id_name' => 'abc_mortgages_notes_1abc_mortgages_ida',
  'link' => 'abc_mortgages_notes_1',
  'table' => 'abc_mortgages',
  'module' => 'abc_Mortgages',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["abc_mortgages_notes_1abc_mortgages_ida"] = array (
  'name' => 'abc_mortgages_notes_1abc_mortgages_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_MORTGAGES_NOTES_1_FROM_NOTES_TITLE_ID',
  'id_name' => 'abc_mortgages_notes_1abc_mortgages_ida',
  'link' => 'abc_mortgages_notes_1',
  'table' => 'abc_mortgages',
  'module' => 'abc_Mortgages',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
