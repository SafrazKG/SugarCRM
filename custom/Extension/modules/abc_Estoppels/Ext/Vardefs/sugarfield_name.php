<?php
 // created: 2018-04-26 13:35:32
$dictionary['abc_Estoppels']['fields']['name']['len']='255';
$dictionary['abc_Estoppels']['fields']['name']['audited']=false;
$dictionary['abc_Estoppels']['fields']['name']['massupdate']=false;
$dictionary['abc_Estoppels']['fields']['name']['importable']='false';
$dictionary['abc_Estoppels']['fields']['name']['duplicate_merge']='disabled';
$dictionary['abc_Estoppels']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['abc_Estoppels']['fields']['name']['merge_filter']='disabled';
$dictionary['abc_Estoppels']['fields']['name']['unified_search']=false;
$dictionary['abc_Estoppels']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['abc_Estoppels']['fields']['name']['calculated']='1';
$dictionary['abc_Estoppels']['fields']['name']['formula']='concat("Estoppel - ",related($abc_transfers_abc_estoppels_1,"poperty_id_c"))';
$dictionary['abc_Estoppels']['fields']['name']['enforced']=true;

 ?>