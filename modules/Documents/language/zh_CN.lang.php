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
	//module
	'LBL_MODULE_NAME' => '文档',
	'LBL_MODULE_TITLE' => '文档',
	'LNK_NEW_DOCUMENT' => '创建文档',
	'LNK_DOCUMENT_LIST'=> '查看文档',
	'LBL_DOC_REV_HEADER' => '文档版本',
	'LBL_SEARCH_FORM_TITLE'=> '搜索',
	//vardef labels
	'LBL_NAME' => '名称',
	'LBL_DESCRIPTION' => '说明',
	'LBL_CATEGORY' => '类别',
	'LBL_SUBCATEGORY' => '子类别',
	'LBL_STATUS' => '状态',
	'LBL_CREATED_BY'=> '创建人',
	'LBL_DATE_ENTERED'=> '创建日期',
	'LBL_DATE_MODIFIED'=> '修改日期',
	'LBL_DELETED' => '已删除',
	'LBL_MODIFIED'=> '修改人',
	'LBL_MODIFIED_USER' => '修改人',
	'LBL_CREATED'=> '创建人',
	'LBL_REVISIONS'=>'版本',
	'LBL_RELATED_DOCUMENT_ID'=>'关联的文档ID',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'关联的文档版本ID',
	'LBL_IS_TEMPLATE'=>'模板',
	'LBL_TEMPLATE_TYPE'=>'文档类型',
	'LBL_ASSIGNED_TO_NAME'=>'负责人',
	'LBL_REVISION_NAME' => '版本号',
	'LBL_MIME' => 'Mime 类型',
	'LBL_REVISION' => '版本',
	'LBL_DOCUMENT' => '关联的文档',
	'LBL_LATEST_REVISION' => '最新版本',
	'LBL_CHANGE_LOG'=> '更改日志',
	'LBL_ACTIVE_DATE'=> '发布日期',
	'LBL_EXPIRATION_DATE' => '到期日期',
	'LBL_FILE_EXTENSION'  => '文件扩展名',
	'LBL_LAST_REV_MIME_TYPE' => '最新版本的 Mime 类型',
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'未指定',
    'LBL_HOMEPAGE_TITLE' => '文档',
	//quick search
	'LBL_NEW_FORM_TITLE' => '新建',
	//document edit and detail view
	'LBL_DOC_NAME' => '文档名称',
	'LBL_FILENAME' => '文件名',
	'LBL_LIST_FILENAME' => '文件名',
	'LBL_DOC_VERSION' => '版本',
	'LBL_FILE_UPLOAD' => '文件',

	'LBL_CATEGORY_VALUE' => '类别',
	'LBL_LIST_CATEGORY' => '类别',
	'LBL_SUBCATEGORY_VALUE'=> '子类别',
	'LBL_DOC_STATUS'=> '状态',
	'LBL_LAST_REV_CREATOR' => '版本创建人',
	'LBL_LASTEST_REVISION_NAME' => '最新版本号',
	'LBL_SELECTED_REVISION_NAME' => '选择的版本号',
	'LBL_CONTRACT_STATUS' => '合同状态',
	'LBL_CONTRACT_NAME' => '合同名称',
	'LBL_DET_RELATED_DOCUMENT'=>'关联的文档',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"关联的文档版本",
	'LBL_DET_IS_TEMPLATE'=>'模板',
	'LBL_DET_TEMPLATE_TYPE'=>'文档类型',
	'LBL_DOC_DESCRIPTION'=>'说明',
	'LBL_DOC_ACTIVE_DATE'=> '发布日期',
	'LBL_DOC_EXP_DATE'=> '到期日期',

	//document list view.
	'LBL_LIST_FORM_TITLE' => '文档列表',
	'LBL_LIST_DOCUMENT' => '文档',
	'LBL_LIST_SUBCATEGORY' => '子类别',
	'LBL_LIST_REVISION' => '版本',
	'LBL_LIST_LAST_REV_CREATOR' => '版本创建人',
	'LBL_LIST_LAST_REV_DATE' => '改版日期',
	'LBL_LIST_VIEW_DOCUMENT'=>'查看',
	'LBL_LIST_ACTIVE_DATE' => '发布日期',
	'LBL_LIST_EXP_DATE' => '到期日期',
	'LBL_LIST_STATUS'=>'状态',
	'LBL_LINKED_ID' => '链接ID',
	'LBL_SELECTED_REVISION_ID' => '选择的版本ID',
	'LBL_LATEST_REVISION_ID' => '最新版本ID',
	'LBL_SELECTED_REVISION_FILENAME' => '选择的版本文件名',
	'LBL_FILE_URL' => '文件 URL',

	//document search form.
	'LBL_SF_CATEGORY' => '类别',
	'LBL_SF_SUBCATEGORY'=> '子类别',

	'DEF_CREATE_LOG' => '文档已创建',

	//error messages
	'ERR_DOC_NAME'=>'文档名称',
	'ERR_DOC_ACTIVE_DATE'=>'发布日期',
	'ERR_FILENAME'=> '文件名',
	'ERR_DOC_VERSION'=> '版本',
	'ERR_DELETE_CONFIRM'=> '您确定要删除？',
	'ERR_DELETE_LATEST_VERSION'=> '您不能删除文档的最新版本。',
	'LNK_NEW_MAIL_MERGE' => '邮件合并',
	'ERR_MISSING_FILE' => '可能是由于上传时出错，本文档缺少文件。 请重试上传文件或联系管理员。',

	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'文档名称',
	'LBL_LIST_IS_TEMPLATE'=>'模板',
	'LBL_LIST_TEMPLATE_TYPE'=>'文档类型',
	'LBL_LAST_REV_CREATE_DATE'=>'最新版本创建日期',
    'LBL_CONTRACTS' => '合同',
    'LBL_CREATED_USER' => '创建人',
    'LBL_DOCUMENT_INFORMATION' => '文档信息', //Can be translated in all caps. This string will be used by SuiteP template menu actions
	'LBL_DOC_ID' => '文档源ID',
	'LBL_DOC_TYPE' => '类型',
    'LBL_DOC_TYPE_POPUP' => '选择此文档的来源。',
	'LBL_DOC_URL' => '文档源 URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => '文件名',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => '这里仅显示最近修改的20个文件，请使用搜索查找其他文件。',
    'LBL_LIST_EXT_DOCUMENT_NAME' => '文件名',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => '用户试图访问一个无效的外部 API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => '外部 API ({0}) 登录验证失败',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '客户',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '联系人',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商业机会',
    'LBL_CASES_SUBPANEL_TITLE' => '客户反馈',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',

	'LBL_AOS_CONTRACTS' => '合同',
);


?>
