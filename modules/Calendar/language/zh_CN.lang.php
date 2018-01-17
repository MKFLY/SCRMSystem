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

    'LBL_SHAREDWEEK' => '共享的周',
    'LBL_SHAREDMONTH' => '共享的月',

    'LBL_MODULE_NAME' => '日历',
    'LBL_MODULE_TITLE' => '日历',
    'LNK_NEW_CALL' => '创建电话',
    'LNK_NEW_MEETING' => '创建会议',
    'LNK_NEW_TASK' => '创建任务',
    'LNK_CALL_LIST' => '查看电话',
    'LNK_MEETING_LIST' => '查看会议',
    'LNK_TASK_LIST' => '查看任务',
    'LNK_TASK' => '任务',
    'LNK_TASK_VIEW' => '查看任务',
    'LNK_EVENT' => '会展',
    'LNK_EVENT_VIEW' => '查看会展',
    'LNK_VIEW_CALENDAR' => '查看日历',
    'LNK_IMPORT_CALLS' => '导入电话',
    'LNK_IMPORT_MEETINGS' => '导入会议',
    'LNK_IMPORT_TASKS' => '导入任务',
    'LBL_MONTH' => '月',
    'LBL_AGENDADAY' => '日',
    'LBL_YEAR' => '年',

    'LBL_AGENDAWEEK' => '周',
    'LBL_PREVIOUS_MONTH' => '上一月',
    'LBL_PREVIOUS_DAY' => '前一天',
    'LBL_PREVIOUS_YEAR' => '上一年',
    'LBL_PREVIOUS_WEEK' => '上一周',
    'LBL_NEXT_MONTH' => '下一月',
    'LBL_NEXT_DAY' => '后一天',
    'LBL_NEXT_YEAR' => '下一年',
    'LBL_NEXT_WEEK' => '下一周',
    'LBL_AM' => '上午',
    'LBL_PM' => '下午',
    'LBL_SCHEDULED' => '已安排',
    'LBL_BUSY' => '忙碌',
    'LBL_CONFLICT' => '冲突',
    'LBL_USER_CALENDARS' => '用户日历',
    'LBL_SHARED' => '已共享的日历',
    'LBL_PREVIOUS_SHARED' => '上页',
    'LBL_NEXT_SHARED' => '下页',
    'LBL_SHARED_CAL_TITLE' => '已共享的日历',
    'LBL_USERS' => '用户',
    'LBL_REFRESH' => '刷新',
    'LBL_EDIT_USERLIST' => '用户列表',
    'LBL_SELECT_USERS' => '选择要显示日历的用户',
    'LBL_FILTER_BY_TEAM' => '通过团队筛选用户列表',
    'LBL_ASSIGNED_TO_NAME' => '负责人',
    'LBL_DATE' => '日期',
    'LBL_CREATE_MEETING' => '创建会议',
    'LBL_CREATE_CALL' => '创建电话',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => '是',
    'LBL_NO' => '否',
    'LBL_SETTINGS' => '设置',
    'LBL_CREATE_NEW_RECORD' => '创建',
    'LBL_LOADING' => '正在加载...',
    'LBL_SAVING' => '正在保存...',
    'LBL_SENDING_INVITES' => '正在保存并发送邀请...',
    'LBL_CONFIRM_REMOVE' => '您确定要移除此项记录？',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => '您确定要移除所有重复纪录？',
    'LBL_EDIT_RECORD' => '编辑',
    'LBL_ERROR_SAVING' => '保存时出错',
    'LBL_ERROR_LOADING' => '加载时出错',
    'LBL_GOTO_DATE' => '转到日期',
    'NOTICE_DURATION_TIME' => '期限必须大于 0',
    'LBL_STYLE_BASIC' => '基本', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_STYLE_ADVANCED' => '高级', //Can be translated in all caps. This string will be used by SuiteP template menu actions

    'LBL_NO_USER' => '没有匹配的字段：负责人',
    'LBL_SUBJECT' => '主题',
    'LBL_DURATION' => '期限',
    'LBL_STATUS' => '状态',
    'LBL_PRIORITY' => '优先级',

    'LBL_SETTINGS_TITLE' => '设置',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => '在日、周的视图中显示时间段',
    'LBL_SETTINGS_TIME_STARTS' => '开始时间',
    'LBL_SETTINGS_TIME_ENDS' => '结束时间',
    'LBL_SETTINGS_CALLS_SHOW' => '显示电话',
    'LBL_SETTINGS_TASKS_SHOW' => '显示任务',
    'LBL_SETTINGS_COMPLETED_SHOW' => '显示已完成',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => '分开显示共享日历',

    'LBL_SAVE_BUTTON' => '保存',
    'LBL_DELETE_BUTTON' => '删除',
    'LBL_APPLY_BUTTON' => '应用',
    'LBL_SEND_INVITES' => '发送邀请',
    'LBL_CANCEL_BUTTON' => '取消',
    'LBL_CLOSE_BUTTON' => '关闭',

    'LBL_GENERAL_TAB' => '详细信息',
    'LBL_PARTICIPANTS_TAB' => '受邀者',
    'LBL_REPEAT_TAB' => '周期重复',

    'LBL_REPEAT_TYPE' => '重复',
    'LBL_REPEAT_INTERVAL' => '间隔',
    'LBL_REPEAT_END' => '结束',
    'LBL_REPEAT_END_AFTER' => '在之后',
    'LBL_REPEAT_OCCURRENCES' => '循环',
    'LBL_REPEAT_END_BY' => '到',
    'LBL_REPEAT_DOW' => '星期',
    'LBL_REPEAT_UNTIL' => '重复直到',
    'LBL_REPEAT_COUNT' => '重复次数',
    'LBL_REPEAT_LIMIT_ERROR' => '您的请求将创建超过 $limit 会议数量限制。',

    'LBL_EDIT_ALL_RECURRENCES' => '编辑所有周期重复纪录',
    'LBL_REMOVE_ALL_RECURRENCES' => '删除所有周期重复纪录',

    'LBL_DATE_END_ERROR' => '错误：结束日期须在开始日期之后。',
    'ERR_YEAR_BETWEEN' => '对不起，日历无法处理您要求的年份<br />年份必须介于 1970 - 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: 没有为此视图定义',
    'LBL_NO_ITEMS_MOBILE' => '本周没有任何日程安排。',
    'LBL_GENERAL_SETTINGS' => '常规设置',
    'LBL_COLOR_SETTINGS' => '颜色设置',
    'LBL_MODULE' => '模块',
    'LBL_BODY' => '正文',
    'LBL_BORDER' => '边框',
    'LBL_TEXT' => '文本',
);


$mod_list_strings = array(
    'dom_cal_weekdays'=>
        array(
            '0' => "周日",
            '1' => "周一",
            '2' => "周二",
            '3' => "周三",
            '4' => "周四",
            '5' => "周五",
            '6' => "周六",
        ),
    'dom_cal_weekdays_long'=>
        array(
            '0' => "星期日",
            '1' => "星期一",
            '2' => "星期二",
            '3' => "星期三",
            '4' => "星期四",
            '5' => "星期五",
            '6' => "星期六",
        ),
    'dom_cal_month'=>
        array(
            '0' => "",
            '1' => "1",
            '2' => "2",
            '3' => "3",
            '4' => "4",
            '5' => "5",
            '6' => "6",
            '7' => "7",
            '8' => "8",
            '9' => "9",
            '10' => "10",
            '11' => "11",
            '12' => "12",
        ),
    'dom_cal_month_long'=>
        array(
            '0' => "",
            '1' => "1月",
            '2' => "2月",
            '3' => "3月",
            '4' => "4月",
            '5' => "5月",
            '6' => "6月",
            '7' => "7月",
            '8' => "8月",
            '9' => "9月",
            '10' => "10月",
            '11' => "11月",
            '12' => "12月",
        ),
);
?>
