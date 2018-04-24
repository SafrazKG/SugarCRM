<?php

namespace abc_Transfers\CustomerJourney;

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
        return \DRI_Workflow_Template::listEnumValuesByModule('abc_Transfers');
    }
}
