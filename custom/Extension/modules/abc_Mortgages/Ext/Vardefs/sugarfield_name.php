<?php
 // created: 2018-04-18 06:38:00
$dictionary['abc_Mortgages']['fields']['name']['len']='255';
$dictionary['abc_Mortgages']['fields']['name']['audited']=false;
$dictionary['abc_Mortgages']['fields']['name']['massupdate']=false;
$dictionary['abc_Mortgages']['fields']['name']['importable']='false';
$dictionary['abc_Mortgages']['fields']['name']['duplicate_merge']='disabled';
$dictionary['abc_Mortgages']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['abc_Mortgages']['fields']['name']['merge_filter']='disabled';
$dictionary['abc_Mortgages']['fields']['name']['unified_search']=false;
$dictionary['abc_Mortgages']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['abc_Mortgages']['fields']['name']['calculated']='true';
$dictionary['abc_Mortgages']['fields']['name']['formula']='concat(related($leads_abc_mortgages_1,"name")," - ",$resort_c," - ","Mortgage")';
$dictionary['abc_Mortgages']['fields']['name']['enforced']=true;

 ?>