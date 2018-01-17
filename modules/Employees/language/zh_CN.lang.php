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
  'LBL_MODULE_NAME' => '员工',
  'LBL_MODULE_TITLE' => '员工',
  'LBL_SEARCH_FORM_TITLE' => '搜索',
  'LBL_LIST_FORM_TITLE' => '员工列表',
  'LBL_NEW_FORM_TITLE' => '新建',
  'LBL_LOGIN' => '用户名',
  'LBL_RESET_PREFERENCES' => '重置首选项',
  'LBL_TIME_FORMAT' => '时间格式',
  'LBL_DATE_FORMAT' => '日期格式',
  'LBL_TIMEZONE' => '时区',
  'LBL_CURRENCY' => '货币',
  'LBL_LIST_NAME' => '名称',
  'LBL_LIST_LAST_NAME' => '姓氏',
  'LBL_LIST_EMPLOYEE_NAME' => '员工姓名',
  'LBL_LIST_DEPARTMENT' => '部门',
  'LBL_LIST_REPORTS_TO_NAME' => '上级',
  'LBL_LIST_EMAIL' => 'Email 地址',
  'LBL_LIST_USER_NAME' => '用户名',
  'LBL_ERROR' => '错误',
  'LBL_PASSWORD' => '密码',
  'LBL_USER_NAME' => '用户名',
  'LBL_USER_TYPE' => '用户类型',
  'LBL_FIRST_NAME' => '名字',
  'LBL_LAST_NAME' => '姓氏',
  'LBL_THEME' => '主题',
  'LBL_LANGUAGE' => '语言',
  'LBL_ADMIN' => '管理员',
  'LBL_EMPLOYEE_INFORMATION' => '员工信息',
  'LBL_OFFICE_PHONE' => '办公电话',
  'LBL_REPORTS_TO' => '上级',
  'LBL_REPORTS_TO_NAME' => '上级',
  'LBL_OTHER_PHONE' => '其他电话', // PR 4439
  'LBL_NOTES' => '备忘录',
  'LBL_DEPARTMENT' => '部门',
  'LBL_TITLE' => '职称',
  'LBL_ANY_ADDRESS' => '任何地址',
  'LBL_ANY_PHONE' => '任何电话',
  'LBL_ANY_EMAIL' => '任何邮箱',
  'LBL_ADDRESS' => '地址',
  'LBL_CITY' => '城市',
  'LBL_STATE' => '省份', //For address fields
  'LBL_POSTAL_CODE' => '邮编',
  'LBL_COUNTRY' => '国家',
  'LBL_NAME' => '名称',
  'LBL_MOBILE_PHONE' => '手机',
  'LBL_FAX' => '传真',
  'LBL_EMAIL' => 'Email 地址',
  'LBL_EMAIL_LINK_TYPE'				=> '邮件客户端',
  'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>SuiteCRM 邮件客户端：</b>使用 SuiteCRM 电子邮件客户端来发送邮件。<br /><b>外部邮件客户端：</b>使用外部电子邮件客户端（如 Microsoft Outlook）来发送邮件。',
  'LBL_HOME_PHONE' => '家庭电话',
  'LBL_WORK_PHONE' => '办公电话',
  'LBL_EMPLOYEE_STATUS' => '员工状态',
  'LBL_PRIMARY_ADDRESS' => '街道',
  'LBL_SAVED_SEARCH' => '已保存的筛选',
  'LBL_MESSENGER_ID' => '即时通讯 ID',
  'LBL_MESSENGER_TYPE' => '即时通讯类型',
  'ERR_LAST_ADMIN_1' => '员工姓名 ',
  'ERR_LAST_ADMIN_2' => ' 是最后一个具有管理员权限的员工。请保证至少有一个员工是管理员。',
  'LNK_NEW_EMPLOYEE' => '创建员工',
  'LNK_EMPLOYEE_LIST' => '查看员工',
  'ERR_DELETE_RECORD' => '您必须指定记录编号才能删除。',
  'LBL_LIST_EMPLOYEE_STATUS' => '状态',

  'LBL_SUGAR_LOGIN' => '普通用户',
  'LBL_RECEIVE_NOTIFICATIONS' => '接收通知提醒',
  'LBL_IS_ADMIN' => '管理员',
  'LBL_GROUP' => '组用户',
  'LBL_PHOTO'	=> '照片',
  'LBL_DELETE_USER_CONFIRM' => '员工也是一个用户。删除员工会删除对应的用户记录，并且用户将不能再访问系统。您确定要删除此员工记录？',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => '您确定要删除此员工？',
  'LBL_ONLY_ACTIVE' => '仅活动',
	'LBL_SELECT' => '选择' /*for 508 compliance fix*/,
  'LBL_AUTHENTICATE_ID' => '认证ID',
  'LBL_EXT_AUTHENTICATE' => '外部认证',
  'LBL_GROUP_USER' => '组用户',
  'LBL_LIST_ACCEPT_STATUS' => '接受状态',
  'LBL_MODIFIED_BY' =>'修改人',
  'LBL_MODIFIED_BY_ID' =>'修改人ID',
  'LBL_CREATED_BY_NAME' => '创建人', //bug48978
  'LBL_PORTAL_ONLY_USER' => '门户用户',
  'LBL_PSW_MODIFIED' => '密码更改时间',
  'LBL_SHOW_ON_EMPLOYEES' => '在员工模块中显示',
  'LBL_USER_HASH' => '密码',
  'LBL_SYSTEM_GENERATED_PASSWORD' =>'系统生成的密码',
  'LBL_DESCRIPTION'	=> '说明',
  'LBL_FAX_PHONE'						=> '传真',
  'LBL_STATUS'						=> '状态',
  'LBL_ADDRESS_CITY'					=> '城市',
  'LBL_ADDRESS_COUNTRY'				=> '国家',
  'LBL_ADDRESS_INFORMATION'			=> '地址信息',
  'LBL_ADDRESS_POSTALCODE'			=> '邮编',
  'LBL_ADDRESS_STATE'					=> '省份',
  'LBL_ADDRESS_STREET'				=> '街道',

  'LBL_DATE_MODIFIED' => '修改日期',
  'LBL_DATE_ENTERED' => '创建日期',
  'LBL_DELETED' => '已删除',

  'LBL_CONTACTS_SYNC' => '联系人同步',
  'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
  'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => '项目',
  'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => '联系人',
  'LBL_ROLES' => '角色',
  'LBL_SECURITYGROUPS' => '用户组列表',
  'LBL_PROSPECT_LIST' => '目标群体',

	'LBL_PROJECT_TEMPLATES' => '项目模板',
	'LBL_BUTTON_SELECT' => '选择',
  'LBL_BUTTON_CLEAR' => '清除',
);


?>
