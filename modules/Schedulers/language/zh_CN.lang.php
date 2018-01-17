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
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => '执行工作流任务计划',
    'LBL_OOTB_REPORTS' => '运行报表生成任务计划',
    'LBL_OOTB_IE' => '检查收件箱',
    'LBL_OOTB_BOUNCE' => '每晚处理营销活动退信邮件',
    'LBL_OOTB_CAMPAIGN' => '每晚批量发送营销活动邮件',
    'LBL_OOTB_PRUNE' => '每月 1 号精简数据库',
    'LBL_OOTB_TRACKER' => '精简 Tracker 表',
    'LBL_OOTB_SUGARFEEDS' => '精简 SuiteCRM Feed 数据表',
    'LBL_OOTB_LUCENE_INDEX' => '执行 Lucene 索引',
    'LBL_OOTB_OPTIMISE_INDEX' => '优化 AOD 索引',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => '运行邮件通知提醒',
    'LBL_OOTB_CLEANUP_QUEUE' => '清理任务队列',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => '将文件从文件系统中删除',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => '间隔',
    'LBL_LIST_LIST_ORDER' => '任务计划',
    'LBL_LIST_NAME' => '名称',
    'LBL_LIST_RANGE' => '范围',
    'LBL_LIST_STATUS' => '状态',
    'LBL_LIST_TITLE' => '任务计划',
// human readable:
    'LBL_SUN' => '星期日',
    'LBL_MON' => '星期一',
    'LBL_TUE' => '星期二',
    'LBL_WED' => '星期三',
    'LBL_THU' => '星期四',
    'LBL_FRI' => '星期五',
    'LBL_SAT' => '星期六',
    'LBL_ALL' => '全选',
    'LBL_EVERY' => '每',
    'LBL_FROM' => '从',
    'LBL_ON_THE' => '于',
    'LBL_RANGE' => '到',
    'LBL_AND' => '和',
    'LBL_MINUTES' => '分钟',
    'LBL_HOUR' => '小时',
    'LBL_HOUR_SING' => ' 小时',
    'LBL_OFTEN' => '每分钟',
    'LBL_MIN_MARK' => '分',


// crontabs
    'LBL_MINS' => '分',
    'LBL_HOURS' => '时',
    'LBL_DAY_OF_MONTH' => '日',
    'LBL_MONTHS' => '月',
    'LBL_DAY_OF_WEEK' => '星期',
    'LBL_CRONTAB_EXAMPLES' => '上述使用标准的 crontab 格式',
// Labels
    'LBL_ALWAYS' => '始终',
    'LBL_CATCH_UP' => '错过时执行',
    'LBL_CATCH_UP_WARNING' => '如果此任务需要一段时间才能执行完成就取消勾选。',
    'LBL_DATE_TIME_END' => '结束日期/时间',
    'LBL_DATE_TIME_START' => '开始日期/时间',
    'LBL_INTERVAL' => '间隔',
    'LBL_JOB' => '任务',
    'LBL_JOB_URL' => '任务 URL',
    'LBL_LAST_RUN' => '最近运行时间',
    'LBL_MODULE_NAME' => '任务计划',
    'LBL_MODULE_TITLE' => '任务计划',
    'LBL_NAME' => '名称',
    'LBL_NEVER' => '从不',
    'LBL_NEW_FORM_TITLE' => '新建',
    'LBL_PERENNIAL' => '永久',
    'LBL_SEARCH_FORM_TITLE' => '搜索',
    'LBL_SCHEDULER' => '任务计划',
    'LBL_STATUS' => '状态',
    'LBL_TIME_FROM' => '从',
    'LBL_TIME_TO' => '到',
    'LBL_WARN_CURL_TITLE' => 'cURL 警告',
    'LBL_WARN_CURL' => '警告',
    'LBL_WARN_NO_CURL' => '系统的 PHP 环境未启用 cURL 库或编译时未启用 cURL 库支持(--with-curl=/path/to/curl_library)。请联系管理员解决此问题。否则 SuiteCRM 任务计划功能将受限。',
    'LBL_BASIC_OPTIONS' => '基本选项',
    'LBL_ADV_OPTIONS' => '高级选项',
    'LBL_TOGGLE_ADV' => '显示高级选项',
    'LBL_TOGGLE_BASIC' => '显示基本选项',
// Links
    'LNK_LIST_SCHEDULER' => '查看任务计划',
    'LNK_NEW_SCHEDULER' => '创建任务计划',
// Messages
    'ERR_CRON_SYNTAX' => 'Cron 语法错误',
    'NTC_LIST_ORDER' => '设置在下拉列表中的显示顺序',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Windows 任务计划设置',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Linux Crontab 设置',
    'LBL_CRON_LINUX_DESC1' => '配置运行 SuiteCRM 的任务计划程序，需要使用此命令编辑 Web 服务器用户的 crontab 文件：',
    'LBL_CRON_LINUX_DESC2' => '并在用户 crontab 文件中添加以下行（可以指定 -c /path/to/php.ini 参数使用自定义的 php.ini 配置文件，适用于 php fastcgi 用户）：',
    'LBL_CRON_LINUX_DESC3' => '您应该在安装完成后来做这些。',
    'LBL_CRON_WINDOWS_DESC' => '配置运行 SuiteCRM 的任务计划程序。您需要创建一个 .bat 批处理文件，并通过配置 "Windows 任务计划程序" 来运行批处理文件，创建的批处理文件应包含以下命令：',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => '任务日志',
    'LBL_EXECUTE_TIME' => '执行时间',

//jobstrings
    'LBL_SCHEDULER_TIMES' => '调度次数',
);

global $sugar_config;
?>
