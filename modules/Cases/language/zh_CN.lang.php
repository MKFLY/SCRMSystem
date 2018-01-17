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
    'ERR_DELETE_RECORD' => '您必须指定记录编号才能删除。',
    'LBL_TOOL_TIP_BOX_TITLE' => '知识库的建议',
    'LBL_TOOL_TIP_TITLE' => '标题',
    'LBL_TOOL_TIP_BODY' => '正文',
    'LBL_TOOL_TIP_INFO' => '附加信息',
    'LBL_TOOL_TIP_USE' => '用作',
    'LBL_SUGGESTION_BOX' => '建议',
    'LBL_NO_SUGGESTIONS' => '无建议',
    'LBL_RESOLUTION_BUTTON' => '分析',
    'LBL_SUGGESTION_BOX_STATUS' => '状态',
    'LBL_SUGGESTION_BOX_TITLE' => '标题',
    'LBL_SUGGESTION_BOX_REL' => '相关性',

    'LBL_ACCOUNT_ID' => '客户ID',
    'LBL_ACCOUNT_NAME' => '客户名称',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '客户',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_CASE_NUMBER' => '编号',
    'LBL_CASE' => '客户反馈',
    'LBL_CONTACT_NAME' => '联系人',
    'LBL_CONTACT_ROLE' => '角色',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '客户反馈',
    'LBL_DESCRIPTION' => '说明',
    'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
    'LBL_INVITEE' => '联系人',
    'LBL_MEMBER_OF' => '上级',
    'LBL_MODULE_NAME' => '客户反馈',
    'LBL_MODULE_TITLE' => '客户反馈',
    'LBL_NEW_FORM_TITLE' => '新建',
    'LBL_NUMBER' => '编号',
    'LBL_PRIORITY' => '优先级',
    'LBL_PROJECTS_SUBPANEL_TITLE' => '项目',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '文档',
    'LBL_RESOLUTION' => '分析',
    'LBL_SEARCH_FORM_TITLE' => '搜索',
    'LBL_STATUS' => '状态',
    'LBL_SUBJECT' => '主题',
    'LBL_LIST_ASSIGNED_TO_NAME' => '负责人',
    'LBL_LIST_ACCOUNT_NAME' => '客户名称',
    'LBL_LIST_ASSIGNED' => '负责人',
    'LBL_LIST_CLOSE' => '关闭',
    'LBL_LIST_FORM_TITLE' => '客户反馈列表',
    'LBL_LIST_LAST_MODIFIED' => '最新修改',
    'LBL_LIST_MY_CASES' => '我的客户反馈',
    'LBL_LIST_NUMBER' => '编号',
    'LBL_LIST_PRIORITY' => '优先级',
    'LBL_LIST_STATUS' => '状态',
    'LBL_LIST_SUBJECT' => '主题',

    'LNK_CASE_LIST' => '查看客户反馈',
    'LNK_NEW_CASE' => '创建客户反馈',
    'LBL_LIST_DATE_CREATED' => '创建日期',
    'LBL_ASSIGNED_TO_NAME' => '负责人',
    'LBL_TYPE' => '类型',
    'LBL_WORK_LOG' => '工作日志',
    'LNK_IMPORT_CASES' => '导入客户反馈',

    'LBL_CREATED_USER' => '创建人',
    'LBL_MODIFIED_USER' => '修改人',
    'LBL_PROJECT_SUBPANEL_TITLE' => '项目',
    'LBL_CASE_INFORMATION' => '客户反馈信息',  //Can be translated in all caps. This string will be used by SuiteP template menu actions

    // SNIP
    'LBL_UPDATE_TEXT' => '更新 - 文字', //Field for Case updates with text only
    'LBL_INTERNAL' => '内部更新',
    'LBL_AOP_CASE_UPDATES' => '客户反馈更新',
    'LBL_AOP_CASE_UPDATES_THREADED' => '客户反馈线索',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => '全部折叠',
    'LBL_CASE_UPDATES_EXPAND_ALL' => '全部展开',
    'LBL_AOP_CASE_ATTACHMENTS' => '附件',

    'LBL_AOP_CASE_EVENTS' => '客户反馈事件',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => '客户反馈附件',
    'LBL_ADD_CASE_FILE' => '添加文件',
    'LBL_REMOVE_CASE_FILE' => '移除文件',
    'LBL_SELECT_CASE_DOCUMENT' => '选择文档',
    'LBL_CLEAR_CASE_DOCUMENT' => '清除文档',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => '内部文档',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => '外部文档',
    'LBL_CONTACT_CREATED_BY_NAME' => '创建人',
    'LBL_CONTACT_CREATED_BY' => '创建人',
    'LBL_CASE_UPDATE_FORM' => '更新 - 附件', //Form for attachements on case updates
    'LBL_AOP_INTERNAL' => '内部',
);

?>
