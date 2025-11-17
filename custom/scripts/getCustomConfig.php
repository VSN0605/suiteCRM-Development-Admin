<?php
if (!defined('sugarEntry')) define('sugarEntry', true);
require_once(__DIR__ . '/../../include/entryPoint.php');

global $sugar_config;

$myValue = $sugar_config['custom_settings']['my_custom_value'] ?? 'DefaultValue';

$GLOBALS['log']->info("Custom setting loaded successfully: " . $myValue);
echo "Custom setting loaded successfully: " . $myValue;
