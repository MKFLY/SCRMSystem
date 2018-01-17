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
	'LBL_SEND_DATE_TIME'						=> '发送日期/时间',
	'LBL_IN_QUEUE'								=> '处理中',
	'LBL_IN_QUEUE_DATE'							=> '队列日期',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> '每一批发送过的电子邮件数量只可以是整数',

	'LBL_ATTACHMENT_AUDIT'						=> '已发送。它未重复占用磁盘空间。',
	'LBL_CONFIGURE_SETTINGS'					=> '邮件设置',
	'LBL_CUSTOM_LOCATION'						=> '自定义',
	'LBL_DEFAULT_LOCATION'						=> '默认',

	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> '删除邮件同时删除附件',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> '系统邮件发送设置',
	'LBL_EMAILS_PER_RUN'						=> '每批邮件发送数量',
	'LBL_ID'									=> 'ID',
	'LBL_LIST_CAMPAIGN'							=> '营销活动',
	'LBL_LIST_FORM_TITLE'						=> '队列列表',
	'LBL_LIST_FROM_NAME'						=> '发件人名称',
	'LBL_LIST_IN_QUEUE'							=> '处理中',
	'LBL_LIST_MESSAGE_NAME'						=> '营销信息',
	'LBL_LIST_RECIPIENT_EMAIL'					=> '收件人 Email',
	'LBL_LIST_RECIPIENT_NAME'					=> '收件人',
	'LBL_LIST_SEND_ATTEMPTS'					=> '发送尝试',
	'LBL_LIST_SEND_DATE_TIME'					=> '发送日期/时间',
	'LBL_LIST_USER_NAME'						=> '用户名',
	'LBL_LOCATION_ONLY'							=> '位置',
	'LBL_LOCATION_TRACK'						=> '营销活动追踪文件的位置（类似 campaign_tracker.php）',
    'LBL_CAMP_MESSAGE_COPY'                     => '保留营销活动邮件的副本',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => '是否存储<bold>每个</bold>完整的邮件副本？ <bold>我们建议且默认为否</bold>。这将仅存储邮件模板以及必要的变量。',
	'LBL_MAIL_SENDTYPE'							=> '邮件发送协议',
	'LBL_MAIL_SMTPAUTH_REQ'						=> '需要身份验证',
	'LBL_MAIL_SMTPPASS'							=> '密码',
	'LBL_MAIL_SMTPPORT'							=> '端口',
	'LBL_MAIL_SMTPSERVER'						=> '服务器地址',
	'LBL_MAIL_SMTPUSER'							=> '用户名',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => '邮件提供商',
	'LBL_YAHOOMAIL_SMTPPASS'					=> '密码',
	'LBL_YAHOOMAIL_SMTPUSER'					=> '用户名',
	'LBL_GMAIL_SMTPPASS'					=> '密码',
	'LBL_GMAIL_SMTPUSER'					=> '用户名',
	'LBL_EXCHANGE_SMTPPASS'					=> '密码',
	'LBL_EXCHANGE_SMTPUSER'					=> '用户名',
	'LBL_EXCHANGE_SMTPPORT'					=> '端口',
	'LBL_EXCHANGE_SMTPSERVER'				=> '服务器地址',
	'LBL_EMAIL_LINK_TYPE'				=> '邮件客户端',
	'LBL_MARKETING_ID'							=> '营销活动ID',
    'LBL_MODULE_ID'                             => '邮件设置',
	'LBL_MODULE_NAME'							=> '邮件设置',
	'LBL_MODULE_TITLE'							=> '邮件发送队列管理',
	'LBL_NOTIFICATION_ON_DESC' 					=> '当启用时，会邮件通知负责人。',
	'LBL_NOTIFY_FROMADDRESS' 					=> '设置发件人地址',
	'LBL_NOTIFY_FROMNAME' 						=> '设置发件人名称',
	'LBL_NOTIFY_ON'								=> '启用通知提醒',
	'LBL_NOTIFY_TITLE'							=> '邮件通知提醒选项',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> '邮件发送选项',
	'LBL_RELATED_ID'							=> '关联ID',
	'LBL_RELATED_TYPE'							=> '关联类型',
	'LBL_SEARCH_FORM_TITLE'						=> '搜索',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'config.php 中 site_url 的值',
	'TXT_REMOVE_ME_ALT'							=> '要将自己从邮件列表中移除，请到',
	'TXT_REMOVE_ME_CLICK'						=> '点击此处',
	'TXT_REMOVE_ME'								=> '要将自己从邮件列表中移除',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> '给负责人发送邮件通知提醒',

	'LBL_SECURITY_TITLE'						=> '邮件安全设置',
	'LBL_SECURITY_DESC'							=> '选择不允许在在收件箱或在邮件模块中显示的 HTML 标签。',
	'LBL_SECURITY_APPLET'						=> 'applet 标签',
	'LBL_SECURITY_BASE'							=> 'base 标签',
	'LBL_SECURITY_EMBED'						=> 'embed 标签',
	'LBL_SECURITY_FORM'							=> 'form 标签',
	'LBL_SECURITY_FRAME'						=> 'frame 标签',
	'LBL_SECURITY_FRAMESET'						=> 'frameset 标签',
	'LBL_SECURITY_IFRAME'						=> 'iframe 标签',
	'LBL_SECURITY_IMPORT'						=> 'import 标签',
	'LBL_SECURITY_LAYER'						=> 'layer 标签',
	'LBL_SECURITY_LINK'							=> 'link 标签',
	'LBL_SECURITY_OBJECT'						=> 'object 标签',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> '选择 Outlook 默认最低安全设置。',
	'LBL_SECURITY_STYLE'						=> 'style 标签',
	'LBL_SECURITY_TOGGLE_ALL'					=> '选中所有标签选项',
	'LBL_SECURITY_XMP'							=> 'xmp 标签',
    'LBL_YES'                                   => '是',
    'LBL_NO'                                    => '否',
    'LBL_PREPEND_TEST'                          => '[测试]: ',
	'LBL_SEND_ATTEMPTS'							=> '发送尝试',
	'LBL_OUTGOING_SECTION_HELP'                 => '设置系统默认的邮件发送账户，用来发送通知、工作流提醒等。',
    'LBL_ALLOW_DEFAULT_SELECTION'               => '允许普通用户使用此账户对外发送邮件',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => '此邮件账户是用于发送通知、工作流提醒等。<br />勾选此项，允许所有用户通过此邮件账户对外发送电子邮件。<br />不勾选此项，用户需要配置自己的邮件账户来发送这些信息。',
    'LBL_FROM_ADDRESS_HELP'                     => '当选中时，指定的用户姓名和电子邮件地址将出现在电子邮件的发件人选项中。该需要SMTP服务器支持。',
	'LBL_HELP' => '帮助' /*for 508 compliance fix*/,
	'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => '查看邮件发送账户',
);

?>