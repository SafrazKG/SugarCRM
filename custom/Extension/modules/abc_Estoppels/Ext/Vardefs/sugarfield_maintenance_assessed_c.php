<?php
 // created: 2018-04-25 14:30:30
$dictionary['abc_Estoppels']['fields']['maintenance_assessed_c']['duplicate_merge_dom_value']=0;
$dictionary['abc_Estoppels']['fields']['maintenance_assessed_c']['labelValue']='Maintenance Assessed';
$dictionary['abc_Estoppels']['fields']['maintenance_assessed_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['abc_Estoppels']['fields']['maintenance_assessed_c']['calculated']='true';
$dictionary['abc_Estoppels']['fields']['maintenance_assessed_c']['formula']='related($abc_transfers_abc_estoppels_1,"maintenance_paid_c")';
$dictionary['abc_Estoppels']['fields']['maintenance_assessed_c']['enforced']='true';
$dictionary['abc_Estoppels']['fields']['maintenance_assessed_c']['dependency']='';

 ?>