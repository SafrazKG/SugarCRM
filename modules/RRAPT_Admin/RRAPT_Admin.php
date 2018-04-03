<?PHP
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
/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/RRAPT_Admin/RRAPT_Admin_sugar.php');
class RRAPT_Admin extends RRAPT_Admin_sugar {
    
    public function ACLAccess($view, $context = null) {
        if (in_array($view, ['list']) && $this->isFromCalendarApi() && ($this->hasRole('fronter') || $this->hasRole('closer') || $this->hasRole('calendar_admin'))) {
            return true;
        }
        return parent::ACLAccess($view, $context);
    }

    /*
     * Helper function to get user's role ids
     *
     * @return array
     * 
     */    
    public function getUserRoleIds() {
        if (!isset($GLOBALS['GetUserRolesIds'])) {
            $ids = [];
            $roles = ACLRole::getUserRoles($GLOBALS['current_user']->id, false);
            foreach ($roles as $r) {
                $ids[] = $r->id;
            }
            $GLOBALS['GetUserRolesIds'] = $ids;
        }
        return $GLOBALS['GetUserRolesIds'];
    }
    
    /*
     * Helper function to check does user belongs to specific role
     *
     * @return boolean
     * 
     */    
    public function hasRole($role, $roles = null) {
        if (!$roles) $roles = $this->getUserRoleIds();
        foreach ($roles as $r) {
            if ($r==$role) return true;
        }
        return false;
    }
    
    private function isFromCalendarApi() {
        $debug = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        foreach ($debug as $arr) {
            if ($arr['class']=='CalendarFilterApi') return true;
        }
        return false;
    }

}