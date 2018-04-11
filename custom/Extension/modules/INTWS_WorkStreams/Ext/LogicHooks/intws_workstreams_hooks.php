<?php
$hook_version = 1;

$hook_array['before_save'][] = [
    1,
    'Regulate activity stamps for workstreams',
    'custom/modules/INTWS_WorkStreams/LogicHooks/HandleActivityStamps.php',
    'HandleActivityStamps',
    'handle',
];

$hook_array['after_retrieve'][] = [
    1,
    'Handle Aging Date for preview',
    'custom/modules/INTWS_WorkStreams/LogicHooks/HandleAgingAfterRetrieve.php',
    'HandleAgingAfterRetrieve',
    'valueOfAgingDate',
];

$hook_array['after_fetch_query'][] = [
    1,
    'Handle Aging Date representation',
    'custom/modules/INTWS_WorkStreams/LogicHooks/HandleAgingAfterFetch.php',
    'HandleAgingAfterFetch',
    'valueOfAgingDate',
];
