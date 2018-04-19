<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

require_once('clients/base/api/ConfigModuleApi.php');
require_once('modules/INTDB_Dashboards/ExceptionLicenseInvalid.php');
require_once('modules/INTDB_Dashboards/LicenseChecker.php');

class INTDBConfigApi extends ConfigModuleApi
{

    public function registerApiRest() {
        return array(
            'checkLicense' => array(
                'reqType' => 'GET',
                'path' => array('INTDB_Dashboards', 'config', 'check'),
                'pathVars' => array('module', 'config', 'check'),
                'method' => 'checkLicense',
                'shortHelp' => translate('LBL_RETRIEVES_CONFIG_FOR_GIVEN_MODULE', 'INTDB_Dashboards'),
                'longHelp' => '',
            ),
            'config' => array(
                'reqType' => 'GET',
                'path' => array('INTDB_Dashboards', 'config'),
                'pathVars' => array('module', ''),
                'method' => 'config',
                'shortHelp' => translate('LBL_RETRIEVES_CONFIG_FOR_GIVEN_MODULE', 'INTDB_Dashboards'),
                'longHelp' => '',
            ),
            'configCreate' => array(
                'reqType' => 'POST',
                'path' => array('INTDB_Dashboards', 'config'),
                'pathVars' => array('module', ''),
                'method' => 'configSave',
                'shortHelp' => translate('LBL_CREATES_THE_CONFIG_ENTRIES', 'INTDB_Dashboards'),
                'longHelp' => '',
            ),
            'configUpdate' => array(
                'reqType' => 'PUT',
                'path' => array('INTDB_Dashboards', 'config'),
                'pathVars' => array('module', ''),
                'method' => 'configSave',
                'shortHelp' => translate('LBL_UPDATES_THE_CONFIG_ENTRIES', 'INTDB_Dashboards'),
                'longHelp' => '',
            ),
        );
    }

    /**
     * Returns the config settings for the given module
     *
     * @throws SugarApiExceptionNotAuthorized
     * @param ServiceBase $api
     * @param $args 'module' is required, 'platform' is optional and defaults to 'base'
     * @return array
     */
    public function config($api, $args)
    {
        $this->requireArgs($args, array('module'));
        $adminBean = BeanFactory::getBean("Administration");

        //acl check
        if (!$api->user->isAdmin()) {
            // No create access so we construct an error message and throw the exception
            $moduleName = null;
            if (isset($args['module'])) {
                $failed_module_strings = return_module_language($GLOBALS['current_language'], $args['module']);
                $moduleName = $failed_module_strings['LBL_MODULE_NAME'];
            }
            $args = null;
            if (!empty($moduleName)) {
                $args = array('moduleName' => $moduleName);
            }
            throw new SugarApiExceptionNotAuthorized(
                $GLOBALS['app_strings']['EXCEPTION_ACCESS_MODULE_CONFIG_NOT_AUTHORIZED'],
                $args
            );
        }

        if (!empty($args['module'])) {
            return $adminBean->getConfigForModule($args['module'], $this->getPlatform($api->platform));
        }
        return;
    }

    /**
     * Check license from saved config values
     * @param ServiceBase $api
     * @param $args
     * @return array
     * @throws SugarApiExceptionNotAuthorized
     */
    public function checkLicense($api, $args) {
        $data = array();
        $this->requireArgs($args, array('module'));
        if (!$api->user->isAdmin()) {
            throw new SugarApiExceptionNotAuthorized(
                $GLOBALS['app_strings']['EXCEPTION_ACCESS_MODULE_CONFIG_NOT_AUTHORIZED']
            );
        }
        if (!empty($args['module'])) {
            try {
                $validator = new \INTDB_Dashboards\LicenseChecker();
                if (!$validator->validateLicense()) {
                    $message = translate('LBL_INVALID_OR_EXPIRED_LICENCE', 'INTDB_Dashboards');
                    $data['errors'] = $message;
                }
                $expiryDate = $validator->getLicenseExpirationDate();
                if ($expiryDate) {
                    $data['expiryDate'] = $expiryDate;
                }
            } catch (Exception $e) {
                $message = translate('LBL_INVALID_OR_EXPIRED_LICENCE', 'INTDB_Dashboards');
                $data['errors'] = $message;
            }
        }
        return $data;
    }
}