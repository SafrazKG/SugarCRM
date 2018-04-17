<?php
 // created: 2018-04-11 09:24:41
$dictionary['RRRC_Requested_Checks']['fields']['name']['len']='255';
$dictionary['RRRC_Requested_Checks']['fields']['name']['audited']=false;
$dictionary['RRRC_Requested_Checks']['fields']['name']['massupdate']=false;
$dictionary['RRRC_Requested_Checks']['fields']['name']['importable']='false';
$dictionary['RRRC_Requested_Checks']['fields']['name']['duplicate_merge']='disabled';
$dictionary['RRRC_Requested_Checks']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['RRRC_Requested_Checks']['fields']['name']['merge_filter']='disabled';
$dictionary['RRRC_Requested_Checks']['fields']['name']['unified_search']=false;
$dictionary['RRRC_Requested_Checks']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['RRRC_Requested_Checks']['fields']['name']['calculated']='1';
$dictionary['RRRC_Requested_Checks']['fields']['name']['formula']='concat(related($accounts_rrrc_requested_checks_1,"name")," - ",$purpose_c," - ",$check_rr_c)';
$dictionary['RRRC_Requested_Checks']['fields']['name']['enforced']=true;

 ?>