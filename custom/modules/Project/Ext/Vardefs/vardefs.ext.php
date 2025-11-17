<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2025-11-14 05:41:35
$dictionary["Project"]["fields"]["accounts_project_1"] = array (
  'name' => 'accounts_project_1',
  'type' => 'link',
  'relationship' => 'accounts_project_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PROJECT_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_project_1accounts_ida',
);
$dictionary["Project"]["fields"]["accounts_project_1_name"] = array (
  'name' => 'accounts_project_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PROJECT_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_project_1accounts_ida',
  'link' => 'accounts_project_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Project"]["fields"]["accounts_project_1accounts_ida"] = array (
  'name' => 'accounts_project_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_project_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PROJECT_1_FROM_PROJECT_TITLE',
);


 // created: 2025-11-11 09:01:42
$dictionary['Project']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2025-11-11 09:01:42
$dictionary['Project']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2025-11-11 09:01:42
$dictionary['Project']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2025-11-11 09:01:41
$dictionary['Project']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>