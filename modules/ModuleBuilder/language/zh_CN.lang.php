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
    'LBL_LOADING' => '正在加载' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => '隐藏选项' /*for 508 compliance fix*/,
    'LBL_DELETE' => '删除' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => '设置包的 <b>名称</b>。<br /><br />名称以字母开头且不包含空格（例如：HR_Management）。<br /><br />您同时可以设置 <b>作者</b> 和 <b>说明</b> 信息。<br /><br />点击 <b>保存</b> 创建程序包。',
            'modify' => '这里显示 <b>包</b> 的属性和操作。<br /><br />您可以修改包的 <b>名称</b>、<b>作者</b> 和 <b>描述</b>，查看并自定义包中的模块。<br /><br />点击 <b>新建模块</b> 为包添加一个模块进行自定义。<br /><br />如果包中包含至少一个模块，您可以 <b>发布</b>、<b>部署</b> 或者 <b>导出</b> 包。',
            'name' => '设置包的 <b>名称</b>。<br /><br />名称以字母开头且不包含空格（例如：HR_Management）。',
            'author' => '设置包的 <b>作者</b>。<br /><br />作者可以是个人或公司。',
            'description' => '设置包的 <b>说明</b>。<br /><br />用于描述包的信息。',
            'publishbtn' => '点击 <b>发布</b> 将当前的模块打包成 .zip 格式的文件，可在当前或其他 SuiteCRM 系统中使用 <b>模块加载器</b> 进行安装部署。',
            'deploybtn' => '点击 <b>部署</b> 将保存所有输入的数据并将文件包安装到当前系统中。',
            'duplicatebtn' => '点击 <b>复制</b> 来复制当前包并切换到新包。<br /><br />新包的 <b>名称</b> 将自动递增。',
            'exportbtn' => '点击 <b>导出</b> 来将包含自定义设置的模块打包成 .zip 格式的文件 。<br /><br />生成的文件不能用于部署。<br /><br />使用 <b>模块加载器</b> 导入生成的 .zip 文件可继续在 <b>模块构建器</b> 中进行自定义修改，确定完成以后才能用于 <b>发布</b> 或 <b>部署</b>。',
            'deletebtn' => '点击 <b>删除</b> 来删除此包以及与其关联的所有文件。',
            'savebtn' => '点击 <b>保存</b> 来保存所有更改。',
            'existing_module' => '点击 <b>模块</b> 图标来编辑属性，自定义模块字段、模块关联以及布局。',
            'new_module' => '点击 <b>新建模块</b> 给文件包创建一个新的模块。',
            'key' => '<b>键值</b> 必须以字母开头且不包含空格，最多 5 个字符，用于当前包中所有模块的目录、类名以及数据表的前缀。<br /><br />键值用于确保数据表的名称唯一。',
            'readme' => '点击 <b>Readme</b>  添加安装说明等信息。',

        ),
        'main' => array(),
        'module' => array(
            'create' => '设置模块的 <b>名称</b>。<br />模块名称以字母开头且不包含空格（例如：HR_Management）。<br /><br />设置模块的显示 <b>标签</b>。<br />模块标签在导航栏中显示（例如：人力资源管理）。<br /><br />设置是否在 <b>导航栏</b>中显示模块标签。<br />勾选，将在 <b>导航栏</b> 中显示模块标签。<br />不勾选，将不会在 <b>导航栏</b> 中显示模块标签，只能通过其他模块或途径访问此模块。<br /><br />每个模板包含特定的字段。<br /><b>人员</b> 模板，将创建一个类似于当前系统中的 <b>联系人</b> 以及 <b>潜在客户</b> 模块。<br /><b>公司</b> 模板，将创建一个类似于当前系统中的 <b>客户</b> 模块。<br /><b>问题</b> 模板，将创建一个类似于当前系统中的 <b>客户反馈</b> 以及 <b>Bugs</b> 模块。<br /><b>基本</b> 模板，将创建一个仅包含基本字段的模块。<br /><b>文件</b> 模板，将创建一个类似于当前系统中的 <b>文档</b> 模块。<br /><b>销售</b> 模板，将创建一个类似于当前系统中的 <b>商业机会</b> 模块。<br />选择适合模板点击 <b>保存</b> 来创建模块。',
            'modify' => '您可以更改模块属性或自定义相关模块的 <b>字段</b>，<b>关联</b> 以及 <b>布局</b>。',
            'importable' => '设置是否启用 <b>导入</b>。<br /><br />勾选，将允许使用 <b>导入向导</b> 从外部导入数据。<br /><br />不勾选，将禁用 <b>导入</b>。',
            'team_security' => '设置是否启用模块 <b>团队安全</b>。<br /><br />启用后，模块的记录中将出现 <b>团队选择</b> 字段。',
            'reportable' => '设置是否允许模块运行报告。',
            'assignable' => '设置是否允许模块中的记录分配给选定的用户。',
            'has_tab' => '设置是否在 <b>导航栏</b> 中显示模块标签。<br /><br />勾选，将 <b>在</b> 导航栏中显示模块标签。<br /><br />不勾选，将 <b>不会</b> 在导航栏中显示模块标签，只能通过其他模块或途径访问此模块。',
            'acl' => '设置是否启用模块访问控制，包含字段级安全。',
            'studio' => '设置是否允许管理员在 <b>工作室</b> 自定义此模块。',
            'audit' => '设置是否启用模块审计。对启用审计字段内容的更改将会被记录，管理员可查看更改历史记录。',
            'viewfieldsbtn' => '点击 <b>查看字段</b> 来查看模块现有字段，创建编辑自定义字段，修改编辑字段标签。',
            'viewrelsbtn' => '点击 <b>查看关联</b> 来查看模块现有关联关系，创建编辑自定义关联关系。',
            'viewlayoutsbtn' => '点击 <b>查看布局</b> 来查看模块现有布局，修改编辑自定义布局。',
            'duplicatebtn' => '点击 <b>复制</b> 来复制当前模块并切换到新模块。<br/><br/>新模块的 <b>名称</b> 将自动递增。',
            'deletebtn' => '点击 <b>删除</b> 来删除此模块。',
            'name' => '设置模块的 <b>名称</b>。<br /><br />模块名称以字母开头且不包含空格（例如：HR_Management）。',
            'label' => '设置模块的显示 <b>标签</b>。<br /><br />模块标签在导航栏中显示（例如：人力资源管理）。',
            'savebtn' => '点击 <b>保存</b> 来保存所有更改。',
            'type_basic' => '使用 <b>基本</b> 模板，将创建一个仅包含基本字段的模块。',
            'type_company' => '使用 <b>公司</b> 模板，将创建一个类似于当前系统中的 <b>客户</b> 模块。',
            'type_issue' => '使用 <b>问题</b> 模板，将创建一个类似于当前系统中的 <b>客户反馈</b> 以及 <b>Bugs</b> 模块。',
            'type_person' => '使用 <b>人员</b> 模板，将创建一个类似于当前系统中的 <b>联系人</b> 以及 <b>潜在客户</b> 模块。',
            'type_sale' => '使用 <b>销售</b> 模板，将创建一个类似于当前系统中的 <b>商业机会</b> 模块。',
            'type_file' => '使用 <b>文件</b> 模板，将创建一个类似于当前系统中的 <b>文档</b> 模块。',

        ),
        'dropdowns' => array(
            'default' => '这里显示所有可用的 <b>下拉列表</b>。<br /><br />下拉列表可在任何模块中的下拉列表字段中使用。<br /><br />点击下拉列表名称修改现有的下拉列表。<br /><br />点击 <b>添加下拉列表</b> 来创建新的下拉列表。',
            'editdropdown' => '下拉列表可在任何模块的标准或自定义下拉列表字段中使用。<br /><br />如果系统安装了多个语言，您可以选择 <b>语言</b> 编辑对应语言的标签 。<br /><br /><b>条目名称</b> 用于数据库存储，<b>显示标签</b> 用于界面显示。<br /><br />如果有多个条目，可以 <b>拖放</b> 对其进行排序。<br /><br /><b>条目名称</b> 和 <b>显示标签</b> 必须同时填写。<br /><br />点击 <b>添加</b> 按钮并留空条目名称和显示标签，将添加空条目。',

        ),
        'subPanelEditor' => array(
            'modify' => '此处是所有可以在 <b>子面板</b> 中显示的字段。<br /><br /><b>默认</b> 列包含在 <b>子面板</b> 中显示的字段。<br /> <br /><b>隐藏</b> 列包含可添加到 <b>默认</b> 列的字段。'
        ,
            'savebtn' => '点击 <b>保存并部署</b> 来保存所有更改并应用到系统。',
            'historyBtn' => '点击 <b>查看历史记录</b> 可在历史记录中查看或恢复先前保存的布局。',
            'historyDefault' => '点击 <b>恢复默认</b> 来恢复视图的原始布局。',
            'Hidden' => '<b>已隐藏</b> 字段将不出现在子面板中。',
            'Default' => '<b>默认</b> 字段将出现在子面板中。',

        ),
        'listViewEditor' => array(
            'modify' => '此处是所有可以在 <b>列表视图</b> 中显示的字段。<br /><br /><b>默认</b> 列包含在 <b>列表视图</b> 中显示的字段。<br /><br /><b>可用</b> 列包含用户可以选择创建自定义 <b>列表视图</b> 的字段。<br /><br /><b>隐藏</b> 列包含可添加到 <b>默认</b> 列或 <b>可用</b> 列的字段。'
        ,
            'savebtn' => '点击 <b>保存并部署</b> 来保存所有更改并应用到系统。',
            'historyBtn' => '点击 <b>查看历史记录</b> 可在历史记录中查看或恢复先前保存的布局。',
            'historyDefault' => '点击 <b>恢复默认</b> 来恢复视图的原始布局。<br /><br /><b>恢复默认</b> 仅恢复视图布局。如需更改字段标签，点击字段的编辑图标。',
            'Hidden' => '<b>已隐藏</b> 字段将不出现在列表视图中。',
            'Available' => '<b>可用</b>字段默认不显示，但可以被用户添加到列表视图。',
            'Default' => '<b>默认</b> 字段将出现在列表视图中，并且用户无法自定义。'
        ),
        'popupListViewEditor' => array(
            'modify' => '此处是所有可以在<b>列表视图</b>中显示的字段。<br /><br /><b>默认</b>列包含在<b>列表视图</b>中显示的字段。<br /> <br /><b>隐藏</b>列包含可添加到<b>默认</b>列的字段。'
        ,
            'savebtn' => '点击 <b>保存并部署</b> 来保存所有更改并应用到系统。',
            'historyBtn' => '点击 <b>查看历史记录</b> 可在历史记录中查看或恢复先前保存的布局。',
            'historyDefault' => '点击 <b>恢复默认</b> 来恢复视图的原始布局。<br /><br /><b>恢复默认</b> 仅恢复视图布局。如需更改字段标签，点击字段的编辑图标。',
            'Hidden' => '<b>已隐藏</b> 字段将不出现在列表视图中。',
            'Default' => '<b>默认</b> 字段将出现在列表视图中，并且用户无法自定义。'
        ),
        'searchViewEditor' => array(
            'modify' => '此处是所有可以在<b>筛选</b>中显示的字段。<br /><br /><b>默认</b>列包含在<b>筛选</b>视图中显示的字段。<br /> <br /><b>隐藏</b>列包含可添加到<b>默认</b>列的字段。'
        ,
            'savebtn' => '点击 <b>保存并部署</b> 来保存所有更改并应用到系统。',
            'Hidden' => '<b>已隐藏</b> 字段将不出现在筛选视图中。',
            'historyBtn' => '点击 <b>查看历史记录</b> 可在历史记录中查看或恢复先前保存的布局。',
            'historyDefault' => '点击 <b>恢复默认</b> 来恢复视图的原始布局。<br /><br /><b>恢复默认</b> 仅恢复视图布局。如需更改字段标签，点击字段的编辑图标。',
            'Default' => '<b>默认</b> 字段将出现在筛选视图中。'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => '<b>布局</b> 区域包含当前在当前视图内显示的字段。<br /><br /><b>工具箱</b> 包含 <b>可以添加到当前布局的字段及布局元素。<br /><br />通过拖放字段和布局元素更改当前视图布局。<br /><br />从布局中删除字段，将字段拖放到 <b>回收站</b>。',
        'defaultquickcreate' => '<b>布局</b> 区域包含当前在当前视图内显示的字段。<br /><br /><b>工具箱</b> 包含 <b>可以添加到当前布局的字段及布局元素。<br /><br />通过拖放字段和布局元素更改当前视图布局。<br /><br />从布局中删除字段，将字段拖放到 <b>回收站</b>。',
            //this default will be used for edit view
            'default' => '<b>布局</b> 区域包含当前在当前视图内显示的字段。<br /><br /><b>工具箱</b> 包含 <b>可以添加到当前布局的字段及布局元素。<br /><br />通过拖放字段和布局元素更改当前视图布局。<br /><br />从布局中删除字段，将字段拖放到 <b>回收站</b>。',
            'saveBtn' => '点击 <b>保存</b> 来保存所有更改。',
            'historyBtn' => '点击 <b>查看历史记录</b> 可在历史记录中查看或恢复先前保存的布局。',
            'historyDefault' => '点击 <b>恢复默认</b> 来恢复视图的原始布局。<br /><br /><b>恢复默认</b> 仅恢复视图布局。如需更改字段标签，点击字段的编辑图标。',
            'publishBtn' => '点击 <b>保存并部署</b> 来保存所有更改并应用到系统。',
            'toolbox' => '<b>工具箱</b> 包含 <b>可以添加到当前布局的字段及布局元素。',
            'panels' => '通过拖放字段和布局元素更改当前视图布局。',
            'delete' => '拖放任何元素到此处，将其从布局中移除。',
            'property' => '自定义此字段的 <b>显示标签</b>。<br />自定义 Tab 键跳转的 <b>标签顺序</b>。',
        ),
        'fieldsEditor' => array(
            'default' => '这里显示模块中所有可用的字段。<br /><br />直接点击 <b>字段名</b> 来编辑字段标签以及字段的其他属性。<br /><br />点击 <b>添加字段</b> 来添加新的字段。',
            'mbDefault' => '这里显示模块中所有可用的字段。<br /><br />直接点击 <b>字段名</b> 来编辑字段标签以及字段的其他属性。<br /><br />点击 <b>添加字段</b> 来添加新的字段。<br /><br />部署模块后，在 <b>模块构建器</b> 中创建的字段，在 <b>工作室</b> 中将被视为标准字段。',
            'addField' => '选择新字段的 <b>数据类型</b>。您选择的类型决定了在字段中可以输入什么样的字符。',
            'editField' => '可以自定义该字段的属性。<br /><br />点击 <b>复制</b> 来创建一个具有相同属性的新字段。',
            'mbeditField' => '可以自定义模板字段的 <b>显示标签</b> 等属性。<br /><br />点击 <b>复制</b> 来创建一个具有相同属性的新字段。<br /><br />可以在 <b>布局</b> 中删除字段，使其不在模块中显示。'

        ),
        'exportcustom' => array(
            'exportHelp' => '当前系统中使用 <b>工作室</b> 进行自定义的设置，可以进行 <b>导出</b> 并部署到其他系统中。<br /><br />设置 <b>包名称</b>、<b>作者</b>以及<b>说明</b> 等相关信息。<br /><br />选择包含自定义设置的模块进行导出（仅显示包含自定义设置的模块）。<br /><br />点击 <b>导出</b> 将包含自定义设置的模块打包成 .zip 格式的文件 。可在其他 SuiteCRM 系统中使用 <b>模块加载器</b> 进行安装部署。',
            'exportCustomBtn' => '点击 <b>导出</b> 将包含自定义设置的模块打包成 .zip 格式的文件 。',
            'name' => '设置包的 <b>名称</b>。包名称将在安装过程中显示。',
            'author' => '设置包的 <b>作者</b>。作者可以是个人或公司。',
            'description' => '设置包的 <b>说明</b>。用于描述包的信息。',
        ),
        'studioWizard' => array(
            'mainHelp' => '欢迎使用 <b>开发者工具</b>。<br /><br />可以使用这些工具来创建、管理模块和字段。',
            'studioBtn' => '使用 <b>工作室</b> 来自定义已安装的模块。',
            'mbBtn' => '使用 <b>模块构建器</b> 创建新的模块。',
            'sugarPortalBtn' => '使用<b>SuiteCRM 门户编辑器</b>管理和自定义 SuiteCRM 门户。',
            'dropDownEditorBtn' => '使用 <b>下拉列表编辑器</b> 添加或编辑全局下拉列表。',
            'appBtn' => '自定义程序的各种属性，例如在首页显示多少 TPS 记录',
            'backBtn' => '返回',
            'studioHelp' => '使用 <b>工作室</b> 决定模块显示哪些内容以及如何显示。',
            'moduleBtn' => '点击编辑此模块',
            'moduleHelp' => '这里是可以自定义模块组件。<br /><br />点击图标，选择要编辑的组件。',
            'fieldsBtn' => '创建或自定义模块中用于存储信息的 <b>字段</b>。',
            'labelsBtn' => '编辑 <b>标签</b> 修改字段显示或模块标题。',
            'relationshipsBtn' => '添加或查看模块的现有 <b>关联</b> 关系。',
            'layoutsBtn' => '自定义模块 <b>布局</b>。<br /><br />您可以决定显示哪些字段以及如何显示。',
            'subpanelBtn' => '设置模块 <b>子面板</b> 中显示的字段。',
            'portalBtn' => '自定义在 <b>SuiteCRM 门户</b> 显示的模块 <b>布局</b>。',
            'layoutsHelp' => '可以在此自定义模块 <b>布局</b>。<br /><br />布局显示字段和字段数据。<br /><br />点击图标，选择要编辑的布局。',
            'subpanelHelp' => '可以在此自定义 <b>子面板</b> 布局。<br /><br />点击图标，选择要编辑的布局。',
            'newPackage' => '点击 <b>新建包</b> 来创建一个新的文件包。',
            'exportBtn' => '点击 <b>导出自定义</b> 将工作室中指定模块的自定义的部分进行导出。',
            'mbHelp' => '使用 <b>模块构建器</b> 来创建包含自定义模块的软件包。',
            'viewBtnEditView' => '自定义模块的 <b>编辑视图</b> 布局。<br /><br />编辑视图是包含输入字段并捕获用户输入的数据的表格。',
            'viewBtnDetailView' => '自定义模块的 <b>详细视图</b> 布局。<br /><br />详细视图显示用户输入字段的数据。',
            'viewBtnDashlet' => '自定义模块的 <b>Dashlet</b> 布局。<br /><br />Dashlet 可以添加到首页仪表盘。',
            'viewBtnListView' => '自定义模块的 <b>列表视图</b> 布局。<br /><br />列表视图显示数据结果。',
            'searchBtn' => '自定义模块的 <b>筛选</b> 布局。<br /><br />筛选列表视图的记录显示。',
            'viewBtnQuickCreate' => '自定义模块的 <b>快速创建</b> 布局。<br /><br />快速创建表单出现在子面板和邮件模块中。',
            'addLayoutHelp' => "创建自定义布局，可以先复制适当布局再开始自定义。",
            'searchHelp' => '可以在此自定义 <b>筛选</b> 布局。<br /><br />筛选表单包含用于筛选记录的筛选字段。<br /><br />点击图标，选择要编辑的布局。',
            'dashletHelp' => '可以在此自定义 <b>Dashlet</b> 布局。<br /><br />Dashlet 可以添加到首页仪表盘。',
            'DashletListViewBtn' => '<b>Dashlet 列表视图</b> 显示基于 Dashlet 筛选的记录。',
            'DashletSearchViewBtn' => '<b>Dashlet 筛选</b> 筛选 Dashlet 列表视图的记录显示。',
            'popupHelp' => '可以在此自定义 <b>弹出</b> 布局。<br />',
            'PopupListViewBtn' => '<b>弹出列表视图</b> 显示弹出列表视图的记录。',
            'PopupSearchViewBtn' => '<b>弹出筛选视图</b> 为弹出列表视图筛选查看记录。',
            'BasicSearchBtn' => '自定义模块的 <b>快速筛选</b> 表单。',
            'AdvancedSearchBtn' => '自定义模块的 <b>高级筛选</b> 表单。',
            'portalHelp' => '管理和自定义 <b>SuiteCRM 门户</b>。',
            'SPUploadCSS' => '上传 <b>样式表</b> 给 SuiteCRM 门户。',
            'SPSync' => '自定义 <b>同步</b> 到 SuiteCRM 门户实例。',
            'Layouts' => '自定义 SuiteCRM 门户模块的 <b>布局</b>。',
            'portalLayoutHelp' => '这里是在 SuiteCRM 门户内的模块。<br /><br />选择模块来编辑 <b>布局</b>。',
            'relationshipsHelp' => '这里显示所有当前模块与已部署的其他模块之间的 <b>关联</b> 关系。<br /><br />关联 <b>名称</b> 由系统生成。<br /><br /><b>主模块</b> 是关联关系的所属者，例如：以客户模块为主模块的关联关系将储存在客户模块的数据表中。<br /><br /><b>类型</b> 为 <b>关联模块</b> 与 <b>主模块</b> 之间的关联类型。<br /><br />点击列的标题，可对当前的列进行排序。<br /><br />点击关联行，查看关系关联情况。<br /><br />点击 <b>添加关联</b> 来添加新的关联关系。<br /><br />可以在任何已部署的模块之间添加关联关系。',
            'relationshipHelp' => '可以在模块、自定义模块或已部署的模块之间创建 <b>关联</b> 关系。<br /><br />模块之间的关联关系通过模块中的子面板以及关联字段呈现。<br /><br />
从下列的关联关系中选择一个 <b>类型</b>：<br /><br />
<b>一对一</b> - 一个模块记录只对应一个关联模块的记录，两个模块的记录通过关联字段呈现。<br /><br />
<b>一对多</b> - 主模块通过子面板呈现多条关联模块的记录，关联模块通过关联字段呈现。<br /><br />
<b>多对多</b> - 两个模块之间都通过子面板呈现多条关联模块的记录。 <br /><br />
选择 <b>关联模块</b> 的关系。<br /><br />
如果关联类型涉及到的子面板，选择适当的子面板视图。<br /><br />
点击 <b>保存</b> 创建关联关系。',
            'convertLeadHelp' => '您可以将模块添加到转化布局并修改现有布局。<br />
您可以通过拖拽对模块进行重新排序。<br /><br />
<b>模块：</b> 模块的名称。<br /><br />
<b>转换前提：</b> 必须先创建或选择所需的模块，才能进行转化。<br /><br />
<b>复制数据：</b> 如果选中此项，来自潜在客户的字段将被复制到新创建的记录中具有相同名称的字段。<br /><br />
<b>允许选择：</b> 可以选择联系人中具有关联字段的模块，而不是在转化潜在客户的过程中创建。<br /><br />
<b>编辑：</b> 修改此模块的转化布局。<br /><br />
<b>删除：</b> 从转化布局中移除此模块。<br /><br />',


            'editDropDownBtn' => '编辑全局下拉列表',
            'addDropDownBtn' => '添加全局下拉列表',
        ),
        'fieldsHelp' => array(
            'default' => '这里显示模块中所有可用的字段。<br /><br />直接点击 <b>字段名</b> 来编辑字段标签以及字段的其他属性。<br /><br />点击 <b>添加字段</b> 来添加新的字段。<br /><br />部署模块后，在 <b>模块构建器</b> 中创建的字段，在 <b>工作室</b> 中将被视为标准字段。',
        ),
        'relationshipsHelp' => array(
            'default' => '这里显示所有当前模块与已部署的其他模块之间的 <b>关联</b> 关系。<br /><br />关联 <b>名称</b> 由系统生成。<br /><br /><b>主模块</b> 是关联关系的所属者，例如：以客户模块为主模块的关联关系将储存在客户模块的数据表中。<br /><br /><b>类型</b> 为 <b>关联模块</b> 与 <b>主模块</b> 之间的关联类型。<br /><br />点击列的标题，可对当前的列进行排序。<br /><br />点击关联行，查看关系关联情况。<br /><br />点击 <b>添加关联</b> 来添加新的关联关系。<br /><br />可以在任何已部署的模块之间添加关联关系。',
            'addrelbtn' => '鼠标悬停显示关联添加帮助',
            'addRelationship' => '可以在模块、自定义模块或已部署的模块之间创建 <b>关联</b> 关系。<br /><br />模块之间的关联关系通过模块中的子面板以及关联字段呈现。<br /><br />
从下列的关联关系中选择一个 <b>类型</b>：<br /><br />
<b>一对一</b> - 一个模块记录只对应一个关联模块的记录，两个模块的记录通过关联字段呈现。<br /><br />
<b>一对多</b> - 主模块通过子面板呈现多条关联模块的记录，关联模块通过关联字段呈现。<br /><br />
<b>多对多</b> - 两个模块之间都通过子面板呈现多条关联模块的记录。 <br /><br />
选择 <b>关联模块</b> 的关系。<br /><br />
如果关联类型涉及到的子面板，选择适当的子面板视图。<br /><br />
点击 <b>保存</b> 创建关联关系。',
        ),
        'labelsHelp' => array(
            'default' => '可以更改字段或模块中的其他标题的 <b>标签</b>。<br /><br />通过点击字段，编辑字段标签，然后点击 <b>保存</b>。<br /><br />如果系统安装了多个语言，您可以选择 <b>语言</b> 编辑对应语言的标签 。',
            'saveBtn' => '点击 <b>保存</b> 来保存所有更改。',
            'publishBtn' => '点击 <b>保存并部署</b> 来保存所有更改并应用到系统。',
        ),
        'portalSync' => array(
            'default' => '输入用户门户实例更新的<b> SuiteCRM 门户 URL</b> 。<br /><br />然后输入有效的 SuiteCRM 用户名和密码，点击<b>开始同步</b>。<br /><br />通过<b>样式表</b>自定义 SuiteCRM 门户 的<b>布局</b>。',
        ),
        'portalStyle' => array(
            'default' => '您可以通过样式表自定义 SuiteCRM 门户的外观。<br /><br />选择要上传的<b>样式表</b>。<br /><br />样式表将在下一次同步 SuiteCRM 门户时应用。',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => '点击 <b>新建包</b> 来创建一个新的包，用于添加自定义模块。<br /><br />一个包可以包含一个或多个模块，模块与模块之间可以互相关联。<br /><br />例如：您可能想要创建一个包，其中包含一个自定义的模块关联到标准的客户模块中。或者您可能想要创建一个包，其中包含多个新创建的模块，彼此之间或者与其他模块之间互相关联来共同完成工作。',
            'somepackages' => '包可以理解为作为项目的一部分并且包含了自定义模块的容器，一个包可以包含一个或多个模块，模块与模块之间可以互相关联。<br /><br />创建好包之后可以马上创建包中的模块，也可以在以后继续完善项目。<br /><br />项目完成之后可以进行 <b>部署</b>，安装自定义模块到当前系统。',
            'afterSave' => '新的包可以包含一个或多个模块。<br /><br />点击 <b>新建模块</b> 来创建自定义的模块。<br /><br />如果包中包含至少一个模块，您可以 <b>发布</b>、<b>部署</b> 或者 <b>导出</b> 包。<br /><br />点击 <b>部署</b> 将当前的模块应用到当前系统。<br /><br />点击 <b>发布</b> 将当前的模块打包成 .zip 格式的文件，可在当前或其他 SuiteCRM 系统中使用 <b>模块加载器</b> 进行安装部署。',
            'create' => '包可以理解为作为项目的一部分并且包含了自定义模块的容器，一个包可以包含一个或多个模块，模块与模块之间可以互相关联。<br /><br />创建好包之后可以马上创建包中的模块，也可以在以后继续完善项目。',
        ),
        'main' => array(
            'welcome' => '使用 <b>开发者工具</b> 可以创建、管理模块和字段。<br /><br />点击 <b>工作室</b> 来管理现有模块。<br /><br />点击 <b>模块构建器</b> 来创建自定义模块。',
            'studioWelcome' => '当前已安装的模块，包括标准和模块加载的对象，都是可以在此进行自定义。'
        ),
        'module' => array(
            'somemodules' => "点击 <b>部署</b> 将当前的模块应用到当前系统。<br />br />点击 <b>发布</b> 将当前的模块打包成 .zip 格式的文件，可在当前或其他 SuiteCRM 系统中使用 <b>模块加载器</b> 进行安装部署。<br /><br />已<b>部署</b> 或 已<b>发布</b> 的模块可以进行自定义修改并重新部署或发布。",
            'editView' => '这里您可以编辑、移除现有字段或从左侧面板添加可用的字段。',
            'create' => '每个模板包含特定的字段。<br /><br /><b>人员</b> 模板，将创建一个类似于当前系统中的 <b>联系人</b> 以及 <b>潜在客户</b> 模块。<br /><br /><b>公司</b> 模板，将创建一个类似于当前系统中的 <b>客户</b> 模块。<br /><br /><b>问题</b> 模板，将创建一个类似于当前系统中的 <b>客户反馈</b> 以及 <b>Bugs</b> 模块。<br /><br /><b>基本</b> 模板，将创建一个仅包含基本字段的模块。<br /><br /><b>文件</b> 模板，将创建一个类似于当前系统中的 <b>文档</b> 模块。<br /><br /><b>销售</b> 模板，将创建一个类似于当前系统中的 <b>商业机会</b> 模块。',
            'afterSave' => '通过编辑、创建字段，与其他模块建立关联关系，安排字段布局来自定义适合您需要的模块。<br /><br />点击 <b>复制</b> 来创建并切换到与当前模块相同的新模块。<br /><br />点击 <b>查看字段</b> 来查看管理模板字段以及自定义字段。<br /><br />点击 <b>查看关联</b> 来创建管理模块与模块之间的关联关系。<br /><br />点击 <b>查看布局</b> 来查看编辑模块布局。',
            'viewfields' => '根据需要来自定义模块中的字段。<br /><br />标准字段无法删除，但可以在模块视图中移除并添加自定义字段到对应的视图。<br /><br />点击 <b>复制</b> 来快速复制现有字段，修改后点击 <b>保存</b>。<br /><br />建议设置好所有字段后再进行 <b>部署</b> 或 <b>发布</b>。',
            'viewrelationships' => '您可以在当前模块与其他模块之间创建 <b>多对多</b> 关联关系。<br/><br />要创建 <b>一对多</b> 以及 <b>一对一</b> 关联关系，需要为模块创建 <b>关联</b> 以及 <b>弹性关联</b> 的字段。',
            'viewlayouts' => '<b>编辑视图</b> 用于数据输入，<b>详细视图</b> 用于数据显示，您可以自定义 <b>编辑视图</b> 以及 <b>详细视图</b> 中的字段，两者并不需要完全一致。<br /><br />在模块子面板中点击 <b>创建</b> 将使用 <b>快速创建</b> 的视图设置，默认情况下 <b>快速创建</b> 与 <b>编辑视图</b> 一致，您可以自定义 <b>快速创建</b> 中的字段方便快速创建新的数据。<br /><br />权限控制可在 <b>角色管理</b> 中进行管理。<br /><br />',
            'existingModule' => '创建自定义模块后，您可以继续创建模块或返回文件包进行 <b>发布</b> 或 <b>部署</b>。<br /><br />点击 <b>复制</b> 来创建一个与当前模块相同的模块，或返回文件包点击 <b>新建模块</b> 来继续创建其他模块。<br /><br />发布或部署文件包需至少包含一个模块。',
            'labels' => '可以更改标准字段或自定义字段的标签，更改标签不会影响储存在字段中的数据。',
        ),
        'listViewEditor' => array(
            'modify' => '此处是所有可以在 <b>列表视图</b> 中显示的字段。<br /><br /><b>默认</b> 列包含在 <b>列表视图</b> 中显示的字段。<br /><br /><b>可用</b> 列包含用户可以选择创建自定义 <b>列表视图</b> 的字段。<br /><br /><b>隐藏</b> 列包含可添加到 <b>默认</b> 列或 <b>可用</b> 列的字段。',
            'savebtn' => '点击 <b>保存</b> 来保存所有更改。',
            'Hidden' => '已隐藏字段将不出现在列表视图中。',
            'Available' => '可用字段默认不显示，但可以被用户添加到列表视图。',
            'Default' => '默认字段将出现在列表视图中，并且用户无法自定义。'
        ),

        'searchViewEditor' => array(
            'modify' => '此处是所有可以在<b>筛选</b>中显示的字段。<br /><br /><b>默认</b>列包含在<b>筛选</b>视图中显示的字段。<br /> <br /><b>隐藏</b>列包含可添加到<b>默认</b>列的字段。',
            'savebtn' => '点击 <b>保存并部署</b> 来保存所有更改并应用到系统。',
            'Hidden' => '已隐藏字段将不出现在筛选视图中。',
            'Default' => '默认字段将出现在筛选视图中。'
        ),
        'layoutEditor' => array(
            'default' => '<b>布局</b> 区域包含当前在当前视图内显示的字段。<br /><br /><b>工具箱</b> 包含 <b>可以添加到当前布局的字段及布局元素。<br /><br />通过拖放字段和布局元素更改当前视图布局。<br /><br />从布局中删除字段，将字段拖放到 <b>回收站</b>。',
            'saveBtn' => '点击 <b>保存</b> 来保存所有更改。',
            'publishBtn' => '点击 <b>保存并部署</b> 来保存所有更改并应用到系统。',
            'toolbox' => '工具箱中包含用于编辑布局的实用功能。简单拖放即可。',
            'panels' => '通过拖放字段和布局元素更改当前视图布局。'
        ),
        'dropdownEditor' => array(
            'default' => '<b>布局</b> 区域包含当前在当前视图内显示的字段。<br /><br /><b>工具箱</b> 包含 <b>可以添加到当前布局的字段及布局元素。<br /><br />通过拖放字段和布局元素更改当前视图布局。',
            'dropdownaddbtn' => '点击此按钮给下拉列表添加新的条目。',

        ),
        'exportcustom' => array(
            'exportHelp' => '当前系统中使用 <b>工作室</b> 进行自定义的设置，可以进行 <b>导出</b> 并部署到其他系统中。<br /><br />设置 <b>包名称</b>、<b>作者</b>以及<b>说明</b> 等相关信息。<br /><br />选择包含自定义设置的模块进行导出（仅显示包含自定义设置的模块）。<br /><br />点击 <b>导出</b> 将包含自定义设置的模块打包成 .zip 格式的文件 。可在其他 SuiteCRM 系统中使用 <b>模块加载器</b> 进行安装部署。',
            'exportCustomBtn' => '点击 <b>导出</b> 将包含自定义设置的模块打包成 .zip 格式的文件。',
            'name' => '设置包的 <b>名称</b>。包名称将在安装过程中显示。',
            'author' => '设置包的 <b>作者</b>。作者可以是个人或公司。',
            'description' => '设置包的 <b>说明</b>。用于描述包的信息。',
        ),
        'studioWizard' => array(
            'mainHelp' => '欢迎使用 <b>开发者工具</b>。<br /><br />可以使用这些工具来创建、管理模块和字段。',
            'studioBtn' => '使用 <b>工作室</b> 来自定义已安装的模块。',
            'mbBtn' => '使用 <b>模块构建器</b> 来创建新的模块。',
            'appBtn' => '自定义程序的各种属性，例如在首页显示多少 TPS 记录',
            'backBtn' => '返回上一步',
            'studioHelp' => '使用 <b>工作室</b> 来自定义已安装的模块。',
            'moduleBtn' => '点击编辑此模块',
            'moduleHelp' => '选择您想要编辑的模块组件。',
            'fieldsBtn' => '创建或自定义模块中用于存储信息的 <b>字段</b>。',
            'labelsBtn' => '点击 <b>保存</b> 来保存您的自定义标签。',
            'layoutsBtn' => '自定义编辑视图、详细视图以及筛选的<b>布局</b>。',
            'subpanelBtn' => '编辑在模块子面板中显示哪些信息。',
            'layoutsHelp' => '可以在此自定义模块 <b>布局</b>。<br /><br />布局显示字段和字段数据。<br /><br />点击图标，选择要编辑的布局。',
            'subpanelHelp' => '选择要编辑的 <b>子面板</b>。',
            'searchHelp' => '选择要编辑的 <b>筛选</b> 布局。',
            'newPackage' => '点击 <b>新建包</b> 来创建一个新的文件包。',
            'mbHelp' => '欢迎使用模块构建器。使用 <b>模块构建器</b> 来创建包含自定义模块的软件包。包可以理解为作为项目的一部分并且包含了自定义模块的容器，一个包可以包含一个或多个模块，模块与模块之间可以互相关联。<br /><br />例如：您可能想要创建一个包，其中包含一个自定义的模块关联到标准的客户模块中。或者您可能想要创建一个包，其中包含多个新创建的模块，彼此之间或者与其他模块之间互相关联来共同完成工作。',
            'exportBtn' => '点击 <b>导出自定义</b> 将工作室中指定模块的自定义的部分进行导出。',
        ),



    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => '下拉列表编辑器',

//STUDIO2
    'LBL_MODULEBUILDER' => '模块构建器',
    'LBL_STUDIO' => '工作室',
    'LBL_DROPDOWNEDITOR' => '下拉列表编辑器',
    'LBL_DEVELOPER_TOOLS' => '开发者工具',
    'LBL_SUGARPORTAL' => 'SuiteCRM 门户编辑器',
    'LBL_PACKAGE_LIST' => '文件包列表',
    'LBL_HOME' => '首页',
    'LBL_NONE' => '-无-',
    'LBL_DEPLOYE_COMPLETE' => '部署完成',
    'LBL_DEPLOY_FAILED' => '在部署流程中出现了一个错误，您的软件包可能未正确安装',
    'LBL_AVAILABLE_SUBPANELS' => '可用的子面板',
    'LBL_ADVANCED' => '高级',
    'LBL_ADVANCED_SEARCH' => '高级筛选',
    'LBL_BASIC' => '基本',
    'LBL_BASIC_SEARCH' => '快速筛选',
    'LBL_CURRENT_LAYOUT' => '布局',
    'LBL_CURRENCY' => '货币',
    'LBL_DASHLET' => 'Dashlet 视图',
    'LBL_DASHLETLISTVIEW' => 'Dashlet 列表视图',
    'LBL_POPUP' => '弹出视图',
    'LBL_POPUPLISTVIEW' => '弹出列表视图',
    'LBL_POPUPSEARCH' => '弹出筛选视图',
    'LBL_DASHLETSEARCHVIEW' => 'Dashlet 筛选视图',
    'LBL_DETAILVIEW' => '详细视图',
    'LBL_DROP_HERE' => '[拖放到此处]',
    'LBL_EDIT' => '编辑',
    'LBL_EDIT_LAYOUT' => '编辑布局',
    'LBL_EDIT_FIELDS' => '编辑字段',
    'LBL_EDITVIEW' => '编辑视图',
    'LBL_FILLER' => '(空白)',
    'LBL_FIELDS' => '字段',
    'LBL_FAILED_TO_SAVE' => '保存失败',
    'LBL_FAILED_PUBLISHED' => '发布失败',
    'LBL_HOMEPAGE_PREFIX' => '我的',
    'LBL_LAYOUT_PREVIEW' => '预览',
    'LBL_LAYOUTS' => '布局',
    'LBL_LISTVIEW' => '列表视图',
    'LBL_MODULES' => '模块',
    'LBL_MODULE_TITLE' => '工作室',
    'LBL_NEW_PACKAGE' => '新建包',
    'LBL_NEW_PANEL' => '新建面板',
    'LBL_NEW_ROW' => '新建行',
    'LBL_PACKAGE_DELETED' => '包已删除',
    'LBL_PUBLISHING' => '正在发布...',
    'LBL_PUBLISHED' => '已发布',
    'LBL_SELECT_FILE' => '选择文件',
    'LBL_SUBPANELS' => '子面板',
    'LBL_SUBPANEL' => '子面板',
    'LBL_SUBPANEL_TITLE' => '标题：',
    'LBL_SEARCH_FORMS' => '搜索',
    'LBL_FILTER' => '筛选',
    'LBL_TOOLBOX' => '工具箱',
    'LBL_QUICKCREATE' => '快速创建',
    'LBL_EDIT_DROPDOWNS' => '编辑下拉列表',
    'LBL_ADD_DROPDOWN' => '添加下拉列表',
    'LBL_BLANK' => '-空白-',
    'LBL_TAB_ORDER' => '标签顺序',
    'LBL_TABDEF_TYPE' => '显示类型',
    'LBL_TABDEF_TYPE_HELP' => '选择此部分的显示方式。此选项仅在启用标签的视图上有效。',
    'LBL_TABDEF_TYPE_OPTION_TAB' => '标签',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => '面板',
    'LBL_TABDEF_TYPE_OPTION_HELP' => '面板：在布局视图中以面板方式显示。<br />标签：在布局视图中以标签方式显示。',
    'LBL_TABDEF_COLLAPSE' => '折叠',
    'LBL_TABDEF_COLLAPSE_HELP' => '勾选此项，使面板默认为折叠状态。',
    'LBL_DROPDOWN_TITLE_NAME' => '名称',
    'LBL_DROPDOWN_LANGUAGE' => '语言',
    'LBL_DROPDOWN_ITEMS' => '条目',
    'LBL_DROPDOWN_ITEM_NAME' => '条目名称',
    'LBL_DROPDOWN_ITEM_LABEL' => '显示标签',
    'LBL_SYNC_TO_DETAILVIEW' => '同步到详细视图',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => '选择此选项后，当点击 <b>保存</b> 或 <b>保存并部署</b> 时，将 <b>编辑视图</b> 的布局同步到 <b>详细视图</b>，并且无法在 <b>详细视图</b> 中修改布局。',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => '当前详细视图已与编辑视图同步，详细视图的布局将与编辑视图的布局保持一致。<br />如需更改详细视图的布局，请在编辑视图中取消勾选 <b>同步到详细视图</b>。',
    'LBL_COPY_FROM_EDITVIEW' => '从编辑视图复制',
    'LBL_DROPDOWN_BLANK_WARNING' => '条目名称和显示标签必须同时填写。点击 添加 按钮留空条目名称和显示标签，将添加空条目。',
    'LBL_DROPDOWN_KEY_EXISTS' => '条目已存在',
    'LBL_NO_SAVE_ACTION' => '无法找到此视图的保存动作。',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',


//RELATIONSHIPS
    'LBL_MODULE' => '模块',
    'LBL_LHS_MODULE' => '主模块',
    'LBL_CUSTOM_RELATIONSHIPS' => '* 自定义的关联',
    'LBL_RELATIONSHIPS' => '关联关系',
    'LBL_RELATIONSHIP_EDIT' => '编辑关联',
    'LBL_REL_NAME' => '名称',
    'LBL_REL_LABEL' => '标签',
    'LBL_REL_TYPE' => '类型',
    'LBL_RHS_MODULE' => '关联的模块',
    'LBL_NO_RELS' => '无关联关系',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => '可选条件',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => '列',
    'LBL_RELATIONSHIP_ROLE_VALUE' => '值',
    'LBL_SUBPANEL_FROM' => '子面板来自',
    'LBL_RELATIONSHIP_ONLY' => '没有创建该关联的可见元素，因为两模块已存在可见关联。',
    'LBL_ONETOONE' => '一对一',
    'LBL_ONETOMANY' => '一对多',
    'LBL_MANYTOONE' => '多对一',
    'LBL_MANYTOMANY' => '多对多',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => '请选择模块进行编辑。',
    'LBL_QUESTION_LAYOUT' => '请选择布局进行编辑。',
    'LBL_QUESTION_SUBPANEL' => '请选择子面板进行编辑。',
    'LBL_QUESTION_SEARCH' => '请选择搜索布局进行编辑。',
    'LBL_QUESTION_MODULE' => '请选择模块进行编辑。',
    'LBL_QUESTION_PACKAGE' => '请选择文件包进行编辑或创建一个新的文件包。',
    'LBL_QUESTION_EDITOR' => '请选择编辑器。',
    'LBL_QUESTION_DASHLET' => '请选择 dashlet 布局进行编辑。',
    'LBL_QUESTION_POPUP' => '请选择弹出布局进行编辑。',
//CUSTOM FIELDS
    'LBL_NAME' => '名称',
    'LBL_LABELS' => '标签',
    'LBL_MASS_UPDATE' => '批量更新',
    'LBL_DEFAULT_VALUE' => '默认值',
    'LBL_REQUIRED' => '必填',
    'LBL_DATA_TYPE' => '类型',
    'LBL_HCUSTOM' => '自定义',
    'LBL_HDEFAULT' => '默认',
    'LBL_LANGUAGE' => '语言',
    'LBL_CUSTOM_FIELDS' => '* 自定义的字段',

//SECTION
    'LBL_SECTION_EDLABELS' => '编辑标签',
    'LBL_SECTION_PACKAGES' => '文件包',
    'LBL_SECTION_PACKAGE' => '文件包',
    'LBL_SECTION_MODULES' => '模块',
    'LBL_SECTION_DROPDOWNS' => '下拉列表',
    'LBL_SECTION_PROPERTIES' => '属性',
    'LBL_SECTION_DROPDOWNED' => '编辑下拉列表',
    'LBL_SECTION_HELP' => '帮助',
    'LBL_SECTION_MAIN' => '主要',
    'LBL_SECTION_FIELDEDITOR' => '编辑字段',
    'LBL_SECTION_DEPLOY' => '部署',
    'LBL_SECTION_MODULE' => '模块',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => '默认',
    'LBL_HIDDEN' => '已隐藏',
    'LBL_AVAILABLE' => '可用的',
    'LBL_LISTVIEW_DESCRIPTION' => '<b>默认</b> 列包含在 <b>列表视图</b> 中显示的字段。<br /><br /><b>可用</b> 列包含用户可以选择创建自定义 <b>列表视图</b> 的字段。<br /><br /><b>隐藏</b> 列包含可添加到 <b>默认</b> 列或 <b>可用</b> 列的字段。',
    'LBL_LISTVIEW_EDIT' => '列表视图编辑器',

//Manager Backups History
    'LBL_MB_PREVIEW' => '预览',
    'LBL_MB_RESTORE' => '还原',
    'LBL_MB_DELETE' => '删除',
    'LBL_MB_DEFAULT_LAYOUT' => '默认布局',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => '添加',
    'LBL_BTN_SAVE' => '保存',
    'LBL_BTN_SAVE_CHANGES' => '保存更改',
    'LBL_BTN_DONT_SAVE' => '放弃更改',
    'LBL_BTN_CANCEL' => '取消',
    'LBL_BTN_CLOSE' => '关闭',
    'LBL_BTN_SAVEPUBLISH' => '保存并部署',
    'LBL_BTN_CLONE' => '复制',
    'LBL_BTN_ADDROWS' => '添加行',
    'LBL_BTN_ADDFIELD' => '添加字段',
    'LBL_BTN_ADDDROPDOWN' => '添加下拉列表',
    'LBL_BTN_SORT_ASCENDING' => '升序',
    'LBL_BTN_SORT_DESCENDING' => '降序',
    'LBL_BTN_EDLABELS' => '编辑标签',
    'LBL_BTN_UNDO' => '撤销',
    'LBL_BTN_REDO' => '重做',
    'LBL_BTN_ADDCUSTOMFIELD' => '添加自定义字段',
    'LBL_BTN_EXPORT' => '导出自定义',
    'LBL_BTN_DUPLICATE' => '复制',
    'LBL_BTN_PUBLISH' => '发布',
    'LBL_BTN_DEPLOY' => '部署',
    'LBL_BTN_EXP' => '导出',
    'LBL_BTN_DELETE' => '删除',
    'LBL_BTN_VIEW_LAYOUTS' => '查看布局',
    'LBL_BTN_VIEW_FIELDS' => '查看字段',
    'LBL_BTN_VIEW_RELATIONSHIPS' => '查看关联',
    'LBL_BTN_ADD_RELATIONSHIP' => '添加关联',
    'LBL_BTN_RENAME_MODULE' => '重命名模块',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => '错误：字段已存在',
    'ERROR_INVALID_KEY_VALUE' => "错误：无效的键值 [']",
    'ERROR_NO_HISTORY' => '未找到历史记录文件',
    'ERROR_MINIMUM_FIELDS' => '布局中必须至少包含一个字段',
    'ERROR_GENERIC_TITLE' => '出现一个错误',
    'ERROR_REQUIRED_FIELDS' => '您确定要继续？布局中缺少以下必填字段：',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => '包名称',
    'LBL_MODULE_NAME' => '模块名称',
    'LBL_AUTHOR' => '作者',
    'LBL_DESCRIPTION' => '说明',
    'LBL_KEY' => '键',
    'LBL_ADD_README' => ' Readme',
    'LBL_LAST_MODIFIED' => '最新修改',
    'LBL_NEW_MODULE' => '新建模块',
    'LBL_LABEL' => '标签',
    'LBL_LABEL_TITLE' => '标签',
    'LBL_WIDTH' => '宽度',
    'LBL_PACKAGE' => '文件包',
    'LBL_TYPE' => '类型',
    'LBL_NAV_TAB' => '导航栏',
    'LBL_CREATE' => '创建',
    'LBL_LIST' => '列表',
    'LBL_VIEW' => '查看',
    'LBL_HISTORY' => '历史记录',
    'LBL_RESTORE_DEFAULT' => '恢复默认',
    'LBL_ACTIVITIES' => '活动',
    'LBL_NEW' => '新增',
    'LBL_TYPE_BASIC' => '基本',
    'LBL_TYPE_COMPANY' => '公司',
    'LBL_TYPE_PERSON' => '人员',
    'LBL_TYPE_ISSUE' => '问题',
    'LBL_TYPE_SALE' => '销售',
    'LBL_TYPE_FILE' => '文件',
    'LBL_RSUB' => '这是在模块中显示的子面板',
    'LBL_MSUB' => '这是在关联模块中显示的子面板',
    'LBL_MB_IMPORTABLE' => '导入',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] 已删除',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => '导出自定义',
    'LBL_EC_NAME' => '包名称',
    'LBL_EC_AUTHOR' => '作者',
    'LBL_EC_DESCRIPTION' => '说明',
    'LBL_EC_CHECKERROR' => '请选择一个模块。',
    'LBL_EC_CUSTOMFIELD' => '自定义的字段',
    'LBL_EC_CUSTOMLAYOUT' => '自定义的布局',
    'LBL_EC_NOCUSTOM' => '没有自定义过的模块。',
    'LBL_EC_EMPTYCUSTOM' => '未自定义',
    'LBL_EC_EXPORTBTN' => '导出',
    'LBL_MODULE_DEPLOYED' => '模块已部署。',
    'LBL_UNDEFINED' => '未定义',
    'LBL_EC_VIEWS' => '自定义的视图',
    'LBL_EC_SUGARFEEDS' => '自定义的 Feeds(s)',
    'LBL_EC_DASHLETS' => '自定义的 Dashlets(s)',
    'LBL_EC_CSS' => '自定义的 css(s)',
    'LBL_EC_TPLS' => '自定义的 tpls(s)',
    'LBL_EC_IMAGES' => '自定义的 image(s)',
    'LBL_EC_JS' => '自定义的 js(s)',
    'LBL_EC_QTIP' => '自定义的 qtip(s)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => '检索数据失败',
    'LBL_AJAX_LOADING' => '正在加载...',
    'LBL_AJAX_DELETING' => '正在删除...',
    'LBL_AJAX_BUILDPROGRESS' => '正在构建...',
    'LBL_AJAX_DEPLOYPROGRESS' => '正在部署...',

    'LBL_AJAX_RESPONSE_TITLE' => '结果',
    'LBL_AJAX_RESPONSE_MESSAGE' => '成功完成此操作',
    'LBL_AJAX_LOADING_TITLE' => '正在执行...',
    'LBL_AJAX_LOADING_MESSAGE' => '正在加载，请稍候。',

//JS
    'LBL_JS_REMOVE_PACKAGE' => '您确定要删除此文件包？这将永久删除与此文件包相关的所文件。',
    'LBL_JS_REMOVE_MODULE' => '你确定要删除此模块？这将永久删除与此模块相关的所文件。',
    'LBL_JS_DEPLOY_PACKAGE' => '重新部署此模块，将覆盖您在工作室中做的任何自定义。您确定要继续？',

    'LBL_DEPLOY_IN_PROGRESS' => '正在部署文件包',
    'LBL_JS_VALIDATE_NAME' => '名称 - 以字母开头且不包含空格',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => '包名称已存在',
    'LBL_JS_VALIDATE_KEY' => '键值 - 必须以字母开头且不包含空格，最多 5 个字符',
    'LBL_JS_VALIDATE_LABEL' => '请输入此模块的显示名称的标签',
    'LBL_JS_VALIDATE_TYPE' => '请选择此模块的类型',
    'LBL_JS_VALIDATE_REL_LABEL' => '标签 - 请添加在子面板上显示的标签',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => '删除自定义字段将同时删除与其相关联的所有数据，删除后字段将不会出现在任何模块的布局中。您确定继续删除？',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => '您确定要删除此项关联关系？',
    'LBL_CONFIRM_DONT_SAVE' => '当前已经更改，是否保存？',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => '保存更改',
    'LBL_CONFIRM_LOWER_LENGTH' => '数据可能被截断并且该操作不能被撤消，是否继续？',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => '请选择合适的字段数据类型。',

//Revert Module labels
    'LBL_RESET' => '重置',
    'LBL_RESET_MODULE' => '重置模块',
    'LBL_REMOVE_CUSTOM' => '移除自定义',
    'LBL_CLEAR_RELATIONSHIPS' => '清除关联',
    'LBL_RESET_LABELS' => '重置标签',
    'LBL_RESET_LAYOUTS' => '重置布局',
    'LBL_REMOVE_FIELDS' => '移除字段',
    'LBL_CLEAR_EXTENSIONS' => '清除扩展',
    'LBL_HISTORY_TIMESTAMP' => '时间',
    'LBL_HISTORY_TITLE' => '历史记录',

    'fieldTypes' => array(
        'varchar' => '单行文本',
        'int' => '整数',
        'float' => '浮点数',
        'bool' => '复选框',
        'enum' => '下拉列表',
        'dynamicenum' => '动态下拉列表',
        'multienum' => '多选',
        'date' => '日期',
        'phone' => '电话',
        'currency' => '货币',
        'html' => 'HTML',
        'radioenum' => '单选',
        'relate' => '关联',
        'address' => '地址',
        'text' => '文本域',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => '日期时间',
        'encrypt'=>'加密',
        'decimal' => '十进制',
        'image' => '图片',
    ),
    'labelTypes' => array(
        "frequently_used" => "常用标签",
        "all" => "所有标签",
    ),

    'parent' => '弹性关联',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "您确定要从下拉列表中删除此条目？任何使用此下拉列表的字段将不再显示此条目并且此条目将无法在下拉字段中选中。",

    'LBL_ALL_MODULES' => '全部模块',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (关联的 {1} ID)',
);

