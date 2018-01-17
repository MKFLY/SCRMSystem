<?php
// created: 2018-01-17 12:50:09
$dictionary["Project"]["fields"]["mkk_mycompany_project"] = array (
  'name' => 'mkk_mycompany_project',
  'type' => 'link',
  'relationship' => 'mkk_mycompany_project',
  'source' => 'non-db',
  'module' => 'mkk_myCompany',
  'bean_name' => false,
  'vname' => 'LBL_MKK_MYCOMPANY_PROJECT_FROM_MKK_MYCOMPANY_TITLE',
  'id_name' => 'mkk_mycompany_projectmkk_mycompany_ida',
);
$dictionary["Project"]["fields"]["mkk_mycompany_project_name"] = array (
  'name' => 'mkk_mycompany_project_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKK_MYCOMPANY_PROJECT_FROM_MKK_MYCOMPANY_TITLE',
  'save' => true,
  'id_name' => 'mkk_mycompany_projectmkk_mycompany_ida',
  'link' => 'mkk_mycompany_project',
  'table' => 'mkk_mycompany',
  'module' => 'mkk_myCompany',
  'rname' => 'name',
);
$dictionary["Project"]["fields"]["mkk_mycompany_projectmkk_mycompany_ida"] = array (
  'name' => 'mkk_mycompany_projectmkk_mycompany_ida',
  'type' => 'link',
  'relationship' => 'mkk_mycompany_project',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKK_MYCOMPANY_PROJECT_FROM_PROJECT_TITLE',
);
