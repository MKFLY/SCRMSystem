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

    'LBL_ADMINISTRATION_MAIN' => '连接器设置',
    'LBL_AVAILABLE' => '可用的',
    'LBL_BACK' => '返回',
    'LBL_CONFIRM_CONTINUE_SAVE' => '一些必填字段为空，是否继续保存更改？',
    'LBL_CONNECTOR_FIELDS' => '连接器字段',
    'LBL_DATA' => '数据',
    'LBL_DEFAULT' => '默认',
    'LBL_DISABLED' => '已禁用',
    'LBL_ENABLED' => '已启用',
    'LBL_EXTERNAL' => '允许用户创建外部客户到此连接器。',
    'LBL_EXTERNAL_SET_PROPERTIES' => '如需使用此连接器，请先在“连接器属性设置”页面中设置。',
    'LBL_MERGE' => '合并',
    'LBL_MODIFY_DISPLAY_TITLE' => '启用连接器',
    'LBL_MODIFY_DISPLAY_DESC' => '选择哪些模块启用连接器。',
    'LBL_MODULE_FIELDS' => '模块字段',
    'LBL_MODIFY_MAPPING_TITLE' => '连接器字段映射',
    'LBL_MODIFY_MAPPING_DESC' => '连接器字段映射到模块字段，以确定哪些连接器数据可以被查看并能合并到模块记录。',
    'LBL_MODIFY_PROPERTIES_TITLE' => '设置连接器属性',
    'LBL_MODIFY_PROPERTIES_DESC' => '设置每个连接器属性，包括 URL 和 API key。',
    'LBL_MODIFY_SEARCH_TITLE' => '管理连接器搜索',
    'LBL_MODIFY_SEARCH' => '搜索',
    'LBL_MODIFY_SEARCH_DESC' => '选择每个模块要用于搜索数据的连接器字段。',
    'LBL_MODULE_NAME' => '连接器',
    'LBL_NO_PROPERTIES' => '有此连接器没有可配置的属性。',
    'LBL_SAVE' => '保存',
    'LBL_SUMMARY' => '摘要',
    'LBL_STEP1' => '搜索并查看数据',
    'LBL_STEP2' => '合并记录',
    'LBL_TEST_SOURCE' => '测试连接器',
    'LBL_TEST_SOURCE_FAILED' => '测试失败',
    'LBL_TEST_SOURCE_SUCCESS' => '测试成功',
    'LBL_TITLE' => '数据合并',

    'ERROR_NO_ADDITIONAL_DETAIL' => '错误：没有找到此记录的其他详细信息。',
    'ERROR_NO_SEARCHDEFS_DEFINED' => '此连接器未启用任何模块。在 "启用连接器" 页面中为此连接器选择一个模块。',
    'ERROR_NO_SEARCHDEFS_MAPPED' => '错误：所有启用的连接器都没有定义搜索字段。',
    'ERROR_NO_SEARCHDEFS_MAPPING' => '错误：没有为模块和连接器定义搜索字段，请联系系统管理员。',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => '错误：结果中没有被映射可以用于显示的模块字段。请联系系统管理员。',
    'LBL_INFO_INLINE' => '信息' /*for 508 compliance fix*/,
    'LBL_CLOSE' => '关闭' /*for 508 compliance fix*/,

);

?>