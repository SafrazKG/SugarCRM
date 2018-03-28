<?php
 // created: 2018-03-20 07:46:29
$layout_defs["abc_Maintenance_Fees"]["subpanel_setup"]['abc_maintenance_fees_documents_1'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC_MAINTENANCE_FEES_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'abc_maintenance_fees_documents_1',
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
