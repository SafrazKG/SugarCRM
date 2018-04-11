<?php
// created: 2018-04-10 09:13:15
$dictionary["abc_Transfers"]["fields"]["rrcom_commissions_abc_transfers_1"] = array (
  'name' => 'rrcom_commissions_abc_transfers_1',
  'type' => 'link',
  'relationship' => 'rrcom_commissions_abc_transfers_1',
  'source' => 'non-db',
  'module' => 'RRCOM_Commissions',
  'bean_name' => 'RRCOM_Commissions',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_TRANSFERS_1_FROM_RRCOM_COMMISSIONS_TITLE',
  'id_name' => 'rrcom_commissions_abc_transfers_1rrcom_commissions_ida',
);
$dictionary["abc_Transfers"]["fields"]["rrcom_commissions_abc_transfers_1_name"] = array (
  'name' => 'rrcom_commissions_abc_transfers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_TRANSFERS_1_FROM_RRCOM_COMMISSIONS_TITLE',
  'save' => true,
  'id_name' => 'rrcom_commissions_abc_transfers_1rrcom_commissions_ida',
  'link' => 'rrcom_commissions_abc_transfers_1',
  'table' => 'rrcom_commissions',
  'module' => 'RRCOM_Commissions',
  'rname' => 'name',
);
$dictionary["abc_Transfers"]["fields"]["rrcom_commissions_abc_transfers_1rrcom_commissions_ida"] = array (
  'name' => 'rrcom_commissions_abc_transfers_1rrcom_commissions_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_TRANSFERS_1_FROM_RRCOM_COMMISSIONS_TITLE_ID',
  'id_name' => 'rrcom_commissions_abc_transfers_1rrcom_commissions_ida',
  'link' => 'rrcom_commissions_abc_transfers_1',
  'table' => 'rrcom_commissions',
  'module' => 'RRCOM_Commissions',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);