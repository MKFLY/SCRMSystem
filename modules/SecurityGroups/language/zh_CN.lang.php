<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array (
  'LBL_ALL_MODULES'=>'全部模块',//rost fix
  'LBL_ASSIGNED_TO_ID' => '负责人ID',
  'LBL_ASSIGNED_TO_NAME' => '负责人',
  'LBL_ID' => 'ID',
  'LBL_DATE_ENTERED' => '创建日期',
  'LBL_DATE_MODIFIED' => '修改日期',
  'LBL_MODIFIED' => '修改人',
  'LBL_MODIFIED_NAME' => '修改人',
  'LBL_CREATED' => '创建人',
  'LBL_DESCRIPTION' => '说明',
  'LBL_DELETED' => '已删除',
  'LBL_NONINHERITABLE' => '不可继承',
  'LBL_LIST_NONINHERITABLE' => '不可继承',
  'LBL_NAME' => '名称',
  'LBL_CREATED_USER' => '创建人',
  'LBL_MODIFIED_USER' => '修改人',
  'LBL_LIST_FORM_TITLE' => '用户组列表',
  'LBL_MODULE_NAME' => '用户组',
  'LBL_MODULE_TITLE' => '用户组',
  'LNK_NEW_RECORD' => '创建用户组',
  'LNK_LIST' => '查看用户组',
  'LBL_SEARCH_FORM_TITLE' => '搜索',
  'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
  'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => '用户组',
  'LBL_USERS' => '用户',
  'LBL_USERS_SUBPANEL_TITLE' => '用户',
  'LBL_ROLES_SUBPANEL_TITLE' => '角色',
  'LBL_ROLES' => '角色',

  'LBL_CONFIGURE_SETTINGS' => '设置',
  'LBL_ADDITIVE' => '权限累积',
  'LBL_ADDITIVE_DESC' => "用户将获得此用户所属角色或用户组的所有权限",
  'LBL_STRICT_RIGHTS' => '严格的权限',
  'LBL_STRICT_RIGHTS_DESC' => "如果用户属于多个用户组，用户只会获得当前记录所属用户组的权限。",
  'LBL_USER_ROLE_PRECEDENCE' => '角色优先',
  'LBL_USER_ROLE_PRECEDENCE_DESC' => '如果任何角色直接分配给用户，角色权限将优先于用户组权限。',
  'LBL_INHERIT_TITLE' => '用户组继承规则',
  'LBL_INHERIT_CREATOR' => '从 "创建人" 继承',
  'LBL_INHERIT_CREATOR_DESC' => '创建的记录将继承 "创建人" 的所有用户组。',
  'LBL_INHERIT_PARENT' => '从上级继承',
  'LBL_INHERIT_PARENT_DESC' => '例如在联系人中创建一条客户反馈记录，那么此客户反馈记录将继承联系人所属的用户组。',
  'LBL_USER_POPUP' => '新建用户显示用户组选择',
  'LBL_USER_POPUP_DESC' => '当创建新用户时显示一个用户组弹窗来进行用户组分配。',
  'LBL_INHERIT_ASSIGNED' => '从 "负责人" 继承',
  'LBL_INHERIT_ASSIGNED_DESC' => '创建的记录将继承 "负责人" 的所有用户组，并且不会移除此记录的其他用户组。',
  'LBL_POPUP_SELECT' => '创建时进行用户组选择',
  'LBL_POPUP_SELECT_DESC' => '如果 "创建人" 属于多个用户组，在创建新记录时将显示用户组分配面板。',
  'LBL_FILTER_USER_LIST' => '过滤用户列表',
  'LBL_FILTER_USER_LIST_DESC' => "非管理员用户只能分配给同一组中的用户",  
  
  'LBL_DEFAULT_GROUP_TITLE' => '新建记录的默认用户组',
  'LBL_ADD_BUTTON_LABEL' => '添加',
  'LBL_REMOVE_BUTTON_LABEL' => '移除',
  'LBL_GROUP' => '用户组',
  'LBL_MODULE' => '模块',
  
  'LBL_MASS_ASSIGN' => '批量分配用户组',
  'LBL_ASSIGN' => '分配',
  'LBL_REMOVE' => '移除',
  'LBL_ASSIGN_CONFIRM' => '您确定要将此用户组添加到 ',
  'LBL_REMOVE_CONFIRM' => '您确定要将这个组移除从',
  'LBL_CONFIRM_END' =>' 已选的记录？',
  
  'LBL_SECURITYGROUP_USER_FORM_TITLE' => '用户组/用户',
  'LBL_USER_NAME' => '用户名',
  'LBL_SECURITYGROUP_NAME' => '用户组',
  'LBL_HOMEPAGE_TITLE' => '用户组',
  'LBL_TITLE' => '标题',
  'LBL_ROWS' => '行',
  'LBL_POST' => '提交',
  'LBL_SELECT_GROUP_ERROR' => '请选择一个用户组，然后重试。',

  'LBL_GROUP_SELECT' => '请选择可以访问此记录的用户组',
  'LBL_ERROR_DUPLICATE' => '由于检测到可能的重复记录，您需要手动添加用户组到新创建的记录。',

  'LBL_INBOUND_EMAIL' => '邮件接收账户',
  'LBL_INBOUND_EMAIL_DESC' => '仅当用户属于分配给邮件接收账户的群组时，才允许访问邮件接收账户。',
  'LBL_PRIMARY_GROUP' => '主用户组',

);
?>