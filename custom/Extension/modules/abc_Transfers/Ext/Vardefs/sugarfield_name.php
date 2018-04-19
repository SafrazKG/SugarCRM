<?php
 // created: 2018-04-17 13:55:39
$dictionary['abc_Transfers']['fields']['name']['len']='255';
$dictionary['abc_Transfers']['fields']['name']['audited']=false;
$dictionary['abc_Transfers']['fields']['name']['massupdate']=false;
$dictionary['abc_Transfers']['fields']['name']['importable']='false';
$dictionary['abc_Transfers']['fields']['name']['duplicate_merge']='disabled';
$dictionary['abc_Transfers']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['abc_Transfers']['fields']['name']['merge_filter']='disabled';
$dictionary['abc_Transfers']['fields']['name']['unified_search']=false;
$dictionary['abc_Transfers']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['abc_Transfers']['fields']['name']['calculated']='true';
$dictionary['abc_Transfers']['fields']['name']['formula']='concat(related($leads_abc_transfers_1,"name")," - ",$resort_c," - ","Transfer")';
$dictionary['abc_Transfers']['fields']['name']['enforced']=true;

 ?>