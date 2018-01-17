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
    'LBL_MODULE_NAME' => '目标对象',
    'LBL_MODULE_ID' => '目标对象',
    'LBL_INVITEE' => '直接报告',
    'LBL_MODULE_TITLE' => '目标对象',
    'LBL_SEARCH_FORM_TITLE' => '搜索',
    'LBL_LIST_FORM_TITLE' => '目标对象列表',
    'LBL_NEW_FORM_TITLE' => '新建',
    'LBL_BUSINESSCARD' => '名片',
    'LBL_LIST_NAME' => '名称',
    'LBL_LIST_LAST_NAME' => '姓氏',
    'LBL_LIST_TITLE' => '职称',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email 地址',
    'LBL_LIST_PHONE' => '电话',
    'LBL_LIST_FIRST_NAME' => '名字',
    'LBL_ASSIGNED_TO_NAME' => '负责人',
    'LBL_ASSIGNED_TO_ID' => '负责人ID',
    'LBL_CAMPAIGN_ID' => '营销活动ID',
    'LBL_EXISTING_ACCOUNT' => '使用现有的客户',
    'LBL_CREATED_ACCOUNT' => '创建了新的客户',
    'LBL_CREATED_CALL' => '创建了新的电话',
    'LBL_CREATED_MEETING' => '创建了新的会议',
    'LBL_ADDMORE_BUSINESSCARD' => '添加其他名片',
    'LBL_ADD_BUSINESSCARD' => '添加名片',
    'LBL_NAME' => '名称',
    'LBL_PROSPECT_INFORMATION' => '目标对象信息', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_MORE_INFORMATION' => '更多信息',
    'LBL_FIRST_NAME' => '名字',
    'LBL_OFFICE_PHONE' => '办公电话',
    'LBL_ANY_PHONE' => '任何电话',
    'LBL_PHONE' => '电话',
    'LBL_LAST_NAME' => '姓氏',
    'LBL_MOBILE_PHONE' => '手机',
    'LBL_HOME_PHONE' => '家庭电话',
    'LBL_OTHER_PHONE' => '其他电话',
    'LBL_FAX_PHONE' => '传真',
    'LBL_PRIMARY_ADDRESS_STREET' => '[主要地址]街道',
    'LBL_PRIMARY_ADDRESS_CITY' => '[主要地址]城市',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '[主要地址]国家',
    'LBL_PRIMARY_ADDRESS_STATE' => '[主要地址]省份',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '[主要地址]邮编',
    'LBL_ALT_ADDRESS_STREET' => '[其他地址]街道',
    'LBL_ALT_ADDRESS_CITY' => '[其他地址]城市',
    'LBL_ALT_ADDRESS_COUNTRY' => '[其他地址]国家',
    'LBL_ALT_ADDRESS_STATE' => '[其他地址]省份',
    'LBL_ALT_ADDRESS_POSTALCODE' => '[其他地址]邮编',
    'LBL_TITLE' => '职称',
    'LBL_DEPARTMENT' => '部门',
    'LBL_BIRTHDATE' => '出生日期',
    'LBL_EMAIL_ADDRESS' => 'Email 地址',
    'LBL_OTHER_EMAIL_ADDRESS' => '其他 Email 地址',
    'LBL_ANY_EMAIL' => '任何邮箱',
    'LBL_ASSISTANT' => '助理',
    'LBL_ASSISTANT_PHONE' => '助理电话',
    'LBL_DO_NOT_CALL' => '不要电联',
    'LBL_EMAIL_OPT_OUT' => '退出邮件列表',
    'LBL_PRIMARY_ADDRESS' => '主要地址',
    'LBL_ALTERNATE_ADDRESS' => '其他地址',
    'LBL_ANY_ADDRESS' => '任何地址',
    'LBL_CITY' => '城市',
    'LBL_STATE' => '省份', //For address fields
    'LBL_POSTAL_CODE' => '邮编',
    'LBL_COUNTRY' => '国家',
    'LBL_ADDRESS_INFORMATION' => '地址信息',
    'LBL_DESCRIPTION' => '说明',
    'LBL_OPP_NAME' => '商业机会',
    'LBL_IMPORT_VCARD' => '导入 vCard',
    'LBL_IMPORT_VCARDTEXT' => '从导入的 vCard 自动创建新的记录。',
    'LBL_DUPLICATE' => '类似或重复',
    'MSG_SHOW_DUPLICATES' => '您将要创建的目标对象可能与已经存在的目标对象重复。下面列出了包含类似名称的目标对象。<br />点击创建目标对象来继续创建此新的目标对象，或者从下面列出的现有目标对象选择一个。',
    'MSG_DUPLICATE' => '您将要创建的目标对象可能与已经存在的目标对象重复。下面列出了包含类似名称的目标对象。<br />点击保存来继续创建此新的目标对象，或者点击取消。',
    'LNK_IMPORT_VCARD' => '从 vCard 创建',
    'LNK_NEW_ACCOUNT' => '创建客户',
    'LNK_NEW_OPPORTUNITY' => '创建商业机会',
    'LNK_NEW_CASE' => '创建客户反馈',
    'LNK_NEW_NOTE' => '创建备忘录',
    'LNK_NEW_CALL' => '创建电话',
    'LNK_NEW_EMAIL' => '创建邮件',
    'LNK_NEW_MEETING' => '创建会议',
    'LNK_NEW_TASK' => '创建任务',
    'LNK_NEW_APPOINTMENT' => '创建约会',
    'LNK_IMPORT_PROSPECTS' => '导入目标对象',
    'NTC_DELETE_CONFIRMATION' => '您确定要删除此项记录？',
    'NTC_REMOVE_CONFIRMATION' => '您确定要从客户反馈中移除此联系人？',
    'ERR_DELETE_RECORD' => '您必须指定记录编号才能删除。',
    'LBL_SALUTATION' => '称谓',
    'LBL_CREATED_OPPORTUNITY' => '创建了新的商业机会',
    'LNK_SELECT_ACCOUNT' => "选择客户",
    'LNK_NEW_PROSPECT' => '创建目标对象',
    'LNK_PROSPECT_LIST' => '查看目标对象',
    'LNK_NEW_CAMPAIGN' => '创建营销活动',
    'LNK_CAMPAIGN_LIST' => '查看营销活动',
    'LNK_NEW_PROSPECT_LIST' => '创建目标群体',
    'LNK_PROSPECT_LIST_LIST' => '查看目标群体',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => '选择已勾选',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => '选择已勾选',
    'LBL_INVALID_EMAIL' => '无效的邮箱',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '目标对象',
    'LBL_PROSPECT_LIST' => '目标群体',
    'LBL_CONVERT_BUTTON_TITLE' => '转化',
    'LBL_CONVERT_BUTTON_LABEL' => '转化',
    'LNK_NEW_CONTACT' => '创建联系人',
    'LBL_CREATED_CONTACT' => "创建了新的联系人",
    'LBL_CAMPAIGNS' => '营销活动',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => '营销活动',
    'LBL_TRACKER_KEY' => '追踪器 key',
    'LBL_LEAD_ID' => '潜在客户ID',
    'LBL_CONVERTED_LEAD' => '已转化为潜在客户',
    'LBL_ACCOUNT_NAME' => '客户名称',
    'LBL_EDIT_ACCOUNT_NAME' => '客户名称',
    'LBL_CREATED_USER' => '创建人',
    'LBL_MODIFIED_USER' => '修改人',
    'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => '会展',
);
?>
