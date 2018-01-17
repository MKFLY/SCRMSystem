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
    'LBL_EDIT_LAYOUT' => '编辑布局',
    'LBL_EDIT_FIELDS' => '编辑字段',
    'LBL_SELECT_FILE' => '选择文件',
    'LBL_MODULE_TITLE' => '工作室',
    'LBL_TOOLBOX' => '工具箱',
    'LBL_SUGAR_FIELDS_STAGE' => 'SuiteCRM 字段 (单击要添加的项到暂存区域)',
    'LBL_VIEW_SUGAR_FIELDS' => '查看 SuiteCRM 字段',
    'LBL_FAILED_TO_SAVE' => '保存失败',
    'LBL_CONFIRM_UNSAVE' => '将不会保存任何更改，您确定要继续？',
    'LBL_PUBLISHING' => '正在发布...',
    'LBL_PUBLISHED' => '已发布',
    'LBL_FAILED_PUBLISHED' => '发布失败',
    'LBL_DROP_HERE' => '[拖放到此处]',

//CUSTOM FIELDS
    'LBL_NAME' => '名称',
    'LBL_LABEL' => '标签',
    'LBL_MASS_UPDATE' => '批量更新',
    'LBL_DEFAULT_VALUE' => '默认值',
    'LBL_REQUIRED' => '必填',
    'LBL_DATA_TYPE' => '类型',


    'LBL_HISTORY' => '历史记录',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>欢迎来到工作室！</h2><br />请从下面的选项中选择。',
    'LBL_SW_EDIT_MODULE' => '编辑模块',
    'LBL_SW_EDIT_DROPDOWNS' => '编辑下拉列表',
    'LBL_SW_EDIT_TABS' => '编辑标签',
    'LBL_SW_RENAME_TABS' => '重命名标签',
    'LBL_SW_EDIT_GROUPTABS' => '编辑组标签',
    'LBL_SW_EDIT_PORTAL' => '编辑门户',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => '修复自定义字段',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => '迁移自定义字段',

//Manager Backups History
    'LBL_MB_DELETE' => '删除',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => '创建下拉列表',
    'LBL_DROPDOWN_NAME' => '下拉列表名称',
    'LBL_DROPDOWN_LANGUAGE' => '语言下拉列表',
    'LBL_TABGROUP_LANGUAGE' => '语言',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => '显示数值',
    'LBL_DD_DATABASEVALUE' => '数据库数值',
    'LBL_DD_ALL' => '全部',

//BUTTONS
    'LBL_BTN_SAVE' => '保存',
    'LBL_BTN_CANCEL' => '取消',
    'LBL_BTN_SAVEPUBLISH' => '保存并部署',
    'LBL_BTN_HISTORY' => '历史记录',
    'LBL_BTN_ADDROWS' => '添加行',
    'LBL_BTN_UNDO' => '撤销',
    'LBL_BTN_REDO' => '重做',
    'LBL_BTN_ADDCUSTOMFIELD' => '添加自定义字段',
    'LBL_BTN_TABINDEX' => '编辑标签顺序',

//TABS
    'LBL_MODULES' => '模块',
    'LBL_MODULE_NAME' => '系统管理',
    'LBL_CONFIGURE_GROUP_TABS' => '配置模块组',
    'LBL_GROUP_TAB_WELCOME' => '拖放模块添加到模块组中，空的模块组将不会显示。',
    'LBL_RENAME_TAB_WELCOME' => '点击下表中的标签进行重命名。',
    'LBL_DELETE_MODULE' => '删除模块',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => '为其他语言选项设置组标签的标题。选择一个语言选项，然后编辑标题并点击<b>保存并部署</b>。',
    'LBL_ADD_GROUP' => '添加组',
    'LBL_NEW_GROUP' => '新建组',
    'LBL_RENAME_TABS' => '重命标签',
    'LBL_TAB_SUBTABS' => '子标签',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "错误：无效的键值 [']",

//SUGAR PORTAL
    'LBL_SAVE' => '保存' /*for 508 compliance fix*/,
    'LBL_UNDO' => '撤销' /*for 508 compliance fix*/,
    'LBL_REDO' => '重做' /*for 508 compliance fix*/,
    'LBL_INLINE' => '行内' /*for 508 compliance fix*/,
    'LBL_DELETE' => '删除' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => '添加字段' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => '最大化' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => '最小化' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => '发布' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => '添加行' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => '添加字段' /*for 508 compliance fix*/,
    'LBL_EDIT' => '编辑' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => '选择要编辑的语言。',
    'LBL_SINGULAR' => '单数标签',
    'LBL_PLURAL' => '复数标签',
    'LBL_RENAME_MOD_SAVE_HELP' => '点击<b>保存</b>来保存所有更改。'

);
?>
