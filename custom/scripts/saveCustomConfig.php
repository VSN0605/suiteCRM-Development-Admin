<?php
if (!defined('sugarEntry')) define('sugarEntry', true);
require_once(__DIR__ . '/../../include/entryPoint.php');
require_once('modules/Configurator/Configurator.php');

$configurator = new Configurator();
$configurator->loadConfig();

// Set your custom value
$configurator->config['custom_settings']['my_custom_value'] = 'HelloSuiteCRM';
$configurator->saveConfig();

$GLOBALS['log']->info("Custom setting saved successfully.");
echo "Custom setting saved successfully.";
