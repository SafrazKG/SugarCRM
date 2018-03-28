<?php
// created: 2018-03-16 08:51:29
$dictionary["accounts_abc_mortgages_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_abc_mortgages_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'abc_Mortgages',
      'rhs_table' => 'abc_mortgages',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_abc_mortgages_1_c',
      'join_key_lhs' => 'accounts_abc_mortgages_1accounts_ida',
      'join_key_rhs' => 'accounts_abc_mortgages_1abc_mortgages_idb',
    ),
  ),
  'table' => 'accounts_abc_mortgages_1_c',
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
    'accounts_abc_mortgages_1accounts_ida' => 
    array (
      'name' => 'accounts_abc_mortgages_1accounts_ida',
      'type' => 'id',
    ),
    'accounts_abc_mortgages_1abc_mortgages_idb' => 
    array (
      'name' => 'accounts_abc_mortgages_1abc_mortgages_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_accounts_abc_mortgages_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_accounts_abc_mortgages_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_abc_mortgages_1accounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_accounts_abc_mortgages_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_abc_mortgages_1abc_mortgages_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'accounts_abc_mortgages_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_abc_mortgages_1abc_mortgages_idb',
      ),
    ),
  ),
);