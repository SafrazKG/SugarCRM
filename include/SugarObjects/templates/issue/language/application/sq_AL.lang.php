<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$object_name = strtolower($object_name);
 $app_list_strings = array (

  $object_name.'_type_dom' =>
  array (
  	'Administration' => 'Administration',
    'Product' => 'Produkti',
    'User' => 'Përdorues',
  ),
   $object_name.'_status_dom' =>
  array (
    'New' => 'E re',
    'Assigned' => 'Drejtuar',
    'Closed' => 'Mbyllur',
    'Pending Input' => 'Të hyrat e pezulluara',
    'Rejected' => 'Anuluar',
    'Duplicate' => 'Dublo',
  ),
  $object_name.'_priority_dom' =>
  array (
    'P1' => 'I lartë',
    'P2' => 'Mesatar',
    'P3' => 'I ulët',
  ),
  $object_name.'_resolution_dom' =>
  array (
  	'' => '',
  	'Accepted' => 'I pranuar',
    'Duplicate' => 'Dublo',
    'Closed' => 'Mbyllur',
    'Out of Date' => 'Jashtë datës',
    'Invalid' => 'Jo valide',
  ),
  );
?>