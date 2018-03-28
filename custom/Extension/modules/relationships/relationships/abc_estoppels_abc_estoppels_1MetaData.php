<?php
// created: 2018-03-27 05:46:25
$dictionary["abc_estoppels_abc_estoppels_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'abc_estoppels_abc_estoppels_1' => 
    array (
      'lhs_module' => 'abc_Estoppels',
      'lhs_table' => 'abc_estoppels',
      'lhs_key' => 'id',
      'rhs_module' => 'abc_Estoppels',
      'rhs_table' => 'abc_estoppels',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'abc_estoppels_abc_estoppels_1_c',
      'join_key_lhs' => 'abc_estoppels_abc_estoppels_1abc_estoppels_ida',
      'join_key_rhs' => 'abc_estoppels_abc_estoppels_1abc_estoppels_idb',
    ),
  ),
  'table' => 'abc_estoppels_abc_estoppels_1_c',
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
    'abc_estoppels_abc_estoppels_1abc_estoppels_ida' => 
    array (
      'name' => 'abc_estoppels_abc_estoppels_1abc_estoppels_ida',
      'type' => 'id',
    ),
    'abc_estoppels_abc_estoppels_1abc_estoppels_idb' => 
    array (
      'name' => 'abc_estoppels_abc_estoppels_1abc_estoppels_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_abc_estoppels_abc_estoppels_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_abc_estoppels_abc_estoppels_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc_estoppels_abc_estoppels_1abc_estoppels_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_abc_estoppels_abc_estoppels_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc_estoppels_abc_estoppels_1abc_estoppels_idb',
        1 => 'deleted',
      ),
    ),
  ),
);