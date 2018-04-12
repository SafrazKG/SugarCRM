<?php
// created: 2018-04-10 09:12:37
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_abc_properties_1"] = array (
  'name' => 'rrcom_commissions_abc_properties_1',
  'type' => 'link',
  'relationship' => 'rrcom_commissions_abc_properties_1',
  'source' => 'non-db',
  'module' => 'abc_Properties',
  'bean_name' => 'abc_Properties',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_PROPERTIES_1_FROM_ABC_PROPERTIES_TITLE',
  'id_name' => 'rrcom_commissions_abc_properties_1abc_properties_idb',
);
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_abc_properties_1_name"] = array (
  'name' => 'rrcom_commissions_abc_properties_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_PROPERTIES_1_FROM_ABC_PROPERTIES_TITLE',
  'save' => true,
  'id_name' => 'rrcom_commissions_abc_properties_1abc_properties_idb',
  'link' => 'rrcom_commissions_abc_properties_1',
  'table' => 'abc_properties',
  'module' => 'abc_Properties',
  'rname' => 'name',
);
$dictionary["RRCOM_Commissions"]["fields"]["rrcom_commissions_abc_properties_1abc_properties_idb"] = array (
  'name' => 'rrcom_commissions_abc_properties_1abc_properties_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRCOM_COMMISSIONS_ABC_PROPERTIES_1_FROM_ABC_PROPERTIES_TITLE_ID',
  'id_name' => 'rrcom_commissions_abc_properties_1abc_properties_idb',
  'link' => 'rrcom_commissions_abc_properties_1',
  'table' => 'abc_properties',
  'module' => 'abc_Properties',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
