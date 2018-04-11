<?php
// created: 2018-04-10 11:47:49
$dictionary["abc_properties_rrrc_requested_checks_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'abc_properties_rrrc_requested_checks_1' => 
    array (
      'lhs_module' => 'abc_Properties',
      'lhs_table' => 'abc_properties',
      'lhs_key' => 'id',
      'rhs_module' => 'RRRC_Requested_Checks',
      'rhs_table' => 'rrrc_requested_checks',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'abc_properties_rrrc_requested_checks_1_c',
      'join_key_lhs' => 'abc_properties_rrrc_requested_checks_1abc_properties_ida',
      'join_key_rhs' => 'abc_properties_rrrc_requested_checks_1rrrc_requested_checks_idb',
    ),
  ),
  'table' => 'abc_properties_rrrc_requested_checks_1_c',
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
    'abc_properties_rrrc_requested_checks_1abc_properties_ida' => 
    array (
      'name' => 'abc_properties_rrrc_requested_checks_1abc_properties_ida',
      'type' => 'id',
    ),
    'abc_properties_rrrc_requested_checks_1rrrc_requested_checks_idb' => 
    array (
      'name' => 'abc_properties_rrrc_requested_checks_1rrrc_requested_checks_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_abc_properties_rrrc_requested_checks_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_abc_properties_rrrc_requested_checks_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc_properties_rrrc_requested_checks_1abc_properties_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_abc_properties_rrrc_requested_checks_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc_properties_rrrc_requested_checks_1rrrc_requested_checks_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'abc_properties_rrrc_requested_checks_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'abc_properties_rrrc_requested_checks_1rrrc_requested_checks_idb',
      ),
    ),
  ),
);