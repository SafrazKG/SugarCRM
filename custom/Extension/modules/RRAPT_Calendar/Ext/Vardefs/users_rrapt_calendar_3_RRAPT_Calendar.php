<?php
// created: 2018-03-19 11:16:02
$dictionary["RRAPT_Calendar"]["fields"]["users_rrapt_calendar_3"] = array (
  'name' => 'users_rrapt_calendar_3',
  'type' => 'link',
  'relationship' => 'users_rrapt_calendar_3',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'side' => 'right',
  'vname' => 'LBL_USERS_RRAPT_CALENDAR_3_FROM_RRAPT_CALENDAR_TITLE',
  'id_name' => 'users_rrapt_calendar_3users_ida',
  'link-type' => 'one',
);
$dictionary["RRAPT_Calendar"]["fields"]["users_rrapt_calendar_3_name"] = array (
  'name' => 'users_rrapt_calendar_3_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_RRAPT_CALENDAR_3_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_rrapt_calendar_3users_ida',
  'link' => 'users_rrapt_calendar_3',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["RRAPT_Calendar"]["fields"]["users_rrapt_calendar_3users_ida"] = array (
  'name' => 'users_rrapt_calendar_3users_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_RRAPT_CALENDAR_3_FROM_RRAPT_CALENDAR_TITLE_ID',
  'id_name' => 'users_rrapt_calendar_3users_ida',
  'link' => 'users_rrapt_calendar_3',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
