<?php
// created: 2018-03-16 13:27:05
$dictionary["abc_Transfers"]["fields"]["leads_abc_transfers_1"] = array (
  'name' => 'leads_abc_transfers_1',
  'type' => 'link',
  'relationship' => 'leads_abc_transfers_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'side' => 'right',
  'vname' => 'LBL_LEADS_ABC_TRANSFERS_1_FROM_ABC_TRANSFERS_TITLE',
  'id_name' => 'leads_abc_transfers_1leads_ida',
  'link-type' => 'one',
);
$dictionary["abc_Transfers"]["fields"]["leads_abc_transfers_1_name"] = array (
  'name' => 'leads_abc_transfers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_ABC_TRANSFERS_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_abc_transfers_1leads_ida',
  'link' => 'leads_abc_transfers_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["abc_Transfers"]["fields"]["leads_abc_transfers_1leads_ida"] = array (
  'name' => 'leads_abc_transfers_1leads_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_ABC_TRANSFERS_1_FROM_ABC_TRANSFERS_TITLE_ID',
  'id_name' => 'leads_abc_transfers_1leads_ida',
  'link' => 'leads_abc_transfers_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
