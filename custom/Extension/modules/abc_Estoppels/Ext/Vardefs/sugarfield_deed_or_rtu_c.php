<?php
 // created: 2018-04-25 13:22:19
$dictionary['abc_Estoppels']['fields']['deed_or_rtu_c']['duplicate_merge_dom_value']=0;
$dictionary['abc_Estoppels']['fields']['deed_or_rtu_c']['labelValue']='Deed or RTU';
$dictionary['abc_Estoppels']['fields']['deed_or_rtu_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['abc_Estoppels']['fields']['deed_or_rtu_c']['calculated']='true';
$dictionary['abc_Estoppels']['fields']['deed_or_rtu_c']['formula']='related($abc_transfers_abc_estoppels_1,"deeded_or_rtu_c")';
$dictionary['abc_Estoppels']['fields']['deed_or_rtu_c']['enforced']='true';
$dictionary['abc_Estoppels']['fields']['deed_or_rtu_c']['dependency']='';

 ?>