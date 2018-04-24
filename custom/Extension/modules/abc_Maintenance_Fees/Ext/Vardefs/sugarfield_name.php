<?php
 // created: 2018-04-20 14:14:04
$dictionary['abc_Maintenance_Fees']['fields']['name']['len']='255';
$dictionary['abc_Maintenance_Fees']['fields']['name']['audited']=false;
$dictionary['abc_Maintenance_Fees']['fields']['name']['massupdate']=false;
$dictionary['abc_Maintenance_Fees']['fields']['name']['importable']='false';
$dictionary['abc_Maintenance_Fees']['fields']['name']['duplicate_merge']='disabled';
$dictionary['abc_Maintenance_Fees']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['abc_Maintenance_Fees']['fields']['name']['merge_filter']='disabled';
$dictionary['abc_Maintenance_Fees']['fields']['name']['unified_search']=false;
$dictionary['abc_Maintenance_Fees']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['abc_Maintenance_Fees']['fields']['name']['calculated']='1';
$dictionary['abc_Maintenance_Fees']['fields']['name']['formula']='concat(related($abc_transfers_abc_maintenance_fees_1,"resort_c")," - Maintenance Fee - ,")';
$dictionary['abc_Maintenance_Fees']['fields']['name']['enforced']=true;

 ?>