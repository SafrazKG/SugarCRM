<?php
// created: 2018-04-10 11:48:53
$dictionary["rrrc_requested_checks_abc_maintenance_fees_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'rrrc_requested_checks_abc_maintenance_fees_1' => 
    array (
      'lhs_module' => 'RRRC_Requested_Checks',
      'lhs_table' => 'rrrc_requested_checks',
      'lhs_key' => 'id',
      'rhs_module' => 'abc_Maintenance_Fees',
      'rhs_table' => 'abc_maintenance_fees',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rrrc_requested_checks_abc_maintenance_fees_1_c',
      'join_key_lhs' => 'rrrc_reque5dfe_checks_ida',
      'join_key_rhs' => 'rrrc_requee196ce_fees_idb',
    ),
  ),
  'table' => 'rrrc_requested_checks_abc_maintenance_fees_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'rrrc_reque5dfe_checks_ida' => 
    array (
      'name' => 'rrrc_reque5dfe_checks_ida',
      'type' => 'id',
    ),
    'rrrc_requee196ce_fees_idb' => 
    array (
      'name' => 'rrrc_requee196ce_fees_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_rrrc_requested_checks_abc_maintenance_fees_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_rrrc_requested_checks_abc_maintenance_fees_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rrrc_reque5dfe_checks_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_rrrc_requested_checks_abc_maintenance_fees_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rrrc_requee196ce_fees_idb',
        1 => 'deleted',
      ),
    ),
  ),
);