<?php
// created: 2018-03-27 04:59:05
$dictionary["abc_Inventories"]["fields"]["abc_inventories_contacts_1"] = array (
  'name' => 'abc_inventories_contacts_1',
  'type' => 'link',
  'relationship' => 'abc_inventories_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_ABC_INVENTORIES_CONTACTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'abc_inventories_contacts_1contacts_idb',
);
$dictionary["abc_Inventories"]["fields"]["abc_inventories_contacts_1_name"] = array (
  'name' => 'abc_inventories_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_INVENTORIES_CONTACTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'abc_inventories_contacts_1contacts_idb',
  'link' => 'abc_inventories_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["abc_Inventories"]["fields"]["abc_inventories_contacts_1contacts_idb"] = array (
  'name' => 'abc_inventories_contacts_1contacts_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABC_INVENTORIES_CONTACTS_1_FROM_CONTACTS_TITLE_ID',
  'id_name' => 'abc_inventories_contacts_1contacts_idb',
  'link' => 'abc_inventories_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
