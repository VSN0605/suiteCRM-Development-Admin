<?php
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
