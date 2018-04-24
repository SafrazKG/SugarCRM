<?php

namespace abc_Deedbacks\CustomerJourney;

/**
 * @author Emil Kilhage <emil@addoptify.com>
 */
class EnumManager
{
    /**
     * @return array
     */
    public static function listEnumValues()
    {
        return \DRI_Workflow_Template::listEnumValuesByModule('abc_Deedbacks');
    }
}
