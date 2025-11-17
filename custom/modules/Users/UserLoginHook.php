<?php

class afterLoginHook
{
    function afterLoginMethod($bean, $event, $arguments)
    {
        global $current_user;

        $GLOBALS['log']->fatal($current_user->user_name .' Logged in at '. date("y-m-d h-i-s"));        
    }
}