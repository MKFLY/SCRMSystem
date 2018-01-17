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


    'LBL_RE' => '回复',

    'ERR_BAD_LOGIN_PASSWORD' => '用户名或密码错误。',
    'ERR_INI_ZLIB' => '暂时无法关闭 zlib 压缩。"测试设置" 可能会失败。',
    'ERR_NO_IMAP' => '未检测到 IMAP 模块。请先解决此问题，然后再继续配置邮件接收账户。',
    'ERR_NO_OPTS_SAVED' => '未正确设置邮件接收账户。',
    'ERR_TEST_MAILBOX' => '请检查您的设置，然后重试。',

    'LBL_ASSIGN_TO_USER' => '负责人',
    'LBL_AUTOREPLY' => '自动回复模板',
    'LBL_AUTOREPLY_HELP' => '选择自动回复通知邮件发件人。',
    'LBL_BASIC' => '基本设置',
    'LBL_CASE_MACRO' => '用户反馈宏',
    'LBL_CASE_MACRO_DESC' => '设置宏，他可以解析和链接导入的电子邮件到用户反馈。',
    'LBL_CASE_MACRO_DESC2' => '设置它为任何值，但是保留<b>"%1"</b>。',
    'LBL_CLOSE_POPUP' => '关闭',
    'LBL_CREATE_TEMPLATE' => '创建',
    'LBL_DELETE_SEEN' => '在导入后删除已读的电子邮件',
    'LBL_EDIT_TEMPLATE' => '编辑',
    'LBL_EMAIL_OPTIONS' => '邮件选项',
    'LBL_EMAIL_BOUNCE_OPTIONS' => '退信处理选项',
    'LBL_FILTER_DOMAIN_DESC' => '指定不发送自动回复邮件到这些域。',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => '选择此项可在 SuiteCRM 中自动为所有收到的邮件创建电子邮件记录。',
    'LBL_FILTER_DOMAIN' => '不自动回复这些域',
    'LBL_FIND_SSL_WARN' => '<br />测试 SSL 可能需要一段时间。请耐心等待。<br />',
    'LBL_FROM_ADDR' => '设置发件人地址',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC' => "由于某些邮件服务器的限制，这里设置的&quot;发件人地址&quot;可能不会显示在电子邮件的&quot;发件人&quot;里，这种情况下将使用&quot;邮件发送账户&quot;里设置的邮件地址。", // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '设置发件人名称',
    'LBL_GROUP_QUEUE' => '指派给组',
    'LBL_HOME' => '首页',
    'LBL_LIST_MAILBOX_TYPE' => '邮箱类型',
    'LBL_LIST_NAME' => '名称',
    'LBL_LIST_GLOBAL_PERSONAL' => '类型',
    'LBL_LIST_SERVER_URL' => '服务器地址',
    'LBL_LIST_STATUS' => '状态',
    'LBL_LOGIN' => '用户名',
    'LBL_MAILBOX_DEFAULT' => '收件箱',
    'LBL_MAILBOX_SSL' => '使用 SSL',
    'LBL_MAILBOX_TYPE' => '邮箱类型',
    'LBL_DISTRIBUTION_METHOD' => '分配方法',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => '新建客户反馈回复模板',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => '选择客户反馈创建时的自动告知电子邮件的发件人。邮件中将包含客户反馈号。只有当第一次收到收件人的邮件时才会创建这个邮件。',
    'LBL_MAILBOX' => '已监控的文件夹',
    'LBL_TRASH_FOLDER' => '垃圾箱',
    'LBL_SENT_FOLDER' => '已发送',
    'LBL_SELECT' => '选择',
    'LBL_MARK_READ_NO' => '导入后删除标记过的电子邮件',
    'LBL_MARK_READ_YES' => '导入后在服务器上保留电子邮件',
    'LBL_MARK_READ' => '在服务器上保留邮件',
    'LBL_MAX_AUTO_REPLIES' => '自动回复次数',
    'LBL_MAX_AUTO_REPLIES_DESC' => '设置在 24 小时时间内，自动回复同一个邮件地址的最大次数。',
    'LBL_PERSONAL_MODULE_NAME' => '个人邮件账户',
    'LBL_CREATE_CASE' => '创建客户反馈',
    'LBL_CREATE_CASE_HELP' => '选择此项可在 SuiteCRM 中自动为所有收到的邮件创建案件记录。',
    'LBL_MODULE_NAME' => '邮件接收账户',
    'LBL_BOUNCE_MODULE_NAME' => '退信处理邮箱',
    'LBL_MODULE_TITLE' => '邮件接收账户',
    'LBL_NAME' => '名称',
    'LBL_NONE' => '无',
    'LBL_ONLY_SINCE_NO' => '不。检查此邮件服务器上的所有邮件。',
    'LBL_ONLY_SINCE_YES' => '是。',
    'LBL_PASSWORD' => '密码',
    'LBL_POP3_SUCCESS' => 'POP3 协议测试连接成功。',
    'LBL_POPUP_TITLE' => '测试设置',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => '选择订阅的文件夹',
    'LBL_SELECT_TRASH_FOLDERS' => '选择垃圾箱',
    'LBL_SELECT_SENT_FOLDERS' => '选择已发送',
    'LBL_DELETED_FOLDERS_LIST' => '以下目录 %s 不存在或已从服务器上删除',
    'LBL_PORT' => '端口',
    'LBL_REPLY_TO_NAME' => '设置回复名称',
    'LBL_REPLY_TO_ADDR' => '设置回复地址',
    'LBL_SAME_AS_ABOVE' => '使用发件人名称/地址',
    'LBL_SERVER_OPTIONS' => '高级设置',
    'LBL_SERVER_TYPE' => '协议',
    'LBL_SERVER_URL' => '服务器地址',
    'LBL_SSL_DESC' => '如果您的邮件服务器支持安全套接字连接，启用此选项将使用 SSL 进行连接。',
    'LBL_ASSIGN_TO_TEAM_DESC' => '所选团队拥有此邮件帐号权限. 如果选择组文件夹,指派给该文件夹的团队将覆盖所选团队.',
    'LBL_SSL' => '使用 SSL',
    'LBL_STATUS' => '状态',
    'LBL_SYSTEM_DEFAULT' => '系统默认',
    'LBL_TEST_BUTTON_TITLE' => '测试',
    'LBL_TEST_SETTINGS' => '测试设置',
    'LBL_TEST_SUCCESSFUL' => '连接测试成功。',
    'LBL_TEST_WAIT_MESSAGE' => '请稍后...',
    'LBL_WARN_IMAP_TITLE' => '未检测到 IMAP 模块',
    'LBL_WARN_IMAP' => '警告：',
    'LBL_WARN_NO_IMAP' => 'PHP 没有启用/编译 PHP IMAP 模块，邮件接收功能<b>无法正常使用</b>。请联系管理员解决此问题。',

    'LNK_LIST_CREATE_NEW_GROUP' => '创建群组账户',
    'LNK_LIST_CREATE_NEW_BOUNCE' => '创建退信处理账户',
    'LNK_LIST_MAILBOXES' => '查看邮件接收账户',
    'LNK_LIST_SCHEDULER' => '查看任务计划',
    'LNK_SEED_QUEUES' => '团队的记录队列',
    'LBL_GROUPFOLDER_ID' => '群组文件夹ID',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => '发送邮件时，允许用户使用 "发件人" 的姓名和地址作为回复地址',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => '当选择此项，群组邮件帐户的用户在撰写电子邮件时，将使用对应用户的 "发件人名称" 和 "邮件地址" 将作为的 "发件人" 的字段。',
    'LBL_STATUS_ACTIVE' => '启用',
    'LBL_STATUS_INACTIVE' => '停用',
    'LBL_IS_PERSONAL' => '个人',
    'LBL_IS_GROUP' => '组',
    'LBL_ENABLE_AUTO_IMPORT' => '自动导入邮件',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => '警告：您修改了自动导入设置，可能会导致数据丢失。',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => '警告：如果要自动创建客户反馈，必须启用自动导入邮件。',
    'LBL_LIST_TITLE_MY_DRAFTS' => '草稿箱',
    'LBL_LIST_TITLE_MY_INBOX' => '收件箱',
    'LBL_LIST_TITLE_MY_SENT' => '已发送',
    'LBL_LIST_TITLE_MY_ARCHIVES' => '已存档',
    'LNK_MY_DRAFTS' => '草稿箱',
    'LNK_MY_INBOX' => '收件箱',
    'LNK_VIEW_MY_INBOX' => '查看收件箱',
    'LNK_QUICK_REPLY' => '回复',
    'LNK_SENT_EMAIL_LIST' => '已发送',
	'LBL_EDIT_LAYOUT' => '编辑布局' /*for 508 compliance fix*/,

	'LBL_MODIFIED_BY' => '修改人',
	'LBL_SERVICE' => '服务',
	'LBL_STORED_OPTIONS' => '存储的选项',
	'LBL_GROUP_ID' => '组 ID',
);
?>
