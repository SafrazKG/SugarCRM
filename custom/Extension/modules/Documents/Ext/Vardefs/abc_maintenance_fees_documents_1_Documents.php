<?php
// created: 2018-03-20 07:46:29
$dictionary["Document"]["fields"]["abc_maintenance_fees_documents_1"] = array (
  'name' => 'abc_maintenance_fees_documents_1',
  'type' => 'link',
  'relationship' => 'abc_maintenance_fees_documents_1',
  'source' => 'non-db',
  'module' => 'abc_Maintenance_Fees',
  'bean_name' => 'abc_Maintenance_Fees',
  'side' => 'right',
  'vname' => 'LBL_ABC_MAINTENANCE_FEES_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'id_name' => 'abc_maintenance_fees_documents_1abc_maintenance_fees_ida',
  'link-type' => 'one',
);
$dictionary["Document"]["fields"]["abc_maintenance_fees_documents_1_name"] = array (
  'name' => 'abc_maintenance_fees_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_MAINTENANCE_FEES_DOCUMENTS_1_FROM_ABC_MAINTENANCE_FEES_TITLE',
  'save' => true,
  'id_name' => 'abc_maintenance_fees_documents_1abc_maintenance_fees_ida',
  'link' => 'abc_maintenance_fees_documents_1',
  'table' => 'abc_maintenance_fees',
  'module' => 'abc_Maintenance_Fees',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["abc_maintenance_fees_documents_1abc_maintenance_fees_ida"] = array (
  'name' => 'abc_maintenance_fees_documents_1abc_maintenance_fees_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_MAINTENANCE_FEES_DOCUMENTS_1_FROM_DOCUMENTS_TITLE_ID',
  'id_name' => 'abc_maintenance_fees_documents_1abc_maintenance_fees_ida',
  'link' => 'abc_maintenance_fees_documents_1',
  'table' => 'abc_maintenance_fees',
  'module' => 'abc_Maintenance_Fees',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
