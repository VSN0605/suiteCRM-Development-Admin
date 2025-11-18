<?php 

$data = file_get_contents('php://input');
$parseData = json_decode($data,true);

global $current_user;

$username = $current_user->user_name;

echo "Hello " . $username . ", welcome to SuiteCRM Developer Test!";

// http://localhost/crm_folder/testingCRM/index.php?entryPoint=myCustomEntryPoint 