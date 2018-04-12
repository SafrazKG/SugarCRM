<?php
// created: 2018-04-03 07:27:11
$dictionary["asd_Payments"]["fields"]["asd_payments_abc_maintenance_fees_1"] = array (
  'name' => 'asd_payments_abc_maintenance_fees_1',
  'type' => 'link',
  'relationship' => 'asd_payments_abc_maintenance_fees_1',
  'source' => 'non-db',
  'module' => 'abc_Maintenance_Fees',
  'bean_name' => 'abc_Maintenance_Fees',
  'vname' => 'LBL_ASD_PAYMENTS_ABC_MAINTENANCE_FEES_1_FROM_ABC_MAINTENANCE_FEES_TITLE',
  'id_name' => 'asd_payments_abc_maintenance_fees_1abc_maintenance_fees_idb',
);
$dictionary["asd_Payments"]["fields"]["asd_payments_abc_maintenance_fees_1_name"] = array (
  'name' => 'asd_payments_abc_maintenance_fees_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ASD_PAYMENTS_ABC_MAINTENANCE_FEES_1_FROM_ABC_MAINTENANCE_FEES_TITLE',
  'save' => true,
  'id_name' => 'asd_payments_abc_maintenance_fees_1abc_maintenance_fees_idb',
  'link' => 'asd_payments_abc_maintenance_fees_1',
  'table' => 'abc_maintenance_fees',
  'module' => 'abc_Maintenance_Fees',
  'rname' => 'name',
);
$dictionary["asd_Payments"]["fields"]["asd_payments_abc_maintenance_fees_1abc_maintenance_fees_idb"] = array (
  'name' => 'asd_payments_abc_maintenance_fees_1abc_maintenance_fees_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ASD_PAYMENTS_ABC_MAINTENANCE_FEES_1_FROM_ABC_MAINTENANCE_FEES_TITLE_ID',
  'id_name' => 'asd_payments_abc_maintenance_fees_1abc_maintenance_fees_idb',
  'link' => 'asd_payments_abc_maintenance_fees_1',
  'table' => 'abc_maintenance_fees',
  'module' => 'abc_Maintenance_Fees',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
