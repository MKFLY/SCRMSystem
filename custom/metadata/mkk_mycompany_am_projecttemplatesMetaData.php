<?php
// created: 2018-01-17 12:50:09
$dictionary["mkk_mycompany_am_projecttemplates"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mkk_mycompany_am_projecttemplates' => 
    array (
      'lhs_module' => 'mkk_myCompany',
      'lhs_table' => 'mkk_mycompany',
      'lhs_key' => 'id',
      'rhs_module' => 'AM_ProjectTemplates',
      'rhs_table' => 'am_projecttemplates',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mkk_mycompany_am_projecttemplates_c',
      'join_key_lhs' => 'mkk_mycompany_am_projecttemplatesmkk_mycompany_ida',
      'join_key_rhs' => 'mkk_mycompany_am_projecttemplatesam_projecttemplates_idb',
    ),
  ),
  'table' => 'mkk_mycompany_am_projecttemplates_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'mkk_mycompany_am_projecttemplatesmkk_mycompany_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mkk_mycompany_am_projecttemplatesam_projecttemplates_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mkk_mycompany_am_projecttemplatesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mkk_mycompany_am_projecttemplates_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mkk_mycompany_am_projecttemplatesmkk_mycompany_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mkk_mycompany_am_projecttemplates_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mkk_mycompany_am_projecttemplatesam_projecttemplates_idb',
      ),
    ),
  ),
);