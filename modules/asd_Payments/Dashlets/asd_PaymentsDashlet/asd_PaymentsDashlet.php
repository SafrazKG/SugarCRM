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
/*********************************************************************************
 * $Id$
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('modules/asd_Payments/asd_Payments.php');

class asd_PaymentsDashlet extends DashletGeneric { 
    public function __construct($id, $def = null)
    {
		global $current_user, $app_strings;
		require('modules/asd_Payments/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'asd_Payments');

        $this->searchFields = $dashletData['asd_PaymentsDashlet']['searchFields'];
        $this->columns = $dashletData['asd_PaymentsDashlet']['columns'];

        $this->seedBean = new asd_Payments();        
    }
}