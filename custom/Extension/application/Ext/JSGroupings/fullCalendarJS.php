<?php
foreach ($js_groupings as $key => $groupings)
{
    foreach  ($groupings as $file => $target)
    {
        //if the target grouping is found
        if ($target == 'include/javascript/sugar_grp7.min.js')
        {
            $js_groupings[$key]['custom/js/fullcalendar.min.js'] = 'include/javascript/sugar_grp7.min.js';
            $js_groupings[$key]['custom/js/scheduler.min.js'] = 'include/javascript/sugar_grp7.min.js';
            $js_groupings[$key]['custom/js/slot_availability.js'] = 'include/javascript/sugar_grp7.min.js';
        }
        break;
    }
}
?>