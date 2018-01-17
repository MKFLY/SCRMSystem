<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-01-17 12:50:09
$dictionary["AM_ProjectTemplates"]["fields"]["mkk_mycompany_am_projecttemplates"] = array (
  'name' => 'mkk_mycompany_am_projecttemplates',
  'type' => 'link',
  'relationship' => 'mkk_mycompany_am_projecttemplates',
  'source' => 'non-db',
  'module' => 'mkk_myCompany',
  'bean_name' => false,
  'vname' => 'LBL_MKK_MYCOMPANY_AM_PROJECTTEMPLATES_FROM_MKK_MYCOMPANY_TITLE',
  'id_name' => 'mkk_mycompany_am_projecttemplatesmkk_mycompany_ida',
);
$dictionary["AM_ProjectTemplates"]["fields"]["mkk_mycompany_am_projecttemplates_name"] = array (
  'name' => 'mkk_mycompany_am_projecttemplates_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKK_MYCOMPANY_AM_PROJECTTEMPLATES_FROM_MKK_MYCOMPANY_TITLE',
  'save' => true,
  'id_name' => 'mkk_mycompany_am_projecttemplatesmkk_mycompany_ida',
  'link' => 'mkk_mycompany_am_projecttemplates',
  'table' => 'mkk_mycompany',
  'module' => 'mkk_myCompany',
  'rname' => 'name',
);
$dictionary["AM_ProjectTemplates"]["fields"]["mkk_mycompany_am_projecttemplatesmkk_mycompany_ida"] = array (
  'name' => 'mkk_mycompany_am_projecttemplatesmkk_mycompany_ida',
  'type' => 'link',
  'relationship' => 'mkk_mycompany_am_projecttemplates',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKK_MYCOMPANY_AM_PROJECTTEMPLATES_FROM_AM_PROJECTTEMPLATES_TITLE',
);

?>