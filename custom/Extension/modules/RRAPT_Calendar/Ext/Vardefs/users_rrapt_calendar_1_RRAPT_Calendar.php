<?php
// created: 2018-03-19 11:12:17
$dictionary["RRAPT_Calendar"]["fields"]["users_rrapt_calendar_1"] = array (
  'name' => 'users_rrapt_calendar_1',
  'type' => 'link',
  'relationship' => 'users_rrapt_calendar_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'side' => 'right',
  'vname' => 'LBL_USERS_RRAPT_CALENDAR_1_FROM_RRAPT_CALENDAR_TITLE',
  'id_name' => 'users_rrapt_calendar_1users_ida',
  'link-type' => 'one',
);
$dictionary["RRAPT_Calendar"]["fields"]["users_rrapt_calendar_1_name"] = array (
  'name' => 'users_rrapt_calendar_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_RRAPT_CALENDAR_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_rrapt_calendar_1users_ida',
  'link' => 'users_rrapt_calendar_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["RRAPT_Calendar"]["fields"]["users_rrapt_calendar_1users_ida"] = array (
  'name' => 'users_rrapt_calendar_1users_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_RRAPT_CALENDAR_1_FROM_RRAPT_CALENDAR_TITLE_ID',
  'id_name' => 'users_rrapt_calendar_1users_ida',
  'link' => 'users_rrapt_calendar_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
