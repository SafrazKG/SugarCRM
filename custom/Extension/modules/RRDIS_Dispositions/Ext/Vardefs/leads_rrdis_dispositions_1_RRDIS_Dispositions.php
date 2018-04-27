<?php
// created: 2018-04-25 03:46:14
$dictionary["RRDIS_Dispositions"]["fields"]["leads_rrdis_dispositions_1"] = array (
  'name' => 'leads_rrdis_dispositions_1',
  'type' => 'link',
  'relationship' => 'leads_rrdis_dispositions_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'side' => 'right',
  'vname' => 'LBL_LEADS_RRDIS_DISPOSITIONS_1_FROM_RRDIS_DISPOSITIONS_TITLE',
  'id_name' => 'leads_rrdis_dispositions_1leads_ida',
  'link-type' => 'one',
);
$dictionary["RRDIS_Dispositions"]["fields"]["leads_rrdis_dispositions_1_name"] = array (
  'name' => 'leads_rrdis_dispositions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_RRDIS_DISPOSITIONS_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_rrdis_dispositions_1leads_ida',
  'link' => 'leads_rrdis_dispositions_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["RRDIS_Dispositions"]["fields"]["leads_rrdis_dispositions_1leads_ida"] = array (
  'name' => 'leads_rrdis_dispositions_1leads_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_RRDIS_DISPOSITIONS_1_FROM_RRDIS_DISPOSITIONS_TITLE_ID',
  'id_name' => 'leads_rrdis_dispositions_1leads_ida',
  'link' => 'leads_rrdis_dispositions_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
