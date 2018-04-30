<?php
 // created: 2018-04-27 09:54:01
$dictionary['Contact']['fields']['timeshare_inventory_buyer_id_c']['labelValue']='Timeshare Inventory Buyer ID';
$dictionary['Contact']['fields']['timeshare_inventory_buyer_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['timeshare_inventory_buyer_id_c']['enforced']='false';
$dictionary['Contact']['fields']['timeshare_inventory_buyer_id_c']['dependency']='isInList($contact_type_c,createList("Buyer"))';

 ?>