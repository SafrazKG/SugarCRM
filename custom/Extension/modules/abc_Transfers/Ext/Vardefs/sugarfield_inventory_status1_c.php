<?php
 // created: 2018-04-17 13:24:25
$dictionary['abc_Transfers']['fields']['inventory_status1_c']['duplicate_merge_dom_value']=0;
$dictionary['abc_Transfers']['fields']['inventory_status1_c']['labelValue']='Inventory Status';
$dictionary['abc_Transfers']['fields']['inventory_status1_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['abc_Transfers']['fields']['inventory_status1_c']['calculated']='1';
$dictionary['abc_Transfers']['fields']['inventory_status1_c']['formula']='related($abc_transfers_abc_inventories_1,"status_c")';
$dictionary['abc_Transfers']['fields']['inventory_status1_c']['enforced']='1';
$dictionary['abc_Transfers']['fields']['inventory_status1_c']['dependency']='isInList($leads_abc_transfers_1,createList("Sales TRANSFER"))';

 ?>