<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$viewdefs['INTDB_Dashboards']['base']['filter']['basic'] = array(
    'create'               => false,
    'quicksearch_field'    => array('full_name'),
    'quicksearch_priority' => 1,
    'quicksearch_split_terms' => false,
);
