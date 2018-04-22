<?php

require_once ("custom/include/Intelestream/Utilities/WorkStreamProcessor.php");

array_push($job_strings, 'populate_work_stream');
function populate_work_stream() {
    global $log;

    try {
        $processor = new WorkStreamProcessor();
        $processor->process();
    } catch (\Exception $e) {
        $log->error($e->getMessage());
    }

    return true;
}