<?php
/**
 * ç
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
	'LBL_BASIC_SEARCH'					=> '快速筛选',
	'LBL_ADVANCED_SEARCH'				=> '高级筛选',
	'LBL_BASIC_TYPE'					=> '基本类型',
	'LBL_ADVANCED_TYPE'					=> '高级类型',
	'LBL_SYSOPTS_2'                     => '选择安装 SuiteCRM 实例所使用的数据库类型。',
	'LBL_SYSOPTS_DB'					=> '指定数据库类型',
	'LBL_SYSOPTS_DB_TITLE'              => '数据库类型',
	'LBL_SYSOPTS_ERRS_TITLE'			=> '在继续执行前请修复以下错误：',
	'ERR_DB_VERSION_FAILURE'			=> '无法检测数据库版本。',
	'DEFAULT_CHARSET'					=> 'UTF-8',
	'ERR_ADMIN_USER_NAME_BLANK'         => '请设置 SuiteCRM 管理员用户名。',
	'ERR_ADMIN_PASS_BLANK'				=> '请设置 SuiteCRM 管理员密码。',

	'ERR_CHECKSYS'                      => '在兼容性检查过程中检测到错误。为了使您的 SuiteCRM 正确安装并使用，请采取适当的步骤解决下面列出的问题，然后点击 "重新检查" 按钮或者尝试重新安装。',
	'ERR_CHECKSYS_CALL_TIME'            => '请修改 php.ini 配置文件或通过其他途径修改 allow_call_time_pass_reference 为 off。',
	'ERR_CHECKSYS_CURL'					=> '未检测到 cURL 库，SuiteCRM 任务计划功能将受限。',
	'ERR_CHECKSYS_IMAP'					=> '未检测到 IMAP 模块，邮件接收和营销活动邮件需要 IMAP 模块，否则将不能正常工作。',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '将此设置为',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M 或更大',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> '警告：无法写入',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'SuiteCRM 不支持您的 PHP 版本。您需要安装与 SuiteCRM 兼容的版本。当前 PHP 版本：',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'SuiteCRM 不支持您的 IIS 版本。您需要安装与 SuiteCRM 兼容的版本。当前 IIS 版本：',
	'ERR_CHECKSYS_FASTCGI'              => '检测到您使用的不是 PHP FastCGI。您需要安装/配置与 SuiteCRM 应用相兼容的 PHP 版本。请参阅受支持版本的发行说明。详情请访问 <a href="http://www.iis.net/php/"target="_blank">http://www.iis.net/php/</a>。',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => '如果使用 IIS/FastCGI sapi 建议修改 php.ini 配置文件或通过其他途径修改 fastcgi.logging = 0 。',
	'LBL_DB_UNAVAILABLE'                => '数据库不可用',
	'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => '未检测到数据库支持。请确保您已经正确安装数据库服务器并已启用 PHP 数据库扩展模块。',
	'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => '未检测到 XML 解析器库相关的函数。请修改 php.ini 配置文件或通过其他途径修改此设置。',
	'ERR_CHECKSYS_MBSTRING'             => '未检测到 PHP mbstring 模块。<br /><br />请检查 PHP 是否已启用 mbstring 模块支持。',
	'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'config.php 配置文件存在但无法写入，请设置适当的文件权限。',
	'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'config_override.php 配置文件存在但无法写入，请设置适当的文件权限。',
	'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'custom 目录存在但无法写入，请设置适当的文件权限。',
	'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "下面列出的文件/目录无法写入或不存在，并且无法创建，请设置适当的文件权限。",
	'LBL_CHECKSYS_OVERRIDE_CONFIG' => '配置重写',
	'ERR_CHECKSYS_SAFE_MODE'			=> '当前安全模式开启，可以修改 php.ini 配置文件或通过其他途径设置关闭。',
	'ERR_CHECKSYS_ZLIB'					=> '未检测到 zlib 库，SuiteCRM 使用 zlib 压缩以提升性能。',
	'ERR_CHECKSYS_ZIP'					=> '未检测到  zip 库，SuiteCRM 需要 zip 库来处理压缩的文件。',
	'ERR_CHECKSYS_PCRE'					=> '未检测到 pcre 库，SuiteCRM 需要 pcre 库来处理 Perl 风格的正则表达式匹配。',
	'ERR_CHECKSYS_PCRE_VER'				=> 'pcre 库版本过低，SuiteCRM 需要 pcre 库 7.0 及以上版本来处理 Perl 风格的正则表达式匹配。',
	'ERR_DB_ADMIN'						=> '数据库管理员的用户名或密码错误，无法与数据库建立连接。请输入正确的用户名和密码。（错误：',
	'ERR_DB_ADMIN_MSSQL'                => '数据库管理员的用户名或密码错误，无法与数据库建立连接。请输入正确的用户名和密码。',
	'ERR_DB_EXISTS_NOT'					=> '指定的数据库不存在。',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> '数据库已存在的配置数据。要使用所选的数据库进行安装，请重新运行安装程序并选择：“删除并重新创建数据表？”如果需要更新系统，请在管理控制台中使用更新向导。',
	'ERR_DB_EXISTS'						=> '数据库已经存在，无法创建具有相同名称的数据库。',
	'ERR_DB_EXISTS_PROCEED'             => '数据库已经存在。<br />您可以点击后退按钮，并选择一个新的数据库名称。<br />您也可以继续点击下一步，但这将删除数据库中所有现有的数据。<strong>这意味着您现有的数据表和数据都将不复存在。</strong>',
	'ERR_DB_HOSTNAME'					=> '主机名不能为空。',
	'ERR_DB_INVALID'					=> '指定的数据库类型无效。',
	'ERR_DB_LOGIN_FAILURE'				=> '数据库的主机名、用户名或密码错误，无法与数据库建立连接。请输入正确的主机名、用户名和密码。',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> '数据库的主机名、用户名或密码错误，无法与数据库建立连接。请输入正确的主机名、用户名和密码。',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> '数据库的主机名、用户名或密码错误，无法与数据库建立连接。请输入正确的主机名、用户名和密码。',
	'ERR_DB_MYSQL_VERSION'				=> 'SuiteCRM 不支持您的 MySQL 版本。您需要安装与 SuiteCRM 兼容的版本。当前 MySQL 版本：(%s)',
	'ERR_DB_NAME'						=> '数据库名称不能为空。',
	'ERR_DB_MYSQL_DB_NAME_INVALID'      => "数据库名称不能包含 '\\', '/', 或 '.'",
	'ERR_DB_MSSQL_DB_NAME_INVALID'      => "数据库名称不能以数字、'#'、或 '@' 开头，并且不能包含空格, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', 或 '-' 等字符。",
	'ERR_DB_OCI8_DB_NAME_INVALID'       => "数据库名称只能包含字母和 '#'、'_' 或 '$' 符号。",
	'ERR_DB_PASSWORD'					=> '密码不匹配。',
	'ERR_DB_PRIV_USER'					=> '需要填写数据库管理员用户名。',
	'ERR_DB_USER_EXISTS'				=> '数据库用户已存在，无法创建具有相同名称的数据库用户。',
	'ERR_DB_USER'						=> '用户名不能为空。',
	'ERR_DBCONF_VALIDATION'				=> '在继续执行前请先修复以下错误：',
	'ERR_DBCONF_PASSWORD_MISMATCH'      => '密码不匹配。',
	'ERR_ERROR_GENERAL'					=> '遇到以下错误：',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> '无法删除文件：',
	'ERR_LANG_MISSING_FILE'				=> '无法找到文件：',
	'ERR_LANG_NO_LANG_FILE'			 	=> '在 include/language 中未找到语言包：',
	'ERR_LANG_UPLOAD_1'					=> '上传出错，请重试。',
	'ERR_LANG_UPLOAD_2'					=> '语言包必须是 .zip 格式的压缩包。',
	'ERR_LANG_UPLOAD_3'					=> '无法移动临时文件到更新目录。',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> '指定的日志目录不存在。',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> '指定的日志目录无法写入。',
	'ERR_NO_DIRECT_SCRIPT'				=> '无法直接运行脚本。',
	'ERR_NO_SINGLE_QUOTE'				=> '不能使用单引号',
	'ERR_PASSWORD_MISMATCH'				=> '密码不匹配。',
	'ERR_PERFORM_CONFIG_PHP_1'			=> '无法写入 <span class=stop>config.php</span> 文件。',
	'ERR_PERFORM_CONFIG_PHP_2'			=> '您可以通过手动创建的 config.php 文件进行安装。<strong>必须</strong>将下面的配置信息粘贴到站点根目录的 config.php 文件中，然后再继续下一个步骤。',
	'ERR_PERFORM_CONFIG_PHP_3'			=> '是否已创建 config.php 文件？',
	'ERR_PERFORM_CONFIG_PHP_4'			=> '无法写入 config.php 文件，请确保此文件存在并可写。',
	'ERR_PERFORM_HTACCESS_1'			=> '无法写入 ',
	'ERR_PERFORM_HTACCESS_2'			=> ' 文件。',
	'ERR_PERFORM_HTACCESS_3'			=> '如果你想要防止日志文件被浏览器访问到，可以在您的日志目录中创建一个 .htaccess 文件并包含下列内容（仅 apache 服务器）：',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>无法检测到互联网连接。</b>当连接到互联网时，请访问 <a href="http://www.suitecrm.com/">http://www.suitecrm.com</a> 注册。我们很高兴您能告知我们关于您使用 SuiteCRM 的计划及相关情况，以确保我们总能为您的业务提供最适合的产品。',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> '指定的会话目录不存在。',
	'ERR_SESSION_DIRECTORY'				=> '指定的会话目录无法写入。',
	'ERR_SESSION_PATH'					=> '如果需要自定义，请指定会话存储路径。',
	'ERR_SI_NO_CONFIG'					=> '您在文档根目录未引入 config_si.php 文件或者在 config.php 文件中未定义 $sugar_config_si',
	'ERR_SITE_GUID'						=> '如果需要自定义，请指定您的应用 ID。',
	'ERROR_SPRITE_SUPPORT'              => "当前未找到 GD 库，因此无法使用 CSS Sprite 功能。",
	'ERR_UPLOAD_MAX_FILESIZE'			=> '修改 php.ini 配置文件或通过其他途径修改 upload_max_filesize 大于 6M。',
	'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => '最大上传文件大小',
	'ERR_URL_BLANK'						=> 'URL 不能为空。',
	'ERR_UW_NO_UPDATE_RECORD'			=> '未找到安装记录',
	'ERROR_FLAVOR_INCOMPATIBLE'			=> '上传的文件和当前 SuiteCRM 版本不兼容：',
	'ERROR_MANIFEST_TYPE'				=> 'manifest.php 文件必须指定程序包的类型。',
	'ERROR_PACKAGE_TYPE'				=> 'manifest.php 文件指定了无法识别的类型',
	'ERROR_VERSION_INCOMPATIBLE'		=> '上传的文件和当前 SuiteCRM 版本不兼容：',

	'LBL_BACK'							=> '返回',
	'LBL_CANCEL'                        => '取消',
	'LBL_ACCEPT'                        => '接受',
	'LBL_CHECKSYS_CACHE'				=> 'cache 子目录可写',
	'LBL_DROP_DB_CONFIRM'               => '数据库已经存在。<br />您可以点击后退按钮，并选择一个新的数据库名称。<br />您也可以继续点击下一步，但这将删除数据库中所有现有的数据。<strong>这意味着您现有的数据表和数据都将不复存在。</strong>',
	'LBL_CHECKSYS_COMPONENT'			=> '组件',
	'LBL_CHECKSYS_CONFIG'				=> 'config.php 配置文件可写',
	'LBL_CHECKSYS_CURL'					=> 'cURL 库',
	'LBL_CHECKSYS_CUSTOM'				=> 'custom 目录可写',
	'LBL_CHECKSYS_DATA'					=> 'data 子目录可写',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP 模块',
	'LBL_CHECKSYS_FASTCGI'             => 'FastCGI',
	'LBL_CHECKSYS_MBSTRING'				=> 'mbstring 模块',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (No Limit)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (Unlimited)',
	'LBL_CHECKSYS_MEM'					=> 'PHP 内存限制',
	'LBL_CHECKSYS_MODULE'				=> 'modules 子目录及文件可写',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> '不可用',
	'LBL_CHECKSYS_OK'					=> 'OK',
	'LBL_CHECKSYS_PHP_INI'				=> 'php.ini 配置文件路径：',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (ver ',
	'LBL_CHECKSYS_PHPVER'				=> 'PHP 版本',
	'LBL_CHECKSYS_IISVER'               => 'IIS 版本',
	'LBL_CHECKSYS_RECHECK'				=> '重新检查',
	'LBL_CHECKSYS_STATUS'				=> '状态',
	'LBL_CHECKSYS_TITLE'				=> '系统检查',
	'LBL_CHECKSYS_XML'					=> 'XML 解析',
	'LBL_CHECKSYS_ZLIB'					=> 'zlib 库',
	'LBL_CHECKSYS_ZIP'					=> 'zip 库',
	'LBL_CHECKSYS_PCRE'					=> 'pcre 库',
	'LBL_CHECKSYS_FIX_FILES'            => '请修复下列文件或目录：',
	'LBL_CHECKSYS_FIX_MODULE_FILES'     => '请修复下列文件或目录：',
	'LBL_CHECKSYS_UPLOAD'               => 'upload 目录可写',
	'LBL_CLOSE'							=> '关闭',
	'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> '被创建',
	'LBL_CONFIRM_DB_TYPE'				=> '数据库类型',
	'LBL_CONFIRM_NOT'					=> '不',
	'LBL_CONFIRM_TITLE'					=> '确认设置',
	'LBL_CONFIRM_WILL'					=> '将',
	'LBL_DBCONF_DB_DROP'                => '删除数据表',
	'LBL_DBCONF_DB_NAME'				=> '数据库名称',
	'LBL_DBCONF_DB_PASSWORD'			=> '密码',
	'LBL_DBCONF_DB_PASSWORD2'			=> '确认密码',
	'LBL_DBCONF_DB_USER'				=> '数据库用户名',
	'LBL_DBCONF_SUGAR_DB_USER'          => '数据库用户名',
	'LBL_DBCONF_DB_ADMIN_USER'          => '数据库管理员用户名',
	'LBL_DBCONF_DB_ADMIN_PASSWORD'      => '数据库管理员密码',
	'LBL_DBCONF_DEMO_DATA'				=> '使用示例数据填充数据库',
	'LBL_DBCONF_DEMO_DATA_TITLE'        => '示例数据',
	'LBL_DBCONF_HOST_NAME'				=> '主机名',
	'LBL_DBCONF_HOST_INSTANCE'			=> '主机实例',
	'LBL_DBCONFIG_SECURITY'             => '用户可以是数据库管理员也可以是具有对应数据库操作权限的普通数据库用户。为了安全起见，建议指定单独的普通数据库用户来操作 SuiteCRM 使用的数据库。',
	'LBL_DBCONFIG_PROVIDE_DD'           => '指定数据库用户',
	'LBL_DBCONFIG_CREATE_DD'            => '创建自定义用户',
	'LBL_DBCONFIG_SAME_DD'              => '与管理员用户相同',
	'LBL_DBCONF_TITLE'					=> '数据库配置',
	'LBL_DBCONF_TITLE_NAME'             => '数据库名称',
	'LBL_DBCONF_TITLE_USER_INFO'        => '数据库用户信息',
	'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => '密码',
	'LBL_DISABLED_DESCRIPTION_2'		=> '在更改之后，您可以点击下面的  "开始" 按钮进行安装。<i>安装完成后，您应该将 "installer_locked" 的变量设置为 "true"。</i>',
	'LBL_DISABLED_DESCRIPTION'			=> '当前已经运行过一次安装程序。作为安全措施，禁止再次运行安装程序。如果您确定要再次运行安装程序，请转到 config.php 文件，并找到（或添加）一个名为 "installer_locked" 的变量并将其设置为 "false"。该行应如下所示：',
	'LBL_DISABLED_HELP_1'				=> '获取安装帮助，请访问 SuiteCRM',
	'LBL_DISABLED_HELP_LNK'             => 'http://www.suitecrm.com/forum/index',
	'LBL_DISABLED_HELP_2'				=> '支持论坛',
	'LBL_DISABLED_TITLE_2'				=> 'SuiteCRM 安装已禁用',
	'LBL_HELP'							=> '帮助',
	'LBL_INSTALL'                       => '安装',
	'LBL_INSTALL_TYPE_TITLE'            => '安装类型',
	'LBL_INSTALL_TYPE_SUBTITLE'         => '选择安装类型',
	'LBL_INSTALL_TYPE_TYPICAL'          => '<b>典型安装</b>',
	'LBL_INSTALL_TYPE_CUSTOM'           => '<b>自定义安装</b>',
	'LBL_INSTALL_TYPE_MSG2'             => '安装所需设置的选项信息最少，推荐新用户选择。',
	'LBL_INSTALL_TYPE_MSG3'             => '设置其他额外的选项，多数选项可以在安装后的管理员界面进行设置。',
	'LBL_LANG_1'						=> '要在 SuiteCRM 中使用除默认语言（美式英语）之外的其他语言，您可以在此时上传并安装语言包。在安装完成后，您也可以通过 SuiteCRM 系统管理中的 模块加载器 上载并安装语言包。如果您想跳过此步骤，请点击 下一步 。',
	'LBL_LANG_BUTTON_COMMIT'			=> '安装',
	'LBL_LANG_BUTTON_REMOVE'			=> '移除',
	'LBL_LANG_BUTTON_UNINSTALL'			=> '卸载',
	'LBL_LANG_BUTTON_UPLOAD'			=> '上传',
	'LBL_LANG_NO_PACKS'					=> '无',
	'LBL_LANG_PACK_INSTALLED'			=> '已安装',
	'LBL_LANG_PACK_READY'				=> '准备安装',
	'LBL_LANG_SUCCESS'					=> '语言包已上传成功。',
	'LBL_LANG_TITLE'			   		=> '语言包',
	'LBL_LAUNCHING_SILENT_INSTALL'     => '正在安装 SuiteCRM，可能需要几分钟时间。',
	'LBL_LANG_UPLOAD'					=> '上传语言包',
	'LBL_LICENSE_ACCEPTANCE'			=> '接受许可协议',
	'LBL_LICENSE_CHECKING'              => '正在检查系统兼容性',
	'LBL_LICENSE_CHKENV_HEADER'         => '系统环境检查',
	'LBL_LICENSE_CHKDB_HEADER'          => '验证数据库凭据',
	'LBL_LICENSE_CHECK_PASSED'          => '通过系统兼容性检查。',
	'LBL_CREATE_CACHE' => '正在创建缓存...',
	'LBL_LICENSE_REDIRECT'              => '正在重定向到',
	'LBL_LICENSE_I_ACCEPT'				=> '我接受',
	'LBL_LICENSE_PRINTABLE'				=> '查看打印视图',
	'LBL_PRINT_SUMM'                    => '打印摘要',
	'LBL_LICENSE_TITLE_2'				=> 'SuiteCRM 授权',

	'LBL_LOCALE_NAME_FIRST'				=> '大为',
	'LBL_LOCALE_NAME_LAST'				=> '张',
	'LBL_LOCALE_NAME_SALUTATION'		=> '博士',

	'LBL_ML_ACTION'						=> '动作',
	'LBL_ML_DESCRIPTION'				=> '说明',
	'LBL_ML_INSTALLED'					=> '安装日期',
	'LBL_ML_NAME'						=> '名称',
	'LBL_ML_PUBLISHED'					=> '发布日期',
	'LBL_ML_TYPE'						=> '类型',
	'LBL_ML_UNINSTALLABLE'				=> '可卸载',
	'LBL_ML_VERSION'					=> '版本',
	'LBL_MSSQL'							=> 'MSSQL',
	'LBL_MSSQL2'                        => 'MSSQL (FreeTDS)',
	'LBL_MSSQL_SQLSRV'				    => 'MSSQL(微软 SQL 服务器 PHP 驱动)',
	'LBL_MYSQL'							=> 'MySQL',
	'LBL_MYSQLI'						=> 'MySQL (mysqli 扩展)',
	'LBL_NEXT'							=> '下一步',
	'LBL_NO'							=> '否',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> '设置管理员密码',
	'LBL_PERFORM_CONFIG_PHP'			=> '正在创建 SuiteCRM 配置文件',
	'LBL_PERFORM_CREATE_DB_1'			=> '正在创建数据库 ',
	'LBL_PERFORM_CREATE_DB_2'			=> ' 在 ',
	'LBL_PERFORM_CREATE_DB_USER'		=> '正在创建数据库用户和密码',
	'LBL_PERFORM_CREATE_DEFAULT'		=> '正在创建默认 SuiteCRM 数据',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> '正在创建默认任务计划',
	'LBL_PERFORM_DEFAULT_USERS'			=> '正在创建默认用户',
	'LBL_PERFORM_DEMO_DATA'				=> '用示例数据填充数据库 (这可能需要一点时间)...',
	'LBL_PERFORM_DONE'					=> '完成<br />',
	'LBL_PERFORM_FINISH'				=> '完成',
	'LBL_PERFORM_OUTRO_1'				=> '安装 SuiteCRM ',
	'LBL_PERFORM_OUTRO_2'				=> ' 已完成。',
	'LBL_PERFORM_OUTRO_3'				=> '总时间：',
	'LBL_PERFORM_OUTRO_4'				=> ' 秒。',
	'LBL_PERFORM_OUTRO_5'				=> '内存使用：',
	'LBL_PERFORM_OUTRO_6'				=> ' 字节。',
	'LBL_PERFORM_SUCCESS'				=> '成功！',
	'LBL_PERFORM_TABLES'				=> '正在创建 SuiteCRM 应用表、审计表以及关联关系元数据...',
	'LBL_PERFORM_TITLE'					=> '执行安装',
	'LBL_PRINT'							=> '打印',
	'LBL_REG_CONF_1'					=> '在 SuiteCRM 注册可能会花费一点时间，我们很高兴您能告知我们关于您使用 SuiteCRM 的计划及相关情况，以确保我们总能为您的业务提供最适合的产品。',
	'LBL_REG_CONF_3'					=> '感谢您的注册。点击完成按钮登录到 SuiteCRM。',
	'LBL_REG_TITLE'						=> '注册',
	'LBL_REQUIRED'						=> '* 必填',

	'LBL_SITECFG_ADMIN_Name'            => '用户名',
	'LBL_SITECFG_ADMIN_PASS_2'			=> '确认密码',
	'LBL_SITECFG_ADMIN_PASS'			=> '密码',
	'LBL_SITECFG_APP_ID'				=> '应用 ID',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> '自定义应用 ID 来覆盖自动生成的应用 ID。应用 ID 确保 SuiteCRM 实例会话不会被其他 SuiteCRM 实例使用。如果您有一个 SuiteCRM 安装群集，它们都必须共享相同的应用 ID。',
	'LBL_SITECFG_CUSTOM_ID'				=> '自定义应用 ID',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> '自定义 SuiteCRM 日志存储路径。通过浏览器访问时，总是会通过 .htaccess 文件对日志进行重定向限制。',
	'LBL_SITECFG_CUSTOM_LOG'			=> '自定义日志路径',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> '自定义会话路径，在共享的服务器上提供一个安全的文件夹用于存储 SuiteCRM 会话信息，防止漏洞攻击。',
	'LBL_SITECFG_CUSTOM_SESSION'		=> '自定义会话路径',
	'LBL_SITECFG_FIX_ERRORS'			=> '在继续执行前请修复以下错误：',
	'LBL_SITECFG_LOG_DIR'				=> '日志目录',
	'LBL_SITECFG_SESSION_PATH'			=> '会话目录<br />（必须可写）',
	'LBL_SITECFG_SITE_SECURITY'			=> '站点安全',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> '启用此功能后，您的系统会定期发送有关安装匿名统计到 SuiteCRM Inc.，将帮助我们了解使用模式和完善产品。当新版本或更新可用时，管理员将收到更新通知。',
	'LBL_SITECFG_SUGAR_UP'				=> '自动检查更新',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'SuiteCRM 更新配置',
	'LBL_SITECFG_TITLE'					=> '站点配置',
	'LBL_SITECFG_TITLE2'                => '设置管理员用户',
	'LBL_SITECFG_SECURITY_TITLE'        => '站点安全',
	'LBL_SITECFG_URL'					=> 'SuiteCRM URL',
	'LBL_SITECFG_ANONSTATS'             => '发送匿名使用统计',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => '选择发送匿名使用统计，您的系统会定期发送有关安装匿名统计到 SuiteCRM Inc.，将帮助我们了解使用模式和完善产品。',
	'LBL_SITECFG_URL_MSG'               => '输入安装后将用于访问 SuiteCRM 实例的 URL，例如：http://crm.domain.name，http://localhost/crm，http://127.0.0.1/crm。',
	'LBL_SITECFG_SYS_NAME_MSG'          => '设置系统名称。当用户访问 SuiteCRM 时，将在浏览器标题栏显示系统名称。',
	'LBL_SITECFG_PASSWORD_MSG'          => '请设置此管理员用户名(默认为 admin) 及密码，可以在登录后修改管理员密码。安装完成后，您将需要使用 SuiteCRM 管理员用户 登录到 SuiteCRM。',
	'LBL_SITECFG_COLLATION_MSG'         => '请选择您系统的数据库排序规则。如果您不需要特殊设置，请使用默认值。中文推荐使用 utf8_general_ci 。',
	'LBL_SPRITE_SUPPORT'                => 'Sprite 支持',
	'LBL_SYSTEM_CREDS'                  => '系统凭据',
	'LBL_SYSTEM_ENV'                    => '系统环境',
	'LBL_SHOW_PASS'                     => '显示密码',
	'LBL_HIDE_PASS'                     => '隐藏密码',
	'LBL_HIDDEN'                        => '<i>(已隐藏)</i>',
	'LBL_STEP1' => '步骤 1：预安装要求',
	'LBL_STEP2' => '步骤 2：配置',
	'LBL_STEP'							=> '步骤',
	'LBL_TITLE_WELCOME'					=> '欢迎使用 SuiteCRM ',
	//welcome page variables
	'LBL_TITLE_ARE_YOU_READY'            => '是否已准备好安装？',
	'REQUIRED_SYS_COMP' => '所需的系统组件',
	'REQUIRED_SYS_COMP_MSG' =>
		'在开始之前，请确保您拥有以下受支持的系统组件版本：<br />
                      <ul>
                      <li> 数据库 (例如：MariaDB，MySQL 或者 SQL Server)</li>
                      <li> Web 服务器 (Apache，nginx 或者 IIS)</li>
                      </ul>
                      当前 SuiteCRM 版本的系统组件兼容性列表，请参阅版本说明<br />',
	'REQUIRED_SYS_CHK' => '初始系统检查',
	'REQUIRED_SYS_CHK_MSG' =>
		'在进行安装之前，将进行系统检查确保系统正确配置并且已安装所有必要的组件来完成安装。<br><br>
                      系统将检查以下所有选项：<br>
                      <ul>
                      <li><b>PHP 版本</b> &#8211; 必须与此应用兼容</li>
                      <li><b>会话变量</b> &#8211; 必须正确配置并工作</li>
                      <li><b>MB Strings</b> &#8211; 必须安装并且在 php.ini 中启用</li>
                      <li><b>数据库</b> &#8211; 必须正确配置并工作，支持 MariaDB, MySQL 或者 SQL Server</li>
                      <li><b>Config.php</b> &#8211; 必须存在并且具有适当的写权限</li>
                      <li>以下 SuiteCRM 文件或目录必须可写:<ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
                                  如果检查失败将显示未通过系统检查的错误信息并且无法执行安装。
                                  在进行必要的系统配置修改之后，您可以重新进行执行检查并进行安装。<br>',





	'REQUIRED_INSTALLTYPE' => '典型安装或自定义安装',
	'REQUIRED_INSTALLTYPE_MSG' =>
		'执行系统检查后，您可以选择典型安装或自定义安装。
<br /><br />
无论进行 <b>典型安装</b> 或是 <b>自定义安装</b>，您需要知道以下事项︰ <br />
	<ul>
		<li>
			<b>数据库类型</b>，用于存储 SuiteCRM 数据的数据库具有不同的类型。
			<ul>
				<li>兼容的数据库类型有：MariaDB，MySQL 或 SQL Server。</li>
			</ul><br />
		</li>
		<li>
			<b>数据库服务器地址</b>，运行数据库的计算机（主机）的域名或 IP 地址。
			<ul>
				<li>如果数据库运行在本机 web 服务器上，可能是 <i>localhost</i>。</li>
			</ul><br />
		</li>
		<li>
			<b>SuiteCRM 数据库的名称</b>，用于存储 SuiteCRM 数据。
			<ul>
				<li>如果您指定一个现有的数据库，在安装过程中将 <b>删除</b> 现有数据库中的所有数据表。</li>
				<li>如果您还没有数据库，在安装过程中将 <b>创建</b> 指定名称的数据库。</li>
			</ul><br />
		</li>
		<li>
			<b>数据库管理员的用户名和密码</b>
			<ul>
				<li>数据库管理员能够管理整个数据库服务器，能够创建管理：数据库、数据库用户、分配数据库操作权限等。</li>
				<li>如果数据库不位于您的本地计算机或者您不是数据库管理员，您可能需要与数据库管理员联系获得此信息。</li>
			</ul><br />
		</li>
		<li>
			<b>SuiteCRM 数据库的用户名和密码</b>
			<ul>
				<li>数据库的用户可以是数据库管理员也可以是具有对应数据库操作权限的普通数据库用户。</li>
				<li>如果您想要使用普通数据库用户，您需要提供用户名和密码，将在安装过程中创建此用户。</li>
			</ul><br />
		</li>
	</ul>
<br /><br />
	<p>对于 <b>自定义</b> 安装，您可能还需要知道以下事项：</p><br />
	<ul>
		<li><b>SuiteCRM URL</b> 输入安装后将用于访问 SuiteCRM 实例的 URL。<br /></li>
		<li>[可选] <b>自定义会话路径</b> 在共享的服务器上提供一个安全的文件夹用于存储 SuiteCRM 会话信息，防止漏洞攻击。<br /></li>
		<li>[可选] <b>自定义日志路径</b> 覆盖默认的 SuiteCRM 日志存储路径。<br /></li> 
		<li>[可选] <b>自定义应用 ID </b> 确保 SuiteCRM 实例会话不会被其他 SuiteCRM 实例使用。<br /></li> 
		<li><b>字符集</b> 根据您的区域，设置字符集。<br /></li>
	</ul>
更多信息，请参阅安装指南。',
	'LBL_WELCOME_PLEASE_READ_BELOW' => '在安装前请阅读以下重要信息，这些信息将帮助您确定是否已准备好安装。',

	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '选择您的语言',
	'LBL_WELCOME_SETUP_WIZARD'			=> '安装向导',
	'LBL_WIZARD_TITLE'					=> 'SuiteCRM 安装向导︰',
	'LBL_YES'							=> '是',

	'LBL_PATCHES_TITLE'     => '安装更新',
	'LBL_MODULE_TITLE'      => '安装语言包',
	'LBL_PATCH_1'           => '如果您想要跳过此步骤，请点击 下一步。',
	'LBL_PATCH_TITLE'       => '更新补丁',
	'LBL_PATCH_READY'       => '准备安装',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "当前的 PHP 未正确配置会话信息。SuiteCRM 依靠 PHP 会话来存储客户端连接到此服务器的重要信息。<br /><br />常见的错误配置是 <b>'session.save_path‘</b> 参数未设置有效的目录。<br /><br />可通过修改 php.ini 配置文件或其他方式进行配置，具体请参阅<a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP 官方手册</a>。",
	'LBL_SESSION_ERR_TITLE'				=> 'PHP session 配置错误',
	'LBL_SYSTEM_NAME'=>'系统名称',
	'LBL_COLLATION' => '排序规则',
	'LBL_REQUIRED_SYSTEM_NAME'=>'设置 SuiteCRM 系统的名称。',
	'LBL_PATCH_UPLOAD' => '从本地系统上传更新补丁',
	'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHP 版本不兼容。',
	'LBL_MINIMUM_PHP_VERSION' => '最低PHP版本要求 5.1.0，推荐 PHP 5.5 及以上版本。',
	'LBL_YOUR_PHP_VERSION' => '当前 PHP 版本为 ',
	'LBL_RECOMMENDED_PHP_VERSION' =>'，推荐 PHP 5.5 及以上版本)',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP 向后兼容模式已打开。请将 zend.ze1_compatibility_mode 设置成 off 继续。',
	'LBL_STREAM' => 'PHP 允许使用 stream',

	'advanced_password_new_account_email' => array(
		'subject' => '客户管理系统用户信息',
		'type' => '系统',
		'description' => '此模板用于向新用户发送用户名及密码。',
		'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>欢迎使用客户管理系统，以下是您的用户名和临时密码：</p><p>用户名 : $contact_user_user_name </p><p>密码 : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>登录之后，请及时修改您的密码。</p>   </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
		'txt_body' =>
			'
欢迎使用客户管理系统，以下是您的用户名和临时密码：
用户名： $contact_user_user_name
密码： $contact_user_user_hash

$config_site_url

登录之后，请及时修改您的密码。',
		'name' => '欢迎使用客户管理系统',
	),
	'advanced_password_forgot_password_email' => array(
		'subject' => '客户管理系统用户密码重置',
		'type' => '系统',
        'description' => "此模板用于向用户发送密码重置链接。",
		'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>您选择重置客户管理系统的登陆密码。</p><p>You recently requested on $contact_user_pwd_last_changed to be able to reset your account password. </p><p>请点击下面链接来重新设置您的密码。</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
		'txt_body' =>
			'您选择重置客户管理系统的登陆密码。

You recently requested on $contact_user_pwd_last_changed to be able to reset your account password.

请点击下面链接来重新设置您的密码。

$contact_user_link_guid',
		'name' => '密码重置',
	),

	// SMTP settings

	'LBL_WIZARD_SMTP_DESC' => '设置系统邮件发送账户，用于发送通知提醒、新用户密码等。',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => '邮件提供商',

	'LBL_SMTPTYPE_GMAIL'                    => 'Gmail',
	'LBL_SMTPTYPE_YAHOO'                    => 'Yahoo! Mail',
	'LBL_SMTPTYPE_EXCHANGE'                 => 'Microsoft Exchange',
	'LBL_SMTPTYPE_OTHER'                  => '其他',
	'LBL_MAIL_SMTP_SETTINGS'           => 'SMTP 设置',
	'LBL_MAIL_SMTPSERVER'				=> '服务器地址',
	'LBL_MAIL_SMTPPORT'					=> '端口',
	'LBL_MAIL_SMTPAUTH_REQ'				=> '需要身份验证',
	'LBL_EMAIL_SMTP_SSL_OR_TLS'         => '使用 SSL/TLS',
	'LBL_GMAIL_SMTPUSER'					=> '用户名',
	'LBL_GMAIL_SMTPPASS'					=> '密码',
	'LBL_ALLOW_DEFAULT_SELECTION'           => '允许普通用户使用此账户对外发送邮件',
	'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => '此邮件账户是用于发送通知、工作流提醒等。勾选此项，允许所有用户通过此邮件账户对外发送电子邮件。不勾选此项，用户需要配置自己的邮件账户来发送这些信息。',

	'LBL_YAHOOMAIL_SMTPPASS'					=> '密码',
	'LBL_YAHOOMAIL_SMTPUSER'					=> '用户名',

	'LBL_EXCHANGE_SMTPPASS'					=> '密码',
	'LBL_EXCHANGE_SMTPUSER'					=> '用户名',
	'LBL_EXCHANGE_SMTPPORT'					=> '端口',
	'LBL_EXCHANGE_SMTPSERVER'				=> '服务器地址',


	'LBL_MAIL_SMTPUSER'					=> '用户名',
	'LBL_MAIL_SMTPPASS'					=> '密码',

	// Branding

	'LBL_WIZARD_SYSTEM_TITLE' => '系统标题',
	'LBL_WIZARD_SYSTEM_DESC' => '设置系统名称、Logo 等信息。',
	'SYSTEM_NAME_WIZARD'=>'系统名称',
	'SYSTEM_NAME_HELP'=>'设置在浏览器标题栏显示的名称。',
	'NEW_LOGO'=>'上传新 Logo',
	'NEW_LOGO_HELP'=>'图片文件格式可以是 .jpg 或 .png。最大高度 170px，最大宽度 450px。任何上传的图片大于最大尺寸将自动缩放。',
	'COMPANY_LOGO_UPLOAD_BTN' => '上传',
	'CURRENT_LOGO'=>'当前 Logo',
	'CURRENT_LOGO_HELP'=>'更换系统 Logo 图片。',


	//Scenario selection of modules
	'LBL_WIZARD_SCENARIO_TITLE' => '场景选择',
	'LBL_WIZARD_SCENARIO_DESC' => '根据您的需求定制显示的模块，您也可以在安装后进行设置。',
	'LBL_WIZARD_SCENARIO_EMPTY'=> 'config.php 当前未配置任何场景',



	// System Local Settings


	'LBL_LOCALE_TITLE' => '区域设置',
	'LBL_WIZARD_LOCALE_DESC' => '指定您的时区、日期、 货币等显示格式。',
	'LBL_DATE_FORMAT' => '日期格式',
	'LBL_TIME_FORMAT' => '时间格式',
	'LBL_TIMEZONE' => '时区',
	'LBL_LANGUAGE'=>'语言',
	'LBL_CURRENCY'=>'货币',
	'LBL_CURRENCY_SYMBOL'=>'货币符号',
	'LBL_CURRENCY_ISO4217' => 'ISO 4217 货币代码',
	'LBL_NUMBER_GROUPING_SEP' => '千分符',
	'LBL_DECIMAL_SEP' => '小数点符号',
	'LBL_NAME_FORMAT' => '名称显示格式',
	'UPLOAD_LOGO' => '正在上传 Logo...',
	'ERR_UPLOAD_FILETYPE' => '文件类型不允许，请上传 jpeg 或 png 格式的文件。',
	'ERR_LANG_UPLOAD_UNKNOWN' => '文件上传时出现未知错误。',
	'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => '上传文件大小超出了 php.ini 文件中变量 upload_max_filesize 指定的值。',
	'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => '上传文件大小超出了 HTML 表单变量 MAX_FILE_SIZE 指定的值。',
	'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => '文件只有部分被上传。',
	'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => '没有文件被上传。',
	'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => '缺少临时文件夹。',
	'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => '未能将文件写入到磁盘。',
	'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => '一个 PHP 扩展阻止了文件上传，PHP 无法确定哪个扩展阻止了文件上传。',

	'LBL_INSTALL_PROCESS' => '正在安装...',

	'LBL_EMAIL_ADDRESS' => 'Email 地址',
	'ERR_ADMIN_EMAIL' => '管理员 Email 地址不正确。',
	'ERR_SITE_URL' => '必须填写 URL 地址。',

	'STAT_CONFIGURATION' => '正在配置关联关系...',
	'STAT_CREATE_DB' => '正在创建数据库...',

	'STAT_CREATE_DEFAULT_SETTINGS' => '正在创建默认设置...',
	'STAT_INSTALL_FINISH' => '正在完成安装...',
	'STAT_INSTALL_FINISH_LOGIN' => '安装已完成，<a href="%s"> 请登录 </a>',
	'LBL_LICENCE_TOOLTIP' => '请先接受许可协议',

	'LBL_MORE_OPTIONS_TITLE' => '更多选项',
	'LBL_START' => '开始',
	'LBL_DB_CONN_ERR' => '数据库连接错误',
	'LBL_OLD_PHP' => '检测到旧的 PHP 版本！',
	'LBL_OLD_PHP_MSG' => '安装 SuiteCRM 推荐的是 PHP %s 版本。<br />虽然所需的最低是 PHP %s 版本，但并不推荐使用，因为在新发布的版本中包括了大量的 bug 修复以及安全修复。<br />您当前使用的是已结束支持（EOL）的 PHP %s 版本，关于 EOL 请访问：<a href="http://php.net/eol.php">http://php.net/eol.php</a>。<br />请考虑更新您的 PHP 版本。',
	'LBL_OLD_PHP_OK' => '我了解可能存在的风险并希望继续。',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => '用户名',
    'LBL_DBCONFIG_MSG3_LABEL' => '数据库名称',
    'LBL_DBCONFIG_MSG3' => 'SuiteCRM 实例使用的数据库名称',
    'LBL_DBCONFIG_MSG2_LABEL' => '主机名',
    'LBL_DBCONFIG_MSG2' => '数据库所在的网络服务器或计算机名称(主机)，例如：localhost 或 example.domain.name',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '',
    'LBL_DBCONFIG_B_MSG1' => '数据库管理员的用户名和密码，数据库管理员能够管理整个数据库服务器，能够创建管理数据库、数据库用户、分配数据库操作权限等。'
);

?>
