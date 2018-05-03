<?php
 // created: 2018-05-01 14:03:40
$dictionary['abc_Mortgages']['fields']['legal_costs_c']['labelValue']='Legal Costs (35% of Retainer)';
$dictionary['abc_Mortgages']['fields']['legal_costs_c']['formula']='multiply(divide($retainer_c,100),35)';
$dictionary['abc_Mortgages']['fields']['legal_costs_c']['enforced']='false';
$dictionary['abc_Mortgages']['fields']['legal_costs_c']['dependency']='';
$dictionary['abc_Mortgages']['fields']['legal_costs_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>