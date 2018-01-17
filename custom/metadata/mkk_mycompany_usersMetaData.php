<?php
// created: 2018-01-17 12:50:09
$dictionary["mkk_mycompany_users"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mkk_mycompany_users' => 
    array (
      'lhs_module' => 'mkk_myCompany',
      'lhs_table' => 'mkk_mycompany',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mkk_mycompany_users_c',
      'join_key_lhs' => 'mkk_mycompany_usersmkk_mycompany_ida',
      'join_key_rhs' => 'mkk_mycompany_usersusers_idb',
    ),
  ),
  'table' => 'mkk_mycompany_users_c',
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
      'name' => 'mkk_mycompany_usersmkk_mycompany_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mkk_mycompany_usersusers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mkk_mycompany_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mkk_mycompany_users_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mkk_mycompany_usersmkk_mycompany_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mkk_mycompany_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mkk_mycompany_usersusers_idb',
      ),
    ),
  ),
);