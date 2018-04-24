<?php
// created: 2018-04-20 10:17:41
$dictionary["abc_deedbacks_intws_workstreams_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'abc_deedbacks_intws_workstreams_1' => 
    array (
      'lhs_module' => 'abc_Deedbacks',
      'lhs_table' => 'abc_deedbacks',
      'lhs_key' => 'id',
      'rhs_module' => 'INTWS_WorkStreams',
      'rhs_table' => 'intws_workstreams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'abc_deedbacks_intws_workstreams_1_c',
      'join_key_lhs' => 'abc_deedbacks_intws_workstreams_1abc_deedbacks_ida',
      'join_key_rhs' => 'abc_deedbacks_intws_workstreams_1intws_workstreams_idb',
    ),
  ),
  'table' => 'abc_deedbacks_intws_workstreams_1_c',
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
    'abc_deedbacks_intws_workstreams_1abc_deedbacks_ida' => 
    array (
      'name' => 'abc_deedbacks_intws_workstreams_1abc_deedbacks_ida',
      'type' => 'id',
    ),
    'abc_deedbacks_intws_workstreams_1intws_workstreams_idb' => 
    array (
      'name' => 'abc_deedbacks_intws_workstreams_1intws_workstreams_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_abc_deedbacks_intws_workstreams_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_abc_deedbacks_intws_workstreams_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc_deedbacks_intws_workstreams_1abc_deedbacks_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_abc_deedbacks_intws_workstreams_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc_deedbacks_intws_workstreams_1intws_workstreams_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'abc_deedbacks_intws_workstreams_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'abc_deedbacks_intws_workstreams_1intws_workstreams_idb',
      ),
    ),
  ),
);