<?php
// created: 2018-04-10 10:07:07
$dictionary["accounts_rrpay_payment_plans_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_rrpay_payment_plans_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'RRPAY_Payment_Plans',
      'rhs_table' => 'rrpay_payment_plans',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_rrpay_payment_plans_1_c',
      'join_key_lhs' => 'accounts_rrpay_payment_plans_1accounts_ida',
      'join_key_rhs' => 'accounts_rrpay_payment_plans_1rrpay_payment_plans_idb',
    ),
  ),
  'table' => 'accounts_rrpay_payment_plans_1_c',
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
    'accounts_rrpay_payment_plans_1accounts_ida' => 
    array (
      'name' => 'accounts_rrpay_payment_plans_1accounts_ida',
      'type' => 'id',
    ),
    'accounts_rrpay_payment_plans_1rrpay_payment_plans_idb' => 
    array (
      'name' => 'accounts_rrpay_payment_plans_1rrpay_payment_plans_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_accounts_rrpay_payment_plans_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_accounts_rrpay_payment_plans_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_rrpay_payment_plans_1accounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_accounts_rrpay_payment_plans_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_rrpay_payment_plans_1rrpay_payment_plans_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'accounts_rrpay_payment_plans_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_rrpay_payment_plans_1rrpay_payment_plans_idb',
      ),
    ),
  ),
);