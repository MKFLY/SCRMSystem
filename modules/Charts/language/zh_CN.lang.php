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
    'ERR_NO_OPPS' => '请先创建商业机会记录来显示商业机会图表。',
    'LBL_ALL_OPPORTUNITIES' => '所有商业机会的总金额',
    'LBL_CHART_TYPE' => '图表类型',
    'LBL_CREATED_ON' => '最近运行时间',
	'LBL_CLOSE_DATE_START' => '预计截止日期 - 从',
	'LBL_CLOSE_DATE_END'   => '预计截止日期 - 到',
    'LBL_DATE_END' => '结束日期',
    'LBL_DATE_RANGE_TO' => '到',
    'LBL_DATE_RANGE' => '日期范围',
    'LBL_DATE_START' => '开始日期',
    'LBL_EDIT' => '编辑',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => '显示所选用户的累计商业机会金额，按潜在客户来源划分，结果是基于销售阶段的成单、丢单或其他设置。',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => '按潜在客户来源划分的商业机会金额',
    'LBL_LEAD_SOURCE_FORM_DESC' => '显示所选用户的累计商业机会金额，按潜在客户来源划分。',
    'LBL_LEAD_SOURCE_FORM_TITLE' => '按潜在客户来源划分的商业机会金额',
    'LBL_LEAD_SOURCE_OTHER' => '其他',
    'LBL_LEAD_SOURCES' => '潜在客户来源',
    'LBL_MODULE_NAME' => '仪表盘',
    'LBL_MODULE_TITLE' => '仪表盘',
    'LBL_MONTH_BY_OUTCOME_DESC' => '显示所选用户的累计商业机会金额，按月划分，结果是基于销售阶段的成单、丢单或其他设置。',
    'LBL_OPP_SIZE' => '商业机会金额单位是',
    'LBL_OPP_THOUSANDS'=> 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => '个商业机会的潜在客户来源是',
    'LBL_OPPS_IN_STAGE' => '销售阶段是',
    'LBL_OPPS_OUTCOME' => '结果是',
    'LBL_OPPS_WORTH' => '商业机会价值',
    'LBL_PIPELINE_FORM_TITLE_DESC' => '显示您商业机会的累计金额，按销售阶段划分。',
    'LBL_REFRESH' => '刷新',
    'LBL_ROLLOVER_DETAILS' => '点击查看细节。',
    'LBL_ROLLOVER_WEDGE_DETAILS' => '点击查看细节。',
    'LBL_SALES_STAGE_FORM_DESC' => '显示所选用户的累计商业机会金额，按销售阶段划分。',
    'LBL_SALES_STAGE_FORM_TITLE' => '销售阶段管道',
    'LBL_SALES_STAGES' => '销售阶段',
    'LBL_TOTAL_PIPELINE' => '销售数据总和',
    'LBL_USERS' => '用户',
    'LBL_YEAR_BY_OUTCOME' => '按月划分的商业机会金额管道',
    'LBL_YEAR' => '年',
    'LNK_NEW_ACCOUNT' => '创建客户',
    'LNK_NEW_CALL' => '创建电话',
    'LNK_NEW_CASE' => '创建客户反馈',
    'LNK_NEW_CONTACT' => '创建联系人',
    'LNK_NEW_LEAD' => '创建潜在客户',
    'LNK_NEW_MEETING' => '创建会议',
    'LNK_NEW_NOTE' => '创建备忘录',
    'LNK_NEW_OPPORTUNITY' => '创建商业机会',
    'LNK_NEW_TASK' => '创建任务',
    'NTC_NO_LEGENDS' => '无',

    'LBL_TITLE' => '标题',
    'LBL_MY_MODULES_USED_SIZE' => '访问计数',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => '销售阶段管道',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => '商业机会金额堆积条形图',
    'LBL_CHART_OUTCOME_BY_MONTH' => '按月划分的商业机会金额',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => '潜在客户来源管道',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => '我的销售阶段管道',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => '我使用过的模块(最近30天)',
);


?>