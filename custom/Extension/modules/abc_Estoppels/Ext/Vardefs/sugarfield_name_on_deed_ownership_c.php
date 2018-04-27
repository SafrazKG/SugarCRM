<?php
 // created: 2018-04-25 13:20:37
$dictionary['abc_Estoppels']['fields']['name_on_deed_ownership_c']['duplicate_merge_dom_value']=0;
$dictionary['abc_Estoppels']['fields']['name_on_deed_ownership_c']['labelValue']='Name on Deed/Ownership';
$dictionary['abc_Estoppels']['fields']['name_on_deed_ownership_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['abc_Estoppels']['fields']['name_on_deed_ownership_c']['calculated']='true';
$dictionary['abc_Estoppels']['fields']['name_on_deed_ownership_c']['formula']='related($abc_transfers_abc_estoppels_1,"names_on_deed_c")';
$dictionary['abc_Estoppels']['fields']['name_on_deed_ownership_c']['enforced']='true';
$dictionary['abc_Estoppels']['fields']['name_on_deed_ownership_c']['dependency']='';

 ?>