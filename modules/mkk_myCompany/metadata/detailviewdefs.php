<?php
$module_name = 'mkk_myCompany';
$_object_name = 'mkk_mycompany';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'phone_office',
        ),
        1 => 
        array (
          0 => 'website',
          1 => 'phone_fax',
        ),
        2 => 
        array (
          0 => 'ticker_symbol',
          1 => 'phone_alternate',
        ),
        3 => 
        array (
          0 => 'employees',
        ),
        4 => 
        array (
          0 => 'ownership',
          1 => 'rating',
        ),
        5 => 
        array (
          0 => 'industry',
        ),
        6 => 
        array (
          0 => 'mkk_mycompany_type',
          1 => 'annual_revenue',
        ),
        7 => 
        array (
          0 => 'date_modified',
        ),
        8 => 
        array (
          0 => 'assigned_user_name',
          1 => 'date_entered',
        ),
        9 => 
        array (
          0 => 'billing_address_street',
          1 => 'shipping_address_street',
        ),
        10 => 
        array (
          0 => 'description',
        ),
        11 => 
        array (
          0 => 'email1',
        ),
      ),
    ),
  ),
);
?>
