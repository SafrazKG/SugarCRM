<?php
 // created: 2018-04-25 11:51:08
$dictionary['abc_Transfers']['fields']['deedback_status1_c']['duplicate_merge_dom_value']=0;
$dictionary['abc_Transfers']['fields']['deedback_status1_c']['labelValue']='Deedback Status';
$dictionary['abc_Transfers']['fields']['deedback_status1_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['abc_Transfers']['fields']['deedback_status1_c']['calculated']='1';
$dictionary['abc_Transfers']['fields']['deedback_status1_c']['formula']='related($abc_transfers_abc_deedbacks_1,"status_c")';
$dictionary['abc_Transfers']['fields']['deedback_status1_c']['enforced']='1';

 ?>