<?php
$job_strings[] = 'myCustomScheduler';

function myCustomScheduler()
{

    global $db;

    $GLOBALS['log']->fatal("========= sendDailyReportJob Started ==========");

    $query = "select count(*) as total from accounts where deleted=0 and date_entered like '%".date('Y-m-d')."%'";
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    $count = $row['total'];

    $GLOBALS['log']->fatal(" Account created by today : ". $count );

    $GLOBALS['log']->fatal("========= sendDailyReportJob End ==========");

    return true;
}
