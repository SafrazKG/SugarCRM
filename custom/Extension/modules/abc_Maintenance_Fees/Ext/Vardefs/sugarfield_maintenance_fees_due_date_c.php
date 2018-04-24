<?php
 // created: 2018-04-20 14:21:05
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_fees_due_date_c']['duplicate_merge_dom_value']=0;
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_fees_due_date_c']['labelValue']='Maintenance Fees Due Date';
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_fees_due_date_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_fees_due_date_c']['calculated']='true';
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_fees_due_date_c']['formula']='related($abc_transfers_abc_maintenance_fees_1,"maintenance_fees_due_date_c")';
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_fees_due_date_c']['enforced']='true';
$dictionary['abc_Maintenance_Fees']['fields']['maintenance_fees_due_date_c']['dependency']='';

 ?>