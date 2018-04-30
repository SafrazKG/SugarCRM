<?php

class RRAPT_CalendarHooks {
    
    public function beforeSave($bean, $event, $arguments) {
        if ($arguments['isUpdate'] && !in_array($bean->fetched_row['disposition_c'], array("Set", "Confirmed"))) throw new SugarApiExceptionNotAuthorized();
    }
    
}