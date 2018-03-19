<?php
// created: 2018-03-19 11:14:10
$dictionary["users_rrapt_calendar_2"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'users_rrapt_calendar_2' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'RRAPT_Calendar',
      'rhs_table' => 'rrapt_calendar',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'users_rrapt_calendar_2_c',
      'join_key_lhs' => 'users_rrapt_calendar_2users_ida',
      'join_key_rhs' => 'users_rrapt_calendar_2rrapt_calendar_idb',
    ),
  ),
  'table' => 'users_rrapt_calendar_2_c',
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
    'users_rrapt_calendar_2users_ida' => 
    array (
      'name' => 'users_rrapt_calendar_2users_ida',
      'type' => 'id',
    ),
    'users_rrapt_calendar_2rrapt_calendar_idb' => 
    array (
      'name' => 'users_rrapt_calendar_2rrapt_calendar_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_users_rrapt_calendar_2_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_users_rrapt_calendar_2_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'users_rrapt_calendar_2users_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_users_rrapt_calendar_2_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'users_rrapt_calendar_2rrapt_calendar_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'users_rrapt_calendar_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'users_rrapt_calendar_2rrapt_calendar_idb',
      ),
    ),
  ),
);