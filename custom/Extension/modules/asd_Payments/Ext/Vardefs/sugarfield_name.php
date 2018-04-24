<?php
 // created: 2018-04-23 11:44:21
$dictionary['asd_Payments']['fields']['name']['len']='255';
$dictionary['asd_Payments']['fields']['name']['audited']=false;
$dictionary['asd_Payments']['fields']['name']['massupdate']=false;
$dictionary['asd_Payments']['fields']['name']['importable']='false';
$dictionary['asd_Payments']['fields']['name']['duplicate_merge']='disabled';
$dictionary['asd_Payments']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['asd_Payments']['fields']['name']['merge_filter']='disabled';
$dictionary['asd_Payments']['fields']['name']['unified_search']=false;
$dictionary['asd_Payments']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['asd_Payments']['fields']['name']['calculated']='true';
$dictionary['asd_Payments']['fields']['name']['formula']='concat(toString($amount_c)," - ",toString($status_c)," - ",toString($process_date_c))';
$dictionary['asd_Payments']['fields']['name']['enforced']=true;

 ?>