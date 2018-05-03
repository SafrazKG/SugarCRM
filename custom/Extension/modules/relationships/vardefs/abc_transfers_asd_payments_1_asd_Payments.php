<?php
// created: 2018-05-02 10:49:19
$dictionary["asd_Payments"]["fields"]["abc_transfers_asd_payments_1"] = array (
  'name' => 'abc_transfers_asd_payments_1',
  'type' => 'link',
  'relationship' => 'abc_transfers_asd_payments_1',
  'source' => 'non-db',
  'module' => 'abc_Transfers',
  'bean_name' => 'abc_Transfers',
  'side' => 'right',
  'vname' => 'LBL_ABC_TRANSFERS_ASD_PAYMENTS_1_FROM_ASD_PAYMENTS_TITLE',
  'id_name' => 'abc_transfers_asd_payments_1abc_transfers_ida',
  'link-type' => 'one',
);
$dictionary["asd_Payments"]["fields"]["abc_transfers_asd_payments_1_name"] = array (
  'name' => 'abc_transfers_asd_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_TRANSFERS_ASD_PAYMENTS_1_FROM_ABC_TRANSFERS_TITLE',
  'save' => true,
  'id_name' => 'abc_transfers_asd_payments_1abc_transfers_ida',
  'link' => 'abc_transfers_asd_payments_1',
  'table' => 'abc_transfers',
  'module' => 'abc_Transfers',
  'rname' => 'name',
);
$dictionary["asd_Payments"]["fields"]["abc_transfers_asd_payments_1abc_transfers_ida"] = array (
  'name' => 'abc_transfers_asd_payments_1abc_transfers_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_TRANSFERS_ASD_PAYMENTS_1_FROM_ASD_PAYMENTS_TITLE_ID',
  'id_name' => 'abc_transfers_asd_payments_1abc_transfers_ida',
  'link' => 'abc_transfers_asd_payments_1',
  'table' => 'abc_transfers',
  'module' => 'abc_Transfers',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
