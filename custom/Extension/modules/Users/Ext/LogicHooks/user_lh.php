<?php
 
$hook_array['after_login'][] = array(
    70, 
    'After user login Logic Hook Example', // description
    'custom/modules/Users/UserLoginHook.php', // file path
    'afterLoginHook', // class name
    'afterLoginMethod' // function/method  name
);