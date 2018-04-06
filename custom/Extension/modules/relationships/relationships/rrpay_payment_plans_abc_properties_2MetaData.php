<?php
// created: 2018-04-05 04:41:25
$dictionary["rrpay_payment_plans_abc_properties_2"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'rrpay_payment_plans_abc_properties_2' => 
    array (
      'lhs_module' => 'RRPAY_Payment_Plans',
      'lhs_table' => 'rrpay_payment_plans',
      'lhs_key' => 'id',
      'rhs_module' => 'abc_Properties',
      'rhs_table' => 'abc_properties',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rrpay_payment_plans_abc_properties_2_c',
      'join_key_lhs' => 'rrpay_payment_plans_abc_properties_2rrpay_payment_plans_ida',
      'join_key_rhs' => 'rrpay_payment_plans_abc_properties_2abc_properties_idb',
    ),
  ),
  'table' => 'rrpay_payment_plans_abc_properties_2_c',
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
    'rrpay_payment_plans_abc_properties_2rrpay_payment_plans_ida' => 
    array (
      'name' => 'rrpay_payment_plans_abc_properties_2rrpay_payment_plans_ida',
      'type' => 'id',
    ),
    'rrpay_payment_plans_abc_properties_2abc_properties_idb' => 
    array (
      'name' => 'rrpay_payment_plans_abc_properties_2abc_properties_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_rrpay_payment_plans_abc_properties_2_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_rrpay_payment_plans_abc_properties_2_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rrpay_payment_plans_abc_properties_2rrpay_payment_plans_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_rrpay_payment_plans_abc_properties_2_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rrpay_payment_plans_abc_properties_2abc_properties_idb',
        1 => 'deleted',
      ),
    ),
  ),
);