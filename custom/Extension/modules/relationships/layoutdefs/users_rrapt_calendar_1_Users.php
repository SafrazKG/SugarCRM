<?php
 // created: 2018-03-19 11:12:17
$layout_defs["Users"]["subpanel_setup"]['users_rrapt_calendar_1'] = array (
  'order' => 100,
  'module' => 'RRAPT_Calendar',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_USERS_RRAPT_CALENDAR_1_FROM_RRAPT_CALENDAR_TITLE',
  'get_subpanel_data' => 'users_rrapt_calendar_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
