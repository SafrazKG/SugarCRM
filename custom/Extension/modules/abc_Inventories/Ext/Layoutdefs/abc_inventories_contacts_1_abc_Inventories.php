<?php
 // created: 2018-04-27 09:23:44
$layout_defs["abc_Inventories"]["subpanel_setup"]['abc_inventories_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC_INVENTORIES_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'abc_inventories_contacts_1',
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
