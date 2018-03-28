<?php
// created: 2018-03-16 13:32:39
$dictionary["abc_Transfers"]["fields"]["abc_transfers_abc_deedbacks_1"] = array (
  'name' => 'abc_transfers_abc_deedbacks_1',
  'type' => 'link',
  'relationship' => 'abc_transfers_abc_deedbacks_1',
  'source' => 'non-db',
  'module' => 'abc_Deedbacks',
  'bean_name' => 'abc_Deedbacks',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_DEEDBACKS_1_FROM_ABC_DEEDBACKS_TITLE',
  'id_name' => 'abc_transfers_abc_deedbacks_1abc_deedbacks_idb',
);
$dictionary["abc_Transfers"]["fields"]["abc_transfers_abc_deedbacks_1_name"] = array (
  'name' => 'abc_transfers_abc_deedbacks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_DEEDBACKS_1_FROM_ABC_DEEDBACKS_TITLE',
  'save' => true,
  'id_name' => 'abc_transfers_abc_deedbacks_1abc_deedbacks_idb',
  'link' => 'abc_transfers_abc_deedbacks_1',
  'table' => 'abc_deedbacks',
  'module' => 'abc_Deedbacks',
  'rname' => 'name',
);
$dictionary["abc_Transfers"]["fields"]["abc_transfers_abc_deedbacks_1abc_deedbacks_idb"] = array (
  'name' => 'abc_transfers_abc_deedbacks_1abc_deedbacks_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_TRANSFERS_ABC_DEEDBACKS_1_FROM_ABC_DEEDBACKS_TITLE_ID',
  'id_name' => 'abc_transfers_abc_deedbacks_1abc_deedbacks_idb',
  'link' => 'abc_transfers_abc_deedbacks_1',
  'table' => 'abc_deedbacks',
  'module' => 'abc_Deedbacks',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
