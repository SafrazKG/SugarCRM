<?php
 // created: 2018-04-26 13:36:27
$dictionary['abc_Inventories']['fields']['name']['len']='255';
$dictionary['abc_Inventories']['fields']['name']['audited']=false;
$dictionary['abc_Inventories']['fields']['name']['massupdate']=false;
$dictionary['abc_Inventories']['fields']['name']['importable']='false';
$dictionary['abc_Inventories']['fields']['name']['duplicate_merge']='disabled';
$dictionary['abc_Inventories']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['abc_Inventories']['fields']['name']['merge_filter']='disabled';
$dictionary['abc_Inventories']['fields']['name']['unified_search']=false;
$dictionary['abc_Inventories']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['abc_Inventories']['fields']['name']['calculated']='1';
$dictionary['abc_Inventories']['fields']['name']['formula']='concat("Inventory - ",related($abc_transfers_abc_inventories_1,"poperty_id_c"))';
$dictionary['abc_Inventories']['fields']['name']['enforced']=true;

 ?>