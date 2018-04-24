<?php
 // created: 2018-04-20 14:20:01
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_fees_current_c']['duplicate_merge_dom_value']=0;
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_fees_current_c']['labelValue']='Maintenance Fees Current';
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_fees_current_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_fees_current_c']['calculated']='true';
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_fees_current_c']['formula']='related($abc_transfers_abc_maintenance_fees_1,"maintenance_fees_current_c")';
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_fees_current_c']['enforced']='true';
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_fees_current_c']['dependency']='';

 ?>