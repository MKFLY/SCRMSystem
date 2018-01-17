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
	'LBL_ACCEPT_THIS'=>'是否接受？',
	'LBL_ADD_BUTTON'=> '添加',
	'LBL_ADD_INVITEE' => '添加受邀者',
	'LBL_CONTACT_NAME' => '联系人',
	'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
	'LBL_CREATED_BY'=>'创建人',
	'LBL_DATE_END'=>'结束日期',
	'LBL_DATE_TIME' => '日期/时间',
	'LBL_DATE' => '日期',
	'LBL_DEFAULT_SUBPANEL_TITLE' => '会议',
	'LBL_DESCRIPTION' => '说明',
    'LBL_DIRECTION' => '方向',
	'LBL_DURATION_HOURS' => '期限(小时)',
	'LBL_DURATION_MINUTES' => '期限(分钟)',
	'LBL_DURATION' => '期限',
	'LBL_EMAIL' => '电子邮件',
	'LBL_FIRST_NAME' => '名字',
	'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
	'LBL_HOURS_ABBREV' => 'h',
	'LBL_HOURS_MINS' => '(时/分)',
	'LBL_INVITEE' => '受邀者',
	'LBL_LAST_NAME' => '姓氏',
	'LBL_ASSIGNED_TO_NAME'=>'负责人',
	'LBL_LIST_ASSIGNED_TO_NAME' => '负责人',
	'LBL_LIST_CLOSE' => '关闭',
	'LBL_LIST_CONTACT' => '联系人',
	'LBL_LIST_DATE_MODIFIED'=>'修改日期',
	'LBL_LIST_DATE' => '日期',
	'LBL_LIST_DIRECTION' => '方向',
	'LBL_LIST_DUE_DATE'=>'截止日期',
	'LBL_LIST_FORM_TITLE' => '会议列表',
	'LBL_LIST_MY_MEETINGS' => '我的会议',
	'LBL_LIST_RELATED_TO' => '关联到',
	'LBL_LIST_STATUS'=>'状态',
	'LBL_LIST_SUBJECT' => '主题',
	'LBL_LEADS_SUBPANEL_TITLE' => '潜在客户',
	'LBL_LOCATION' => '地点',
	'LBL_MINSS_ABBREV' => 'm',
	'LBL_MODIFIED_BY'=>'修改人',
	'LBL_MODULE_NAME' => '会议',
	'LBL_MODULE_TITLE' => '会议',
	'LBL_NAME' => '名称',
	'LBL_NEW_FORM_TITLE' => '新建',
	'LBL_OUTLOOK_ID' => 'Outlook ID',
	'LBL_SEQUENCE' => '会议更新序列',
	'LBL_PHONE' => '电话',
	'LBL_REMINDER_TIME'=>'提醒时间',
    'LBL_EMAIL_REMINDER_SENT' => '邮件提醒已发送',
	'LBL_REMINDER' => '提醒',
	'LBL_REMINDER_POPUP' => '弹出提醒',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => '邮件提醒所有受邀者',
    'LBL_EMAIL_REMINDER' => '邮件提醒',
    'LBL_EMAIL_REMINDER_TIME' => '邮件提醒时间',
    'LBL_REMOVE' => '移除',
	'LBL_SCHEDULING_FORM_TITLE' => '计划安排',
	'LBL_SEARCH_BUTTON'=> '搜索​​​​',
	'LBL_SEARCH_FORM_TITLE' => '搜索',
	'LBL_SEND_BUTTON_LABEL'=>'发送',
	'LBL_SEND_BUTTON_TITLE'=>'发送',
	'LBL_STATUS' => '状态',
    'LBL_TYPE' => '类型',
    'LBL_PASSWORD' => '密码',
    'LBL_URL' => '开始/加入会议',
    'LBL_HOST_URL' => '主机 URL',
    'LBL_DISPLAYED_URL' => '显示的 URL',
    'LBL_CREATOR' => '创建人',
    'LBL_EXTERNALID' => '外部应用 ID',
	'LBL_SUBJECT' => '主题',
	'LBL_TIME' => '开始时间',
	'LBL_USERS_SUBPANEL_TITLE' => '用户',
    'LBL_PARENT_TYPE' => '上级类型',
    'LBL_PARENT_ID' => '上级ID',
	'LNK_MEETING_LIST'=>'查看会议',
	'LNK_NEW_APPOINTMENT' => '创建约会',
	'LNK_NEW_MEETING'=>'创建会议',
	'LNK_IMPORT_MEETINGS' => '导入会议',

    'LBL_CREATED_USER' => '创建人',
    'LBL_MODIFIED_USER' => '修改人',
    'NOTICE_DURATION_TIME' => '期限必须大于 0',
    'LBL_MEETING_INFORMATION' => '会议信息', //Can be translated in all caps. This string will be used by SuiteP template menu actions
	'LBL_LIST_JOIN_MEETING' => '加入会议',
    'LBL_ACCEPT_STATUS' => '接受状态',
    'LBL_ACCEPT_LINK' => '接受链接',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => '您不是受邀者无法参加这次会议。',
    'LBL_EXTNOT_RECORD_LINK' => '查看会议',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => '您无法开始此会议，因为您不是管理员或会议的所有者。',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => '创建受邀者',
    'LBL_CREATE_CONTACT' => '作为联系人',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => '作为潜在客户', // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => '创建并添加', // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => '取消',
    'LBL_EMPTY_SEARCH_RESULT' => '对不起，未找到任何结果。请创建一个受邀者。',  // create invitee functionallity
    'LBL_NO_ACCESS' => '您没有权限创建 $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => '重复',
    'LBL_REPEAT_INTERVAL' => '间隔',
    'LBL_REPEAT_DOW' => '星期',
    'LBL_REPEAT_UNTIL' => '重复直到',
    'LBL_REPEAT_COUNT' => '重复次数',
    'LBL_REPEAT_PARENT_ID' => '上级ID',
    'LBL_RECURRING_SOURCE' => '重复来源',

    'LBL_SYNCED_RECURRING_MSG' => '此记录源自另一个系统，并同步到当前系统。要进行更改，请转到其他系统中的原始记录。在其他系统中进行的更改将自动同步到当前系统。',
    'LBL_RELATED_TO' => '关联到',

	// for reminders
	'LBL_REMINDERS' => '提醒',
	'LBL_REMINDERS_ACTIONS' => '动作',
	'LBL_REMINDERS_POPUP' => '弹出提醒',
	'LBL_REMINDERS_EMAIL' => '邮件提醒',
	'LBL_REMINDERS_WHEN' => '当',
	'LBL_REMINDERS_REMOVE_REMINDER' => '移除',
	'LBL_REMINDERS_ADD_ALL_INVITEES' => '添加所有',
	'LBL_REMINDERS_ADD_REMINDER' => '添加',
);
?>
