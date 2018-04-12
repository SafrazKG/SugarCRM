<?php

/**
 * @return array
 */
function getReportsList() {
    $reportsBean = BeanFactory::retrieveBean('Reports');
    $reportsBean->disable_row_level_security = true;

    $query = new SugarQuery();
    $query->select(['id','name']);
    $query->from($reportsBean);

    $reportsBean->disable_row_level_security = false;

    $reports = $query->execute();

    if (empty($reports)) {
        return [];
    }

    $formattedReports = [];

    foreach ($reports as $report) {
        $formattedReports[$report['id']] = $report['name'];
    }

    return $formattedReports;
}