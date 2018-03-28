<?php
 // created: 2018-03-16 08:50:58
$layout_defs["Leads"]["subpanel_setup"]['leads_abc_mortgages_1'] = array (
  'order' => 100,
  'module' => 'abc_Mortgages',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_ABC_MORTGAGES_1_FROM_ABC_MORTGAGES_TITLE',
  'get_subpanel_data' => 'leads_abc_mortgages_1',
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
