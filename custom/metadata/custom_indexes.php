<?php
/**
 * custom/metadata/custom_indexes.php
 */

if (isset($db) && $db) {
    
    $db->setOption('skip_index_rebuild', false);
    unset($repairedTables['rrapt_calendar_cstm']);

    $dictionary['rrapt_calendar_cstm'] = array(
        'table' => 'rrapt_calendar_cstm',
        'fields' => 
        array(
            0 =>
            array(
                'name' => 'id_c',
                'type' => 'id',
            ),
        ),
        'indices' => array(
            array(
                'name' => 'idx_rrapt_available_slots',
                'type' => 'index',
                'fields' => array('start_date_c', 'product_c'),
            ),
        ),
    );

    $dictionary['rrapt_admin_cstm'] = array(
        'table' => 'rrapt_admin_cstm',
        'fields' => 
        array(
            0 =>
            array(
                'name' => 'id_c',
                'type' => 'id',
            ),
        ),
        'indices' => array(
            array(
                'name' => 'idx_rrapt_date',
                'type' => 'index',
                'fields' => array('date_field_c'),
            ),
        ),
    );

}