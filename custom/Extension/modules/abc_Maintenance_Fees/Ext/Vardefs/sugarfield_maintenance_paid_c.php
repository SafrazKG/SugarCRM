<?php
 // created: 2018-04-20 14:18:25
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_paid_c']['duplicate_merge_dom_value']=0;
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_paid_c']['labelValue']='Maintenance Paid';
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_paid_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_paid_c']['calculated']='true';
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_paid_c']['formula']='related($abc_transfers_abc_maintenance_fees_1,"maintenance_paid_c")';
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_paid_c']['enforced']='true';
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_paid_c']['dependency']='';

 ?>