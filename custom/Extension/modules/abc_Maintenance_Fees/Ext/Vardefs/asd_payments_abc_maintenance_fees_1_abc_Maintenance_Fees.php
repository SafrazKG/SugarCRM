<?php
// created: 2018-04-03 07:27:11
$dictionary["abc_Maintenance_Fees"]["fields"]["asd_payments_abc_maintenance_fees_1"] = array (
  'name' => 'asd_payments_abc_maintenance_fees_1',
  'type' => 'link',
  'relationship' => 'asd_payments_abc_maintenance_fees_1',
  'source' => 'non-db',
  'module' => 'asd_Payments',
  'bean_name' => 'asd_Payments',
  'vname' => 'LBL_ASD_PAYMENTS_ABC_MAINTENANCE_FEES_1_FROM_ASD_PAYMENTS_TITLE',
  'id_name' => 'asd_payments_abc_maintenance_fees_1asd_payments_ida',
);
$dictionary["abc_Maintenance_Fees"]["fields"]["asd_payments_abc_maintenance_fees_1_name"] = array (
  'name' => 'asd_payments_abc_maintenance_fees_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ASD_PAYMENTS_ABC_MAINTENANCE_FEES_1_FROM_ASD_PAYMENTS_TITLE',
  'save' => true,
  'id_name' => 'asd_payments_abc_maintenance_fees_1asd_payments_ida',
  'link' => 'asd_payments_abc_maintenance_fees_1',
  'table' => 'asd_payments',
  'module' => 'asd_Payments',
  'rname' => 'name',
);
$dictionary["abc_Maintenance_Fees"]["fields"]["asd_payments_abc_maintenance_fees_1asd_payments_ida"] = array (
  'name' => 'asd_payments_abc_maintenance_fees_1asd_payments_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ASD_PAYMENTS_ABC_MAINTENANCE_FEES_1_FROM_ASD_PAYMENTS_TITLE_ID',
  'id_name' => 'asd_payments_abc_maintenance_fees_1asd_payments_ida',
  'link' => 'asd_payments_abc_maintenance_fees_1',
  'table' => 'asd_payments',
  'module' => 'asd_Payments',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
