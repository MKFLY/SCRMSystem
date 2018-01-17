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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => '高级',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 货币代码',
    'DEFAULT_CURRENCY_NAME' => '货币名称',
    'DEFAULT_CURRENCY_SYMBOL' => '货币符号',
    'DEFAULT_DATE_FORMAT' => '默认日期格式',
    'DEFAULT_DECIMAL_SEP' => '小数点符号',
    'DEFAULT_LANGUAGE' => '默认语言',
    'DEFAULT_SYSTEM_SETTINGS' => '系统设置',
    'DEFAULT_THEME' => '默认主题',
    'DEFAULT_TIME_FORMAT' => '默认时间格式',

    'DISPLAY_RESPONSE_TIME' => '显示服务器响应时间',



    'IMAGES' => 'Logos',
    'LBL_ALLOW_USER_TABS' => '允许用户隐藏标签',
    'LBL_CONFIGURE_SETTINGS_TITLE' => '系统设置',
    'LBL_LOGVIEW' => '查看日志',
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
    'LBL_ALLOW_DEFAULT_SELECTION' => '允许普通用户使用此账户对外发送邮件',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => '此邮件账户是用于发送通知、工作流提醒等。勾选此项，允许所有用户通过此邮件账户对外发送电子邮件。不勾选此项，用户需要配置自己的邮件账户来发送这些信息。',
    'LBL_MAILMERGE' => '邮件合并',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Dashlet 自动刷新间隔',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => '设置 Dashlet 自动刷新间隔的时间。设置为 "从不" 将禁用自动刷新。',
    'LBL_MODULE_FAVICON' => '模块图标作为 favicon 图标',
    'LBL_MODULE_FAVICON_HELP' => '如果模块有图标，将使用模块的图标作为 favicon 图标。',
    'LBL_MODULE_NAME' => '系统设置',
    'LBL_MODULE_ID' => '配置',
    'LBL_MODULE_TITLE' => '用户界面',
    'LBL_NOTIFY_FROMADDRESS' => '设置发件人地址',
    'LBL_NOTIFY_SUBJECT' => '主题',
    'LBL_PROXY_AUTH' => '身份验证',
    'LBL_PROXY_HOST' => '代理服务器地址',
    'LBL_PROXY_ON_DESC' => '配置代理服务器的地址以及身份验证设置',
    'LBL_PROXY_ON' => '启用代理',
    'LBL_PROXY_PASSWORD' => '密码',
    'LBL_PROXY_PORT' => '端口',
    'LBL_PROXY_TITLE' => '代理设置',
    'LBL_PROXY_USERNAME' => '用户名',
    'LBL_RESTORE_BUTTON_LABEL' => '还原',
    'LBL_SYSTEM_SETTINGS' => '系统设置',
    'LBL_SKYPEOUT_ON_DESC' => '当用户点击电话号码时，允许使用移动设备或通话应用（例如：SkypeOut&reg; 等）进行呼叫。要正常使用此功能，电话号码必须正确格式化。也就是说，必须要有 "+" "国家代码" "电话号码"，例如：+1（555）555-1234。',
    'LBL_SKYPEOUT_ON' => '为电话号码启用点击呼叫',
    'LBL_SKYPEOUT_TITLE' => '点击呼叫',
    'LBL_USE_REAL_NAMES' => '负责人字段显示全名',
    'LBL_USE_REAL_NAMES_DESC' => '在负责人字段中显示用户全名而不是用户名。',
    'LBL_DISALBE_CONVERT_LEAD' => '禁止转化已转化的潜在客户',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => '如果一个潜在客户已转化过，启用此选项后将移除转化操作。',
    'LBL_ENABLE_ACTION_MENU' => '在菜单中显示动作',
    'LBL_ENABLE_ACTION_MENU_DESC' => '如果选中，以下拉菜单的方式显示详细信息视图和子面板的可操作动作。如果未选择，操作动作将显示为单独的按钮。',
    'LBL_ENABLE_INLINE_EDITING_LIST' => '在列表视图上启用行内编辑',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => '选择以允许行内编辑列表视图字段。如果未选择，将禁用行内编辑。',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => '在详细视图上启用行内编辑',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => '选择以允许行内编辑详细视图字段。如果未选择，将禁用行内编辑。',
    'LBL_HIDE_SUBPANELS' => '隐藏子面板',
    'LIST_ENTRIES_PER_LISTVIEW' => '列表视图的每页记录数',
    'LIST_ENTRIES_PER_SUBPANEL' => '子面板视图的每页记录数',
    'LOG_MEMORY_USAGE' => '记录内存使用',
    'LOG_SLOW_QUERIES' => '记录慢查询',
    'CURRENT_LOGO' => '当前 Logo',
    'CURRENT_LOGO_HELP' => '更换系统 Logo 图片。',
    'NEW_LOGO' => '上传新 Logo',
    'NEW_LOGO_HELP' => '图片文件格式可以是 .jpg 或 .png。最大高度 170px，最大宽度 450px。任何上传的图片大于最大尺寸将自动缩放。',
    'NEW_LOGO_HELP_NO_SPACE' => '图片文件格式可以是 .jpg 或 .png。最大高度 170px，最大宽度 450px。任何上传的图片大于最大尺寸将自动缩放，同时文件名不能包含空格。',
    'SLOW_QUERY_TIME_MSEC' => '慢查询时间阈值（毫秒）',
    'STACK_TRACE_ERRORS' => '显示错误的堆栈跟踪',
    'UPLOAD_MAX_SIZE' => '最大上传文件大小',
    'VERIFY_CLIENT_IP' => '验证用户 IP 地址',
    'LOCK_HOMEPAGE' => '禁止用户自定义首页布局',
    'LOCK_SUBPANELS' => '禁止用户自定义子面板布局',
    'MAX_DASHLETS' => '首页 Dashlet 个数上限',
    'SYSTEM_NAME' => '设置系统名称',
    'SYSTEM_NAME_WIZARD' => '系统名称',
    'SYSTEM_NAME_HELP' => '设置在浏览器标题栏显示的名称。',
    'LBL_LDAP_TITLE' => 'LDAP 身份验证',
    'LBL_LDAP_ENABLE' => '启用 LDAP 身份验证',
    'LBL_LDAP_SERVER_HOSTNAME' => '服务器地址',
    'LBL_LDAP_SERVER_PORT' => '端口',
    'LBL_LDAP_ADMIN_USER' => '用户名或 DN',
    'LBL_LDAP_ADMIN_USER_DESC' => '用于搜索 SuiteCRM 用户，可能需要完全访问权限。如果没有提供，将使用匿名绑定。',
    'LBL_LDAP_ADMIN_PASSWORD' => '密码',
    'LBL_LDAP_AUTHENTICATION' => '身份验证',
    'LBL_LDAP_AUTHENTICATION_DESC' => '使用特定用户凭据绑定到 LDAP 服务器',
    'LBL_LDAP_AUTO_CREATE_USERS' => '自动创建用户',
    'LBL_LDAP_USER_DN' => '用户检索 DN',
    'LBL_LDAP_GROUP_DN' => '组检索 DN',
    'LBL_LDAP_GROUP_DN_DESC' => '指定用于检索组的完整 DN 条目。示例：<em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => '用户筛选条件',
    'LBL_LDAP_GROUP_MEMBERSHIP' => '属于组成员',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => '用户必须为指定组的成员',
    'LBL_LDAP_GROUP_USER_ATTR' => '用户属性',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => '示例：<em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => '示例：<em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => '组成员属性',
    'LBL_LDAP_USER_FILTER_DESC' => '用户进行身份验证时要应用的额外的筛选参数，或留空。示例：<em>is_suitecrm_user=1</em> 或 <em>(is_suitecrm_user=1) (is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => '登录属性',
    'LBL_LDAP_BIND_ATTRIBUTE' => '绑定属性',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => '用于绑定 LDAP 用户。示例：<b>AD</b>：<em>userPrincipalName</em> <b>openLDAP</b>：<em>uid</em> <b>Mac&nbsp;OS&nbsp;X</b>：<em>uid</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => '用于搜索 LDAP 用户。示例：<b>AD</b>：<em>sAMAccountName</em> <b>openLDAP</b>：<em>uid</em> <b>Mac&nbsp;OS&nbsp;X</b>：<em>uid</em>',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => '示例：<em>ldap.example.com</em> 或者 <em>ldaps://ldap.example.com</em> （SSL）',
    'LBL_LDAP_SERVER_PORT_DESC' => '示例：<em>389</em> 或 <em>636</em>（SSL）',
    'LBL_LDAP_GROUP_NAME' => '组名',
    'LBL_LDAP_GROUP_NAME_DESC' => '示例：<em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => '指定用于检索用户的完整 DN 条目。示例：<em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => '如果已通过身份验证的用户在系统中不存在，将自动创建。',
    'LBL_LDAP_ENC_KEY' => '加密密钥',
    'DEVELOPER_MODE' => '开发者模式',

    'SHOW_DOWNLOADS_TAB' => '显示下载标签',
    'LBL_LDAP_ENC_KEY_DESC' => '在使用 LDAP 时进行 SOAP 认证',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => '必须在 php.ini 文件中启用 php_mcrypt 扩展。',
    'LBL_ALL' => '全部',
    'LBL_MARK_POINT' => '标记点',
    'LBL_NEXT_' => '下一步',
    'LBL_REFRESH_FROM_MARK' => '从标记刷新',
    'LBL_SEARCH' => '搜索',
    'LBL_REG_EXP' => '正则表达式',
    'LBL_IGNORE_SELF' => '忽略自身',
    'LBL_MARKING_WHERE_START_LOGGING' => '标记开始日志的位置',
    'LBL_DISPLAYING_LOG' => '正在显示日志',
    'LBL_YOUR_PROCESS_ID' => '您的进程 ID',
    'LBL_YOUR_IP_ADDRESS' => '您的 IP 地址是',
    'LBL_IT_WILL_BE_IGNORED' => '它将被忽略',
    'LBL_LOG_NOT_CHANGED' => '日志没有改变',
    'LBL_ALERT_JPG_IMAGE' => '图片的文件格式必须是 JPEG 格式。 请上传文件扩展名为 .jpg 的文件。',
    'LBL_ALERT_TYPE_IMAGE' => '图片的文件格式必须是 JPEG 或者 PNG 格式。 请上传文件扩展名为 .jpg 或者 .png 的文件。',
    'LBL_ALERT_SIZE_RATIO' => '图片的长宽比应该是 1:1 到 10:1 之间。图片将被重新调整。',
    'ERR_ALERT_FILE_UPLOAD' => '文件上传时出错。',
    'LBL_LOGGER' => '日志设置',
    'LBL_LOGGER_FILENAME' => '日志文件名',
    'LBL_LOGGER_FILE_EXTENSION' => '扩展名',
    'LBL_LOGGER_MAX_LOG_SIZE' => '最大日志大小',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => '默认日期格式',
    'LBL_LOGGER_LOG_LEVEL' => '日志级别',
    'LBL_LEAD_CONV_OPTION' => '潜在客户转化选项',
    'LEAD_CONV_OPT_HELP' => "<b>复制</b> - 创建并关联所有潜在客户的活动记录到转化过程中新创建的记录上。<br /><br /><b>移动</b> - 移动潜在客户的所有活动记录，关联到转化过程中新创建的记录上。<br /><br /><b>无</b> - 转化过程中不修改任何潜在客户的活动记录，活动记录仍旧只和潜在客户关联。",
    'LBL_CONFIG_AJAX' => '配置 AJAX 用户接口',
    'LBL_CONFIG_AJAX_DESC' => '设置特定的模块启用或禁用 AJAX 。',
    'LBL_LOGGER_MAX_LOGS' => '日志文件最大数量',
    'LBL_LOGGER_FILENAME_SUFFIX' => '在文件名后附加',
    'LBL_VCAL_PERIOD' => 'vCal 更新时间段',
    'LBL_IMPORT_MAX_RECORDS' => '最大数据导入行数',
    'LBL_IMPORT_MAX_RECORDS_HELP' => '设定在导入文件时的最大处理行数。<br />如果导入时超过该行数，将提醒用户。<br />不输入任何数字，将不做限制。',
	'vCAL_HELP' => '此设置用来决定电话和会议的闲忙信息更新时间范围.</BR>关闭闲忙信息更新请输入"0".  最小值1个月; 最大值12个月.',
    'LBL_PDFMODULE_NAME' => 'PDF 设置',
    'SUGARPDF_BASIC_SETTINGS' => '基本设置',
    'SUGARPDF_ADVANCED_SETTINGS' => '高级设置',
    'SUGARPDF_LOGO_SETTINGS' => '图标设置',

    'PDF_AUTHOR' => '作者',
    'PDF_AUTHOR_INFO' => '作者显示在文档属性中。',

    'PDF_HEADER_LOGO' => '当前大图标',
    'PDF_HEADER_LOGO_INFO' => '此图片在 PDF 文档（报价单）的页眉显示。',

    'PDF_NEW_HEADER_LOGO' => '上传新的大图标',
    'PDF_NEW_HEADER_LOGO_INFO' => '图片格式可以为 .png 或 .jpg。（EZPDF 只能使用 .jpg）<br />推荐尺寸为 867x60 px。',

    'PDF_SMALL_HEADER_LOGO' => '当前小图标',
    'PDF_SMALL_HEADER_LOGO_INFO' => '此图片在 PDF 文档（报表）的页眉显示。<br />也会在 SuiteCRM 的左上角显示。',

    'PDF_NEW_SMALL_HEADER_LOGO' => '上传新的小图标',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => '图片格式可以为 .png 或 .jpg。（EZPDF 只能使用 .jpg）<br />推荐尺寸为 212x40 px。',

    'PDF_FILENAME' => '默认文件名',
    'PDF_FILENAME_INFO' => '生成 PDF 文件的默认文件名',

    'PDF_TITLE' => '标题',
    'PDF_TITLE_INFO' => '标题显示在文档属性中。',

    'PDF_SUBJECT' => '主题',
    'PDF_SUBJECT_INFO' => '主题显示在文档属性中。',

    'PDF_KEYWORDS' => '关键词',
    'PDF_KEYWORDS_INFO' => 'PDF 文档的关键词，格式为 "关键词1 关键词2 ..."',

    'PDF_COMPRESSION' => '压缩',
    'PDF_COMPRESSION_INFO' => '启用或停用页面压缩。<br />启用压缩后，文档的压缩比约为 2。',

    'PDF_JPEG_QUALITY' => 'JPEG 质量 (1-100)',
    'PDF_JPEG_QUALITY_INFO' => '设置默认的 JPEG 压缩质量 (1-100)',

    'PDF_PDF_VERSION' => 'PDF 版本',
    'PDF_PDF_VERSION_INFO' => '设定 PDF 版本（具体数值请参考 PDF 手册）。',

    'PDF_PROTECTION' => '文档保护',
    'PDF_PROTECTION_INFO' => '设定文档保护<br>- copy: 复制文字与图片到剪贴板<br>- print: 打印文档<br>- modify: 编辑 (除注释与表格)<br>- annot-forms: 添加注释与表格<br>注: 文档保护主要针对拥有Acrobat完整版产品的用户对文档的修改。',

    'PDF_USER_PASSWORD' => '用户密码',
    'PDF_USER_PASSWORD_INFO' => '如果您不设定任何密码，文档将正常打开。<br>如果您设定了用户密码，在显示文档前，系统将会要求 PDF 的查看者提供密码。 <br>管理密码， 如果与用户密码不一致，用来赋予用户全部的权限。',

    'PDF_OWNER_PASSWORD' => '所有者密码',
    'PDF_OWNER_PASSWORD_INFO' => '如果您不设定任何密码，文档将正常打开。 <br>如果您设定了用户密码，在显示文档前，系统将会要求 PDF 的查看者提供密码。 <br>管理密码， 如果与用户密码不一致，用来赋予用户全部的权限。',

    'PDF_ACL_ACCESS' => '访问控制',
    'PDF_ACL_ACCESS_INFO' => '生成 PDF 文件的默认访问控制',

    'K_CELL_HEIGHT_RATIO' => '单元格高度系数',
    'K_CELL_HEIGHT_RATIO_INFO' => '如果单元格高度小于(字体高度 x 单元高度系数)，(字体高度 x 单元高度系数) 将作为单元格高度。<br>当未设定单元格高度时，(字体高度 x 单元高度系数)也会用作单元格高度。',

    'K_SMALL_RATIO' => '小字体因子',
    'K_SMALL_RATIO_INFO' => '减小因子以获得更小的字体.',

    'PDF_IMAGE_SCALE_RATIO' => '图片缩放比例',
    'PDF_IMAGE_SCALE_RATIO_INFO' => '用来缩放图片的比例',

    'PDF_UNIT' => '单位',
    'PDF_UNIT_INFO' => '文件的度量单位',
    'PDF_GD_WARNING' => '未安装 PHP 的 GD 模块，在 PDF 文档中将仅支持显示 JPEG 图标。',
    'ERR_EZPDF_DISABLE' => '警告：EZPDF 已被禁用，请将 PDF 类设置为 TCPDF。',
    'LBL_IMG_RESIZED' => "(调整大小)",


    'LBL_FONTMANAGER_BUTTON' => 'PDF 字体管理',
    'LBL_FONTMANAGER_TITLE' => 'PDF 字体管理',
    'LBL_FONT_BOLD' => '粗体',
    'LBL_FONT_ITALIC' => '斜体',
    'LBL_FONT_BOLDITALIC' => '粗体/斜体',
    'LBL_FONT_REGULAR' => '常规',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'Core',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Type1',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => '名称',
    'LBL_FONT_LIST_FILENAME' => '文件名',
    'LBL_FONT_LIST_TYPE' => '类型',
    'LBL_FONT_LIST_STYLE' => '样式',
    'LBL_FONT_LIST_STYLE_INFO' => '字体样式',
    'LBL_FONT_LIST_ENC' => '编码',
    'LBL_FONT_LIST_EMBEDDED' => '内嵌',
    'LBL_FONT_LIST_EMBEDDED_INFO' => '检查 PDF 文件的内嵌文字',
    'LBL_FONT_LIST_CIDINFO' => 'CID 信息',

    'LBL_FONT_LIST_FILESIZE' => '字体大小 (KB)',
    'LBL_ADD_FONT' => '添加字体',
    'LBL_BACK' => '返回',
    'LBL_REMOVE' => '移除',
    'LBL_JS_CONFIRM_DELETE_FONT' => '您确定要删除此字体？',

    'LBL_ADDFONT_TITLE' => '添加 PDF 字体',
    'LBL_PDF_ENCODING_TABLE' => '编码表',
    'LBL_PDF_ENCODING_TABLE_INFO' => '.<br>TrueType Unicode, OpenType Unicode and symbolic字体将会忽略该选项.<br>编码集定义了编码和 (从 0 到 255) 字体中字符的关系.<br>为了兼容ASCII前128位是固定的.',
    'LBL_PDF_FONT_FILE' => '字体文件',
    'LBL_PDF_FONT_FILE_INFO' => '.ttf .otf 或者 .pfb 文件',
    'LBL_PDF_METRIC_FILE' => '公制文件',
    'LBL_PDF_METRIC_FILE_INFO' => '.afm 或者 .ufm 文件',
    'LBL_ADD_FONT_BUTTON' => '添加',
    'JS_ALERT_PDF_WRONG_EXTENSION' => '文件没有有效的扩展名。',

    'ERR_MISSING_CIDINFO' => '字段 CID 不能为空。',
    'LBL_ADDFONTRESULT_TITLE' => '添加字体结果',
    'LBL_STATUS_FONT_SUCCESS' => '成功：字体已添加。',
    'LBL_STATUS_FONT_ERROR' => '错误：字体添加失败，请查看下面的日志。',

// Font manager
    'ERR_PDF_NO_UPLOAD' => '文件上传时出错。',

// Wizard
	//Wizard Scenarios
	'LBL_WIZARD_SCENARIOS' => '您的场景',
	'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => '当前未配置任何场景',
	'LBL_WIZARD_SCENARIOS_DESC' => '选择适合的场景，您也可以在安装后更改这些选项。',

    'LBL_WIZARD_TITLE' => '设置向导',
    'LBL_WIZARD_WELCOME_TAB' => '欢迎',
    'LBL_WIZARD_WELCOME_TITLE' => '欢迎使用 SuiteCRM！',
    'LBL_WIZARD_WELCOME' => '单击 <b>下一个</b> 配置系统的基本设置。如果您想要在以后配置这些选项，请点击 <b>跳过</b>。',
    'LBL_WIZARD_NEXT_BUTTON' => '下一步',
    'LBL_WIZARD_BACK_BUTTON' => '返回',
    'LBL_WIZARD_SKIP_BUTTON' => '跳过',
    'LBL_WIZARD_CONTINUE_BUTTON' => '继续',
    'LBL_WIZARD_FINISH_TITLE' => '完成',
    'LBL_WIZARD_SYSTEM_TITLE' => '系统标题',
    'LBL_WIZARD_SYSTEM_DESC' => '设置系统名称、Logo 等信息。',
    'LBL_WIZARD_LOCALE_DESC' => '指定您的时区、日期、 货币等显示格式。',
    'LBL_WIZARD_SMTP_DESC' => '设置系统邮件发送账户，用于发送通知提醒、新用户密码等。',
    'LBL_LOADING' => '正在加载' /*for 508 compliance fix*/,
    'LBL_DELETE' => '删除' /*for 508 compliance fix*/,
    'LBL_WELCOME' => '欢迎使用' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => '在历史记录子面板中显示关联联系人的邮件记录',

);


?>
