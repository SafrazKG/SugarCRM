<?php
$hook_array['after_save'][] = [
    1,
    'After WSG has been updated check if it was disabled and remove all of its work streams',
    'custom/modules/INTWG_WorkStreamGenerators/LogicHooks/WSGUpdater.php',
    'WSGUpdater',
    'update',
];

$hook_array['before_delete'][] = [
    1,
    'After deletion remove all work stream items',
    'custom/modules/INTWG_WorkStreamGenerators/LogicHooks/WSGUpdater.php',
    'WSGUpdater',
    'removeWorkStreams',
];