<?php
 // created: 2018-03-27 09:20:17
$dictionary['abc_Transfers']['fields']['deedback_status1_c']['duplicate_merge_dom_value']=0;
$dictionary['abc_Transfers']['fields']['deedback_status1_c']['labelValue']='Deedback Status';
$dictionary['abc_Transfers']['fields']['deedback_status1_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['abc_Transfers']['fields']['deedback_status1_c']['calculated']='true';
$dictionary['abc_Transfers']['fields']['deedback_status1_c']['formula']='related($abc_transfers_abc_deedbacks_1,"status_c")';
$dictionary['abc_Transfers']['fields']['deedback_status1_c']['enforced']='true';
$dictionary['abc_Transfers']['fields']['deedback_status1_c']['dependency']='';

 ?>