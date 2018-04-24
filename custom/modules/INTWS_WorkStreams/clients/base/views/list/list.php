<?php
$module_name = 'INTWS_WorkStreams';
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
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'intwg_workstreamgenerators_intws_workstreams_1_name',
                'label' => 'LBL_INTWG_WORKSTREAMGENERATORS_INTWS_WORKSTREAMS_1_FROM_INTWG_WORKSTREAMGENERATORS_TITLE',
                'enabled' => true,
                'id' => 'INTWG_WORKCB55ERATORS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'description_mobile_c',
                'label' => 'LBL_DESCRIPTION_MOBILE',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
              ),
              5 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => false,
              ),
              6 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
