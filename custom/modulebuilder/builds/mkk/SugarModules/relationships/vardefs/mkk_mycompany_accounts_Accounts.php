<?php
// created: 2018-01-17 12:50:09
$dictionary["Account"]["fields"]["mkk_mycompany_accounts"] = array (
  'name' => 'mkk_mycompany_accounts',
  'type' => 'link',
  'relationship' => 'mkk_mycompany_accounts',
  'source' => 'non-db',
  'module' => 'mkk_myCompany',
  'bean_name' => false,
  'vname' => 'LBL_MKK_MYCOMPANY_ACCOUNTS_FROM_MKK_MYCOMPANY_TITLE',
  'id_name' => 'mkk_mycompany_accountsmkk_mycompany_ida',
);
$dictionary["Account"]["fields"]["mkk_mycompany_accounts_name"] = array (
  'name' => 'mkk_mycompany_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKK_MYCOMPANY_ACCOUNTS_FROM_MKK_MYCOMPANY_TITLE',
  'save' => true,
  'id_name' => 'mkk_mycompany_accountsmkk_mycompany_ida',
  'link' => 'mkk_mycompany_accounts',
  'table' => 'mkk_mycompany',
  'module' => 'mkk_myCompany',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["mkk_mycompany_accountsmkk_mycompany_ida"] = array (
  'name' => 'mkk_mycompany_accountsmkk_mycompany_ida',
  'type' => 'link',
  'relationship' => 'mkk_mycompany_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKK_MYCOMPANY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);
