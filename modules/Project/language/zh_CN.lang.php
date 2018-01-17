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
    'LBL_MODULE_NAME' => '项目',
    'LBL_MODULE_TITLE' => '项目',
    'LBL_SEARCH_FORM_TITLE' => '搜索',
    'LBL_LIST_FORM_TITLE' => '项目列表',
    'LBL_HISTORY_TITLE' => '历史记录',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '创建日期',
    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_ASSIGNED_USER_ID' => '负责人',
    'LBL_ASSIGNED_USER_NAME' => '负责人',
    'LBL_MODIFIED_USER_ID' => '修改人ID',
    'LBL_CREATED_BY' => '创建人',
    'LBL_NAME' => '名称',
    'LBL_DESCRIPTION' => '说明',
    'LBL_DELETED' => '已删除',
    'LBL_DATE' => '日期',
    'LBL_DATE_START' => '开始日期',
    'LBL_DATE_END' => '结束日期',
    'LBL_PRIORITY' => '优先级',
    'LBL_LIST_NAME' => '名称',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => '估计总时间 (小时)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => '实际总时间 (小时)',
    'LBL_LIST_END_DATE' => '结束日期',
    'LBL_PROJECT_SUBPANEL_TITLE' => '项目',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => '项目任务',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => '商业机会',
	'LBL_PROJECT_PREDECESSOR_NONE' => '无',
	'LBL_ALL_PROJECTS' => '所有项目',
	'LBL_ALL_USERS' => '所有用户',
	'LBL_ALL_CONTACTS' => '所有联系人',

    // quick create label
    'LBL_NEW_FORM_TITLE' => '新建',
    'LNK_NEW_PROJECT' => '创建项目',
    'LNK_PROJECT_LIST' => '查看项目',
    'LNK_NEW_PROJECT_TASK' => '创建项目任务',
    'LNK_PROJECT_TASK_LIST' => '查看项目任务',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '项目',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
    'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '客户',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商业机会',
    'LBL_CASES_SUBPANEL_TITLE' => '客户反馈',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_TASK_ID' => '任务ID',
    'LBL_TASK_NAME' => '任务名称',
    'LBL_DURATION' => '期限',
    'LBL_ACTUAL_DURATION' => '实际期限',
    'LBL_START' => '开始',
    'LBL_FINISH' => '完成',
    'LBL_PREDECESSORS' => '前置任务',
    'LBL_PERCENT_COMPLETE' => '% 已完成',
    'LBL_MORE' => '更多...',
    'LBL_OPPORTUNITIES' => '商业机会',
    'LBL_NEXT_WEEK' => '下周',
    'LBL_PROJECT_INFORMATION' => '项目信息',
    'LBL_EDITLAYOUT' => '编辑布局' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => '项目任务',
    'LBL_VIEW_GANTT_TITLE' => '查看甘特图',
    'LBL_VIEW_GANTT_DURATION' => '期限',
    'LBL_TASK_TITLE' => '编辑任务',
    'LBL_DURATION_TITLE' => '编辑期限',
    'LBL_LAG' => '滞后',
    'LBL_DAYS' => '天',
    'LBL_HOURS' => '小时',
    'LBL_MONTHS' => '月',
    'LBL_SUBTASK' => '子任务',
    'LBL_MILESTONE_FLAG' => '里程碑',
    'LBL_ADD_NEW_TASK' => '添加新任务',
    'LBL_DELETE_TASK' => '删除任务',
    'LBL_EDIT_TASK_PROPERTIES' => '编辑任务属性',
    'LBL_PARENT_TASK_ID' => '上级任务ID',
    'LBL_RESOURCE_CHART' => '资源日历',
    'LBL_RELATIONSHIP_TYPE' => '关联类型',
    'LBL_ASSIGNED_TO' => '负责人',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => '项目模板',
    'LBL_STATUS' => '状态',
    'LBL_LIST_ASSIGNED_USER_ID' => '负责人',
    'LBL_TOOLTIP_PROJECT_NAME' => '项目',
    'LBL_TOOLTIP_TASK_NAME' => '任务名称',
    'LBL_TOOLTIP_TITLE' => '当天任务',
    'LBL_TOOLTIP_TASK_DURATION' => '期限',
    'LBL_RESOURCE_TYPE_TITLE_USER' => '资源是一个用户',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => '资源是一个联系人',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => '上月',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => '下月',
    'LBL_RESOURCE_CHART_WEEK' => '周',
    'LBL_RESOURCE_CHART_DAY' => '日',
    'LBL_RESOURCE_CHART_WARNING' => '未分配任何资源给一个项目。',
    'LBL_PROJECT_DELETE_MSG' => '您确定要删除此项目以及与其相关的任务？',
    'LBL_LIST_MY_PROJECT' => '我的项目',
    'LBL_LIST_ASSIGNED_USER' => '负责人',
    'LBL_UNASSIGNED' => '未分配',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => '资源',

	'LBL_EMAIL' => '电子邮件',
	'LBL_PHONE' => '电话',
	'LBL_ADD_BUTTON'=> '添加',
	'LBL_ADD_INVITEE' => '添加资源',
	'LBL_FIRST_NAME' => '名字',
	'LBL_LAST_NAME' => '姓氏',
	'LBL_SEARCH_BUTTON'=> '搜索',
	'LBL_EMPTY_SEARCH_RESULT' => '对不起，未找到任何结果。请创建一个受邀者。',
	'LBL_CREATE_INVITEE' => '创建资源',
	'LBL_CREATE_CONTACT' => '作为联系人',
	'LBL_CREATE_AND_ADD' => '创建并添加',
	'LBL_CANCEL_CREATE_INVITEE' => '取消',
	'LBL_NO_ACCESS' => '您没有权限创建 $module',
	'LBL_SCHEDULING_FORM_TITLE' => '计划安排列表',
	'LBL_REMOVE' => '移除',
	'LBL_VIEW_DETAIL' => '查看详细信息',
	'LBL_OVERRIDE_BUSINESS_HOURS' => '考虑上班时间',

	'LBL_PROJECTS_SEARCH' => '搜索项目',
	'LBL_USERS_SEARCH' => '搜索用户',
	'LBL_CONTACTS_SEARCH' => '搜索联系人',
	'LBL_RESOURCE_CHART_SEARCH_BUTTON' => '搜索',
	
	'LBL_CHART_TYPE' => '类型',
	'LBL_CHART_WEEKLY' => '每周',
	'LBL_CHART_MONTHLY' => '每月',	
	'LBL_CHART_QUARTERLY' => '每季度',

	'LBL_RESOURCE_CHART_MONTH' => '月',
	'LBL_RESOURCE_CHART_QUARTER' => '季度',

 	'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => '联系人',
 	'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => '项目',
 	'LBL_AOS_QUOTES_PROJECT' => '报价：项目',

);
?>
