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

$mod_strings = array(
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
    'LBL_EDIT_BUTTON' => '编辑',
    'LBL_REMOVE' => '移除',
    'LBL_LIST_FORM_TITLE' => '会展列表',
    'LBL_MODULE_NAME' => '会展',
    'LBL_MODULE_TITLE' => '会展',
    'LBL_HOMEPAGE_TITLE' => '会展',
    'LNK_NEW_RECORD' => '创建会展',
    'LNK_LIST' => '查看会展',
    'LBL_SEARCH_FORM_TITLE' => '搜索',
    'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
    'LBL_NEW_FORM_TITLE' => '新建',
    'LBL_LOCATION' => '地点',
    'LBL_START_DATE' => '开始日期',
    'LBL_END_DATE' => '结束日期',
    'LBL_BUDGET' => '预算',
    'LBL_DATE' => '日期',
    'LBL_DATE_END' => '结束日期',
    'LBL_DURATION' => '期限',
    'LBL_INVITE_TEMPLATES' => '邀请模板',
    'LBL_INVITE_PDF' => '发送邀请 PDF',
    'LBL_EDITVIEW_PANEL1' => '会展详情',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '参会代表',
    'LBL_ACCEPT_REDIRECT' => '接受重定向 URL',
    'LBL_DECLINE_REDIRECT' => '拒绝重定向 URL',
    'LBL_SELECT_DELEGATES' => '选择参会代表',
    'LBL_SELECT_DELEGATES_TITLE' => '选择参会代表',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => '目标群体',
    'LBL_SELECT_DELEGATES_TARGETS' => '目标对象',
    'LBL_SELECT_DELEGATES_CONTACTS' => '联系人',
    'LBL_SELECT_DELEGATES_LEADS' => '潜在客户',
    'LBL_MANAGE_DELEGATES' => '管理参会代表',
    'LBL_MANAGE_DELEGATES_TITLE' => '管理参会代表',
    'LBL_MANAGE_ACCEPTANCES' => '管理接受状态',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => '管理接受状态',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => '已接受',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => '已拒绝',
    'LBL_MANAGE_POPUP_ERROR' => '未选择参会代表',
    'LBL_MANAGE_DELEGATES_INVITED' => '已邀请',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => '未邀请',
    'LBL_MANAGE_DELEGATES_ATTENDED' => '已参加',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => '未参加',
    'LBL_SUCCESS_MSG' => '所有邀请已经发送成功。',
    'LBL_ERROR_MSG_1' => '所有关联的联系人都已经邀请。',
    'LBL_ERROR_MSG_2' => '邀请邮件发送失败，请检查邮件发送设置。',
    'LBL_ERROR_MSG_3' => '超过 10 封邮件发送失败。请检查您邀请的所有联系人都有一个有效的 Email 地址（详见错误日志）。',
    'LBL_ERROR_MSG_4' => ' 邮件发送失败。请检查您邀请的所有联系人都有一个有效的 Email 地址（详见错误日志）。', //LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => '无效的邮件模板',
    'LBL_EMAIL_INVITE' => '邮件邀请',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => '联系人',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => '会展地点',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => '潜在客户',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => '目标对象',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => '参会代表',
	'LBL_HOURS_ABBREV' => 'h',
	'LBL_MINSS_ABBREV' => 'm',

	// Attendance report
	'LBL_CONTACT_NAME' => '联系人',
	'LBL_ACCOUNT_NAME' => '客户名称',
	'LBL_SIGNATURE' => '签名',
	// contacts/leads/targets subpanels
	'LBL_LIST_INVITE_STATUS_EVENT' => '已邀请',
	'LBL_LIST_ACCEPT_STATUS_EVENT' => '状态',

	'LBL_ACTIVITY_STATUS' => '活动状态',
	'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => '会展',
);
