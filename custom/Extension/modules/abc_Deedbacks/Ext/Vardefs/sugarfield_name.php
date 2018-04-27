<?php
 // created: 2018-04-26 14:13:42
$dictionary['abc_Deedbacks']['fields']['name']['len']='255';
$dictionary['abc_Deedbacks']['fields']['name']['audited']=false;
$dictionary['abc_Deedbacks']['fields']['name']['massupdate']=false;
$dictionary['abc_Deedbacks']['fields']['name']['importable']='false';
$dictionary['abc_Deedbacks']['fields']['name']['duplicate_merge']='disabled';
$dictionary['abc_Deedbacks']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['abc_Deedbacks']['fields']['name']['merge_filter']='disabled';
$dictionary['abc_Deedbacks']['fields']['name']['unified_search']=false;
$dictionary['abc_Deedbacks']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['abc_Deedbacks']['fields']['name']['calculated']='true';
$dictionary['abc_Deedbacks']['fields']['name']['formula']='concat("Deedback - ",related($abc_transfers_abc_deedbacks_1,"poperty_id_c"))';
$dictionary['abc_Deedbacks']['fields']['name']['enforced']=true;

 ?>