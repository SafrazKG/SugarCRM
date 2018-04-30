<?php
// created: 2018-04-27 09:22:44
$dictionary["abc_Deedbacks"]["fields"]["abc_transfers_abc_deedbacks_1"] = array (
  'name' => 'abc_transfers_abc_deedbacks_1',
  'type' => 'link',
  'relationship' => 'abc_transfers_abc_deedbacks_1',
  'source' => 'non-db',
  'module' => 'abc_Transfers',
  'bean_name' => 'abc_Transfers',
  'side' => 'right',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_DEEDBACKS_1_FROM_ABC_DEEDBACKS_TITLE',
  'id_name' => 'abc_transfers_abc_deedbacks_1abc_transfers_ida',
  'link-type' => 'one',
);
$dictionary["abc_Deedbacks"]["fields"]["abc_transfers_abc_deedbacks_1_name"] = array (
  'name' => 'abc_transfers_abc_deedbacks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_DEEDBACKS_1_FROM_ABC_TRANSFERS_TITLE',
  'save' => true,
  'id_name' => 'abc_transfers_abc_deedbacks_1abc_transfers_ida',
  'link' => 'abc_transfers_abc_deedbacks_1',
  'table' => 'abc_transfers',
  'module' => 'abc_Transfers',
  'rname' => 'name',
);
$dictionary["abc_Deedbacks"]["fields"]["abc_transfers_abc_deedbacks_1abc_transfers_ida"] = array (
  'name' => 'abc_transfers_abc_deedbacks_1abc_transfers_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_DEEDBACKS_1_FROM_ABC_DEEDBACKS_TITLE_ID',
  'id_name' => 'abc_transfers_abc_deedbacks_1abc_transfers_ida',
  'link' => 'abc_transfers_abc_deedbacks_1',
  'table' => 'abc_transfers',
  'module' => 'abc_Transfers',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
