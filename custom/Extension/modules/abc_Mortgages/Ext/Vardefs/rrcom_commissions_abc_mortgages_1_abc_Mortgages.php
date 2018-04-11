<?php
// created: 2018-04-10 09:12:56
$dictionary["abc_Mortgages"]["fields"]["rrcom_commissions_abc_mortgages_1"] = array (
  'name' => 'rrcom_commissions_abc_mortgages_1',
  'type' => 'link',
  'relationship' => 'rrcom_commissions_abc_mortgages_1',
  'source' => 'non-db',
  'module' => 'RRCOM_Commissions',
  'bean_name' => 'RRCOM_Commissions',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_MORTGAGES_1_FROM_RRCOM_COMMISSIONS_TITLE',
  'id_name' => 'rrcom_commissions_abc_mortgages_1rrcom_commissions_ida',
);
$dictionary["abc_Mortgages"]["fields"]["rrcom_commissions_abc_mortgages_1_name"] = array (
  'name' => 'rrcom_commissions_abc_mortgages_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_MORTGAGES_1_FROM_RRCOM_COMMISSIONS_TITLE',
  'save' => true,
  'id_name' => 'rrcom_commissions_abc_mortgages_1rrcom_commissions_ida',
  'link' => 'rrcom_commissions_abc_mortgages_1',
  'table' => 'rrcom_commissions',
  'module' => 'RRCOM_Commissions',
  'rname' => 'name',
);
$dictionary["abc_Mortgages"]["fields"]["rrcom_commissions_abc_mortgages_1rrcom_commissions_ida"] = array (
  'name' => 'rrcom_commissions_abc_mortgages_1rrcom_commissions_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_MORTGAGES_1_FROM_RRCOM_COMMISSIONS_TITLE_ID',
  'id_name' => 'rrcom_commissions_abc_mortgages_1rrcom_commissions_ida',
  'link' => 'rrcom_commissions_abc_mortgages_1',
  'table' => 'rrcom_commissions',
  'module' => 'RRCOM_Commissions',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
