<?php
require_once('include/MVC/View/SugarView.php');
 
class ContactsViewMysettings extends SugarView
{

    public function display()
    {
        global $sugar_config, $currentModule;
        $administration = BeanFactory::newBean('Administration');
 
        if(trim($_REQUEST['submitbutton']) == 'Submit'){
             $administration->saveSetting('mysettings', 'username', trim($_POST['username']));
             $administration->saveSetting('mysettings', 'password', trim($_POST['password']));
             $administration->saveSetting('mysettings', 'email', trim($_POST['email']));
             $administration->saveSetting('mysettings', 'message', trim($_POST['message']));
             $GLOBALS['log']->info('Custom setting saved successfully.');
             $GLOBALS['log']->fatal('Custom setting saved successfully.');
        }
               
        $retrieveSettings = $administration->retrieveSettings('mysettings');
        $GLOBALS['log']->info($retrieveSettings->settings['mysettings_username']);
        $GLOBALS['log']->fatal($retrieveSettings->settings['mysettings_username']);
                   
        $this->ss->assign("username", $retrieveSettings->settings['mysettings_username']);
        $this->ss->assign("password", $retrieveSettings->settings['mysettings_password']);
        $this->ss->assign("email", $retrieveSettings->settings['mysettings_email']);
        $this->ss->assign("message", $retrieveSettings->settings['mysettings_message']);
        $this->ss->display('custom/modules/' . $currentModule . '/tpls/mysettings.tpl');
                
    }
}
 