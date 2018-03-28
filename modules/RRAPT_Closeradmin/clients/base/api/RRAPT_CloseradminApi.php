<?php

require_once 'modules/Configurator/Configurator.php';

class RRAPT_CloseradminApi extends FilterApi {
    
    private $defaults = array(
                                array(
                                      'id' => 1,
                                      'day_field' => 'Monday',
                                      'transfer' => 5,
                                      'mortgage' => 5,
                                      'start_time' => '8AM',
                                      'end_time' => '10PM',
                                      ),
                                array(
                                      'id' => 2,
                                      'day_field' => 'Tuesday',
                                      'transfer' => 5,
                                      'mortgage' => 5,
                                      'start_time' => '8AM',
                                      'end_time' => '10PM',
                                      ),
                                array(
                                      'id' => 3,
                                      'day_field' => 'Wednesday',
                                      'transfer' => 5,
                                      'mortgage' => 5,
                                      'start_time' => '8AM',
                                      'end_time' => '10PM',
                                      ),
                                array(
                                      'id' => 4,
                                      'day_field' => 'Thursday',
                                      'transfer' => 5,
                                      'mortgage' => 5,
                                      'start_time' => '8AM',
                                      'end_time' => '10PM',
                                      ),
                                array(
                                      'id' => 5,
                                      'day_field' => 'Friday',
                                      'transfer' => 5,
                                      'mortgage' => 5,
                                      'start_time' => '8AM',
                                      'end_time' => '10PM',
                                      ),
                                array(
                                      'id' => 6,
                                      'day_field' => 'Saturday',
                                      'transfer' => 5,
                                      'mortgage' => 5,
                                      'start_time' => '8AM',
                                      'end_time' => '10PM',
                                      ),
                                array(
                                      'id' => 7,
                                      'day_field' => 'Sunday',
                                      'transfer' => 5,
                                      'mortgage' => 5,
                                      'start_time' => '8AM',
                                      'end_time' => '10PM',
                                      ),
                            );

    public function registerApiRest()
    {
        return array(
            'filterModuleAll' => array(
                'reqType' => 'GET',
                'path' => array('RRAPT_Closeradmin'),
                'pathVars' => array('module'),
                'method' => 'extendedFilterList',
                'jsonParams' => array('filter'),
                'shortHelp' => 'List of all records in this module',
                'longHelp' => 'include/api/help/module_filter_get_help.html',
                'exceptions' => array(
                    // Thrown in getPredefinedFilterById
                    'SugarApiExceptionNotFound',
                    'SugarApiExceptionError',
                    // Thrown in filterList and filterListSetup
                    'SugarApiExceptionInvalidParameter',
                    // Thrown in filterListSetup, getPredefinedFilterById, and parseArguments
                    'SugarApiExceptionNotAuthorized',
                ),
            ),
            'filterModuleAllCount' => array(
                'reqType' => 'GET',
                'path' => array('RRAPT_Closeradmin', 'count'),
                'pathVars' => array('module', ''),
                'jsonParams' => array('filter'),
                'method' => 'extendedGetFilterListCount',
                'shortHelp' => 'List of all records in this module',
                'longHelp' => 'include/api/help/module_filter_get_help.html',
                'exceptions' => array(
                    // Thrown in getPredefinedFilterById
                    'SugarApiExceptionNotFound',
                    'SugarApiExceptionError',
                    // Thrown in filterListSetup and getPredefinedFilterById
                    'SugarApiExceptionNotAuthorized',
                ),
            ),
            'link' => array(
                'reqType' => 'GET',
                'path' => array('RRAPT_Closeradmin', '?', 'link', '?'),
                'pathVars' => array('module', 'record', 'param', 'related'),
                'jsonParams' => array(''),
                'method' => 'emptyRecords',
            ),
       );
    }
    
    public function extendedFilterList($api, $args) {
        $configuratorObj = new Configurator();
        $configuratorObj->loadConfig();
        if (!isset($configuratorObj->config['RRAPT_Closeradmin'])) {
            $configuratorObj->config['RRAPT_Closeradmin'] = $this->defaults;
            $configuratorObj->saveConfig();
        }
        return array(
                        'next_offset' => -1,
                        'records' => $configuratorObj->config['RRAPT_Closeradmin'],
                    );
    }

    public function extendedGetFilterListCount($api, $args) {
        return array('record_count' => 7);
    }
    
    public function emptyRecords($api, $args) {
        return array(
                        'next_offset' => -1,
                        'records' => array(),
                    );
    }
    
}