<?php
 // created: 2018-04-25 11:19:47
$dictionary['Contact']['fields']['ssn_c']['labelValue']='SSN';
$dictionary['Contact']['fields']['ssn_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['ssn_c']['enforced']='';
$dictionary['Contact']['fields']['ssn_c']['dependency']='isInList($contact_type_c,createList("Buyer"))';

 ?>