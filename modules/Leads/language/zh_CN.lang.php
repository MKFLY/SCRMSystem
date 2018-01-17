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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => '您必须指定记录编号才能删除。',
    'LBL_ACCOUNT_DESCRIPTION' => '客户说明',
    'LBL_ACCOUNT_ID' => '客户ID',
    'LBL_ACCOUNT_NAME' => '客户名称',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
    'LBL_ADD_BUSINESSCARD' => '添加名片',
    'LBL_ADDRESS_INFORMATION' => '地址信息',
    'LBL_ALT_ADDRESS_CITY' => '[其他地址]城市',
    'LBL_ALT_ADDRESS_COUNTRY' => '[其他地址]国家',
    'LBL_ALT_ADDRESS_POSTALCODE' => '[其他地址]邮编',
    'LBL_ALT_ADDRESS_STATE' => '[其他地址]省份',
    'LBL_ALT_ADDRESS_STREET_2' => '[其他地址]街道2',
    'LBL_ALT_ADDRESS_STREET_3' => '[其他地址]街道3',
    'LBL_ALT_ADDRESS_STREET' => '[其他地址]街道',
    'LBL_ALTERNATE_ADDRESS' => '其他地址',
    'LBL_ALT_ADDRESS' => '其他地址',
    'LBL_ANY_ADDRESS' => '任何地址',
    'LBL_ANY_EMAIL' => '任何邮箱',
    'LBL_ANY_PHONE' => '任何电话',
    'LBL_ASSIGNED_TO_NAME' => '负责人',
    'LBL_ASSIGNED_TO_ID' => '负责人ID',
    'LBL_BUSINESSCARD' => '名片',
    'LBL_CITY' => '城市',
    'LBL_CONTACT_ID' => '联系人ID',
    'LBL_CONTACT_INFORMATION' => '联系人信息', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CONTACT_NAME' => '联系人',
    'LBL_CONTACT_OPP_FORM_TITLE' => '潜在客户-商业机会',
    'LBL_CONTACT_ROLE' => '角色',
    'LBL_CONTACT' => '联系人',
    'LBL_CONVERTED_ACCOUNT' => '已转化为客户',
    'LBL_CONVERTED_CONTACT' => '已转化为联系人',
    'LBL_CONVERTED_OPP' => '已转化为商业机会',
    'LBL_CONVERTED' => '已转化',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => '转化潜在客户',
    'LBL_CONVERTLEAD' => '转化',
    'LBL_CONVERTLEAD_WARNING' => '警告：您正在转化的潜在客户的状态为“已转化”。说明此潜在客户记录可能已经转化为对应的客户或者联系人。<br />点击“保存”继续转化，点击“取消”不进行转化。',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => '可能的联系人',
    'LBL_COUNTRY' => '国家',
    'LBL_CREATED_NEW' => '创建了新的',
    'LBL_CREATED_ACCOUNT' => '创建了新的客户',
    'LBL_CREATED_CALL' => '创建了新的电话',
    'LBL_CREATED_CONTACT' => '创建了新的联系人',
    'LBL_CREATED_MEETING' => '创建了新的会议',
    'LBL_CREATED_OPPORTUNITY' => '创建了新的商业机会',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '潜在客户',
    'LBL_DEPARTMENT' => '部门',
    'LBL_DESCRIPTION' => '说明',
    'LBL_DO_NOT_CALL' => '不要电联',
    'LBL_DUPLICATE' => '类似或重复',
    'LBL_EMAIL_ADDRESS' => 'Email 地址',
    'LBL_EMAIL_OPT_OUT' => '退出邮件列表',
    'LBL_EXISTING_ACCOUNT' => '使用现有的客户',
    'LBL_EXISTING_CONTACT' => '使用现有的联系人',
    'LBL_EXISTING_OPPORTUNITY' => '使用现有的商业机会',
    'LBL_FAX_PHONE' => '传真',
    'LBL_FIRST_NAME' => '名字',
    'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
    'LBL_HOME_PHONE' => '家庭电话',
    'LBL_IMPORT_VCARD' => '导入 vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => '从导入的 vCard 自动创建新的记录。',
    'LBL_INVALID_EMAIL' => '无效的邮箱',
    'LBL_INVITEE' => '直接报告',
    'LBL_LAST_NAME' => '姓氏',
    'LBL_LEAD_SOURCE_DESCRIPTION' => '潜在客户来源说明',
    'LBL_LEAD_SOURCE' => '潜在客户来源',
    'LBL_LIST_ACCEPT_STATUS' => '接受状态',
    'LBL_LIST_ACCOUNT_NAME' => '客户名称',
    'LBL_LIST_CONTACT_NAME' => '联系人',
    'LBL_LIST_CONTACT_ROLE' => '角色',
    'LBL_LIST_DATE_ENTERED' => '创建日期',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email 地址',
    'LBL_LIST_FIRST_NAME' => '名字',
    'LBL_LIST_FORM_TITLE' => '潜在客户列表',
    'LBL_LIST_LAST_NAME' => '姓氏',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => '潜在客户来源说明',
    'LBL_LIST_LEAD_SOURCE' => '潜在客户来源',
    'LBL_LIST_MY_LEADS' => '我的潜在客户',
    'LBL_LIST_NAME' => '名称',
    'LBL_LIST_PHONE' => '电话',
    'LBL_LIST_REFERED_BY' => '推荐人',
    'LBL_LIST_STATUS' => '状态',
    'LBL_LIST_TITLE' => '职称',
    'LBL_MOBILE_PHONE' => '手机',
    'LBL_MODULE_NAME' => '潜在客户',
    'LBL_MODULE_TITLE' => '潜在客户',
    'LBL_NAME' => '名称',
    'LBL_NEW_FORM_TITLE' => '新建',
    'LBL_OFFICE_PHONE' => '办公电话',
    'LBL_OPP_NAME' => '商业机会',
    'LBL_OPPORTUNITY_AMOUNT' => '金额',
    'LBL_OPPORTUNITY_ID' => '商业机会ID',
    'LBL_OPPORTUNITY_NAME' => '商业机会',
    'LBL_OTHER_EMAIL_ADDRESS' => '其他 Email 地址',
    'LBL_OTHER_PHONE' => '其他电话',
    'LBL_PHONE' => '电话',
    'LBL_PORTAL_APP' => '门户应用',
    'LBL_PORTAL_INFORMATION' => '门户站点信息',
    'LBL_PORTAL_NAME' => '门户名称',
    'LBL_POSTAL_CODE' => '邮编',
    'LBL_STREET' => '街道',
    'LBL_PRIMARY_ADDRESS_CITY' => '[主要地址]城市',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '[主要地址]国家',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '[主要地址]邮编',
    'LBL_PRIMARY_ADDRESS_STATE' => '[主要地址]省份',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '[主要地址]街道2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '[主要地址]街道3',
    'LBL_PRIMARY_ADDRESS_STREET' => '[主要地址]街道',
    'LBL_PRIMARY_ADDRESS' => '主要地址',
    'LBL_REFERED_BY' => '推荐人',
    'LBL_REPORTS_TO_ID' => '上级ID',
    'LBL_REPORTS_TO' => '上级',
    'LBL_SALUTATION' => '称谓',
    'LBL_MODIFIED' => '修改人',
    'LBL_CREATED' => '创建人',
    'LBL_SEARCH_FORM_TITLE' => '搜索',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => '选择已勾选',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => '选择已勾选',
    'LBL_STATE' => '省份', //For address fields
    'LBL_STATUS_DESCRIPTION' => '状态说明',
    'LBL_STATUS' => '状态',
    'LBL_TITLE' => '职称',
    'LNK_IMPORT_VCARD' => '从 vCard 创建',
    'LNK_LEAD_LIST' => '查看潜在客户',
    'LNK_NEW_ACCOUNT' => '创建客户',
    'LNK_NEW_APPOINTMENT' => '创建约会',
    'LNK_NEW_CONTACT' => '创建联系人',
    'LNK_NEW_LEAD' => '创建潜在客户',
    'LNK_NEW_NOTE' => '创建备忘录',
    'LNK_NEW_TASK' => '创建任务',
    'LNK_NEW_CASE' => '创建客户反馈',
    'LNK_NEW_CALL' => '创建电话',
    'LNK_NEW_MEETING' => '创建会议',
    'LNK_NEW_OPPORTUNITY' => '创建商业机会',
    'LNK_SELECT_ACCOUNTS' => ' <b>或者</b> 选择客户',
    'LNK_SELECT_CONTACTS' => ' <b>或者</b> 选择联系人',
    'NTC_DELETE_CONFIRMATION' => '您确定要删除此项记录？',
    'NTC_REMOVE_CONFIRMATION' => '您确定要从客户反馈中移除此潜在客户？',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => '营销活动',
    'LBL_CAMPAIGN' => '营销活动',
    'LBL_LIST_ASSIGNED_TO_NAME' => '负责人',
    'LBL_PROSPECT_LIST' => '目标群体',
    'LBL_CAMPAIGN_LEAD' => '潜在客户',
    'LBL_BIRTHDATE' => '出生日期',
    'LBL_ASSISTANT_PHONE' => '助理电话',
    'LBL_ASSISTANT' => '助理',
    'LBL_CREATED_USER' => '创建人',
    'LBL_MODIFIED_USER' => '修改人',
    'LBL_CAMPAIGNS' => '营销活动',
    'LBL_CONVERT_MODULE_NAME' => '模块',
    'LBL_CONVERT_REQUIRED' => '转换前提',
    'LBL_CONVERT_SELECT' => '允许选择',
    'LBL_CONVERT_COPY' => '复制数据',
    'LBL_CONVERT_EDIT' => '编辑',
    'LBL_CONVERT_DELETE' => '删除',
    'LBL_CONVERT_ADD_MODULE' => '添加模块',
    'LBL_CREATE' => '创建',
    'LBL_SELECT' => ' <b>或者</b> 选择',
    'LBL_WEBSITE' => '网址',
    'LNK_IMPORT_LEADS' => '导入潜在客户',
//Convert lead tooltips
    'LBL_MODULE_TIP' => '将创建记录的模块。',
    'LBL_REQUIRED_TIP' => '必须先创建或选择所需的模块，才能进行转换。',
    'LBL_COPY_TIP' => '如果选中此项，来自潜在客户的字段将被复制到新创建的记录中具有相同名称的字段。',
    'LBL_SELECTION_TIP' => '可以选择联系人中具有关联字段的模块，而不是在转换潜在客户的过程中创建。',
    'LBL_EDIT_TIP' => '修改此模块的转化布局。',
    'LBL_DELETE_TIP' => '从转化布局中移除此模块。',

    'LBL_ACTIVITIES_MOVE' => '将活动移动到',
    'LBL_ACTIVITIES_COPY' => '将活动复制到',
    'LBL_ACTIVITIES_MOVE_HELP' => "选择要转移的纪录。任务、电话、会议、备忘录和电子邮件都会被转移到所选的记录。",
    'LBL_ACTIVITIES_COPY_HELP' => "选择要复制的纪录。新的任务、电话、会议、备忘录都会在选中的纪录下创建。Email 会关联到选中的纪录下。",
    //For export labels
    'LBL_CAMPAIGN_ID' => '营销活动ID',
    'LBL_EDITLAYOUT' => '编辑布局' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => '创建日期' /*for 508 compliance fix*/,
    'LBL_LOADING' => '正在加载' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => '编辑' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => '会展',
    'LBL_WWW' => 'WWW',
);
?>
