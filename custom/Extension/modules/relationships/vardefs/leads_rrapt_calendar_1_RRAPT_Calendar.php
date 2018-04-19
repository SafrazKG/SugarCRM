<?php
// created: 2018-03-19 11:09:52
$dictionary["RRAPT_Calendar"]["fields"]["leads_rrapt_calendar_1"] = array (
  'name' => 'leads_rrapt_calendar_1',
  'type' => 'link',
  'relationship' => 'leads_rrapt_calendar_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'side' => 'right',
  'vname' => 'LBL_LEADS_RRAPT_CALENDAR_1_FROM_RRAPT_CALENDAR_TITLE',
  'id_name' => 'leads_rrapt_calendar_1leads_ida',
  'link-type' => 'one',
  'required' => true,
);
$dictionary["RRAPT_Calendar"]["fields"]["leads_rrapt_calendar_1_name"] = array (
  'name' => 'leads_rrapt_calendar_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_RRAPT_CALENDAR_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_rrapt_calendar_1leads_ida',
  'link' => 'leads_rrapt_calendar_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
  'required' => true,
);
$dictionary["RRAPT_Calendar"]["fields"]["leads_rrapt_calendar_1leads_ida"] = array (
  'name' => 'leads_rrapt_calendar_1leads_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_RRAPT_CALENDAR_1_FROM_RRAPT_CALENDAR_TITLE_ID',
  'id_name' => 'leads_rrapt_calendar_1leads_ida',
  'link' => 'leads_rrapt_calendar_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
  'required' => true,
);
$dictionary["RRAPT_Calendar"]["fields"]["leads_rrapt_calendar_1_phone"] = array (
  'name' => 'leads_rrapt_calendar_1_phone',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'Leads phone',
  'save' => true,
  'id_name' => 'leads_rrapt_calendar_1leads_ida',
  'link' => 'leads_rrapt_calendar_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'phone_home',
  'required' => false,
);
