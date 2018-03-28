<?php

require_once 'modules/Configurator/Configurator.php';

class RRAPT_CloseradminSaveApi extends ModuleApi {
    
    public function registerApiRest() {
        return array(
            'retrieve' => array(
                'reqType' => 'GET',
                'path' => array('RRAPT_Closeradmin','?'),
                'pathVars' => array('module','record'),
                'method' => 'extendedRetrieveRecord',
                'shortHelp' => 'Returns a single record',
                'longHelp' => 'include/api/help/module_record_get_help.html',
            ),
            'save' => array(
                'reqType' => 'PUT',
                'path' => array('RRAPT_Closeradmin', '?'),
                'pathVars' => array('module', 'record'),
                'method' => 'customSaveRecord',
                'shortHelp' => 'This method saves a record for RRAPT_Closeradmin',
                'longHelp' => 'include/api/help/module_post_help.html',
            ),
        );
    }
    
    public function customSaveRecord($api, $args) {
        $configuratorObj = new Configurator();
        $configuratorObj->loadConfig();
        $toSave = false;
        foreach ($configuratorObj->config['RRAPT_Closeradmin'] as $key => $row) {
            if ($row['id']==$args['id']) {
                $toSave = $key;
                break;
            }
        }
        if ($toSave===false) throw new SugarApiExceptionNotFound();
        $configuratorObj->config['RRAPT_Closeradmin'][$toSave] = array(
                                                                            'transfer' => $args['transfer'],    
                                                                            'mortgage' => $args['mortgage'],    
                                                                            'start_time' => $args['start_time'],    
                                                                            'end_time' => $args['end_time'],    
                                                                        );
        $configuratorObj->saveConfig();
        return $configuratorObj->config['RRAPT_Closeradmin'][$toSave];
    }
    
    public function extendedRetrieveRecord($api, $args) {
        $configuratorObj = new Configurator();
        $configuratorObj->loadConfig();
        foreach ($configuratorObj->config['RRAPT_Closeradmin'] as $row) {
            if ($row['id']==$args['record']) return $row;
        }
        throw new SugarApiExceptionNotFound();
    }

}