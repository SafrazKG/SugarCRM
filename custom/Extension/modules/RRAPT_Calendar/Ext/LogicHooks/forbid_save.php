<?php

    $hook_array['before_save'][] = Array(
        1, 
        'Check is it allowed to save', 
        'custom/modules/RRAPT_Calendar/RRAPT_CalendarHooks.php', 
        'RRAPT_CalendarHooks', 
        'beforeSave'
    );