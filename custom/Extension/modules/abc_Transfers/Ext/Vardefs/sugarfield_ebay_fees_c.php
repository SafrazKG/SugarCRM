<?php
 // created: 2018-05-02 09:23:00
$dictionary['abc_Transfers']['fields']['ebay_fees_c']['duplicate_merge_dom_value']=0;
$dictionary['abc_Transfers']['fields']['ebay_fees_c']['labelValue']='eBay Fees';
$dictionary['abc_Transfers']['fields']['ebay_fees_c']['calculated']='true';
$dictionary['abc_Transfers']['fields']['ebay_fees_c']['formula']='multiply(number("$37.50"),number($number_of_times_relisted_c))';
$dictionary['abc_Transfers']['fields']['ebay_fees_c']['enforced']='true';
$dictionary['abc_Transfers']['fields']['ebay_fees_c']['dependency']='';
$dictionary['abc_Transfers']['fields']['ebay_fees_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>