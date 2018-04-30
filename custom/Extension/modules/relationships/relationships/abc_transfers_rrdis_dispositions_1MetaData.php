<?php
// created: 2018-04-27 10:31:46
$dictionary["abc_transfers_rrdis_dispositions_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'abc_transfers_rrdis_dispositions_1' => 
    array (
      'lhs_module' => 'abc_Transfers',
      'lhs_table' => 'abc_transfers',
      'lhs_key' => 'id',
      'rhs_module' => 'RRDIS_Dispositions',
      'rhs_table' => 'rrdis_dispositions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'abc_transfers_rrdis_dispositions_1_c',
      'join_key_lhs' => 'abc_transfers_rrdis_dispositions_1abc_transfers_ida',
      'join_key_rhs' => 'abc_transfers_rrdis_dispositions_1rrdis_dispositions_idb',
    ),
  ),
  'table' => 'abc_transfers_rrdis_dispositions_1_c',
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
    'abc_transfers_rrdis_dispositions_1abc_transfers_ida' => 
    array (
      'name' => 'abc_transfers_rrdis_dispositions_1abc_transfers_ida',
      'type' => 'id',
    ),
    'abc_transfers_rrdis_dispositions_1rrdis_dispositions_idb' => 
    array (
      'name' => 'abc_transfers_rrdis_dispositions_1rrdis_dispositions_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_abc_transfers_rrdis_dispositions_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_abc_transfers_rrdis_dispositions_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc_transfers_rrdis_dispositions_1abc_transfers_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_abc_transfers_rrdis_dispositions_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc_transfers_rrdis_dispositions_1rrdis_dispositions_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'abc_transfers_rrdis_dispositions_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'abc_transfers_rrdis_dispositions_1rrdis_dispositions_idb',
      ),
    ),
  ),
);