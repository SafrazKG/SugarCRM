<?php
// created: 2018-04-25 03:46:14
$dictionary["leads_rrdis_dispositions_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'leads_rrdis_dispositions_1' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'RRDIS_Dispositions',
      'rhs_table' => 'rrdis_dispositions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'leads_rrdis_dispositions_1_c',
      'join_key_lhs' => 'leads_rrdis_dispositions_1leads_ida',
      'join_key_rhs' => 'leads_rrdis_dispositions_1rrdis_dispositions_idb',
    ),
  ),
  'table' => 'leads_rrdis_dispositions_1_c',
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
    'leads_rrdis_dispositions_1leads_ida' => 
    array (
      'name' => 'leads_rrdis_dispositions_1leads_ida',
      'type' => 'id',
    ),
    'leads_rrdis_dispositions_1rrdis_dispositions_idb' => 
    array (
      'name' => 'leads_rrdis_dispositions_1rrdis_dispositions_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_leads_rrdis_dispositions_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_leads_rrdis_dispositions_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'leads_rrdis_dispositions_1leads_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_leads_rrdis_dispositions_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'leads_rrdis_dispositions_1rrdis_dispositions_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'leads_rrdis_dispositions_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'leads_rrdis_dispositions_1rrdis_dispositions_idb',
      ),
    ),
  ),
);