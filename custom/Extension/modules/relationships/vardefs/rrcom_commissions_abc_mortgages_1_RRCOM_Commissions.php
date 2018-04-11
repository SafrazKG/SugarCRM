<?php
// created: 2018-04-10 09:12:56
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_abc_mortgages_1"] = array (
  'name' => 'rrcom_commissions_abc_mortgages_1',
  'type' => 'link',
  'relationship' => 'rrcom_commissions_abc_mortgages_1',
  'source' => 'non-db',
  'module' => 'abc_Mortgages',
  'bean_name' => 'abc_Mortgages',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_MORTGAGES_1_FROM_ABC_MORTGAGES_TITLE',
  'id_name' => 'rrcom_commissions_abc_mortgages_1abc_mortgages_idb',
);
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_abc_mortgages_1_name"] = array (
  'name' => 'rrcom_commissions_abc_mortgages_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_MORTGAGES_1_FROM_ABC_MORTGAGES_TITLE',
  'save' => true,
  'id_name' => 'rrcom_commissions_abc_mortgages_1abc_mortgages_idb',
  'link' => 'rrcom_commissions_abc_mortgages_1',
  'table' => 'abc_mortgages',
  'module' => 'abc_Mortgages',
  'rname' => 'name',
);
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_abc_mortgages_1abc_mortgages_idb"] = array (
  'name' => 'rrcom_commissions_abc_mortgages_1abc_mortgages_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_MORTGAGES_1_FROM_ABC_MORTGAGES_TITLE_ID',
  'id_name' => 'rrcom_commissions_abc_mortgages_1abc_mortgages_idb',
  'link' => 'rrcom_commissions_abc_mortgages_1',
  'table' => 'abc_mortgages',
  'module' => 'abc_Mortgages',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
