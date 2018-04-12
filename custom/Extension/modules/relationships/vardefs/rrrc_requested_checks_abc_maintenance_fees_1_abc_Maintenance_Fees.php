<?php
// created: 2018-04-10 11:48:53
$dictionary["abc_Maintenance_Fees"]["fields"]["rrrc_requested_checks_abc_maintenance_fees_1"] = array (
  'name' => 'rrrc_requested_checks_abc_maintenance_fees_1',
  'type' => 'link',
  'relationship' => 'rrrc_requested_checks_abc_maintenance_fees_1',
  'source' => 'non-db',
  'module' => 'RRRC_Requested_Checks',
  'bean_name' => 'RRRC_Requested_Checks',
  'vname' => 'LBL_RRRC_REQUESTED_CHECKS_ABC_MAINTENANCE_FEES_1_FROM_RRRC_REQUESTED_CHECKS_TITLE',
  'id_name' => 'rrrc_reque5dfe_checks_ida',
);
$dictionary["abc_Maintenance_Fees"]["fields"]["rrrc_requested_checks_abc_maintenance_fees_1_name"] = array (
  'name' => 'rrrc_requested_checks_abc_maintenance_fees_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RRRC_REQUESTED_CHECKS_ABC_MAINTENANCE_FEES_1_FROM_RRRC_REQUESTED_CHECKS_TITLE',
  'save' => true,
  'id_name' => 'rrrc_reque5dfe_checks_ida',
  'link' => 'rrrc_requested_checks_abc_maintenance_fees_1',
  'table' => 'rrrc_requested_checks',
  'module' => 'RRRC_Requested_Checks',
  'rname' => 'name',
);
$dictionary["abc_Maintenance_Fees"]["fields"]["rrrc_reque5dfe_checks_ida"] = array (
  'name' => 'rrrc_reque5dfe_checks_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_RRRC_REQUESTED_CHECKS_ABC_MAINTENANCE_FEES_1_FROM_RRRC_REQUESTED_CHECKS_TITLE_ID',
  'id_name' => 'rrrc_reque5dfe_checks_ida',
  'link' => 'rrrc_requested_checks_abc_maintenance_fees_1',
  'table' => 'rrrc_requested_checks',
  'module' => 'RRRC_Requested_Checks',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
