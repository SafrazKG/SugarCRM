<?php
// created: 2018-04-03 07:27:11
$dictionary["asd_payments_abc_maintenance_fees_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'asd_payments_abc_maintenance_fees_1' => 
    array (
      'lhs_module' => 'asd_Payments',
      'lhs_table' => 'asd_payments',
      'lhs_key' => 'id',
      'rhs_module' => 'abc_Maintenance_Fees',
      'rhs_table' => 'abc_maintenance_fees',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'asd_payments_abc_maintenance_fees_1_c',
      'join_key_lhs' => 'asd_payments_abc_maintenance_fees_1asd_payments_ida',
      'join_key_rhs' => 'asd_payments_abc_maintenance_fees_1abc_maintenance_fees_idb',
    ),
  ),
  'table' => 'asd_payments_abc_maintenance_fees_1_c',
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
    'asd_payments_abc_maintenance_fees_1asd_payments_ida' => 
    array (
      'name' => 'asd_payments_abc_maintenance_fees_1asd_payments_ida',
      'type' => 'id',
    ),
    'asd_payments_abc_maintenance_fees_1abc_maintenance_fees_idb' => 
    array (
      'name' => 'asd_payments_abc_maintenance_fees_1abc_maintenance_fees_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_asd_payments_abc_maintenance_fees_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_asd_payments_abc_maintenance_fees_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'asd_payments_abc_maintenance_fees_1asd_payments_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_asd_payments_abc_maintenance_fees_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'asd_payments_abc_maintenance_fees_1abc_maintenance_fees_idb',
        1 => 'deleted',
      ),
    ),
  ),
);