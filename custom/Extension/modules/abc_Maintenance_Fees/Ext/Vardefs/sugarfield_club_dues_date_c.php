<?php
 // created: 2018-05-02 11:03:51
$dictionary['abc_Maintenance_Fees']['fields']['club_dues_date_c']['duplicate_merge_dom_value']=0;
$dictionary['abc_Maintenance_Fees']['fields']['club_dues_date_c']['labelValue']='Club Dues Date';
$dictionary['abc_Maintenance_Fees']['fields']['club_dues_date_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['abc_Maintenance_Fees']['fields']['club_dues_date_c']['calculated']='true';
$dictionary['abc_Maintenance_Fees']['fields']['club_dues_date_c']['formula']='related($abc_transfers_abc_maintenance_fees_1,"club_dues_date_c")';
$dictionary['abc_Maintenance_Fees']['fields']['club_dues_date_c']['enforced']='true';
$dictionary['abc_Maintenance_Fees']['fields']['club_dues_date_c']['dependency']='';

 ?>