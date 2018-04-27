<?php
 // created: 2018-04-25 11:18:46
$dictionary['Contact']['fields']['position_c']['labelValue']='Position';
$dictionary['Contact']['fields']['position_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['position_c']['enforced']='false';
$dictionary['Contact']['fields']['position_c']['dependency']='isInList($contact_type_c,createList("Buyer"))';

 ?>