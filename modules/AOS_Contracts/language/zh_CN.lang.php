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
    'LBL_ASSIGNED_TO_NAME' => '负责人',
    'LBL_CONTRACT_ACCOUNT' => '客户',
    'LBL_OPPORTUNITY' => '商业机会',
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
    'LBL_LIST_FORM_TITLE' => '合同列表',
    'LBL_MODULE_NAME' => '合同',
    'LBL_MODULE_TITLE' => '合同',
    'LBL_HOMEPAGE_TITLE' => '合同',
    'LNK_NEW_RECORD' => '创建合同',
    'LNK_LIST' => '查看合同',
    'LBL_SEARCH_FORM_TITLE' => '搜索',
    'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
    'LBL_NEW_FORM_TITLE' => '新建',
    'LBL_CONTRACT_NAME' => '合同名称',
    'LBL_REFERENCE_CODE ' => '参考码',
    'LBL_START_DATE' => '开始日期',
    'LBL_END_DATE' => '结束日期',
    'LBL_TOTAL_CONTRACT_VALUE' => '合同金额',
    'LBL_STATUS' => '状态',
    'LBL_CUSTOMER_SIGNED_DATE' => '客户签字日期',
    'LBL_COMPANY_SIGNED_DATE' => '公司签字日期',
    'LBL_RENEWAL_REMINDER_DATE' => '续约提醒日期',
    'LBL_CONTRACT_TYPE' => '合同类型',
    'LBL_CONTACT' => '联系人',
    'LBL_ADD_GROUP' => '添加组',
    'LBL_DELETE_GROUP' => '删除组',
    'LBL_GROUP_NAME' => '条目组名称',
    'LBL_GROUP_TOTAL' => '条目组总计',
    'LBL_PRODUCT_QUANITY' => '数量',
    'LBL_PRODUCT_NAME' => '产品',
    'LBL_PART_NUMBER' => '物料编号',
    'LBL_PRODUCT_NOTE' => '备注',
    'LBL_PRODUCT_DESCRIPTION' => '说明',
    'LBL_LIST_PRICE' => '标价',
    'LBL_DISCOUNT_AMT' => '折扣金额',
    'LBL_UNIT_PRICE' => '成交单价',
    'LBL_TOTAL_PRICE' => '总价',
    'LBL_VAT' => '税点',
    'LBL_VAT_AMT' => '税费',
    'LBL_SERVICE_NAME' => '服务',
    'LBL_SERVICE_LIST_PRICE' => '服务标价',
    'LBL_SERVICE_PRICE' => '实际服务费',
    'LBL_SERVICE_DISCOUNT' => '折扣',
    'LBL_LINE_ITEMS' => '条目',
    'LBL_SUBTOTAL_AMOUNT' => '小计',
    'LBL_DISCOUNT_AMOUNT' => '折扣金额',
    'LBL_TAX_AMOUNT' => '总税费',
    'LBL_SHIPPING_AMOUNT' => '物流费',
    'LBL_TOTAL_AMT' => '总金额',
    'LBL_GRAND_TOTAL' => '总计',
    'LBL_SHIPPING_TAX' => '物流税点',
    'LBL_SHIPPING_TAX_AMT' => '物流税费',
    'LBL_ADD_PRODUCT_LINE' => '添加产品',
    'LBL_ADD_SERVICE_LINE' => '添加服务',
    'LBL_PRINT_AS_PDF' => '生成 PDF 文件',
    'LBL_EMAIL_PDF' => '邮件发送 PDF',
    'LBL_PDF_NAME' => '合同',
    'LBL_EMAIL_NAME' => '合同',
    'LBL_NO_TEMPLATE' => '错误\n未找到模板。如果您没有创建合同模板，请到 PDF 模板模块创建一个合同模板。',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => '合同金额(默认货币)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => '小计(默认货币)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => '折扣金额(默认货币)',
    'LBL_TAX_AMOUNT_USDOLLAR' => '总税费(默认货币)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => '物流费(默认货币)',
    'LBL_TOTAL_AMT_USDOLLAR' => '总金额(默认货币)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => '物流税费(默认货币)',
    'LBL_GRAND_TOTAL_USDOLLAR' => '总计(默认货币)',

    'LBL_CALL_ID' => '电话ID',
    'LBL_AOS_LINE_ITEM_GROUPS' => '条目组',
    'LBL_AOS_PRODUCT_QUOTES' => '产品报价',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => '报价：合同',
);
?>
