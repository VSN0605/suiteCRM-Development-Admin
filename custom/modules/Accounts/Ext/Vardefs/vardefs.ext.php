<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2025-11-11 10:52:13
$dictionary["Account"]["fields"]["accounts_am_projecttemplates_1"] = array (
  'name' => 'accounts_am_projecttemplates_1',
  'type' => 'link',
  'relationship' => 'accounts_am_projecttemplates_1',
  'source' => 'non-db',
  'module' => 'AM_ProjectTemplates',
  'bean_name' => 'AM_ProjectTemplates',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AM_PROJECTTEMPLATES_1_FROM_AM_PROJECTTEMPLATES_TITLE',
);


// created: 2025-11-14 05:41:35
$dictionary["Account"]["fields"]["accounts_project_1"] = array (
  'name' => 'accounts_project_1',
  'type' => 'link',
  'relationship' => 'accounts_project_1',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PROJECT_1_FROM_PROJECT_TITLE',
);



    $dictionary["Account"]["fields"]["gst_number"] = array (
        'name' => 'gst_number',
        'type' => 'varchar',
        'side' => 'right',
        'vname' => 'LBL_GST_NUMBER',
    );



// created: 2025-11-11 12:34:42
$dictionary["Account"]["fields"]["ven1_vendors_accounts_1"] = array (
  'name' => 'ven1_vendors_accounts_1',
  'type' => 'link',
  'relationship' => 'ven1_vendors_accounts_1',
  'source' => 'non-db',
  'module' => 'ven1_Vendors',
  'bean_name' => 'ven1_Vendors',
  'vname' => 'LBL_VEN1_VENDORS_ACCOUNTS_1_FROM_VEN1_VENDORS_TITLE',
  'id_name' => 'ven1_vendors_accounts_1ven1_vendors_ida',
);
$dictionary["Account"]["fields"]["ven1_vendors_accounts_1_name"] = array (
  'name' => 'ven1_vendors_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VEN1_VENDORS_ACCOUNTS_1_FROM_VEN1_VENDORS_TITLE',
  'save' => true,
  'id_name' => 'ven1_vendors_accounts_1ven1_vendors_ida',
  'link' => 'ven1_vendors_accounts_1',
  'table' => 'ven1_vendors',
  'module' => 'ven1_Vendors',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["ven1_vendors_accounts_1ven1_vendors_ida"] = array (
  'name' => 'ven1_vendors_accounts_1ven1_vendors_ida',
  'type' => 'link',
  'relationship' => 'ven1_vendors_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VEN1_VENDORS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);


 // created: 2025-11-14 09:28:10
$dictionary['Account']['fields']['customer_c']['inline_edit']='1';
$dictionary['Account']['fields']['customer_c']['labelValue']='Customer';

 

 // created: 2025-11-11 09:01:39
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2025-11-11 09:01:39
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2025-11-11 09:01:38
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2025-11-11 09:01:38
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>