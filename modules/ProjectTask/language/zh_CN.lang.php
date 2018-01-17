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
	'LBL_MODULE_NAME' => '项目任务',
	'LBL_MODULE_TITLE' => '项目任务',

	'LBL_ID' => 'ID',
    'LBL_PROJECT_TASK_ID' => '项目任务ID',
    'LBL_PROJECT_ID' => '项目ID',
	'LBL_DATE_ENTERED' => '创建日期',
	'LBL_DATE_MODIFIED' => '修改日期',
	'LBL_ASSIGNED_USER_ID' => '负责人',
	'LBL_MODIFIED_USER_ID' => '修改人ID',
	'LBL_CREATED_BY' => '创建人',
	'LBL_NAME' => '名称',
	'LBL_STATUS' => '状态',
	'LBL_DATE_DUE' => '截止日期',
	'LBL_TIME_DUE' => '截止时间',
    'LBL_PREDECESSORS' => '前置任务',
	'LBL_DATE_START' => '开始日期',
    'LBL_DATE_FINISH' => '完成日期',    
	'LBL_TIME_START' => '开始时间',
    'LBL_TIME_FINISH' => '完成时间',
    'LBL_DURATION' => '期限',
    'LBL_DURATION_UNIT' => '期限单元',
    'LBL_ACTUAL_DURATION' => '实际期限',
	'LBL_PARENT_ID' => '上级ID',
    'LBL_PARENT_TASK_ID' => '上级任务ID',    
    'LBL_PERCENT_COMPLETE' => '% 已完成',
	'LBL_PRIORITY' => '优先级',
	'LBL_DESCRIPTION' => '说明',
	'LBL_ORDER_NUMBER' => '顺序',
	'LBL_TASK_NUMBER' => '任务编号',
    'LBL_TASK_ID' => '任务ID',
	'LBL_MILESTONE_FLAG' => '里程碑',
	'LBL_ESTIMATED_EFFORT' => '估计时间(小时)',
	'LBL_ACTUAL_EFFORT' => '实际时间(小时)',
	'LBL_UTILIZATION' => '利用率(%)',
	'LBL_DELETED' => '已删除',
    'LBL_PROJECT_PREDECESSOR_NONE' => '-无-', // PR 4366

	'LBL_LIST_NAME' => '名称',
	'LBL_LIST_PARENT_NAME' => '上级项目',
	'LBL_LIST_PERCENT_COMPLETE' => '% 已完成',
	'LBL_LIST_STATUS' => '状态',
	'LBL_LIST_ASSIGNED_USER_ID' => '负责人',
	'LBL_LIST_DATE_DUE' => '截止日期',
	'LBL_LIST_PRIORITY' => '优先级',
	'LBL_LIST_CLOSE' => '关闭',
	'LBL_PROJECT_NAME' => '项目名称',

	'LNK_NEW_PROJECT'	=> '创建项目',
	'LNK_PROJECT_LIST'	=> '查看项目',
	'LNK_NEW_PROJECT_TASK'	=> '创建项目任务',
	'LNK_PROJECT_TASK_LIST'	=> '查看项目任务',

	'LBL_LIST_MY_PROJECT_TASKS' => '我的项目任务',
	'LBL_DEFAULT_SUBPANEL_TITLE' => '项目任务',
	'LBL_NEW_FORM_TITLE' => '新建',

	'LBL_HISTORY_TITLE'=>'历史记录',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'活动',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'历史记录', 

    'LBL_ASSIGNED_USER_NAME' => '负责人',
    'LBL_PARENT_NAME' => '上级项目',
	'LBL_EDITLAYOUT' => '编辑布局' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => '时间线',

	'LBL_SUBTASK' => '子任务',
	'LBL_LAG' => '滞后',
	'LBL_DAYS' => '天',
	'LBL_HOURS' => '小时',
	'LBL_RELATIONSHIP_TYPE' => '关联类型',
);

?>