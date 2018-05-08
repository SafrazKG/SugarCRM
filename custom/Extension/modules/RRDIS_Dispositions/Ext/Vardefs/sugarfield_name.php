<?php
 // created: 2018-05-04 07:59:09
$dictionary['RRDIS_Dispositions']['fields']['name']['len']='255';
$dictionary['RRDIS_Dispositions']['fields']['name']['audited']=false;
$dictionary['RRDIS_Dispositions']['fields']['name']['massupdate']=false;
$dictionary['RRDIS_Dispositions']['fields']['name']['importable']='false';
$dictionary['RRDIS_Dispositions']['fields']['name']['duplicate_merge']='disabled';
$dictionary['RRDIS_Dispositions']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['RRDIS_Dispositions']['fields']['name']['merge_filter']='disabled';
$dictionary['RRDIS_Dispositions']['fields']['name']['unified_search']=false;
$dictionary['RRDIS_Dispositions']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['RRDIS_Dispositions']['fields']['name']['calculated']='true';
$dictionary['RRDIS_Dispositions']['fields']['name']['formula']='concat($sub_disposition_c,"-",related($leads_rrdis_dispositions_1,"name"))';
$dictionary['RRDIS_Dispositions']['fields']['name']['enforced']=true;

 ?>