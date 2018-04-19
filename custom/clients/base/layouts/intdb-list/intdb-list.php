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
global $sugar_config;

$viewdefs['base']['layout']['intdb-list'] = array(
    'components' => array(
        array(
            'layout' => array(
                'type' => 'default',
                'name' => 'sidebar',
                'components' => array(
                    array(
                        'layout' => array(
                            'type' => 'base',
                            'name' => 'main-pane',
                            'components' => array(
                                array(
                                    'view' => 'intdb-list-headerpane',
                                ),
                                array(
                                    'layout' => array(
                                        'type' => 'filterpanel',
                                        'last_state' => array(
                                            'id' => 'intdb-list-filterpanel',
                                        ),
                                        'refresh_button' => true,
                                        'availableToggles' => array(
                                        ),
                                        'components' => array(
                                            array(
                                                'layout' => 'filter',
                                                'loadModule' => 'Filters',
                                            ),
                                            array(
                                                'view' => 'filter-rows',
                                            ),
                                            array(
                                                'view' => 'filter-actions',
                                            ),
                                            array(
                                                'layout' => array(
                                                    'components' => array(
                                                        array(
                                                            'view' => 'massupdate',
                                                        ),
                                                        array(
                                                            'view' => 'massaddtolist',
                                                        ),
                                                        array(
                                                            'view' => 'intdb-recordlist',
                                                            'primary' => true,
                                                        ),
                                                        array(
                                                            'view' => 'list-bottom',
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                    array(
                        'layout' => array(
                            'type' => 'base',
                            'name' => 'preview-pane',
                            'components' => array(
                                array(
                                    'layout' => 'preview',
                                    'xmeta' => array(
                                        'editable' => false,
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);

if ($sugar_config['sugar_version']+0>=7.9) $viewdefs['base']['layout']['intdb-list']['components'][0]['layout']['components'][0]['layout']['css_class'] = 'main-pane';

