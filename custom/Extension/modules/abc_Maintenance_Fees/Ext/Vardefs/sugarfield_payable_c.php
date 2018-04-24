<?php
 // created: 2018-04-20 14:15:08
$dictionary['abc_Maintenance_Fees']['fields']['payable_c']['duplicate_merge_dom_value']=0;
$dictionary['abc_Maintenance_Fees']['fields']['payable_c']['labelValue']='Payable';
$dictionary['abc_Maintenance_Fees']['fields']['payable_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['abc_Maintenance_Fees']['fields']['payable_c']['calculated']='true';
$dictionary['abc_Maintenance_Fees']['fields']['payable_c']['formula']='related($abc_transfers_abc_maintenance_fees_1,"resort_c")';
$dictionary['abc_Maintenance_Fees']['fields']['payable_c']['enforced']='true';
$dictionary['abc_Maintenance_Fees']['fields']['payable_c']['dependency']='';

 ?>