<?php
// created: 2018-05-03 04:47:20
$dictionary["abc_mortgages_asd_payments_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'abc_mortgages_asd_payments_1' => 
    array (
      'lhs_module' => 'abc_Mortgages',
      'lhs_table' => 'abc_mortgages',
      'lhs_key' => 'id',
      'rhs_module' => 'asd_Payments',
      'rhs_table' => 'asd_payments',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'abc_mortgages_asd_payments_1_c',
      'join_key_lhs' => 'abc_mortgages_asd_payments_1abc_mortgages_ida',
      'join_key_rhs' => 'abc_mortgages_asd_payments_1asd_payments_idb',
    ),
  ),
  'table' => 'abc_mortgages_asd_payments_1_c',
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
    'abc_mortgages_asd_payments_1abc_mortgages_ida' => 
    array (
      'name' => 'abc_mortgages_asd_payments_1abc_mortgages_ida',
      'type' => 'id',
    ),
    'abc_mortgages_asd_payments_1asd_payments_idb' => 
    array (
      'name' => 'abc_mortgages_asd_payments_1asd_payments_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_abc_mortgages_asd_payments_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_abc_mortgages_asd_payments_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc_mortgages_asd_payments_1abc_mortgages_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_abc_mortgages_asd_payments_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc_mortgages_asd_payments_1asd_payments_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'abc_mortgages_asd_payments_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'abc_mortgages_asd_payments_1asd_payments_idb',
      ),
    ),
  ),
);