<?php
// created: 2018-03-16 12:57:39
$dictionary["abc_transfers_abc_properties_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'abc_transfers_abc_properties_1' => 
    array (
      'lhs_module' => 'abc_Transfers',
      'lhs_table' => 'abc_transfers',
      'lhs_key' => 'id',
      'rhs_module' => 'abc_Properties',
      'rhs_table' => 'abc_properties',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'abc_transfers_abc_properties_1_c',
      'join_key_lhs' => 'abc_transfers_abc_properties_1abc_transfers_ida',
      'join_key_rhs' => 'abc_transfers_abc_properties_1abc_properties_idb',
    ),
  ),
  'table' => 'abc_transfers_abc_properties_1_c',
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
    'abc_transfers_abc_properties_1abc_transfers_ida' => 
    array (
      'name' => 'abc_transfers_abc_properties_1abc_transfers_ida',
      'type' => 'id',
    ),
    'abc_transfers_abc_properties_1abc_properties_idb' => 
    array (
      'name' => 'abc_transfers_abc_properties_1abc_properties_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_abc_transfers_abc_properties_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_abc_transfers_abc_properties_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc_transfers_abc_properties_1abc_transfers_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_abc_transfers_abc_properties_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc_transfers_abc_properties_1abc_properties_idb',
        1 => 'deleted',
      ),
    ),
  ),
);