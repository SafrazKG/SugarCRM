<?php
// created: 2018-05-07 10:21:42
$dictionary["rrpay_payment_plans_asd_payments_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'rrpay_payment_plans_asd_payments_1' => 
    array (
      'lhs_module' => 'RRPAY_Payment_Plans',
      'lhs_table' => 'rrpay_payment_plans',
      'lhs_key' => 'id',
      'rhs_module' => 'asd_Payments',
      'rhs_table' => 'asd_payments',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rrpay_payment_plans_asd_payments_1_c',
      'join_key_lhs' => 'rrpay_payment_plans_asd_payments_1rrpay_payment_plans_ida',
      'join_key_rhs' => 'rrpay_payment_plans_asd_payments_1asd_payments_idb',
    ),
  ),
  'table' => 'rrpay_payment_plans_asd_payments_1_c',
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
    'rrpay_payment_plans_asd_payments_1rrpay_payment_plans_ida' => 
    array (
      'name' => 'rrpay_payment_plans_asd_payments_1rrpay_payment_plans_ida',
      'type' => 'id',
    ),
    'rrpay_payment_plans_asd_payments_1asd_payments_idb' => 
    array (
      'name' => 'rrpay_payment_plans_asd_payments_1asd_payments_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_rrpay_payment_plans_asd_payments_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_rrpay_payment_plans_asd_payments_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rrpay_payment_plans_asd_payments_1rrpay_payment_plans_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_rrpay_payment_plans_asd_payments_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rrpay_payment_plans_asd_payments_1asd_payments_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'rrpay_payment_plans_asd_payments_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rrpay_payment_plans_asd_payments_1asd_payments_idb',
      ),
    ),
  ),
);