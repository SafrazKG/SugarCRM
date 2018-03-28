<?php
// created: 2018-03-20 07:46:29
$dictionary["abc_maintenance_fees_documents_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'abc_maintenance_fees_documents_1' => 
    array (
      'lhs_module' => 'abc_Maintenance_Fees',
      'lhs_table' => 'abc_maintenance_fees',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'abc_maintenance_fees_documents_1_c',
      'join_key_lhs' => 'abc_maintenance_fees_documents_1abc_maintenance_fees_ida',
      'join_key_rhs' => 'abc_maintenance_fees_documents_1documents_idb',
    ),
  ),
  'table' => 'abc_maintenance_fees_documents_1_c',
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
    'abc_maintenance_fees_documents_1abc_maintenance_fees_ida' => 
    array (
      'name' => 'abc_maintenance_fees_documents_1abc_maintenance_fees_ida',
      'type' => 'id',
    ),
    'abc_maintenance_fees_documents_1documents_idb' => 
    array (
      'name' => 'abc_maintenance_fees_documents_1documents_idb',
      'type' => 'id',
    ),
    'document_revision_id' => 
    array (
      'name' => 'document_revision_id',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_abc_maintenance_fees_documents_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_abc_maintenance_fees_documents_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc_maintenance_fees_documents_1abc_maintenance_fees_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_abc_maintenance_fees_documents_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc_maintenance_fees_documents_1documents_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'abc_maintenance_fees_documents_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'abc_maintenance_fees_documents_1documents_idb',
      ),
    ),
  ),
);