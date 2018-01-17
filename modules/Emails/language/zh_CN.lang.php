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
    'LBL_EMAIL_INFORMATION' => '邮件信息',
    'LBL_FW' => '转发',
    'LBL_RE' => '回复',

    'LBL_BUTTON_CREATE' => '创建',
    'LBL_BUTTON_EDIT' => '编辑',
    'LBL_BUTTON_EDIT_EDIT_DRAFT' => '编辑草稿',
    'LBL_QS_DISABLED' => '（此模板未启用快速筛选，请使用选择按钮）',
    'LBL_SIGNATURE_PREPEND' => '自动添加签名',
    'LBL_IMPORT' => '导入',
    'LBL_LOADING' => '正在加载',
    'LBL_MARKING' => '正在标记',

    'LBL_CONFIRM_DELETE_EMAIL' => '您确定要删除？',
    'LBL_ENTER_FOLDER_NAME' => '请输入文件夹名称',

    'LBL_ERROR_SELECT_MODULE' => '错误：请为关联字段选择一个模块',

    'ERR_ARCHIVE_EMAIL' => '错误：请选择要存档的电子邮件',
    'ERR_DELETE_RECORD' => '您必须指定记录编号才能删除。',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '客户',
    'LBL_ADD_DASHLETS' => '添加 Dashlet',
    'LBL_ADD_DOCUMENT' => '添加文档',
    'LBL_ADD_ENTRIES' => '添加条目',
    'LBL_ADD_FILE' => '添加文件',
    'LBL_ATTACHMENTS' => '附件',
    'LBL_ATTACH_FILES' => '附加文件',
    'LBL_ATTACH_DOCUMENTS' => '附加文档',
    'LBL_HAS_ATTACHMENT' => '是否有附件',
    'LBL_BCC' => '密送',
    'LBL_BODY' => '正文',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_CC' => '抄送',
    'LBL_COMPOSE_MODULE_NAME' => '写信',
    'LBL_CONTACT_NAME' => '联系人',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
    'LBL_CREATED_BY' => '创建人',
    'LBL_DATE_SENT' => '发送日期',
    'LBL_DATE' => '日期',
    'LBL_DELETE_FROM_SERVER' => '从服务器上删除',
    'LBL_DESCRIPTION' => '说明',
    'LBL_EDIT_ALT_TEXT' => '编辑纯文本',
    'LBL_SEND_IN_PLAIN_TEXT' => '以纯文本发送',
    'LBL_EMAIL_ATTACHMENT' => '邮件附件',
    'LBL_EMAIL_SELECTOR_SELECT' => '选择',
    'LBL_EMAIL_SELECTOR_CLEAR' => '清除',
    'LBL_EMAIL' => 'Email 地址',
    'LBL_EMAILS_ACCOUNTS_REL' => '电子邮件：客户',
    'LBL_EMAILS_BUGS_REL' => '电子邮件：Bugs',
    'LBL_EMAILS_CASES_REL' => '电子邮件：客户反馈',
    'LBL_EMAILS_CONTACTS_REL' => '电子邮件：联系人',
    'LBL_EMAILS_LEADS_REL' => '电子邮件：潜在客户',
    'LBL_EMAILS_OPPORTUNITIES_REL' => '电子邮件：商业机会',
    'LBL_EMAILS_NOTES_REL' => '电子邮件：备忘录',
    'LBL_EMAILS_PROJECT_REL' => '电子邮件：项目',
    'LBL_EMAILS_PROJECT_TASK_REL' => '电子邮件：项目任务',
    'LBL_EMAILS_PROSPECT_REL' => '电子邮件：目标对象',
    'LBL_EMAILS_CONTRACTS_REL' => '电子邮件：合同',
    'LBL_EMAILS_TASKS_REL' => '电子邮件：任务',
    'LBL_EMAILS_USERS_REL' => '电子邮件：用户',
    'LBL_EMPTY_FOLDER' => '没有可显示的邮件。',
    'LBL_SELECT_FOLDER' => '选择文件夹',
    'LBL_ERROR_SENDING_EMAIL' => '发送邮件时出错',
    'LBL_ERROR_SAVING_DRAFT' => '保存草稿时出错',
    'LBL_FROM_NAME' => '发件人名称',
    'LBL_FROM' => '发件人',
    'LBL_REPLY_TO' => '回复',
    'LBL_HTML_BODY' => 'HTML 正文',
    'LBL_INVITEE' => '收件人',
    'LBL_LEADS_SUBPANEL_TITLE' => '潜在客户',
    'LBL_MESSAGE_SENT' => '消息已发送',
    'LBL_MODIFIED_BY' => '修改人',
    'LBL_MODULE_NAME' => '电子邮件',
    'LBL_MODULE_TITLE' => '电子邮件',
    'LBL_MY_EMAILS' => '电子邮件',
    'LBL_NEW_FORM_TITLE' => '新建',
    'LBL_NONE' => '无',
    'LBL_NOT_SENT' => '发送错误',
    'LBL_NOTES_SUBPANEL_TITLE' => '备忘录',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => '商业机会',
    'LBL_PROJECT_SUBPANEL_TITLE' => '项目',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => '项目任务',
    'LBL_RAW' => '原始邮件',
    'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => '保存草稿',
    'LBL_DISREGARD_DRAFT_BUTTON_TITLE' => '忽略草稿',
    'LBL_SEARCH_FORM_TITLE' => '搜索',
    'LBL_SEND_ANYWAYS' => '您的邮件没有填写主题，确定继续发送？',
    'LBL_SEND_BUTTON_LABEL' => '发送',
    'LBL_SEND_BUTTON_TITLE' => '发送',
    'LBL_SEND' => '发送',
    'LBL_SENT_MODULE_NAME' => '已发送',
    'LBL_SHOW_ALT_TEXT' => '显示纯文本',
    'LBL_SIGNATURE' => '签名',
    'LBL_SUBJECT' => '主题',
    'LBL_TEXT_BODY' => '文本正文',
    'LBL_TIME' => '发送时间',
    'LBL_TO_ADDRS' => '收件人',
    'LBL_USERS_SUBPANEL_TITLE' => '用户',
    'LBL_USERS' => '用户',

    'LNK_CALL_LIST' => '查看电话',
    'LBL_EMAIL_RELATE' => '关联到',
    'LNK_EMAIL_TEMPLATE_LIST' => '查看邮件模板',
    'LNK_MEETING_LIST' => '查看会议',
    'LNK_NEW_CALL' => '创建电话',
    'LNK_NEW_EMAIL_TEMPLATE' => '创建邮件模板',
    'LNK_NEW_EMAIL' => '创建邮件',
    'LNK_NEW_MEETING' => '创建会议',
    'LNK_NEW_NOTE' => '创建备忘录',
    'LNK_NEW_SEND_EMAIL' => '写信',
    'LNK_NEW_TASK' => '创建任务',
    'LNK_NOTE_LIST' => '查看备忘录',
    'LNK_SENT_EMAIL_LIST' => '已发送',
    'LNK_TASK_LIST' => '查看任务',
    'LNK_VIEW_CALENDAR' => '查看日历',

    'LBL_LIST_ASSIGNED' => '负责人',
    'LBL_LIST_CONTACT_NAME' => '联系人',
    'LBL_LIST_DATE_SENT' => '发送日期',
    'LBL_LIST_DATE' => '日期',
    'LBL_LIST_FORM_DRAFTS_TITLE' => '草稿',
    'LBL_LIST_FORM_SENT_TITLE' => '已发送',
    'LBL_LIST_FORM_TITLE' => '邮件列表',
    'LBL_LIST_FROM_ADDR' => '发件人地址',
    'LBL_LIST_RELATED_TO' => '关联到',
    'LBL_LIST_SUBJECT' => '主题',
    'LBL_LIST_TO_ADDR' => '收件人地址',
    'LBL_LIST_TYPE' => '类型',

    'WARNING_SETTINGS_NOT_CONF' => '警告：您未配置邮件发送账户，无法发送邮件。',

    // for All emails
    'LBL_BUTTON_RAW_LABEL' => '显示原始邮件',
    'LBL_BUTTON_RAW_LABEL_HIDE' => '隐藏原始邮件',

    // for InboundEmail
    'LBL_BUTTON_CHECK' => '收信',
    'LBL_BUTTON_CHECK_TITLE' => '收信',
    'LBL_BUTTON_FORWARD' => '转发',
    'LBL_BUTTON_REPLY_TITLE' => '回复',
    'LBL_BUTTON_REPLY_ALL' => '回复全部',
    'LBL_CASES_SUBPANEL_TITLE' => '客户反馈',
    'LBL_INBOUND_TITLE' => '收件箱',
    'LBL_INTENT' => '目的',
    'LBL_MESSAGE_ID' => '消息ID',
    'LBL_REPLY_HEADER_1' => '于',
    'LBL_REPLY_HEADER_2' => '写道',
    'LBL_REPLY_TO_ADDRESS' => '回复地址',
    'LBL_REPLY_TO_NAME' => '设置回复名称',

    'LBL_LIST_BUG' => 'Bugs',
    'LBL_LIST_CASE' => '客户反馈',
    'LBL_LIST_CONTACT' => '联系人',
    'LBL_LIST_LEAD' => '潜在客户',
    'LBL_LIST_TASK' => '任务',
    'LBL_LIST_ASSIGNED_TO_NAME' => '负责人',

    // for Inbox
    'LBL_ALL' => '全部',
    'LBL_ASSIGN_WARN' => '确保所有的 2 个选项都被选中。',
    'LBL_BACK_TO_GROUP' => '返回',
    'LBL_BUTTON_DISTRIBUTE_TITLE' => '部署',
    'LBL_BUTTON_DISTRIBUTE' => '部署',
    'LBL_BUTTON_GRAB_TITLE' => '从组获取',
    'LBL_BUTTON_GRAB' => '从组获取',
    'LBL_CREATE_BUG' => '创建 Bug',
    'LBL_CREATE_CASE' => '创建客户反馈',
    'LBL_CREATE_CONTACT' => '创建联系人',
    'LBL_CREATE_LEAD' => '创建潜在客户',
    'LBL_CREATE_TASK' => '创建任务',
    'LBL_DIST_TITLE' => '分配',
    'LBL_LOCK_FAIL_DESC' => '选择的条目当前不可用。',
    'LBL_LOCK_FAIL_USER' => ' 已取得所有权。',
    'LBL_MASS_DELETE_ERROR' => '选中的条目未被删除。',
    'LBL_NEW' => '新增',
    'LBL_NEXT_EMAIL' => '下一封邮件',
    'LBL_REPLIED' => '已回复',
    'LBL_TO' => '收件人',
    'LBL_TOGGLE_ALL' => '选中所有',
    'LBL_UNKNOWN' => '未知',
    'LBL_USE' => '分配：',
    'LBL_ASSIGN_SELECTED_RESULTS_TO' => '将所选结果分配给：',
    'LBL_USER_SELECT' => '选择用户',
    'LBL_USING_RULES' => '使用规则',
    'LBL_WARN_NO_DIST' => '未选择分配方法',
    'LBL_WARN_NO_USERS' => '未选择用户',
    'LBL_IMPORT_STATUS_TITLE' => '状态',
    'LBL_INDICATOR' => '指示器',
    'LBL_LIST_STATUS' => '状态',
    'LBL_LIST_TITLE_GROUP_INBOX' => '群邮件',
    'LBL_LIST_TITLE_MY_DRAFTS' => '草稿箱',
    'LBL_LIST_TITLE_MY_INBOX' => '收件箱',
    'LBL_LIST_TITLE_MY_SENT' => '已发送',
    'LBL_LIST_TITLE_MY_ARCHIVES' => '已存档',

    'LNK_MY_DRAFTS' => '草稿箱',
    'LNK_MY_INBOX' => '收件箱',
    'LNK_VIEW_MY_INBOX' => '查看收件箱',
    'LNK_QUICK_REPLY' => '回复',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => '未指定主团队',
    'LBL_INSERT_CONTACT_EMAIL' => '插入联系人的 Email 地址',
    'LBL_INSERT_ACCOUNT_EMAIL' => '插入客户的 Email 地址',
    'LBL_INSERT_TARGET_EMAIL' => '插入目标对象的 Email 地址',
    'LBL_INSERT_USER_EMAIL' => '插入用户的 Email 地址',
    'LBL_INSERT_LEAD_EMAIL' => '插入潜在客户的 Email 地址',
    'LBL_INSERT_ERROR_BLANK_EMAIL' => '无效的 Email 地址',

    // advanced search
    'LBL_ASSIGNED_TO' => '负责人',
    'LBL_MEMBER_OF' => '上级',
    'LBL_QUICK_CREATE' => '快速创建',
    'LBL_STATUS' => '状态',
    'LBL_EMAIL_FLAGGED' => '已标记',
    'LBL_EMAIL_REPLY_TO_STATUS' => '回复状态',
    'LBL_TYPE' => '类型',
    //#20680 EmialTemplate Ext.Message.show;
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => '请检查！',
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => '选择此模板将覆盖当前邮件正文中已输入的内容，您确定要继续？',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => '选择 -无- 将清空当前邮件正文中已输入的内容，您确定要继续？',
    'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => '警告',
    'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => '使用包含联系变量的邮件模板，比如联系人姓名,给不同的接收者发送邮件可能导致意外的结果。建议您使用邮件活动开展邮件群发。',
    'LBL_CHECK_ATTACHMENTS' => '请检查附件。',
    'LBL_HAS_ATTACHMENTS' => '此邮件已包含附件，是否保留附件？',
    'LBL_HAS_ATTACHMENT_INDICATOR' => '有附件',
    'ERR_MISSING_REQUIRED_FIELDS' => '缺少必填字段',
    'ERR_INVALID_REQUIRED_FIELDS' => '无效的必填字段',
    'LBL_FILTER_BY_RELATED_BEAN' => '只显示关联的收件人',
    'LBL_ADD_INBOUND_ACCOUNT' => '添加',
    'LBL_ADD_OUTBOUND_ACCOUNT' => '添加',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => '邮件接收账户',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => '邮件发送账户',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => '邮件发送账户',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => '邮件接收账户',
    'LBL_EMAIL_SETTINGS_INBOUND' => '邮件接收',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => '邮件发送',
    'LBL_ADD_CC' => '添加抄送',
    'LBL_ADD_BCC' => '添加密送',
    'LBL_MOVE_TO_BCC' => '移到密送',
    'LBL_ADD_TO_ADDR' => '添加到',
    'LBL_SELECTED_ADDR' => '已选地址',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => '发送邮件时出错',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => '显示',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => '更多',
    'LBL_MORE_OPTIONS' => '更多选项',
    'LBL_LESS_OPTIONS' => '更少选项',
    'LBL_MAILBOX_TYPE_PERSONAL' => '个人',
    'LBL_MAILBOX_TYPE_GROUP' => '群组',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => '群组自动导入',
    'LBL_SEARCH_FOR' => '搜索',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '个人：您访问电子邮件帐户。只有你可以管理和导入该帐户的电子邮件。组：由指定的电子邮件帐户组成员访问。团队成员可以管理和导入该帐户的电子邮件。组自动导入：电子邮件帐户指定的小组成员访问。电子邮件是自动导入的记录。',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => '输入名字、姓氏或 Email 地址进行搜索。',
    'LBL_TEST_SETTINGS' => '测试设置',
    'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>此邮件没有任何内容</em></span></p>',
    'LBL_HAS_EMPTY_EMAIL_SUBJECT' => '请填写邮件主题',
    'LBL_HAS_EMPTY_EMAIL_BODY' => '请填写邮件内容',
    'LBL_HAS_INVALID_EMAIL_CC' => '抄送的地址无效',
    'LBL_HAS_INVALID_EMAIL_BCC' => '密送的地址无效',
    'LBL_HAS_INVALID_EMAIL_TO' => '收件人的地址无效',
    'LBL_TEST_EMAIL_SUBJECT' => 'SuiteCRM 测试邮件',
    'LBL_NO_SUBJECT' => '未填写主题',
    'LBL_CHECKING_ACCOUNT' => '正在检查账户',
    'LBL_OF' => '的',
    'LBL_TEST_EMAIL_BODY' => 'SuiteCRM 测试邮件。成功收到此邮件说明 SuiteCRM 邮件发送账户已正确设置。',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => '管理员尚未配置默认的邮件发送账户，无法发送测试邮件。',
    'LBL_MAIL_SMTPAUTH_REQ' => '需要身份验证',
    'LBL_MAIL_SMTPPASS' => '密码',
    'LBL_MAIL_SMTPPORT' => '端口',
    'LBL_MAIL_SMTPSERVER' => '服务器地址',
    'LBL_MAIL_SMTPUSER' => '用户名',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP 设置',
    'LBL_CHOOSE_EMAIL_PROVIDER' => '邮件提供商',
    'LBL_YAHOOMAIL_SMTPPASS' => '密码',
    'LBL_YAHOOMAIL_SMTPUSER' => '用户名',
    'LBL_GMAIL_SMTPPASS' => '密码',
    'LBL_GMAIL_SMTPUSER' => '用户名',
    'LBL_EXCHANGE_SMTPPASS' => '密码',
    'LBL_EXCHANGE_SMTPUSER' => '用户名',
    'LBL_EXCHANGE_SMTPPORT' => '端口',
    'LBL_EXCHANGE_SMTPSERVER' => '服务器地址',

    'LBL_EDIT_LAYOUT' => '编辑布局' /*for 508 compliance fix*/,
    'LBL_ATTACHMENT' => '附件' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => '删除' /*for 508 compliance fix*/,
    'LBL_CREATE_CASES' => '创建客户反馈' /*for 508 compliance fix*/,
    'LBL_CREATE_LEADS' => '创建潜在客户' /*for 508 compliance fix*/,
    'LBL_CREATE_CONTACTS' => '创建联系人' /*for 508 compliance fix*/,
    'LBL_CREATE_BUGS' => '创建 Bugs' /*for 508 compliance fix*/,
    'LBL_CREATE_TASKS' => '创建任务' /*for 508 compliance fix*/,
    'LBL_CHECK_INLINE' => '检查' /*for 508 compliance fix*/,
    'LBL_CLOSE' => '关闭' /*for 508 compliance fix*/,
    'LBL_HELP' => '帮助' /*for 508 compliance fix*/,
    'LBL_WAIT' => '请稍候' /*for 508 compliance fix*/,
    'LBL_CHECKEMAIL' => '收信' /*for 508 compliance fix*/,
    'LBL_COMPOSEEMAIL' => '写信' /*for 508 compliance fix*/,
    'LBL_EMAILSETTINGS' => '邮件发送设置' /*for 508 compliance fix*/,

    // SNIP
    'LBL_EMAILS_MEETINGS_REL' => '电子邮件：会议',
    'LBL_DATE_MODIFIED' => '修改日期',

    'LBL_CATEGORY' => '类别',
    'LBL_LIST_CATEGORY' => '类别',
    'LBL_EMAIL_TEMPLATE' => '邮件模板',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => '忽略草稿',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => '此操作将删除草稿邮件，您确定要继续？',
    'LBL_EMAIL_DRAFT_DELETED' => '草稿已删除',
    'LBL_EMAIL_DRAFT_ERROR_DELETING' => '尝试删除草稿时发生错误。',

    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => '应用邮件模板',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => '此操作将覆盖邮件正文和主题，是否继续？',

    'LBL_MAILBOX_ID' => '邮箱 ID',
    'LBL_PARENT_ID' => '上级ID',
    'LBL_LAST_SYNCED' => '上次同步',
    'LBL_ORPHANED' => '孤立的',
    'LBL_IMAP_KEYWORDS' => 'IMAP 关键词',
    'LBL_ERROR_NO_FOLDERS' => '错误：没有可用的文件夹。请检查您的邮件设置。',
    'LBL_ORIGINAL_MESSAGE_SEPERATOR' => '---',

    'LBL_MARK_UNREAD' => '标记为未读',
    'LBL_MARK_READ' => '标记为已读',
    'LBL_MARK_FLAGGED' => '标记邮件',
    'LBL_MARK_UNFLAGGED' => '清除标记',
);

