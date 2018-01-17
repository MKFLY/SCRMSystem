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
    'LBL_SECURITYGROUPS' => '用户组',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => '用户组',
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
    'LBL_LIST_FORM_TITLE' => '数据透视列表',
    'LBL_MODULE_NAME' => '数据透视',
    'LBL_MODULE_TITLE' => '数据透视',
    'LBL_HOMEPAGE_TITLE' => '数据分析',
    'LNK_NEW_RECORD' => '创建数据透视',
    'LNK_LIST' => '查看数据透视',
    'LBL_SEARCH_FORM_TITLE' => '搜索',
    'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
    'LBL_NEW_FORM_TITLE' => '新建',
    'LBL_CONFIG' => '配置',
    'LBL_TYPE' => '类型',
    'LNK_SPOT_LIST' => '查看数据分析',
    'LNK_SPOT_CREATE' => '创建数据分析',

    //Analytics
    'LBL_AN_CONFIGURATION' => '配置',

    'LBL_AN_UNSUPPORTED_DB' => '当前仅支持  MySQL 和 MSSQL 数据库',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => '客户',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => '类型',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => '行业',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => '国家',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => '负责人',
    'LBL_AN_LEADS_STATUS' => '状态',
    'LBL_AN_LEADS_LEAD_SOURCE' => '来源',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => '营销活动',
    'LBL_AN_LEADS_YEAR' => '年份',
    'LBL_AN_LEADS_QUARTER' => '季度',
    'LBL_AN_LEADS_MONTH' => '月份',
    'LBL_AN_LEADS_WEEK' => '周数',
    'LBL_AN_LEADS_DAY' => '星期',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => '客户',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => '商业机会',
    'LBL_AN_SALES_ASSIGNED_USER' => '负责人',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => '商业机会类型',
    'LBL_AN_SALES_LEAD_SOURCE' => '潜在客户来源',
    'LBL_AN_SALES_AMOUNT' => '金额',
    'LBL_AN_SALES_STAGE' => '销售阶段',
    'LBL_AN_SALES_PROBABILITY' => '可能性',
    'LBL_AN_SALES_DATE' => '销售日期',
    'LBL_AN_SALES_QUARTER' => '季度',
    'LBL_AN_SALES_MONTH' => '月份',
    'LBL_AN_SALES_WEEK' => '周数',
    'LBL_AN_SALES_DAY' => '星期',
    'LBL_AN_SALES_YEAR' => '年份',
    'LBL_AN_SALES_CAMPAIGN' => '营销活动',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => '客户',
    'LBL_AN_SERVICE_STATE' => '状态',
    'LBL_AN_SERVICE_STATUS' => '状态',
    'LBL_AN_SERVICE_PRIORITY' => '优先级',
    'LBL_AN_SERVICE_CREATED_DAY' => '星期',
    'LBL_AN_SERVICE_CREATED_WEEK' => '周数',
    'LBL_AN_SERVICE_CREATED_MONTH' => '月份',
    'LBL_AN_SERVICE_CREATED_QUARTER' => '季度',
    'LBL_AN_SERVICE_CREATED_YEAR' => '年份',
    'LBL_AN_SERVICE_CONTACT_NAME' => '联系人',
    'LBL_AN_SERVICE_ASSIGNED_TO' => '负责人',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => '类型',
    'LBL_AN_ACTIVITIES_NAME' => '名称',
    'LBL_AN_ACTIVITIES_STATUS' => '状态',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => '负责人',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => '状态',
    'LBL_AN_MARKETING_TYPE' => '类型',
    'LBL_AN_MARKETING_BUDGET' => '预算',
    'LBL_AN_MARKETING_EXPECTED_COST' => '预计成本',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => '预计收入',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => '商业机会',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => '金额',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => '销售阶段',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => '负责人',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => '客户',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => '营销活动',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => '活动日期',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => '活动类型',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => '关联类型',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => '关联ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => '商业机会',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => '商业机会类型',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => '潜在客户来源',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => '销售阶段',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => '客户',
    'LBL_AN_QUOTES_CONTACT_NAME' => '联系人',
    'LBL_AN_QUOTES_ITEM_NAME' => '名称',
    'LBL_AN_QUOTES_ITEM_TYPE' => '类型',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => '类别',
    'LBL_AN_QUOTES_ITEM_QTY' => '数量',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => '标价',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => '售价',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => '成本',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => '折扣价',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => '折扣金额',
    'LBL_AN_QUOTES_ITEM_TOTAL' => '总计',
    'LBL_AN_QUOTES_GRAND_TOTAL' => '总计',
    'LBL_AN_QUOTES_ASSIGNED_TO' => '负责人',
    'LBL_AN_QUOTES_DATE_CREATED' => '创建日期',
    'LBL_AN_QUOTES_DAY_CREATED' => '星期',
    'LBL_AN_QUOTES_WEEK_CREATED' => '周数',
    'LBL_AN_QUOTES_MONTH_CREATED' => '月份',
    'LBL_AN_QUOTES_QUARTER_CREATED' => '季度',
    'LBL_AN_QUOTES_YEAR_CREATED' => '年份',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => '确定数据分析子区域标签时出错',

    //Added to allow for the UI of the pivot to be language agnostic
    'LBL_RENDERERS_TABLE' =>'表格',
    'LBL_RENDERERS_TABLE_BARCHART' =>'条形图',
    'LBL_RENDERERS_HEATMAP' =>'热图',
    'LBL_RENDERERS_ROW_HEATMAP' =>'热图-行',
    'LBL_RENDERERS_COL_HEATMAP' =>'热图-列',
    'LBL_RENDERERS_LINE_CHART' =>'折线图',
    'LBL_RENDERERS_BAR_CHART' =>'条形图',
    'LBL_RENDERERS_STACKED_BAR_CHART' =>'堆积条形图',
    'LBL_RENDERERS_AREA_CHART' =>'面积图',
    'LBL_RENDERERS_SCATTER_CHART' =>'散点图',

    'LBL_AGGREGATORS_COUNT' => '计数',
    'LBL_AGGREGATORS_COUNT_UNIQUE_VALUES' => '统计唯一值',
    'LBL_AGGREGATORS_LIST_UNIQUE_VALUES' => '列出唯一值',
    'LBL_AGGREGATORS_SUM' => '求和',
    'LBL_AGGREGATORS_INTEGER_SUM' => '整数和',
    'LBL_AGGREGATORS_AVERAGE' => '平均值',
    'LBL_AGGREGATORS_MINIMUM' => '最小值',
    'LBL_AGGREGATORS_MAXIMUM' => '最大值',
    'LBL_AGGREGATORS_SUM_OVER_SUM' => 'Sum over Sum',
    'LBL_AGGREGATORS_80%_UPPER_BOUND' => '80% 上限',
    'LBL_AGGREGATORS_80%_LOWER_BOUND' => '80% 下限',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_TOTAL' => '总计 Sum as Fraction',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_ROWS' => '行 Sum as Fraction',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_COLUMNS' => '列 Sum as Fraction',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_TOTAL' => '总计 Count as Fraction',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_ROWS' => '行 Count as Fraction',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_COLUMNS' => '列 Count as Fraction',

    'LBL_LOCALE_STRINGS_RENDER_ERROR' => '呈现结果时出错。',
    'LBL_LOCALE_STRINGS_COMPUTING_ERROR' => '计算结果时出错。',
    'LBL_LOCALE_STRINGS_UI_RENDER_ERROR' => '呈现结果界面时出错。',
    'LBL_LOCALE_STRINGS_SELECT_ALL' => '全选',
    'LBL_LOCALE_STRINGS_SELECT_NONE' => '全不选',
    'LBL_LOCALE_STRINGS_TOO_MANY' => '（结果过多）',
    'LBL_LOCALE_STRINGS_FILTER_RESULTS' => '筛选结果',
    'LBL_LOCALE_STRINGS_TOTALS' => '总计',
    'LBL_LOCALE_STRINGS_VS' => 'vs',
    'LBL_LOCALE_STRINGS_BY' => '由',
    'LBL_LOCALE_STRINGS_OK' => 'OK',

    'LBL_ACTIVITIES_CALL'=>'电话',
    'LBL_ACTIVITIES_MEETING'=>'会议',
    'LBL_ACTIVITIES_TASK'=>'任务',
);
