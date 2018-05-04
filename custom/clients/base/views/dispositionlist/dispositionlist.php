<?php
/**
 * Metadata for the Dispositionlist dashlet view
 *
 * This dashlet is only allowed to appear on the Leads module's record view
 */
$viewdefs['base']['view']['dispositionlist'] = array(
    'dashlets' => array(
        array(
            'label' => 'Dispositions',
            'description' => 'Shows Lead related Disposition records',
            'config' => array(
            ),
            'preview' => array(
            ),
            'filter' => array(
                'module' => array(
                    'Leads',
                ),
                'view' => array(
                    'record',
                )
            )
        ),
    ),
);