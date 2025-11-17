<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class GlobalAfterSaveHook
{
    function afterSaveMethod($bean, $event, $arguments)
    {
        global $current_user;

        // Run only when record is created (not just updated)
        // if (!empty($arguments['isUpdate']) && $arguments['isUpdate'] == true) {
        //     return; // Skip updates
        // }

        // Only for specific 5 modules
        $targetModules = array('Accounts', 'Contacts', 'Leads', 'Opportunities', 'Cases');

        if (in_array($bean->module_dir, $targetModules)) {

            $userName = (!empty($current_user->user_name)) ? $current_user->user_name : 'System';
            $moduleName = $bean->module_dir;
            $recordId = $bean->id;

            $logMessage = "Record created in module " . $moduleName . " by user " . $userName . " — Record ID: " . $recordId;

            $GLOBALS['log']->fatal($logMessage);
        }

    }
}

// custom\LogicHooks\GlobalAfterSaveHook.php
