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
	// DON'T CONVERT THESE THEY ARE MAPPINGS
	'db_name' => 'LBL_LIST_ACCOUNT_NAME',
	'db_website' => '网址',
	'db_billing_address_city' => '城市',
	// END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '文档',
	// Dashlet Categories
	'LBL_CHARTS'    => '图表',
	'LBL_DEFAULT' => '默认',
	// END Dashlet Categories

	'ERR_DELETE_RECORD' => '您必须指定记录编号才能删除',
	'LBL_ACCOUNT_INFORMATION' => '客户信息', //Can be translated in all caps. This string will be used by SuiteP template menu actions
	'LBL_ACCOUNT_NAME' => '客户名称',
	'LBL_ACCOUNT' => '客户',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'活动',
	'LBL_ADDRESS_INFORMATION' => '地址信息',
	'LBL_ANNUAL_REVENUE' => '年收入',
	'LBL_ANY_ADDRESS' => '任何地址',
	'LBL_ANY_EMAIL' => '任何邮箱',
	'LBL_ANY_PHONE' => '任何电话',
	'LBL_ASSIGNED_TO_NAME' => '负责人',
	'LBL_ASSIGNED_TO_ID' => '负责人ID',
	'LBL_BILLING_ADDRESS_CITY' => '[账单地址]城市',
	'LBL_BILLING_ADDRESS_COUNTRY' => '[账单地址]国家',
	'LBL_BILLING_ADDRESS_POSTALCODE' => '[账单地址]邮编',
	'LBL_BILLING_ADDRESS_STATE' => '[账单地址]省份',
	'LBL_BILLING_ADDRESS_STREET_2' =>'[账单地址]街道2',
	'LBL_BILLING_ADDRESS_STREET_3' =>'[账单地址]街道3',
	'LBL_BILLING_ADDRESS_STREET_4' =>'[账单地址]街道4',
	'LBL_BILLING_ADDRESS_STREET' => '[账单地址]街道',
	'LBL_BILLING_ADDRESS' => '账单地址',
	'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
	'LBL_CAMPAIGN_ID' => '营销活动ID',
	'LBL_CASES_SUBPANEL_TITLE' => '客户反馈',
	'LBL_CITY' => '城市',
	'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
	'LBL_COUNTRY' => '国家',
	'LBL_DATE_ENTERED' => '创建日期',
	'LBL_DATE_MODIFIED' => '修改日期',
	'LBL_DEFAULT_SUBPANEL_TITLE' => '客户',
	'LBL_DESCRIPTION_INFORMATION' => '说明信息',
	'LBL_DESCRIPTION' => '说明',
	'LBL_DUPLICATE' => '类似或重复',
	'LBL_EMAIL' => 'Email 地址',
	'LBL_EMAIL_OPT_OUT' => '退出邮件列表',
	'LBL_EMAIL_ADDRESSES' => 'Email 地址',
	'LBL_EMPLOYEES' => '员工',
	'LBL_FAX' => '传真',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'历史记录',
	'LBL_HOMEPAGE_TITLE' => '客户',
	'LBL_INDUSTRY' => '行业',
	'LBL_INVALID_EMAIL'=>'无效的邮箱',
	'LBL_INVITEE' => '联系人',
	'LBL_LEADS_SUBPANEL_TITLE' => '潜在客户',
	'LBL_LIST_ACCOUNT_NAME' => '客户名称',
	'LBL_LIST_CITY' => '城市',
	'LBL_LIST_CONTACT_NAME' => '联系人',
	'LBL_LIST_EMAIL_ADDRESS' => 'Email 地址',
	'LBL_LIST_FORM_TITLE' => '客户列表',
	'LBL_LIST_PHONE' => '电话',
	'LBL_LIST_STATE' => '省份',
	'LBL_MEMBER_OF' => '上级',
	'LBL_MEMBER_ORG_SUBPANEL_TITLE'=>'子成员',
	'LBL_MODULE_NAME' => '客户',
	'LBL_MODULE_TITLE' => '客户',
	'LBL_MODULE_ID'=> '客户',
	'LBL_NAME'=>'名称',
	'LBL_NEW_FORM_TITLE' => '新建',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商业机会',
	'LBL_OTHER_EMAIL_ADDRESS' => '其他 Email 地址',
	'LBL_OTHER_PHONE' => '其他电话',
	'LBL_OWNERSHIP' => '所有权',
	'LBL_PARENT_ACCOUNT_ID' => '上级客户ID',
	'LBL_PHONE_ALT' => '其他电话',
	'LBL_PHONE_FAX' => '传真',
	'LBL_PHONE_OFFICE' => '办公电话',
	'LBL_PHONE' => '电话',
	'LBL_POSTAL_CODE' => '邮编',
	'LBL_PRODUCTS_TITLE'=>'产品',
	'LBL_PROJECTS_SUBPANEL_TITLE' => '项目',
	'LBL_PUSH_CONTACTS_BUTTON_LABEL' => '复制到联系人地址',
	'LBL_PUSH_CONTACTS_BUTTON_TITLE' => '复制...',
	'LBL_RATING' => '评分',
	'LBL_SAVE_ACCOUNT' => '保存客户',
	'LBL_SEARCH_FORM_TITLE' => '搜索',
	'LBL_SHIPPING_ADDRESS_CITY' => '[送货地址]城市',
	'LBL_SHIPPING_ADDRESS_COUNTRY' => '[送货地址]国家',
	'LBL_SHIPPING_ADDRESS_POSTALCODE' => '[送货地址]邮编',
	'LBL_SHIPPING_ADDRESS_STATE' => '[送货地址]省份',
	'LBL_SHIPPING_ADDRESS_STREET_2' => '[送货地址]街道2',
	'LBL_SHIPPING_ADDRESS_STREET_3' => '[送货地址]街道3',
	'LBL_SHIPPING_ADDRESS_STREET_4' => '[送货地址]街道4',
	'LBL_SHIPPING_ADDRESS_STREET' => '[送货地址]街道',
	'LBL_SHIPPING_ADDRESS' => '送货地址',
	'LBL_SIC_CODE' => '标准行业代码',
	'LBL_STATE' => '省份', //For address fields
	'LBL_TICKER_SYMBOL' => '股票代码',
	'LBL_TYPE' => '类型',
	'LBL_WEBSITE' => '网址',
	'LBL_CAMPAIGNS' =>'营销活动',
	'LNK_ACCOUNT_LIST' => '查看客户',
	'LNK_NEW_ACCOUNT' => '创建客户',
	'LNK_IMPORT_ACCOUNTS' => '导入客户',
	'MSG_DUPLICATE' => '您将要创建的客户记录可能与已经存在的客户记录重复。下面列出了包含类似名称的客户记录。<br />点击创建客户来继续创建此新的客户，或者从下面列出的现有客户选择一个。',
	'MSG_SHOW_DUPLICATES' => '您将要创建的客户可能与已经存在的客户重复。下面列出了包含类似名称的客户。<br />点击保存来继续创建此新的客户，或者点击取消。',
	'LBL_ASSIGNED_USER_NAME' => '负责人',
    'LBL_PROSPECT_LIST' => '目标群体',
    'LBL_ACCOUNTS_SUBPANEL_TITLE'=>'子公司',
    'LBL_PROJECT_SUBPANEL_TITLE' => '项目',
    //For export labels
    'LBL_PARENT_ID' => '上级ID',
    // SNIP
	'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => '购买的产品/服务',

	'LBL_AOS_CONTRACTS' => '合同',
	'LBL_AOS_INVOICES' => '发票',
	'LBL_AOS_QUOTES' => '报价',
);
?>
