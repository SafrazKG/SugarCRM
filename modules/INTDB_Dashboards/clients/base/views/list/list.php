<?php
$module_name = 'INTDB_Dashboards';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              array (
                'name' => 'id',
                'label' => 'LBL_ID',
                'type' => 'hidden',
                'default' => false,
                'enabled' => true,
                'link' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
