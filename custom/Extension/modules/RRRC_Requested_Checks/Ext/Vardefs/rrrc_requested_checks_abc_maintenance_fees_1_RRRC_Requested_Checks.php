<?php
// created: 2018-04-10 11:48:53
$dictionary["RRRC_Requested_Checks"]["fields"]["rrrc_requested_checks_abc_maintenance_fees_1"] = array (
  'name' => 'rrrc_requested_checks_abc_maintenance_fees_1',
  'type' => 'link',
  'relationship' => 'rrrc_requested_checks_abc_maintenance_fees_1',
  'source' => 'non-db',
  'module' => 'abc_Maintenance_Fees',
  'bean_name' => 'abc_Maintenance_Fees',
  'vname' => 'LBL_RRRC_REQUESTED_CHECKS_ABC_MAINTENANCE_FEES_1_FROM_ABC_MAINTENANCE_FEES_TITLE',
  'id_name' => 'rrrc_requee196ce_fees_idb',
);
$dictionary["RRRC_Requested_Checks"]["fields"]["rrrc_requested_checks_abc_maintenance_fees_1_name"] = array (
  'name' => 'rrrc_requested_checks_abc_maintenance_fees_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRRC_REQUESTED_CHECKS_ABC_MAINTENANCE_FEES_1_FROM_ABC_MAINTENANCE_FEES_TITLE',
  'save' => true,
  'id_name' => 'rrrc_requee196ce_fees_idb',
  'link' => 'rrrc_requested_checks_abc_maintenance_fees_1',
  'table' => 'abc_maintenance_fees',
  'module' => 'abc_Maintenance_Fees',
  'rname' => 'name',
);
$dictionary["RRRC_Requested_Checks"]["fields"]["rrrc_requee196ce_fees_idb"] = array (
  'name' => 'rrrc_requee196ce_fees_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRRC_REQUESTED_CHECKS_ABC_MAINTENANCE_FEES_1_FROM_ABC_MAINTENANCE_FEES_TITLE_ID',
  'id_name' => 'rrrc_requee196ce_fees_idb',
  'link' => 'rrrc_requested_checks_abc_maintenance_fees_1',
  'table' => 'abc_maintenance_fees',
  'module' => 'abc_Maintenance_Fees',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
