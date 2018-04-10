<?php

require_once ("custom/include/Intelestream/Utilities/WorkStreamProcessor.php");

array_push($job_strings, 'remove_deleted_work_streams');
function remove_deleted_work_streams() {
    global $log;

    try {
        $processor = new WorkStreamProcessor();
        $processor->delete();
    } catch (\Exception $e) {
        $log->error($e->getMessage());
    }

    return true;
}