<?php
 // created: 2018-01-17 12:50:09
$layout_defs["mkk_myCompany"]["subpanel_setup"]['mkk_mycompany_users'] = array (
  'order' => 100,
  'module' => 'Users',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKK_MYCOMPANY_USERS_FROM_USERS_TITLE',
  'get_subpanel_data' => 'mkk_mycompany_users',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
