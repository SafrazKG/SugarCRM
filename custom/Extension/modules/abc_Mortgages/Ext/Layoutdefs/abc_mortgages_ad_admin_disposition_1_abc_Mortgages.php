<?php
 // created: 2018-05-03 07:12:44
$layout_defs["abc_Mortgages"]["subpanel_setup"]['abc_mortgages_ad_admin_disposition_1'] = array (
  'order' => 100,
  'module' => 'AD_Admin_Disposition',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC_MORTGAGES_AD_ADMIN_DISPOSITION_1_FROM_AD_ADMIN_DISPOSITION_TITLE',
  'get_subpanel_data' => 'abc_mortgages_ad_admin_disposition_1',
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