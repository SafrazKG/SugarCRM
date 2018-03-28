<?php
 // created: 2018-03-19 11:19:33
$dictionary['RRAPT_Calendar']['fields']['name']['len']='255';
$dictionary['RRAPT_Calendar']['fields']['name']['audited']=false;
$dictionary['RRAPT_Calendar']['fields']['name']['massupdate']=false;
$dictionary['RRAPT_Calendar']['fields']['name']['importable']='false';
$dictionary['RRAPT_Calendar']['fields']['name']['duplicate_merge']='disabled';
$dictionary['RRAPT_Calendar']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['RRAPT_Calendar']['fields']['name']['merge_filter']='disabled';
$dictionary['RRAPT_Calendar']['fields']['name']['unified_search']=false;
$dictionary['RRAPT_Calendar']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['RRAPT_Calendar']['fields']['name']['calculated']='true';
$dictionary['RRAPT_Calendar']['fields']['name']['formula']='related($leads_rrapt_calendar_1,"name")';
$dictionary['RRAPT_Calendar']['fields']['name']['enforced']=true;

 ?>