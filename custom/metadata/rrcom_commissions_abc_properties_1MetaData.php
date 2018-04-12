<?php
// created: 2018-04-10 09:12:37
$dictionary["rrcom_commissions_abc_properties_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'rrcom_commissions_abc_properties_1' => 
    array (
      'lhs_module' => 'RRCOM_Commissions',
      'lhs_table' => 'rrcom_commissions',
      'lhs_key' => 'id',
      'rhs_module' => 'abc_Properties',
      'rhs_table' => 'abc_properties',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rrcom_commissions_abc_properties_1_c',
      'join_key_lhs' => 'rrcom_commissions_abc_properties_1rrcom_commissions_ida',
      'join_key_rhs' => 'rrcom_commissions_abc_properties_1abc_properties_idb',
    ),
  ),
  'table' => 'rrcom_commissions_abc_properties_1_c',
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
    'rrcom_commissions_abc_properties_1rrcom_commissions_ida' => 
    array (
      'name' => 'rrcom_commissions_abc_properties_1rrcom_commissions_ida',
      'type' => 'id',
    ),
    'rrcom_commissions_abc_properties_1abc_properties_idb' => 
    array (
      'name' => 'rrcom_commissions_abc_properties_1abc_properties_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_rrcom_commissions_abc_properties_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_rrcom_commissions_abc_properties_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rrcom_commissions_abc_properties_1rrcom_commissions_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_rrcom_commissions_abc_properties_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rrcom_commissions_abc_properties_1abc_properties_idb',
        1 => 'deleted',
      ),
    ),
  ),
);