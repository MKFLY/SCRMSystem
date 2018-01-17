<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-01-17 12:50:09
$dictionary["User"]["fields"]["mkk_mycompany_users"] = array (
  'name' => 'mkk_mycompany_users',
  'type' => 'link',
  'relationship' => 'mkk_mycompany_users',
  'source' => 'non-db',
  'module' => 'mkk_myCompany',
  'bean_name' => false,
  'vname' => 'LBL_MKK_MYCOMPANY_USERS_FROM_MKK_MYCOMPANY_TITLE',
  'id_name' => 'mkk_mycompany_usersmkk_mycompany_ida',
);
$dictionary["User"]["fields"]["mkk_mycompany_users_name"] = array (
  'name' => 'mkk_mycompany_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKK_MYCOMPANY_USERS_FROM_MKK_MYCOMPANY_TITLE',
  'save' => true,
  'id_name' => 'mkk_mycompany_usersmkk_mycompany_ida',
  'link' => 'mkk_mycompany_users',
  'table' => 'mkk_mycompany',
  'module' => 'mkk_myCompany',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["mkk_mycompany_usersmkk_mycompany_ida"] = array (
  'name' => 'mkk_mycompany_usersmkk_mycompany_ida',
  'type' => 'link',
  'relationship' => 'mkk_mycompany_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKK_MYCOMPANY_USERS_FROM_USERS_TITLE',
);

?>