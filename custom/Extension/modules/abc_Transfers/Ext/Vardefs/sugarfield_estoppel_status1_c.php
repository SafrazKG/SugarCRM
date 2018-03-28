<?php
 // created: 2018-03-27 09:12:49
$dictionary['abc_Transfers']['fields']['estoppel_status1_c']['duplicate_merge_dom_value']=0;
$dictionary['abc_Transfers']['fields']['estoppel_status1_c']['labelValue']='Estoppel Status';
$dictionary['abc_Transfers']['fields']['estoppel_status1_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['abc_Transfers']['fields']['estoppel_status1_c']['calculated']='1';
$dictionary['abc_Transfers']['fields']['estoppel_status1_c']['formula']='related($abc_transfers_abc_estoppels_1,"status_c")';
$dictionary['abc_Transfers']['fields']['estoppel_status1_c']['enforced']='1';
$dictionary['abc_Transfers']['fields']['estoppel_status1_c']['dependency']='';

 ?>