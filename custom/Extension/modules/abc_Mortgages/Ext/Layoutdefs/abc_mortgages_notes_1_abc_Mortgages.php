<?php
 // created: 2018-05-07 10:38:04
$layout_defs["abc_Mortgages"]["subpanel_setup"]['abc_mortgages_notes_1'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC_MORTGAGES_NOTES_1_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'abc_mortgages_notes_1',
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
