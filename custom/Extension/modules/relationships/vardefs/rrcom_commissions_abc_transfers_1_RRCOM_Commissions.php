<?php
// created: 2018-04-10 09:13:15
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_abc_transfers_1"] = array (
  'name' => 'rrcom_commissions_abc_transfers_1',
  'type' => 'link',
  'relationship' => 'rrcom_commissions_abc_transfers_1',
  'source' => 'non-db',
  'module' => 'abc_Transfers',
  'bean_name' => 'abc_Transfers',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_TRANSFERS_1_FROM_ABC_TRANSFERS_TITLE',
  'id_name' => 'rrcom_commissions_abc_transfers_1abc_transfers_idb',
);
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_abc_transfers_1_name"] = array (
  'name' => 'rrcom_commissions_abc_transfers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_TRANSFERS_1_FROM_ABC_TRANSFERS_TITLE',
  'save' => true,
  'id_name' => 'rrcom_commissions_abc_transfers_1abc_transfers_idb',
  'link' => 'rrcom_commissions_abc_transfers_1',
  'table' => 'abc_transfers',
  'module' => 'abc_Transfers',
  'rname' => 'name',
);
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_abc_transfers_1abc_transfers_idb"] = array (
  'name' => 'rrcom_commissions_abc_transfers_1abc_transfers_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_TRANSFERS_1_FROM_ABC_TRANSFERS_TITLE_ID',
  'id_name' => 'rrcom_commissions_abc_transfers_1abc_transfers_idb',
  'link' => 'rrcom_commissions_abc_transfers_1',
  'table' => 'abc_transfers',
  'module' => 'abc_Transfers',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
