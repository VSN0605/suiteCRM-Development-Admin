<?php 

$job_strings[] = 'CustomScheduler';

function CustomScheduler()
{

    global $db;

    $GLOBALS['log']->fatal("Custom Scheduler Running");

    $GLOBALS['log']->fatal("Custom Scheduler Running End");

    return true;
}