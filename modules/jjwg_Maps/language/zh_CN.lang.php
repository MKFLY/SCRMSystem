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

$mod_strings['LBL_MAP'] = '地图';
$mod_strings['LBL_MODULE_NAME'] = '地图';
$mod_strings['LBL_MODULE_TITLE'] = '地图';
$mod_strings['LBL_MODULE_ID'] = '地图';
$mod_strings['LBL_LIST_FORM_TITLE'] = '地图列表';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = '自定义标注';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = '自定义区域';
$mod_strings['LBL_HOMEPAGE_TITLE'] = '地图';

$mod_strings['LBL_FLEX_RELATE'] = '关联到';
$mod_strings['LBL_MODULE_TYPE'] = '模块';
$mod_strings['LBL_DISTANCE'] = '距离（半径）';
$mod_strings['LBL_UNIT_TYPE'] = '单元类型';

$mod_strings['LBL_MAP_DISPLAY'] = '地图显示';
$mod_strings['LBL_MAP_LEGEND'] = '图例';
$mod_strings['LBL_MAP_USER_GROUPS'] = '组';
$mod_strings['LBL_MAP_GROUP'] = '组';
$mod_strings['LBL_MAP_TYPE'] = '类型';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = '负责人';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = '获取路线';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = '谷歌地图视图';

$mod_strings['LNK_NEW_MAP'] = '创建地图';
$mod_strings['LNK_NEW_RECORD'] = '创建地图';
$mod_strings['LNK_MAP_LIST'] = '查看地图';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = '地理编码测试';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = '快速查看地图';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = '无';
$mod_strings['LBL_MAP_ADDRESS'] = '地址';
$mod_strings['LBL_MAP_PROCESS'] = '执行';

$mod_strings['LBL_MAP_LAST_STATUS'] = '最后地理编码状态';
$mod_strings['LBL_GEOCODED_COUNTS'] = '地理编码计数';
$mod_strings['LBL_CRON_URL'] = '任务计划 URL：';
$mod_strings['LBL_MODULE_HEADING'] = '模块';
$mod_strings['LBL_MODULE_TOTAL_HEADING'] = '总计';
$mod_strings['LBL_MODULE_RESET_HEADING'] = '重置';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'The table shown belown shows the number of module objects geocoded, grouped by geocoding response. Keep in mind that the standard Google Maps usage limit is 2500 requests per day . This module will cache the addresses geocoding information during processing to reduce the overall number of requests needed.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = '建议添加设置任务计划，在夜间执行地理编码请求。当前已为此目的创建了自定义入口，并且无需身份验证进行即可访问。下面所显示的 URL 是用于管理的任务计划。详细信息请参阅文档帮助。';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = '导出URLs';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Use the links below to export full addresses in need of geocodeing information. Then use an online or offline batch geocoding tool to geocode the addresses. When you are finished geocoding, import the addresses into the Address Cache module to be used with your maps. Note, the Address Cache module is optional. All geocoding information is stored in the representative module.';
$mod_strings['LBL_ADDRESS_CACHE'] = '地址缓存';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = '添加到目标群体';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = '正在处理...';


$mod_strings['LBL_CONFIG_TITLE'] = '地图设置';
$mod_strings['LBL_CONFIG_SAVED'] = '设置已保存！';
$mod_strings['LBL_BILLING_ADDRESS'] = '账单地址';
$mod_strings['LBL_SHIPPING_ADDRESS'] = '送货地址';
$mod_strings['LBL_PRIMARY_ADDRESS'] = '主要地址';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = '其他地址';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = '关联到';
$mod_strings['LBL_ADDRESS_ADDRESS'] = '地址（地址，用户）';
$mod_strings['LBL_ADDRESS_CUSTOM'] = '自定义（自定义控制器逻辑）';
$mod_strings['LBL_ENABLED'] = '已启用';
$mod_strings['LBL_DISABLED'] = '已禁用';
$mod_strings['LBL_DEFAULT'] = '默认';
$mod_strings['LBL_CONFIG_DEFAULT'] = '默认';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = '可用的地理编码模块';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = '可用的地理编码表';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "地址类型设置：这定义地址类型时使用地理编码地址模块。可接受的值: 'billing'; 'shipping'; 'primary'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = '地址类型';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = '客户-地址类型';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = '联系人-地址类型';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = '潜在客户-地址类型';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = '商业机会-地址类型';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(关联客户)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = '客户反馈-地址类型';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = '项目-地址类型';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(关联客户/商机)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = '会议-地址类型';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = '目标对象-地址类型';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = '弹性关联对象';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "标记组字段设置：这定义在地图上显示标记时要使用的“字段”作为组参数。例子：用户标签，行业，现状，销售阶段，优先";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = '群组字段';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = '客户-群组字段';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = '联系人-群组字段';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = '潜在客户-群组字段';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = '商业机会-群组字段';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = '客户反馈-群组字段';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = '项目-群组字段';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = '会议-群组字段';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = '目标对象-群组字段';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = '地理编码设置';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = '地理编码 API URL';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'Google Maps Geocoding API 或代理服务器的 URL';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Secret Phrase for Proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = '选择的短语在使用md5加密后使用';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_GET_A_KEY'] = '获取一个免费的 Google Maps Geocoding API 密钥';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = '地理编码限制';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "设置选择地理编码记录时的查询限制。";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = '谷歌地理编码限制';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "设置使用谷歌地图 API 进行地理编码的请求限制。";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = '导出地址限制';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "设置选择导出记录的查询限制。";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "允许 “APPROXIMATE（近似）” 位置类型";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - allows location types of 'APPROXIMATE' to be considered 'OK' geocoding results.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = '地址缓存设置';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = '启用地址缓存 (Get)';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "允许地址缓存模块从缓存表中检索数据。";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = '启用保存地址缓存 (Save)';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "允许地址缓存模块将数据保存到缓存表中。";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = '逻辑钩子设置';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = '启用所有逻辑钩子';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' 允许逻辑钩根据关联对象自动更新，建议在更新 SuiteCRM 时禁用此项。";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = '标记和地图设置';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "地图标记限制";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "设置在地图上显示地图标记的查询限制。";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "默认中心纬度";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' 设置地图默认中心纬度。";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "默认中心经度";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_latitude' 设置地图默认中心经度。";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "默认距离计算单位";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "设置默认距离计算单位。可用值：英里或公里。";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "地图默认距离";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "设置基于距离标记的默认距离。";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "地图重复标记调整";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "设置在重复标记位置的情况下要添加到经度和纬度的偏移调整量。";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "地图标记群集网格大小";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' is used to set the grid size for calculating map clusterers.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "地图标记最大缩放集合";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' is used to set the maximum zoom level at which clustering will not be applied.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Important Note: All saved settings can be found in the 'config' table under category 'jjwg'. Note, a custom controller.php file should no longer be used to override settings.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = '区域';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = '地图标注';
$mod_strings['LBL_PARENT_ID'] = '上级ID';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP Partners';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = '获取密钥';
$mod_strings['LBL_GOOGLE_API_KEY'] = '密钥';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = '请在谷歌地图管理面板中设置 Google Api 密钥。';
