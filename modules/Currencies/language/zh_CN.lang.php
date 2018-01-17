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
  'LBL_MODULE_NAME' => '货币',
  'LBL_LIST_FORM_TITLE' => '货币列表',
  'LBL_CURRENCY' => '货币',
  'LBL_ADD' => '添加',
  'LBL_MERGE' => '合并',
  'LBL_MERGE_TXT' => '请选择您想要映射到所选货币的货币。这将删除所有带复选标记的货币并重新分配到所选币种与他们有联系的任何值。',
  'LBL_US_DOLLAR' => '美元',
  'LBL_DELETE' => '删除',
  'LBL_LIST_SYMBOL' => '货币符号',
  'LBL_LIST_NAME' => '名称',
  'LBL_LIST_ISO4217' => 'ISO 4217 货币代码',
  'LBL_LIST_ISO4217_HELP' => '输入由三个大写字母组成的的 ISO 4217 货币代码，例如：人民币为 CNY，美元为 USD。',
  'LBL_UPDATE' => '更新',
  'LBL_LIST_RATE' => '汇率',
  'LBL_LIST_RATE_HELP' => '例如人民币的汇率为6.5，那么就意味着1美元=6.5元人民币。',
  'LBL_LIST_STATUS' => '状态',
  'LNK_NEW_CONTACT' => '创建联系人',
  'LNK_NEW_ACCOUNT' => '创建客户',
  'LNK_NEW_OPPORTUNITY' => '创建商业机会',
  'LNK_NEW_CASE' => '创建客户反馈',
  'LNK_NEW_NOTE' => '创建备忘录',
  'LNK_NEW_CALL' => '创建电话',
  'LNK_NEW_EMAIL' => '创建邮件',
  'LNK_NEW_MEETING' => '创建会议',
  'LNK_NEW_TASK' => '创建任务',
  'NTC_DELETE_CONFIRMATION' => '您确定要删除此项记录？在访问时任何当前记录中用到的该货币将会转换为系统默认货币。建议将其设置为 "停用"。',
  'LBL_BELOW_MIN' => '汇率必须大于0',
  'currency_status_dom' => 
  array (
    'Active' => '启用',
    'Inactive' => '停用',
  ),
  'LBL_CREATED_BY' => '创建人',
	'LBL_EDIT_LAYOUT' => '编辑布局' /*for 508 compliance fix*/,
);


?>