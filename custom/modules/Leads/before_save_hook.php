<?php 

class beforeSaveHook
{
    // action will be perform after saving or updating record in Accounts
    function beforeSaveMethod($bean, $event, $arguments)
    {
        global $current_user;

        // $GLOBALS['log']->fatal('calling - before lead save '. date("y-m-d h-i-s"));
        $GLOBALS['log']->fatal('Lead created by ' . $current_user->user_name . ' at ' . date("y-m-d h-i-s"));
        $GLOBALS['log']->fatal('Lead ID -'.$bean->id);

        // $bean->save();
        if (empty($bean->custom_flag_c)) {
            $bean->custom_flag_c = 'AutoSetValue';
        }

    }
                                             
    // Action performed after deleting a record in Accounts
    function afterDeleteMethod($bean, $event, $arguments)
    {
        global $current_user;

        // $GLOBALS['log']->fatal('calling - after delete lead '. date("y-m-d h-i-s"));
        $GLOBALS['log']->fatal('Lead deleted by ' . $current_user->user_name . ' at ' . date("y-m-d h-i-s"));
        $GLOBALS['log']->fatal('Lead ID -'.$bean->id);
    }
}