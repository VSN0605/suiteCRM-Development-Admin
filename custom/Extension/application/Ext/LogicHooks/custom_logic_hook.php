<?php

$hook_version = 1;
$hook_array = array();

$hook_array['after_save'][] = array(
    50, // execution order
    'Global after save hook - log created records', // description
    'custom/LogicHooks/GlobalAfterSaveHook.php', // file path
    'GlobalAfterSaveHook', // class name
    'afterSaveMethod' // function/method  name
);

// custom\Extension\application\Ext\LogicHooks\custom_logic_hook.php