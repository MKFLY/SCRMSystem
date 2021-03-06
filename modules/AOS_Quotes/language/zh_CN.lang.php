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
    'ERR_DELETE_RECORD' => '您必须指定记录编号才能删除。',
    'LBL_ACCOUNT_NAME' => '客户名称',
    'LBL_ACCOUNT' => '客户',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
    'LBL_ADDRESS_INFORMATION' => '地址信息',
    'LBL_ANNUAL_REVENUE' => '年收入',
    'LBL_ANY_ADDRESS' => '任何地址',
    'LBL_ANY_EMAIL' => '任何邮箱',
    'LBL_ANY_PHONE' => '任何电话',
    'LBL_RATING' => '评分',
    'LBL_ASSIGNED_USER' => '负责人',
    'LBL_BILLING_ADDRESS_CITY' => '[账单地址]城市',
    'LBL_BILLING_ADDRESS_COUNTRY' => '[账单地址]国家',
    'LBL_BILLING_ADDRESS_POSTALCODE' => '[账单地址]邮编',
    'LBL_BILLING_ADDRESS_STATE' => '[账单地址]省份',
    'LBL_BILLING_ADDRESS_STREET_2' => '[账单地址]街道2',
    'LBL_BILLING_ADDRESS_STREET_3' => '[账单地址]街道3',
    'LBL_BILLING_ADDRESS_STREET_4' => '[账单地址]街道4',
    'LBL_BILLING_ADDRESS_STREET' => '[账单地址]街道',
    'LBL_BILLING_ADDRESS' => '账单地址',
    'LBL_ACCOUNT_INFORMATION' => '客户信息',
    'LBL_CITY' => '城市',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
    'LBL_COUNTRY' => '国家',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '客户',
    'LBL_DUPLICATE' => '类似或重复',
    'LBL_EMAIL' => '电子邮件',
    'LBL_EMPLOYEES' => '员工',
    'LBL_FAX' => '传真',
    'LBL_INDUSTRY' => '行业',
    'LBL_LIST_ACCOUNT_NAME' => '客户名称',
    'LBL_LIST_CITY' => '城市',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email 地址',
    'LBL_LIST_PHONE' => '电话',
    'LBL_LIST_STATE' => '省份',
    'LBL_MEMBER_OF' => '上级',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => '子成员',
    'LBL_OTHER_EMAIL_ADDRESS' => '其他 Email 地址',
    'LBL_OTHER_PHONE' => '其他电话',
    'LBL_OWNERSHIP' => '所有权',
    'LBL_PARENT_ACCOUNT_ID' => '上级客户ID',
    'LBL_PHONE_ALT' => '其他电话',
    'LBL_PHONE_FAX' => '传真',
    'LBL_PHONE_OFFICE' => '办公电话',
    'LBL_PHONE' => '电话',
    'LBL_POSTAL_CODE' => '邮编',
    'LBL_SAVE_ACCOUNT' => '保存客户',
    'LBL_SHIPPING_ADDRESS_CITY' => '[送货地址]城市',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => '[送货地址]国家',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => '[送货地址]邮编',
    'LBL_SHIPPING_ADDRESS_STATE' => '[送货地址]省份',
    'LBL_SHIPPING_ADDRESS_STREET_2' => '[送货地址]街道2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => '[送货地址]街道3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => '[送货地址]街道4',
    'LBL_SHIPPING_ADDRESS_STREET' => '[送货地址]街道',
    'LBL_SHIPPING_ADDRESS' => '送货地址',
    'LBL_STATE' => '省份', //For address fields
    'LBL_TICKER_SYMBOL' => '股票代码',
    'LBL_TYPE' => '类型',
    'LBL_WEBSITE' => '网址',
    'LNK_ACCOUNT_LIST' => '查看客户',
    'LNK_NEW_ACCOUNT' => '创建客户',
    'MSG_DUPLICATE' => '您将要创建的客户记录可能与已经存在的客户记录重复。下面列出了包含类似名称的客户记录。点击创建客户来继续创建此新的客户，或者从下面列出的现有客户选择一个。',
    'MSG_SHOW_DUPLICATES' => '您将要创建的客户可能与已经存在的客户重复。下面列出了包含类似名称的客户。<br />点击保存来继续创建此新的客户，或者点击取消。',
    'NTC_DELETE_CONFIRMATION' => '您确定要删除此项记录？',
    'LBL_LIST_FORM_TITLE' => '报价列表',
    'LBL_MODULE_NAME' => '报价',
    'LBL_MODULE_TITLE' => '报价',
    'LBL_HOMEPAGE_TITLE' => '报价',
    'LNK_NEW_RECORD' => '创建报价',
    'LNK_LIST' => '查看报价',
    'LBL_SEARCH_FORM_TITLE' => '搜索',
    'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
    'LBL_NEW_FORM_TITLE' => '新建',
    'LBL_TERMS_C' => '条款',
    'LBL_APPROVAL_ISSUE' => '审批问题',
    'LBL_APPROVAL_STATUS' => '审批状态',
    'LBL_BILLING_ACCOUNT' => '账单客户',
    'LBL_BILLING_CONTACT' => '账单联系人',
    'LBL_EXPIRATION' => '有效期至',
    'LBL_QUOTE_NUMBER' => '报价编号',
    'LBL_OPPORTUNITY' => '商业机会',
    'LBL_TEMPLATE_DDOWN_C' => '报价模板',
    'LBL_STAGE' => '阶段',
    'LBL_TERM' => '付款条款',
    'LBL_SUBTOTAL_AMOUNT' => '小计',
    'LBL_DISCOUNT_AMOUNT' => '折扣金额',
    'LBL_TAX_AMOUNT' => '总税费',
    'LBL_SHIPPING_AMOUNT' => '物流费',
    'LBL_TOTAL_AMT' => '总金额',
    'VALUE' => '标题',
    'LBL_EMAIL_ADDRESSES' => 'Email 地址',
    'LBL_LINE_ITEMS' => '条目',
    'LBL_GRAND_TOTAL' => '总计',
    'LBL_INVOICE_STATUS' => '发票状态',
    'LBL_PRODUCT_QUANITY' => '数量',
    'LBL_PRODUCT_NAME' => '产品',
	'LBL_PRODUCT_NUMBER' => '编号', // PR 3296
    'LBL_PART_NUMBER' => '物料编号',
    'LBL_PRODUCT_NOTE' => '备注',
    'LBL_PRODUCT_DESCRIPTION' => '说明',
    'LBL_LIST_PRICE' => '标价',
    'LBL_DISCOUNT_AMT' => '折扣金额',
    'LBL_UNIT_PRICE' => '成交单价',
    'LBL_TOTAL_PRICE' => '总价',
    'LBL_VAT' => '税点', // VAT
    'LBL_VAT_AMT' => '税费', // VAT
    'LBL_ADD_PRODUCT_LINE' => '添加产品',
    'LBL_SERVICE_NAME' => '服务',
    'LBL_SERVICE_NUMBER' => '编号', // PR 3296
    'LBL_SERVICE_LIST_PRICE' => '服务标价',
    'LBL_SERVICE_PRICE' => '实际服务费',
    'LBL_SERVICE_DISCOUNT' => '折扣',
    'LBL_ADD_SERVICE_LINE' => '添加服务',
    'LBL_REMOVE_PRODUCT_LINE' => '移除',
    'LBL_CONVERT_TO_INVOICE' => '转为发票',
    'LBL_PRINT_AS_PDF' => '生成 PDF 文件',
    'LBL_EMAIL_QUOTE' => '邮件发送报价',
    'LBL_CREATE_CONTRACT' => '创建合同',
    'LBL_LIST_NUM' => '编号',
    'LBL_PDF_NAME' => '报价',
    'LBL_EMAIL_NAME' => '报价',
    'LBL_QUOTE_DATE' => '报价日期',
    'LBL_NO_TEMPLATE' => '错误\n未找到模板。如果您没有创建报价模板，请到 PDF 模板模块创建一个报价模板。',
    'LBL_SUBTOTAL_TAX_AMOUNT' => '小计+税',//pre shipping
    'LBL_EMAIL_PDF' => '邮件发送 PDF',
    'LBL_ADD_GROUP' => '添加组',
    'LBL_DELETE_GROUP' => '删除组',
    'LBL_GROUP_NAME' => '条目组名称',
    'LBL_GROUP_DESCRIPTION' => '条目组说明', // PR 3296
    'LBL_GROUP_TOTAL' => '条目组总计',
    'LBL_SHIPPING_TAX' => '物流税点',
    'LBL_SHIPPING_TAX_AMT' => '物流税费',
    'LBL_IMPORT_LINE_ITEMS' => '导入条目',
    'LBL_CREATE_OPPORTUNITY' => '创建商业机会',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => '小计(默认货币)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => '折扣金额(默认货币)',
    'LBL_TAX_AMOUNT_USDOLLAR' => '总税费(默认货币)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => '物流费(默认货币)',
    'LBL_TOTAL_AMT_USDOLLAR' => '总金额(默认货币)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => '物流税费(默认货币)',
    'LBL_GRAND_TOTAL_USDOLLAR' => '总计(默认货币)',
    'LBL_QUOTE_TO' => '报价给',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => '小计+税(默认货币)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => '报价：合同',
    'LBL_AOS_QUOTES_AOS_INVOICES' => '报价：发票',
    'LBL_AOS_LINE_ITEM_GROUPS' => '条目组',
    'LBL_AOS_PRODUCT_QUOTES' => '产品报价',
    'LBL_AOS_QUOTES_PROJECT' => '报价：项目',
);
?>
