<?php

$hook_array['before_save'][] = array (
    50,
    'Leads custom logic after convert',
    'custom/modules/Leads/LogicHook/customConvertLogic.php',
    'CustomConvertLogic',
    'onConvert'
);
