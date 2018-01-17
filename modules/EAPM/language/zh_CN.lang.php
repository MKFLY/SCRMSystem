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
  'LBL_NAME' => '名称',
  'LBL_CREATED_USER' => '创建人',
  'LBL_MODIFIED_USER' => '修改人',
  'LBL_LIST_NAME' => '名称',
  'LBL_LIST_FORM_TITLE' => '外部账户列表',
  'LBL_MODULE_NAME' => '外部账户',
  'LBL_MODULE_TITLE' => '外部账户',
  'LBL_HOMEPAGE_TITLE' => '外部账户',
  'LNK_NEW_RECORD' => '创建外部账户',
  'LNK_LIST' => '查看外部账户',
  'LBL_SEARCH_FORM_TITLE' => '搜索',
  'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
  'LBL_NEW_FORM_TITLE' => '新建',
  'LBL_PASSWORD' => '密码',
  'LBL_USER_NAME' => '用户名',
  'LBL_URL' => 'URL 地址',
  'LBL_APPLICATION' => '应用程序',
  'LBL_API_DATA' => '数据',
  'LBL_API_CONSKEY' => 'Consumer Key',
  'LBL_API_CONSSECRET' => 'Consumer Secret',
  'LBL_API_OAUTHTOKEN' => 'OAuth Token',
  'LBL_AUTH_UNSUPPORTED' => "应用程序不支持此授权方法",
  'LBL_AUTH_ERROR' => '尝试连接到此账户失败。',
  'LBL_VALIDATED' => '已验证',
  'LBL_ACTIVE' => '启用',
  'LBL_OAUTH_NAME' => '%s',
  'LBL_CONNECT_BUTTON_TITLE' => '连接',
  'LBL_NOTE' => '请注意',
  'LBL_CONNECTED' => '已连接',

  'LBL_ERR_NO_AUTHINFO' => '此账户没有身份验证信息。',
  'LBL_ERR_NO_TOKEN' => '此账户没有有效的登录令牌。',

  'LBL_ERR_FAILED_QUICKCHECK' => '您当前没有连接到您的 {0} 账户。点击确定以登录到您的账户并重新激活连接。',

  'LBL_CLICK_TO_EDIT' => '点击编辑',

  // Various strings used throughout the external account modules
  'LBL_REAUTHENTICATE_LABEL' => '重新验证',
  'LBL_APPLICATION_FOUND_NOTICE' => '此应用程序账户已经存在。我们已经恢复了现有的账户。',
  'LBL_OMIT_URL' => '(省略 http:// 或 https://)',
  'LBL_OAUTH_SAVE_NOTICE' => '点击<b>连接</b>跳转到提供您的账户信息并授权 SuiteCRM 访问账户的页面。连接后，将直接返回 SuiteCRM。',
  'LBL_BASIC_SAVE_NOTICE' => '点击<b>连接</b>来连接此账户到 SuiteCRM。',
  'LBL_ERR_POPUPS_DISABLED' => '请启用浏览器弹出窗口或将站点 "{0}" 添加到弹出窗口的允许列表中来进行连接。',

  'LBL_API_OAUTHSECRET' => 'OAuth Secret',
);
