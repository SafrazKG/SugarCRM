<?php
 // created: 2018-03-14 16:15:19
$dictionary['RRAPT_Admin']['fields']['day_field_c']['duplicate_merge_dom_value']=0;
$dictionary['RRAPT_Admin']['fields']['day_field_c']['labelValue']='Day';
$dictionary['RRAPT_Admin']['fields']['day_field_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['RRAPT_Admin']['fields']['day_field_c']['calculated']='true';
$dictionary['RRAPT_Admin']['fields']['day_field_c']['formula']='ifElse(equal(dayofweek($date_field_c),0),"Sunday",ifElse(equal(dayofweek($date_field_c),1),"Monday",ifElse(equal(dayofweek($date_field_c),2),"Tuesday",ifElse(equal(dayofweek($date_field_c),3),"Wednesday",ifElse(equal(dayofweek($date_field_c),4),"Thursday",ifElse(equal(dayofweek($date_field_c),5),"Friday",ifElse(equal(dayofweek($date_field_c),6),"Saturday","")))))))';
$dictionary['RRAPT_Admin']['fields']['day_field_c']['enforced']='true';
$dictionary['RRAPT_Admin']['fields']['day_field_c']['dependency']='';

 ?>