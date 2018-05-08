<?php
 // created: 2018-05-04 06:16:51
$layout_defs["Contacts"]["subpanel_setup"]['abc_transfers_contacts_1'] = array (
  'order' => 100,
  'module' => 'abc_Transfers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC_TRANSFERS_CONTACTS_1_FROM_ABC_TRANSFERS_TITLE',
  'get_subpanel_data' => 'abc_transfers_contacts_1',
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
