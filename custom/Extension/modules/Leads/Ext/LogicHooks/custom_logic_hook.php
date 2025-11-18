<?php

$hook_version = 1;
$hook_array = array();
                                 
$hook_array['before_save'][] = array(
    77, // execution order
    'After Save Logic Hook Example', // description
    'custom/modules/Leads/before_save_hook.php', // file path
    'beforeSaveHook', // class name
    'beforeSaveMethod' // function/method  name
); 
                                                  
$hook_array['after_delete'][] = array(
    76,
    'After Delete logic hook example',
    'custom/modules/Leads/before_save_hook.php',
    'beforeSaveHook',
    'afterDeleteMethod'
); 