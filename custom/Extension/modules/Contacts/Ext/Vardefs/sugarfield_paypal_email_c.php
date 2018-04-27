<?php
 // created: 2018-04-25 11:20:57
$dictionary['Contact']['fields']['paypal_email_c']['labelValue']='Paypal Email';
$dictionary['Contact']['fields']['paypal_email_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['paypal_email_c']['enforced']='';
$dictionary['Contact']['fields']['paypal_email_c']['dependency']='isInList($contact_type_c,createList("Buyer"))';

 ?>