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
    'LBL_DELETE_USER_CONFIRM' => '当该用户记录已删除时，相应的员工记录也将被删除。用户被删除后，任何涉及该用户的工作流定义和报表可能需要进行更新。 <br /><br />删除用记录将无法撤消。',

    'LBL_DELETE_GROUP_CONFIRM' => '您确定要删除此组用户？点击确定删除用户记录。<br />如果删除组用户，您能够将分配给此组用户的记录重新分配给另一个用户。',

    'LNK_IMPORT_USERS' => '导入用户',
    'ERR_DELETE_RECORD' => '您必须指定记录编号才能删除。',
    'ERR_EMAIL_INCORRECT' => '须提供一个有效的电子邮件地址用于发送用户密码。',
    'ERR_EMAIL_NO_OPTS' => '未正确设置收件箱。',
    'ERR_ENTER_CONFIRMATION_PASSWORD' => '请输入密码确认。',
    'ERR_ENTER_NEW_PASSWORD' => '请输入新密码',
    'ERR_ENTER_OLD_PASSWORD' => '请输入当前密码',
    'ERR_IE_FAILURE1' => '[点击此处返回]',
    'ERR_IE_FAILURE2' => '连接到电子邮件账户时出错。 请检查您的设置，然后重试。',
    'ERR_IE_MISSING_REQUIRED' => "邮件接收账户缺少必需的信息。\n 请检查您的设置，然后重试。\n\n 如果您不想设置邮件接收账户，请清除此部分的所有字段内容。",
    'ERR_INVALID_PASSWORD' => '您必须指定一个有效的用户名和密码。',
    'ERR_LAST_ADMIN_1' => '用户 ',
    'ERR_LAST_ADMIN_2' => ' 是最后一个具有管理员权限的用户。请保证至少有一个用户是管理员。',
    'ERR_PASSWORD_CHANGE_FAILED_1' => '密码更改失败：',
    'ERR_PASSWORD_CHANGE_FAILED_2' => '，必须设置新密码。',
    'ERR_PASSWORD_INCORRECT_OLD_1' => '用户当前密码不正确：',
    'ERR_PASSWORD_INCORRECT_OLD_2' => '，请重新输入。',
    'ERR_PASSWORD_MISMATCH' => '密码不匹配。',
    'ERR_REENTER_PASSWORDS' => '密码不匹配，请重新输入密码。',
    'ERR_REPORT_LOOP' => '系统检测到循环汇报。用户不可以自己汇报，用户的经理也不可以汇报给他们。',
    'ERR_RULES_NOT_MET' => '您输入的密码不符合密码要求，请输入符合要求的密码。',
    'ERR_USER_NAME_EXISTS_1' => '用户名 ',
    'ERR_USER_NAME_EXISTS_2' => ' 已存在。不允许使用相同的用户名，请重新输入。',
    'ERR_USER_IS_LOCKED_OUT' => '此用户已被锁定，无法使用其现有的密码登录。',

    'LBL_PASSWORD_SENT' => '密码已更新',
    'LBL_CANNOT_SEND_PASSWORD' => '无法发送密码',
    'ERR_EMAIL_NOT_SENT_ADMIN' => '系统无法处理您的请求，请检查：',
    'ERR_SMTP_URL_SMTP_PORT' => 'SMTP 服务器地址及端口',
    'ERR_SMTP_USERNAME_SMTP_PASSWORD' => 'SMTP 用户名及密码',
    'ERR_RECIPIENT_EMAIL' => '收件人的电子邮件地址',
    'ERR_SERVER_STATUS' => '您的服务器状态',
    'ERR_SERVER_SMTP_EMPTY' => '系统无法发送邮件给用户，请检查<a href="index.php?module=EmailMan&action=config">系统邮件发送账户设置</a>。',

    'LBL_ADDRESS_CITY' => '城市',
    'LBL_ADDRESS_COUNTRY' => '国家',
    'LBL_ADDRESS_INFORMATION' => '地址信息',
    'LBL_ADDRESS_POSTALCODE' => '邮编',
    'LBL_ADDRESS_STATE' => '省份',
    'LBL_ADDRESS_STREET' => '街道',
    'LBL_ADDRESS' => '地址',
    'LBL_ADMIN_USER' => '系统管理员',


    'LBL_ADMIN_DESC' => '系统管理员用户可以访问系统管理页面和所有的记录。',
    'LBL_REGULAR_DESC' => '用户可以根据角色访问模块和数据记录。',

    'LBL_PHOTO' => '照片',

    'LBL_ADMIN' => '管理员',
    'LBL_ADVANCED' => '高级',
    'LBL_ANY_ADDRESS' => '任何地址',
    'LBL_ANY_EMAIL' => '任何邮箱',
    'LBL_ANY_PHONE' => '任何电话',
    'LBL_CALENDAR_OPTIONS' => '日程安排选项',
    'LBL_CHANGE_PASSWORD' => '更改密码',
    'LBL_CHANGE_SYSTEM_PASSWORD' => '请输入新密码',
    'LBL_CHANGE_PASSWORD_TITLE' => '更改密码',
    'LBL_CHOOSE_A_KEY' => '选择一个密钥，以防止未经授权发布您的日历',
    'LBL_NO_KEY' => '密钥未设置，请设置一个密钥来启用发布。',
    'LBL_CHOOSE_WHICH' => '选择要显示的模块标签',
    'LBL_CITY' => '城市',

    'LBL_CLEAR_BUTTON_TITLE' => '清除',


    'LBL_CONFIRM_PASSWORD' => '确认密码',
    'LBL_CONFIRM_REGULAR_USER' => '您将此用户类型从系统管理员更改为普通用户。保存更改后，此用户将不再具有系统管理员权限。\n\n点击 确定 继续。\n点击 取消 返回。',
    'LBL_COUNTRY' => '国家',
    'LBL_CURRENCY_TEXT' => '选择默认的货币',
    'LBL_CURRENCY' => '货币',
    'LBL_CURRENCY_SIG_DIGITS' => '货币位数',
    'LBL_CURRENCY_SIG_DIGITS_DESC' => '设置货币小数位的个数',
    'LBL_NUMBER_GROUPING_SEP' => '千分符',
    'LBL_NUMBER_GROUPING_SEP_TEXT' => '分隔千位的字符',
    'LBL_DECIMAL_SEP' => '小数点符号',
    'LBL_DECIMAL_SEP_TEXT' => '分隔小数部分的字符',
    'LBL_FDOW' => '一周的第一天',
    'LBL_FDOW_TEXT' => '指定在周、月、年视图上显示的一周的第一天',
    'LBL_DATE_FORMAT_TEXT' => '设置日期的显示格式',
    'LBL_DATE_FORMAT' => '日期格式',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '用户',
    'LBL_DEPARTMENT' => '部门',
    'LBL_DISPLAY_TABS' => '显示标签',
    'LBL_DST_INSTRUCTIONS' => '(+DST)表示夏令时',
    'LBL_EDIT_TABS' => '编辑标签',
    'LBL_EDIT' => '编辑',
    'LBL_USER_HASH' => '密码',
    'LBL_AUTHENTICATE_ID' => '认证ID',
    'LBL_ACCOUNT_NAME' => '客户名称',
    'LBL_EXT_AUTHENTICATE' => '外部认证',
    'LBL_EMAIL' => 'Email 地址',
    'LBL_EMAIL_CHARSET' => '字符集',
    'LBL_EMAIL_LINK_TYPE' => '邮件客户端',

    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM 邮件客户端：</b>使用 SuiteCRM 电子邮件客户端来发送邮件。<br /><b>外部邮件客户端：</b>使用外部电子邮件客户端（如 Microsoft Outlook）来发送邮件。',

    'LBL_EMAIL_NOT_SENT' => '邮件未发送。系统无法处理您的请求，请联系管理员。',
    'LBL_EMAIL_SIGNATURE_ERROR1' => '请填写签名的名称',
    'LBL_EMAIL_TEMPLATE_MISSING' => '未选择邮件模板，请在 "密码管理" 页面中选择用于密码初始化及相关操作的邮件模板。',
    'LBL_EMPLOYEE_STATUS' => '员工状态',
    'LBL_EMPLOYEE_INFORMATION' => '员工信息',
    'LBL_ERROR' => '错误',
    'LBL_MISSING_TEMPLATE' => '未找到 login.tpl 模板文件',
    'LBL_EXPORT_CHARSET' => '导入/导出字符集',
    'LBL_EXPORT_CHARSET_DESC' => '选择您所在地区使用的字符集。这个属性用于导入数据，发送电子邮件，导出.csv文件，生成PDF文件，和生成vCard文件。',
    'LBL_EXPORT_DELIMITER' => '导出分隔符',
    'LBL_EXPORT_DELIMITER_DESC' => '指定导出数据的分隔符。',
    'LBL_FAX_PHONE' => '传真',
    'LBL_FAX' => '传真',
    'LBL_FIRST_NAME' => '名字',
    'LBL_SYSTEM_GENERATED_PASSWORD' => '系统生成的密码',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL' => '重置密码',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => '重置密码',
    'LBL_GROUP_DESC' => '用于将项目分配给组 (例如: 收件箱)。此类型不能通过 SuiteCRM web 界面登录。',
    'LBL_GROUP_USER' => '组用户',
    'LBL_HIDE_TABS' => '隐藏标签',
    'LBL_HOME_PHONE' => '家庭电话',
    'LBL_INBOUND_TITLE' => '客户信息',
    'LBL_IS_ADMIN' => '管理员',
    'LBL_LANGUAGE' => '语言',
    'LBL_LAST_NAME' => '姓氏',
    'LBL_LAYOUT_OPTIONS' => '布局选项',
    'LBL_LDAP' => 'LDAP',
    'LBL_LDAP_AUTHENTICATION' => '身份验证',
    'LBL_LIST_ACCEPT_STATUS' => '接受状态',
    'LBL_LIST_DEPARTMENT' => '部门',
    'LBL_LIST_EMAIL' => 'Email 地址',
    'LBL_LIST_FORM_TITLE' => '用户列表',
    'LBL_LIST_GROUP' => '组',
    'LBL_LIST_LAST_NAME' => '姓氏',
    'LBL_LIST_MEMBERSHIP' => '成员关系',
    'LBL_LIST_NAME' => '名称',
    'LBL_LIST_STATUS' => '状态',
    'LBL_LIST_TITLE' => '职称',
    'LBL_LIST_USER_NAME' => '用户名',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => '名称显示格式',
    'LBL_LOCALE_DESC_FIRST' => '[名]',
    'LBL_LOCALE_DESC_LAST' => '[姓]',
    'LBL_LOCALE_DESC_SALUTATION' => '[称谓]',
    'LBL_LOCALE_DESC_TITLE' => '[职称]',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => '示例',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '设置名称显示格式',
    'LBL_SAVED_SEARCH' => '已保存的筛选',
    // LOGIN PAGE STRINGS
    'LBL_LOGIN_BUTTON_LABEL' => '登录',
    'LBL_LOGIN_BUTTON_TITLE' => '登录',
    'LBL_LOGIN_FORGOT_PASSWORD' => '重置密码',
    'LBL_LOGIN_SUBMIT' => '提交',
    // END LOGIN PAGE STRINGS
    'LBL_LOGGED_OUT_1' => '您已注销，再次登录请点击 ',
    'LBL_LOGGED_OUT_2' => '此处',
    'LBL_LOGGED_OUT_3' => '。',
    'LBL_MAIL_OPTIONS_TITLE' => '电子邮件选项',
    'LBL_MAIL_SENDTYPE' => '邮件发送协议',
    'LBL_MAIL_SMTPPORT' => '端口',
    'LBL_MAILMERGE_TEXT' => '启用邮件合并（邮件合并也必须由系统管理员在配置设置中启用）',
    'LBL_MAILMERGE' => '邮件合并',
    'LBL_MESSENGER_ID' => '即时通讯ID',
    'LBL_MESSENGER_TYPE' => '即时通讯类型',
    'LBL_MOBILE_PHONE' => '手机',
    'LBL_MODIFIED_BY' => '修改人',
    'LBL_CREATED_BY_NAME' => '创建人', //bug 48978
    'LBL_MODIFIED_BY_ID' => '修改人ID',
    'LBL_MODULE_NAME' => '用户',
    'LBL_MODULE_TITLE' => '用户',
    'LBL_NAME' => '名称',
    'LBL_SIGNATURE_NAME' => '名称',
    'LBL_USE_GROUP_TABS' => '模块组',
    'LBL_NEW_FORM_TITLE' => '新建',
    'LBL_NEW_PASSWORD' => '新密码',
    'LBL_NEW_PASSWORD2' => '确认密码',
    'LBL_NEW_USER_PASSWORD_2' => '包含有系统生成链接的电子邮件已发送到该用户. 用户必须提供一个新的密码.',
    'LBL_NEW_USER_PASSWORD_3' => '密码生成成功.',
    'LBL_NOTES' => '备忘录',
    'LBL_OFFICE_PHONE' => '办公电话',
    'LBL_OLD_PASSWORD' => '旧密码',
    'LBL_OTHER_PHONE' => '其他电话',
    'LBL_PASSWORD' => '密码',
    'LBL_PASSWORD_EXPIRATION_LOGIN' => '您的密码已过期，请重新设置密码。',
    'LBL_PASSWORD_EXPIRATION_GENERATED' => '您的密码是系统生成的',
    'LBL_PASSWORD_EXPIRATION_TIME' => '您的密码已过期，请重新设置密码。',

    'LBL_PSW_MODIFIED' => '密码更改时间',
    'LBL_PHONE' => '电话',
    'LBL_PICK_TZ_DESCRIPTION' => '在继续之前，请确认您的时区。从下面列表中选择相应的时区，然后点击保存。您可以随时在您的用户设置中更改时区。',
    'LBL_PORTAL_ONLY_DESC' => '用于门户 API，这种类型不能通过 SuiteCRM web 界面登录。',
    'LBL_PORTAL_ONLY_USER' => '门户用户',
    'LBL_POSTAL_CODE' => '邮编',
    'LBL_PRIMARY_ADDRESS' => '主要地址',
    'LBL_PROMPT_TIMEZONE_TEXT' => '新用户首次登录确认时区。',
    'LBL_PROMPT_TIMEZONE' => '提示时区',
    'LBL_PROVIDE_USERNAME_AND_EMAIL' => '请提供用户名和邮箱地址。',
    'LBL_PUBLISH_KEY' => '公布密钥',

    'LBL_RECAPTCHA_NEW_CAPTCHA' => '重新获取',
    'LBL_RECAPTCHA_SOUND' => '切换到声音',
    'LBL_RECAPTCHA_IMAGE' => '切换到图片',
    'LBL_RECAPTCHA_INSTRUCTION' => '输入下面的两个字',
    'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE' => '在右边输入两个字',
    'LBL_RECAPTCHA_FILL_FIELD' => '输入图片中显示的文本。',
    'LBL_RECAPTCHA_INVALID_PRIVATE_KEY' => '无效的私钥',
    'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE' => '验证码不正确.',
    'LBL_RECAPTCHA_UNKNOWN' => 'reCAPTCHA  出现未知错误',

    'LBL_RECEIVE_NOTIFICATIONS_TEXT' => '当有记录分配给您的时候，接收电子邮件通知提醒。',
    'LBL_RECEIVE_NOTIFICATIONS' => '接收通知提醒',
    'LBL_REGULAR_USER' => '普通用户',
    'LBL_REMINDER_TEXT' => '为电话和会议设置默认提醒。弹出通知提醒给使用 SuiteCRM 的受邀者，并发送邮件提醒给所有受邀者。',
    'LBL_REMINDER' => '提醒',
    'LBL_REMINDER_POPUP' => '弹出提醒',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => '邮件提醒所有受邀者',

    // new reminders

    'LBL_REMINDERS' => '提醒',
    'LBL_REMINDERS_ACTIONS' => '动作',
    'LBL_REMINDERS_POPUP' => '弹出提醒',
    'LBL_REMINDERS_EMAIL' => '邮件提醒',
    'LBL_REMINDERS_WHEN' => '当',
    'LBL_REMINDERS_REMOVE_REMINDER' => '移除',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => '添加所有',
    'LBL_REMINDERS_ADD_REMINDER' => '添加',

    'LBL_REPORTS_TO_NAME' => '上级',
    'LBL_REPORTS_TO' => '上级',
    'LBL_REPORTS_TO_ID' => '上级ID',
    'LBL_REQUEST_SUBMIT' => '您的请求已提交.',
    'LBL_RESET_PREFERENCES' => '重置首选项',
    'LBL_RESET_PREFERENCES_WARNING' => '您确定要重置所有首选项？',
    'LBL_RESET_PREFERENCES_WARNING_USER' => '您确定要重置此用户的所有首选项？',
    'LBL_RESET_HOMEPAGE' => '重置首页',
    'LBL_RESET_HOMEPAGE_WARNING' => '您确定要重置首页？',
    'LBL_RESET_HOMEPAGE_WARNING_USER' => '您确定要重置此用户的首页？',
    'LBL_SALUTATION' => '称谓',
    'LBL_ROLES_SUBPANEL_TITLE' => '角色',
    'LBL_SEARCH_FORM_TITLE' => '搜索',
    'LBL_SEARCH_URL' => '搜索位置',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => '选择已勾选',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => '选择已勾选',
    'LBL_SETTINGS_URL_DESC' => 'SuiteCRM 的 Microsoft Outlook 插件和 Microsoft Word 插件的登录设置 ，会使用此 URL 地址。',
    'LBL_SETTINGS_URL' => 'URL 地址',
    'LBL_SIGNATURE' => '签名',
    'LBL_SIGNATURE_HTML' => 'HTML 签名',
    'LBL_SIGNATURE_PREPEND' => '自动添加签名',
    'LBL_STATE' => '省份', //For address fields
    'LBL_STATUS' => '状态',
    'LBL_SUBPANEL_TABS' => '子面板标签',
    'LBL_SUBPANEL_TABS_DESCRIPTION' => '在详细视图中，将面板分组到标签中，并且一次显示一个标签。',
    'LBL_SUGAR_LOGIN' => '普通用户',
    'LBL_THEME' => '主题',
    'LBL_TIME_FORMAT_TEXT' => '设置时间戳的显示格式',
    'LBL_TIME_FORMAT' => '时间格式',
    'LBL_TIMEZONE_TEXT' => '设置当前的时区',
    'LBL_TIMEZONE' => '时区',
    'LBL_TITLE' => '职称',
    'LBL_USE_REAL_NAMES' => '负责人字段显示全名',
    'LBL_USE_REAL_NAMES_DESC' => '在负责人字段中显示用户全名而不是用户名。',
    'LBL_USER_INFORMATION' => '用户信息',
    'LBL_USER_LOCALE' => '区域设置',
    'LBL_USER_NAME' => '用户名',
    'LBL_USER_SETTINGS' => '用户设置',
    'LBL_USER_TYPE' => '用户类型',
    'LBL_USER_ACCESS' => '访问',
    'LBL_WORK_PHONE' => '办公电话',
    'LBL_YOUR_PUBLISH_URL' => '公布我的存储单元',
    'LBL_ICAL_PUB_URL' => 'iCal 集成 URL',
    'LBL_ICAL_PUB_URL_HELP' => '可以在 iCal 上使用此 URL 地址订阅 SuiteCRM 的日历。',
    'LNK_NEW_USER' => '创建用户',
    'LNK_NEW_GROUP_USER' => '创建组用户',
    'LNK_USER_LIST' => '查看用户',
    'LBL_PROSPECT_LIST' => '目标群体',
    'LBL_EMAILS' => '电子邮件',
    'LBL_PROCESSING' => '正在处理',
    'LBL_UPDATE_FINISH' => '更新完成',
    'LBL_AFFECTED' => '条记录',

    'LBL_USER_NAME_FOR_ROLE' => '用户/团队/角色',
    'LBL_SESSION_EXPIRED' => '由于您的会话已过期，已注销登陆。',

// INBOUND EMAIL STRINGS
    'LBL_ASSIGN_TO_USER' => '负责人',
    'LBL_BASIC' => '邮件接收设置',
    'LBL_LOGIN' => '用户名',
    'LBL_MAILBOX_DEFAULT' => '收件箱',
    'LBL_MAILBOX' => '已监控的文件夹',
    'LBL_MAILBOX_TYPE' => '邮箱类型',
    'LBL_MARK_READ_NO' => '导入后删除标记过的电子邮件',
    'LBL_MARK_READ_YES' => '导入后在服务器上保留电子邮件',
    'LBL_MARK_READ' => '在服务器上保留邮件',
    'LBL_PORT' => '端口',
    'LBL_SERVER_OPTIONS' => '高级设置',
    'LBL_SERVER_TYPE' => '协议',
    'LBL_SERVER_URL' => '服务器地址',
    'LBL_SSL' => '使用 SSL',
    'LBL_SSL_DESC' => '如果您的邮件服务器支持安全套接字连接，启用此选项将使用 SSL 进行连接。',
    'LBL_TEST_BUTTON_TITLE' => '测试',
    'LBL_TEST_SETTINGS' => '测试设置',
    'LBL_TEST_SUCCESSFUL' => '连接测试成功。',
    'LBL_TOGGLE_ADV' => '显示高级选项',
// END INBOUND EMAIL STRINGS
    'LBL_LDAP_EXTENSION_ERROR' => 'LDAP 错误：扩展未加载',

// PROJECT RESOURCES STRINGS
    'LBL_RESOURCE_NAME' => '资源',

    'LBL_SMTP_SERVER_HELP' => '此 SMTP 邮件服务器可以用于发送邮件。请提供邮件账户的用户名和密码来使用此邮件服务器。',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => '管理员尚未配置默认的邮件发送账户，无法发送测试邮件。',
    'LBL_MAIL_SMTPPASS' => '密码',
    'LBL_MAIL_SMTPUSER' => '用户名',
    'LBL_MAIL_SMTPTYPE' => '服务器类型',
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

    'LBL_OK' => '确定',
    'LBL_CANCEL' => '取消',
    'LBL_DELETE_USER' => '删除用户',
    // Wizard
    'LBL_WIZARD_TITLE' => '设置向导',
    'LBL_WIZARD_WELCOME_TAB' => '欢迎',
    'LBL_WIZARD_WELCOME_TITLE' => '欢迎使用 SuiteCRM！',
    'LBL_WIZARD_WELCOME' => '点击 <b>下一步</b> 配置用户的基本设置。',
    'LBL_WIZARD_WELCOME_NOSMTP' => '点击 <b>下一步</b> 配置用户的基本设置。',
    'LBL_WIZARD_NEXT_BUTTON' => '下一步',
    'LBL_WIZARD_BACK_BUTTON' => '返回',
    'LBL_WIZARD_SKIP_BUTTON' => '跳过',
    'LBL_WIZARD_FINISH_BUTTON' => '完成',
    'LBL_WIZARD_FINISH_TITLE' => '完成',

    'LBL_WIZARD_LOCALE' => '区域设置',

    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => '您的场景',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => '当前未配置任何场景',
    'LBL_WIZARD_SCENARIOS_DESC' => '选择适合的场景，您也可以在安装后更改这些选项。',

    'LBL_WIZARD_LOCALE_DESC' => '指定您的时区、日期、 货币等显示格式。',
    'LBL_WIZARD_SMTP_DESC' => '设置系统邮件发送账户，用于发送通知提醒、新用户密码等。',
    'LBL_EAPM_SUBPANEL_TITLE' => '外部客户',

    'LBL_EDITLAYOUT' => '编辑布局' /*for 508 compliance fix*/,
    'LBL_CHECKMARK' => '标记' /*for 508 compliance fix*/,

    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',

    //For export labels
    'LBL_SHOW_ON_EMPLOYEES' => '在员工模块中显示',

    'LBL_DATE_ENTERED' => '创建日期',
    'LBL_DELETED' => '已删除',
    'LBL_HIDEOPTIONS' => '隐藏选项',
    'LBL_SHOWOPTIONS' => '显示选项',

    'LBL_SUITE_SUPERCHARGED' => "",
    'LBL_SUITE_POWERED_BY' => "Powered By ADZ Technic",
    'LBL_SUITE_TOP' => "向上",
    'LBL_SUITE_PRINT' => "打印",
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://salesagility.com">SalesAgility</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'This program is free software; you can redistribute it and/or modify it under the terms of the GNU Affero General Public License version 3 as published by the Free Software Foundation, including the additional permission set forth in the source code header.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SalesAgility Ltd. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_QUICK_ACCOUNT' => '创建客户',
    'LBL_QUICK_CONTACT' => '创建联系人',
    'LBL_QUICK_OPPORTUNITY' => '创建商业机会',
    'LBL_QUICK_LEAD' => '创建潜在客户',
    'LBL_QUICK_DOCUMENT' => '创建文档',
    'LBL_QUICK_CALL' => '创建电话',
    'LBL_QUICK_TASK' => '创建任务',

    'LBL_ENABLE_NOTIFICATIONS' => '启用桌面通知提醒',
    'LBL_LIST_NONINHERITABLE' => "不可继承",
    'LBL_PRIMARY_GROUP' => "主用户组",
    'LBL_PASSWORD_MIS_MATCH' => '不匹配',


    'LBL_EMAIL_INFORMATION' => '邮件信息',
    'LBL_FW'					=> '转发',
    'LBL_RE'					=> '回复',

    'LBL_BUTTON_CREATE'					=> '创建',
    'LBL_BUTTON_EDIT'					=> '编辑',
    'LBL_QS_DISABLED'                   => '（此模板未启用快速筛选，请使用选择按钮）',


    'LBL_ENTER_FOLDER_NAME'		=> '请输入文件夹名称',

    'LBL_ERROR_SELECT_MODULE'   => '错误：请为关联字段选择一个模块',

    'ERR_ARCHIVE_EMAIL'			=> '错误：请选择要存档的电子邮件',
    'LBL_ACCOUNTS_SUBPANEL_TITLE'=> '客户',
    'LBL_ADD_DASHLETS'          => '添加 Dashlet',
    'LBL_ADD_DOCUMENT'			=> '添加文档',
    'LBL_ADD_ENTRIES'           => '添加条目',
    'LBL_ADD_FILE'				=> '添加文件',
    'LBL_ATTACHMENTS'			=> '附件',
    'LBL_HAS_ATTACHMENT'		=> '是否有附件',
    'LBL_BCC'					=> '密送',
    'LBL_BODY'					=> '正文',
    'LBL_BUGS_SUBPANEL_TITLE'	=> 'Bugs',
    'LBL_CC'					=> '抄送',
    'LBL_COMPOSE_MODULE_NAME'	=> '写信',
    'LBL_CONTACT_NAME'			=> '联系人',
    'LBL_CONTACTS_SUBPANEL_TITLE'=> '联系人',
    'LBL_CREATED_BY'			=> '创建人',
    'LBL_DATE_SENT'				=> '发送日期',
    'LBL_DATE'					=> '日期',
    'LBL_DELETE_FROM_SERVER'    => '从服务器上删除',
    'LBL_DESCRIPTION'			=> '说明',
    'LBL_EDIT_ALT_TEXT'			=> '编辑纯文本',
    'LBL_SEND_IN_PLAIN_TEXT'	=> '以纯文本发送',
    'LBL_EMAIL_ATTACHMENT'		=> '邮件附件',
    'LBL_EMAIL_SELECTOR_SELECT' => '选择',
    'LBL_EMAIL_SELECTOR_CLEAR'  => '清除',
    'LBL_EMAILS_ACCOUNTS_REL'	=> '电子邮件：客户',
    'LBL_EMAILS_BUGS_REL'		=> '电子邮件：Bugs',
    'LBL_EMAILS_CASES_REL'		=> '电子邮件：客户反馈',
    'LBL_EMAILS_CONTACTS_REL'	=> '电子邮件：联系人',
    'LBL_EMAILS_LEADS_REL'		=> '电子邮件：潜在客户',
    'LBL_EMAILS_OPPORTUNITIES_REL'=> '电子邮件：商业机会',
    'LBL_EMAILS_NOTES_REL'      => '电子邮件：备忘录',
    'LBL_EMAILS_PROJECT_REL'	=> '电子邮件：项目',
    'LBL_EMAILS_PROJECT_TASK_REL'=> '电子邮件：项目任务',
    'LBL_EMAILS_PROSPECT_REL'	=> '电子邮件：目标对象',
    'LBL_EMAILS_CONTRACTS_REL'	=> '电子邮件：合同',
    'LBL_EMAILS_TASKS_REL'		=> '电子邮件：任务',
    'LBL_EMAILS_USERS_REL'		=> '电子邮件：用户',
    'LBL_EMPTY_FOLDER'          => '没有可显示的邮件。',
    'LBL_SELECT_FOLDER'         => '选择文件夹',
    'LBL_ERROR_SENDING_EMAIL'	=> '发送邮件时出错',
    'LBL_ERROR_SAVING_DRAFT'	=> '保存草稿时出错',
    'LBL_FROM_NAME'				=> '发件人名称',
    'LBL_FROM'					=> '发件人',
    'LBL_REPLY_TO'				=> '回复',
    'LBL_HTML_BODY'				=> 'HTML 正文',
    'LBL_INVITEE'				=> '收件人',
    'LBL_LEADS_SUBPANEL_TITLE'	=> '潜在客户',
    'LBL_MESSAGE_SENT'			=> '消息已发送',
    'LBL_MY_EMAILS'            => '电子邮件',
    'LBL_NONE'                  => '无',
    'LBL_NOT_SENT'				=> '发送错误',
    'LBL_NOTES_SUBPANEL_TITLE'	=> '备忘录',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => '商业机会',
    'LBL_PROJECT_SUBPANEL_TITLE'=> '项目',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE'=> '项目任务',
    'LBL_RAW'                  => '原始邮件',
    'LBL_SAVE_AS_DRAFT_BUTTON_TITLE'=> '保存草稿',
    'LBL_SEND_ANYWAYS'			=> '您的邮件没有填写主题，确定继续发送？',
    'LBL_SEND_BUTTON_LABEL'		=> '发送',
    'LBL_SEND_BUTTON_TITLE'		=> '发送',
    'LBL_SEND'					=> '发送',
    'LBL_SENT_MODULE_NAME'		=> '已发送',
    'LBL_SHOW_ALT_TEXT'			=> '显示纯文本',
    'LBL_SUBJECT'				=> '主题',
    'LBL_TEXT_BODY'				=> '文本正文',
    'LBL_TIME'					=> '发送时间',
    'LBL_TO_ADDRS'				=> '收件人',
    'LBL_USERS_SUBPANEL_TITLE'	=> '用户',
    'LBL_USERS'					=> '用户',

    'LNK_CALL_LIST'				=> '查看电话',
    'LBL_EMAIL_RELATE'          => '关联到',
    'LNK_EMAIL_TEMPLATE_LIST'	=> '查看邮件模板',
    'LNK_MEETING_LIST'			=> '查看会议',
    'LNK_NEW_CALL'				=> '创建电话',
    'LNK_NEW_EMAIL_TEMPLATE'	=> '创建邮件模板',
    'LNK_NEW_EMAIL'				=> '创建邮件',
    'LNK_NEW_MEETING'			=> '创建会议',
    'LNK_NEW_NOTE'				=> '创建备忘录',
    'LNK_NEW_SEND_EMAIL'		=> '写信',
    'LNK_NEW_TASK'				=> '创建任务',
    'LNK_NOTE_LIST'				=> '查看备忘录',
    'LNK_SENT_EMAIL_LIST'		=> '已发送',
    'LNK_TASK_LIST'				=> '查看任务',
    'LNK_VIEW_CALENDAR'			=> '查看日历',

    'LBL_LIST_ASSIGNED'			=> '负责人',
    'LBL_LIST_CONTACT_NAME'		=> '联系人',
    'LBL_LIST_DATE_SENT'		=> '发送日期',
    'LBL_LIST_DATE'				=> '日期',
    'LBL_LIST_FORM_DRAFTS_TITLE'=> '草稿',
    'LBL_LIST_FORM_SENT_TITLE'	=> '已发送',
    'LBL_LIST_FROM_ADDR'		=> '发件人地址',
    'LBL_LIST_RELATED_TO'		=> '关联到',
    'LBL_LIST_SUBJECT'			=> '主题',
    'LBL_LIST_TO_ADDR'			=> '收件人地址',
    'LBL_LIST_TYPE'				=> '类型',

    'WARNING_SETTINGS_NOT_CONF'	=> '警告：您未配置邮件发送账户，无法发送邮件。',

    // for All emails
    'LBL_BUTTON_RAW_LABEL'   => '显示原始邮件',
    'LBL_BUTTON_RAW_LABEL_HIDE' => '隐藏原始邮件',

    // for InboundEmail
    'LBL_BUTTON_CHECK'			=> '收信',
    'LBL_BUTTON_CHECK_TITLE'	=> '收信',
    'LBL_BUTTON_FORWARD'		=> '转发',
    'LBL_BUTTON_REPLY_TITLE'	=> '回复',
    'LBL_BUTTON_REPLY_ALL'		=> '回复全部',
    'LBL_CASES_SUBPANEL_TITLE'	=> '客户反馈',
    'LBL_INTENT'				=> '目的',
    'LBL_MESSAGE_ID'			=> '消息ID',
    'LBL_REPLY_HEADER_1'		=> '于',
    'LBL_REPLY_HEADER_2'		=> '写道',
    'LBL_REPLY_TO_ADDRESS'		=> '回复地址',
    'LBL_REPLY_TO_NAME'			=> '设置回复名称',

    'LBL_LIST_BUG'				=> 'Bugs',
    'LBL_LIST_CASE'				=> '客户反馈',
    'LBL_LIST_CONTACT'			=> '联系人',
    'LBL_LIST_LEAD'				=> '潜在客户',
    'LBL_LIST_TASK'				=> '任务',
    'LBL_LIST_ASSIGNED_TO_NAME' => '负责人',

    // for Inbox
    'LBL_ALL'					=> '全部',
    'LBL_ASSIGN_WARN'			=> '确保所有的 2 个选项都被选中。',
    'LBL_BACK_TO_GROUP'			=> '返回',
    'LBL_BUTTON_DISTRIBUTE_TITLE'=> '部署',
    'LBL_BUTTON_DISTRIBUTE'		=> '部署',
    'LBL_BUTTON_GRAB_TITLE'		=> '从组获取',
    'LBL_BUTTON_GRAB'			=> '从组获取',
    'LBL_CREATE_BUG'			=> '创建 Bug',
    'LBL_CREATE_CASE'			=> '创建客户反馈',
    'LBL_CREATE_CONTACT'		=> '创建联系人',
    'LBL_CREATE_LEAD'			=> '创建潜在客户',
    'LBL_CREATE_TASK'			=> '创建任务',
    'LBL_DIST_TITLE'			=> '分配',
    'LBL_LOCK_FAIL_DESC'		=> '选择的条目当前不可用。',
    'LBL_LOCK_FAIL_USER'		=> ' 已取得所有权。',
    'LBL_MASS_DELETE_ERROR'		=> '选中的条目未被删除。',
    'LBL_NEW'					=> '新增',
    'LBL_NEXT_EMAIL'			=> '下一封邮件',
    'LBL_REPLIED'				=> '已回复',
    'LBL_TO'					=> '收件人',
    'LBL_TOGGLE_ALL'			=> '选中所有',
    'LBL_UNKNOWN'				=> '未知',
    'LBL_USE'					=> '分配：',
    'LBL_ASSIGN_SELECTED_RESULTS_TO' => '将所选结果分配给：',
    'LBL_USER_SELECT'			=> '选择用户',
    'LBL_USING_RULES'			=> '使用规则',
    'LBL_WARN_NO_DIST'			=> '未选择分配方法',
    'LBL_WARN_NO_USERS'			=> '未选择用户',
    'LBL_IMPORT_STATUS_TITLE'	=> '状态',
    'LBL_INDICATOR'         	=> '指示器',
    'LBL_LIST_TITLE_GROUP_INBOX'=> '群邮件',
    'LBL_LIST_TITLE_MY_DRAFTS'	=> '草稿箱',
    'LBL_LIST_TITLE_MY_INBOX'	=> '收件箱',
    'LBL_LIST_TITLE_MY_SENT'	=> '已发送',
    'LBL_LIST_TITLE_MY_ARCHIVES'=> '已存档',

    'LNK_MY_DRAFTS'				=> '草稿箱',
    'LNK_MY_INBOX'				=> '收件箱',
    'LNK_VIEW_MY_INBOX'			=> '查看收件箱',
    'LNK_QUICK_REPLY'			=> '回复',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' =>'未指定主团队',

    // advanced search
    'LBL_ASSIGNED_TO'			=> '负责人ID',
    'LBL_MEMBER_OF'				=> '上级',
    'LBL_QUICK_CREATE'			=> '快速创建',
    'LBL_EMAIL_FLAGGED'			=> '已标记',
    'LBL_EMAIL_REPLY_TO_STATUS'	=> '回复状态',
    'LBL_TYPE'					=> '类型',
    //#20680 EmialTemplate Ext.Message.show;
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => '请检查！',
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => '选择此模板将覆盖当前邮件正文中已输入的内容，您确定要继续？',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => '选择 -无- 将清空当前邮件正文中已输入的内容，您确定要继续？',
    'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => '警告',
    'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => '使用包含联系变量的邮件模板，比如联系人姓名,给不同的接收者发送邮件可能导致意外的结果。建议您使用邮件活动开展邮件群发。',
    'LBL_CHECK_ATTACHMENTS'=>'请检查附件。',
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
    'LBL_EMPTY_EMAIL_BODY'  => '<p><span style="color: #888888;"><em>此邮件没有任何内容</em></span></p>',
    'LBL_TEST_EMAIL_SUBJECT' => 'SuiteCRM 测试邮件',
    'LBL_NO_SUBJECT' =>'未填写主题',
    'LBL_CHECKING_ACCOUNT'	=> '正在检查账户',
    'LBL_OF'	=> '的',
    'LBL_TEST_EMAIL_BODY' => 'SuiteCRM 测试邮件。成功收到此邮件说明 SuiteCRM 邮件发送账户已正确设置。',

    // for outbound email dialog
    'LBL_MAIL_SMTPAUTH_REQ'				=> '需要身份验证',

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
    'LBL_DATE_MODIFIED' => '修改时间',

    'LBL_CATEGORY' => '类别',
    'LBL_LIST_CATEGORY' => '类别',
    'LBL_EDITOR_TYPE' => '编辑器',


    'LBL_CONTACTS_SYNC' => '联系人同步',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => '项目',
    'LBL_ROLES' => '角色',
    'LBL_SECURITYGROUPS' => '用户组列表',

	'LBL_UNLOCK_USER' => '解锁用户',  // PR 2897
	'LBL_USER_UNLOCKED_MSG' => '用户已解锁',  // PR 2897

); // END STRINGS DEFS

?>
