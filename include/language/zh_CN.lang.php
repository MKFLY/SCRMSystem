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



$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => '中文(简体) Chinese (Simplified) - zh_CN',
    'moduleList' => array(
        'Home' => '首页',
        'ResourceCalendar' => '资源日历',
        'Contacts' => '联系人',
        'Accounts' => '客户',
        'Alerts' => '警报',
        'Opportunities' => '商业机会',
        'Cases' => '客户反馈',
        'Notes' => '备忘录',
        'Calls' => '电话',
        'TemplateSectionLine' => '模板部件',
        'Calls_Reschedule' => '电话重排',
        'Emails' => '电子邮件',
        'EAPM' => '外部账户',
        'Meetings' => '会议',
        'Tasks' => '任务',
        'Calendar' => '日程安排',
        'Leads' => '潜在客户',
        'Currencies' => '货币',
        'Activities' => '活动',
        'Bugs' => 'Bugs',
        'Feeds' => 'RSS',
        'iFrames' => '我的站点',
        'TimePeriods' => '时间段',
        'ContractTypes' => '合同类型',
        'Schedulers' => '任务计划',
        'Project' => '项目',
        'ProjectTask' => '项目任务',
        'Campaigns' => '营销活动',
        'CampaignLog' => '营销活动日志',
        'Documents' => '文档',
        'DocumentRevisions' => '文档版本',
        'Connectors' => '连接器',
        'Roles' => '角色',
        'Notifications' => '通知提醒',
        'Sync' => '同步',
        'Users' => '用户',
        'Employees' => '员工',
        'Administration' => '系统管理',
        'ACLRoles' => '角色',
        'InboundEmail' => '邮件接收账户',
        'Releases' => '版本',
        'Prospects' => '目标对象',
        'Queues' => '队列',
        'EmailMarketing' => '邮件营销',
        'EmailTemplates' => '邮件模板',
        'ProspectLists' => '目标群体',
        'SavedSearch' => '已保存的筛选',
        'UpgradeWizard' => '更新向导',
        'Trackers' => '追踪器',
        'TrackerSessions' => '追踪器会话',
        'TrackerQueries' => '追踪器查询',
        'FAQ' => '常见问题',
        'Newsletters' => '新闻稿',
        'SugarFeed' => 'Feed',
        'SugarFavorites' => '收藏夹',

        'OAuthKeys' => 'OAuth Consumer Keys',
        'OAuthTokens' => 'OAuth Tokens',
    ),

    'moduleListSingular' => array(
        'Home' => '首页',
        'Dashboard' => '仪表盘',
        'Contacts' => '联系人',
        'Accounts' => '客户',
        'Opportunities' => '商业机会',
        'Cases' => '客户反馈',
        'Notes' => '备忘录',
        'Calls' => '电话',
        'Emails' => '电子邮件',
        'EmailTemplates' => '邮件模板',
        'Meetings' => '会议',
        'Tasks' => '任务',
        'Calendar' => '日程安排',
        'Leads' => '潜在客户',
        'Activities' => '活动',
        'Bugs' => 'Bug',
        'KBDocuments' => '知识库文档',
        'Feeds' => 'RSS',
        'iFrames' => '我的站点',
        'TimePeriods' => '时间段',
        'Project' => '项目',
        'ProjectTask' => '项目任务',
        'Prospects' => '目标对象',
        'Campaigns' => '营销活动',
        'Documents' => '文档',
        'Sync' => '同步',
        'Users' => '用户',
        'SugarFavorites' => '收藏夹',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => '是',
        '2' => '否',
    ),

    //e.g. en francais 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => '分析师',
        'Competitor' => '竞争对手',
        'Customer' => '客户',
        'Integrator' => '系统集成商',
        'Investor' => '投资者',
        'Partner' => '合作伙伴',
        'Press' => '出版商',
        'Prospect' => '目标对象',
        'Reseller' => '经销商',
        'Other' => '其他',
    ),
    //e.g. en espanol 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => '服裝',
        'Banking' => '银行',
        'Biotechnology' => '生物技术',
        'Chemicals' => '化学制品',
        'Communications' => '通讯',
        'Construction' => '建筑',
        'Consulting' => '咨询',
        'Education' => '教育',
        'Electronics' => '电子',
        'Energy' => '能源',
        'Engineering' => '工程',
        'Entertainment' => '文化',
        'Environmental' => '环境',
        'Finance' => '金融',
        'Government' => '政府机构',
        'Healthcare' => '医疗保健',
        'Hospitality' => '酒店',
        'Insurance' => '保险',
        'Machinery' => '机械',
        'Manufacturing' => '制造业',
        'Media' => '媒体',
        'Not For Profit' => '非盈利机构',
        'Recreation' => '休闲',
        'Retail' => '零售',
        'Shipping' => '物流',
        'Technology' => '科技',
        'Telecommunications' => '电信',
        'Transportation' => '运输',
        'Utilities' => '公用事业',
        'Other' => '其他',
    ),
    'lead_source_default_key' => '自产',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => '陌生电访',
        'Existing Customer' => '现有客户',
        'Self Generated' => '自产',
        'Employee' => '员工',
        'Partner' => '合作伙伴',
        'Public Relations' => '公共关系',
        'Direct Mail' => '邮件广告',
        'Conference' => '研讨会',
        'Trade Show' => '商业会展',
        'Web Site' => '网站',
        'Word of mouth' => '口碑',
        'Email' => '电子邮件',
        'Campaign' => '营销活动',
        'Other' => '其他',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => '现有业务',
        'New Business' => '新业务',
    ),
    'roi_type_dom' => array(
        'Revenue' => '收入',
        'Investment' => '投入',
        'Expected_Revenue' => '预计收入',
        'Budget' => '预算',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => '主要决策者',
        'Business Decision Maker' => '业务决策者',
        'Business Evaluator' => '业务评估员',
        'Technical Decision Maker' => '技术决策者',
        'Technical Evaluator' => '技术评估员',
        'Executive Sponsor' => '上级主管',
        'Influencer' => '影响者',
        'Other' => '其他',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => '主要联系人',
        'Alternate Contact' => '其他联系人',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => '货到15天付款',
        'Net 30' => '货到30天付款',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => '寻找探询',
        'Qualification' => '鉴定客户',
        'Needs Analysis' => '需求分析',
        'Value Proposition' => '介绍展示',
        'Id. Decision Makers' => '确定决策',
        'Perception Analysis' => '价值认知',
        'Proposal/Price Quote' => '方案报价',
        'Negotiation/Review' => '异议协商',
        'Closed Won' => '成单',
        'Closed Lost' => '丢单',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => '电话',
        'Meeting' => '会议',
        'Task' => '任务',
        'Email' => '电子邮件',
        'Note' => '备忘录',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => '先生',
        'Ms.' => '女士',
        'Mrs.' => '夫人',
        'Miss' => '小姐',
        'Dr.' => '博士',
        'Prof.' => '教授',
    ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '提前 1 分钟',
        300 => '提前 5 分钟',
        600 => '提前 10 分钟',
        900 => '提前 15 分钟',
        1800 => '提前 30 分钟',
        3600 => '提前 1 小时',
        7200 => '提前 2 小时',
        10800 => '提前 3 小时',
        18000 => '提前 5 小时',
        86400 => '提前 1 天',
    ),

    'task_priority_default' => '中',
    'task_priority_dom' => array(
        'High' => '高',
        'Medium' => '中',
        'Low' => '低',
    ),
    'task_status_default' => '未开始',
    'task_status_dom' => array(
        'Not Started' => '未开始',
        'In Progress' => '进行中',
        'Completed' => '已完成',
        'Pending Input' => '待输入',
        'Deferred' => '延期',
    ),
    'meeting_status_default' => '已计划',
    'meeting_status_dom' => array(
        'Planned' => '已计划',
        'Held' => '已举办',
        'Not Held' => '未举办',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => '其他',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => '已计划',
    'call_status_dom' => array(
        'Planned' => '已计划',
        'Held' => '已举办',
        'Not Held' => '未举办',
    ),
    'call_direction_default' => '呼出',
    'call_direction_dom' => array(
        'Inbound' => '呼入',
        'Outbound' => '呼出',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => '新增',
        'Assigned' => '已分配',
        'In Process' => '处理中',
        'Converted' => '已转化',
        'Recycled' => '已回收',
        'Dead' => '已终止',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => '高',
        'P2' => '中',
        'P3' => '低',
    ),
    'user_type_dom' => array(
        'RegularUser' => '普通用户',
        'Administrator' => '管理员',
    ),
    'user_status_dom' => array(
        'Active' => '启用',
        'Inactive' => '停用',
    ),
    'employee_status_dom' => array(
        'Active' => '活动',
        'Terminated' => '离职',
        'Leave of Absence' => '休假',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => '高',
        'Medium' => '中',
        'Low' => '低',
    ),
    'project_task_priority_default' => '中',

    'project_task_status_options' => array(
        'Not Started' => '未开始',
        'In Progress' => '进行中',
        'Completed' => '已完成',
        'Pending Input' => '待输入',
        'Deferred' => '延期',
    ),
    'project_task_utilization_options' => array(
        '0' => '无',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => '草稿',
        'In Review' => '审查中',
        'Underway' => '进行中',
        'On_Hold' => '待确认',
        'Completed' => '已完成',
    ),
    'project_status_default' => '草稿',

    'project_duration_units_dom' => array(
        'Days' => '天',
        'Hours' => '小时',
    ),

    'activity_status_type_dom' => array(
        '' => '--无--',
        'active' => '启用',
        'inactive' => '停用',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => '客户',
    'record_type_display' => array(
        '' => '',
        'Accounts' => '客户',
        'Opportunities' => '商业机会',
        'Cases' => '客户反馈',
        'Leads' => '潜在客户',
        'Contacts' => '联系人', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Bug',
        'Project' => '项目',

        'Prospects' => '目标对象',
        'ProjectTask' => '项目任务',

        'Tasks' => '任务',

    ),

    'record_type_display_notes' => array(
        'Accounts' => '客户',
        'Contacts' => '联系人',
        'Opportunities' => '商业机会',
        'Tasks' => '任务',
        'Emails' => '电子邮件',

        'Bugs' => 'Bug',
        'Project' => '项目',
        'ProjectTask' => '项目任务',
        'Prospects' => '目标对象',
        'Cases' => '客户反馈',
        'Leads' => '潜在客户',

        'Meetings' => '会议',
        'Calls' => '电话',
    ),

    'parent_type_display' => array(
        'Accounts' => '客户',
        'Contacts' => '联系人',
        'Tasks' => '任务',
        'Opportunities' => '商业机会',

        'Bugs' => 'Bug',
        'Cases' => '客户反馈',
        'Leads' => '潜在客户',

        'Project' => '项目',
        'ProjectTask' => '项目任务',

        'Prospects' => '目标对象',

    ),

    'issue_priority_default_key' => '中',
    'issue_priority_dom' => array(
        'Urgent' => '紧急',
        'High' => '高',
        'Medium' => '中',
        'Low' => '低',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => '已接受',
        'Duplicate' => '重复',
        'Closed' => '已关闭',
        'Out of Date' => '已过期',
        'Invalid' => '无效',
    ),

    'issue_status_default_key' => '新建',
    'issue_status_dom' => array(
        'New' => '新增',
        'Assigned' => '已分配',
        'Closed' => '已关闭',
        'Pending' => '待审',
        'Rejected' => '已拒绝',
    ),

    'bug_priority_default_key' => '中',
    'bug_priority_dom' => array(
        'Urgent' => '紧急',
        'High' => '高',
        'Medium' => '中',
        'Low' => '低',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => '已接受',
        'Duplicate' => '重复',
        'Fixed' => '已修复',
        'Out of Date' => '已过期',
        'Invalid' => '无效',
        'Later' => '推迟',
    ),
    'bug_status_default_key' => '新建',
    'bug_status_dom' => array(
        'New' => '新增',
        'Assigned' => '已分配',
        'Closed' => '已关闭',
        'Pending' => '待审',
        'Rejected' => '已拒绝',
    ),
    'bug_type_default_key' => 'Bug',
    'bug_type_dom' => array(
        'Defect' => '缺陷',
        'Feature' => '特性',
    ),
    'case_type_dom' => array(
        'Administration' => '系统管理',
        'Product' => '产品',
        'User' => '用户',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => '内部',
        'Forum' => '论坛',
        'Web' => '网站',
        'InboundEmail' => '电子邮件',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => '客户',
        'Activities' => '活动',
        'Bugs' => 'Bugs',
        'Calendar' => '日程安排',
        'Calls' => '电话',
        'Campaigns' => '营销活动',
        'Cases' => '客户反馈',
        'Contacts' => '联系人',
        'Currencies' => '货币',
        'Dashboard' => '仪表盘',
        'Documents' => '文档',
        'Emails' => '电子邮件',
        'Feeds' => 'Feeds',
        'Forecasts' => '销售预测',
        'Help' => '帮助',
        'Home' => '首页',
        'Leads' => '潜在客户',
        'Meetings' => '会议',
        'Notes' => '备忘录',
        'Opportunities' => '商业机会',
        'Outlook Plugin' => 'Outlook 插件',
        'Projects' => '项目',
        'Quotes' => '报价',
        'Releases' => '版本',
        'RSS' => 'RSS',
        'Studio' => '工作室',
        'Upgrade' => '更新',
        'Users' => '用户',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => '计划中',
        'Active' => '启用',
        'Inactive' => '停用',
        'Complete' => '完成',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => '电话销售',
        'Mail' => '信件',
        'Email' => '电子邮件',
        'Print' => '印刷',
        'Web' => '网络',
        'Radio' => '广播',
        'Television' => '电视',
        'NewsLetter' => '新闻稿',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => '每周',
        'Monthly' => '每月',
        'Quarterly' => '每季',
        'Annually' => '每年',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => '1月',
        '2' => '2月',
        '3' => '3月',
        '4' => '4月',
        '5' => '5月',
        '6' => '6月',
        '7' => '7月',
        '8' => '8月',
        '9' => '9月',
        '10' => '10月',
        '11' => '11月',
        '12' => '12月',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
        '9' => '9',
        '10' => '10',
        '11' => '11',
        '12' => '12',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => '星期日',
        '2' => '星期一',
        '3' => '星期二',
        '4' => '星期三',
        '5' => '星期四',
        '6' => '星期五',
        '7' => '星期六',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => '周日',
        '2' => '周一',
        '3' => '周二',
        '4' => '周三',
        '5' => '周四',
        '6' => '周五',
        '7' => '周六',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => '上午',
        'pm' => '下午',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => '上午',
        'PM' => '下午',
    ),

    'dom_email_types' => array(
        'out' => '已发送',
        'archived' => '已存档',
        'draft' => '草稿',
        'inbound' => '已接收',
        'campaign' => '营销活动',
    ),
    'dom_email_status' => array(
        'archived' => '已存档',
        'closed' => '已关闭',
        'draft' => '草稿',
        'read' => '已读',
        'replied' => '已回复',
        'sent' => '已发送',
        'send_error' => '发送错误',
        'unread' => '未读',
    ),
    'dom_email_archived_status' => array(
        'archived' => '已存档',
    ),

    'dom_email_server_type' => array(
        '' => '-无-',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--无--',
        'createcase' => '创建客户反馈',
        'bounce' => '退信处理',
    ),
    'dom_email_distribution' => array(
        '' => '--无--',
        'direct' => '直接分配',
        'roundRobin' => '轮询',
        'leastBusy' => '最少忙碌',
    ),
    'dom_email_bool' => array(
        'bool_true' => '是',
        'bool_false' => '否',
    ),
    'dom_int_bool' => array(
        1 => '是',
        0 => '否',
    ),
    'dom_switch_bool' => array(
        'on' => '是',
        'off' => '否',
        '' => '无',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM 邮件客户端',
        'mailto' => '外部邮件客户端',
    ),

    'dom_editor_type' => array(
        'none' => '无',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => '默认格式',
        'html' => 'HTML 邮件',
        'plain' => '纯文本邮件',
    ),

    'schedulers_times_dom' => array(
        'not run' => '超时，未执行',
        'ready' => '就绪',
        'in progress' => '执行中',
        'failed' => '失败',
        'completed' => '已完成',
        'no curl' => '未运行：未检测到 cURL 库',
    ),

    'scheduler_status_dom' => array(
        'Active' => '启用',
        'Inactive' => '停用',
    ),

    'scheduler_period_dom' => array(
        'min' => '分钟',
        'hour' => '小时',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => '营销活动',
        'Knowledege Base' => '知识库',
        'Sales' => '销售',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => '已存档',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => '市场营销',
        'Product Brochures' => '产品手册',
        'FAQ' => '常见问题',
    ),

    'document_status_dom' => array(
        'Active' => '启用',
        'Draft' => '草稿',
        'FAQ' => '常见问题',
        'Expired' => '已过期',
        'Under Review' => '审查中',
        'Pending' => '待审',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => '邮件合并',
        'eula' => '最终用户许可协议',
        'nda' => '保密协议',
        'license' => '许可协议',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => '接受',
        'decline' => '拒绝',
        'tentative' => '暂定',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => '已接受',
        'decline' => '已拒绝',
        'tentative' => '暂定',
        'none' => '-无-',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => '无',
        'Daily' => '每天',
        'Weekly' => '每周',
        'Monthly' => '每月',
        'Yearly' => '每年',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => '天',
        'Weekly' => '周',
        'Monthly' => '月',
        'Yearly' => '年',
    ),

    'duration_dom' => array(
        '' => '无',
        '900' => '15 分钟',
        '1800' => '30 分钟',
        '2700' => '45 分钟',
        '3600' => '1 小时',
        '5400' => '1.5 小时',
        '7200' => '2 小时',
        '10800' => '3 小时',
        '21600' => '6 小时',
        '86400' => '1 天',
        '172800' => '2 天',
        '259200' => '3 天',
        '604800' => '1 周',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => '默认',
        'seed' => '种子',
        'exempt_domain' => '阻止列表 – 根据域',
        'exempt_address' => '阻止列表 – 根据 Email 地址',
        'exempt' => '阻止列表 – 根据 ID',
        'test' => '测试',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => '启用',
        'inactive' => '停用',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => '已发送/已尝试',
        'send error' => '退信/其他',
        'invalid email' => '退信/无效地址',
        'link' => '链接点击',
        'viewed' => '已查看',
        'removed' => '选择退出',
        'lead' => '已创建潜在顾客',
        'contact' => '已创建联系人',
        'blocked' => '被限制',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => '联系人',
        'Users' => '用户',
        'Prospects' => '目标对象',
        'Leads' => '潜在客户',
        'Accounts' => '客户',
    ),
    'merge_operators_dom' => array(
        'like' => '包含',
        'exact' => '精确',
        'start' => '开始为',
    ),

    'custom_fields_importable_dom' => array(
        'true' => '是',
        'false' => '否',
        'required' => '必填',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => '已停用',
        1 => '已启用',
    ),

    'projects_priority_options' => array(
        'high' => '高',
        'medium' => '中',
        'low' => '低',
    ),

    'projects_status_options' => array(
        'notstarted' => '未开始',
        'inprogress' => '进行中',
        'completed' => '已完成',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => '展开图例',
        'collapselegend' => '折叠图例',
        'clickfordrilldown' => '点击查看明细',
        'detailview' => '详细信息',
        'piechart' => '饼图',
        'groupchart' => '组图',
        'stackedchart' => '堆积图',
        'barchart' => '条形图',
        'horizontalbarchart' => '水平条形图',
        'linechart' => '折线图',
        'noData' => '数据不可用',
        'print' => '打印',
        'pieWedgeName' => '段',
    ),
    'release_status_dom' => array(
        'Active' => '启用',
        'Inactive' => '停用',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => '单引号(&#39;)',
        '"' => '双引号(&#34;)',
        '' => '无',
        'other' => '其他',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => '其他',
    ),
    'link_target_dom' => array(
        '_blank' => '新窗口',
        '_self' => '当前窗口',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => '从不',
        '30' => '每隔 30 秒',
        '60' => '每隔 1 分钟',
        '180' => '每隔 3 分钟',
        '300' => '每隔 5 分钟',
        '600' => '每隔 10 分钟',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => '从不',
        '30' => '每隔 30 秒',
        '60' => '每隔 1 分钟',
        '180' => '每隔 3 分钟',
        '300' => '每隔 5 分钟',
        '600' => '每隔 10 分钟',
    ),
    'date_range_search_dom' => array(
        '=' => '等于',
        'not_equal' => '不等于',
        'greater_than' => '之后',
        'less_than' => '之前',
        'last_7_days' => '过去 7 天',
        'next_7_days' => '未来 7 天',
        'last_30_days' => '过去 30 天',
        'next_30_days' => '未来 30 天',
        'last_month' => '上月',
        'this_month' => '本月',
        'next_month' => '下月',
        'last_year' => '去年',
        'this_year' => '今年',
        'next_year' => '明年',
        'between' => '在范围内',
    ),
    'numeric_range_search_dom' => array(
        '=' => '等于',
        'not_equal' => '不等于',
        'greater_than' => '大于',
        'greater_than_equals' => '大于等于',
        'less_than' => '小于',
        'less_than_equals' => '小于等于',
        'between' => '在范围内',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => '复制',
        'move' => '移动',
        'donothing' => '无',
    ),
);

$app_strings = array(
    'LBL_TOUR_NEXT' => '下一步',
    'LBL_TOUR_SKIP' => '跳过',
    'LBL_TOUR_BACK' => '返回',
    'LBL_TOUR_TAKE_TOUR' => '参观一下',
    'LBL_MOREDETAIL' => '更多信息' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => '编辑' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => '查看' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => '快速筛选' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => '添加' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => '添加 Email 地址' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => '隐藏/显示' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => '删除' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => '清除' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => '移除' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => '移除 Email 地址' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => '退订',
    'LBL_ID_FF_INVALID' => '标记为无效',
    'LBL_ADD' => '添加' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => '公司 Logo' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => '连接器弹出窗口',
    'LBL_CLOSEINLINE' => '关闭',
    'LBL_VIEWINLINE' => '查看',
    'LBL_INFOINLINE' => '信息',
    'LBL_PRINT' => '打印',
    'LBL_HELP' => '帮助',
    'LBL_ID_FF_SELECT' => '选择',
    'DEFAULT' => '基本', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SORT' => '排序',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => '使用 SSL/TLS',
    'LBL_NO_ACTION' => '没有此动作名称：%s',
    'LBL_NO_SHORTCUT_MENU' => '没有可执行的动作。',
    'LBL_NO_DATA' => '无数据',

    'LBL_ERROR_UNDEFINED_BEHAVIOR' => '发生了意外的错误。', //PR 3669
    'LBL_ERROR_UNHANDLED_VALUE' => '一个未正确处理的值正在阻止进程运行。', //PR 3669
    'LBL_ERROR_UNUSABLE_VALUE' => '一个不可用的值正在阻止进程运行。', //PR 3669
    'LBL_ERROR_INVALID_TYPE' => '无效的值类型。', //PR 3669

    'LBL_ROUTING_FLAGGED' => '标记设置',
    'LBL_NOTIFICATIONS' => '通知提醒',

    'LBL_ROUTING_TO' => '收件人',
    'LBL_ROUTING_TO_ADDRESS' => '收件人地址',
    'LBL_ROUTING_WITH_TEMPLATE' => '邮件模板',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => '此记录包含办公电话以及地址信息。如果用已选客户的办公电话和地址覆盖这些值，请点击 "确定"。如果要保留当前的信息，请点击 "取消"。',
    'LBL_DROP_HERE' => '[拖放到此处]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => '填入 Gmail 默认值',
    'LBL_EMAIL_ACCOUNTS_NAME' => '名称',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => '邮件发送账户',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => '密码',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => '端口',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => '服务器地址',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => '用户名',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => '默认',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => '警告：邮件发送账户缺少用户名和密码。',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => '设置邮件接收账户',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => '设置邮件发送账户',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => '添加',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => '清除',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => '收件人',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => '抄送',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => '密送',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => '收件人/抄送/密送',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Email 地址',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => '筛选',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => '名称',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => '未找到地址',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => '保存并添加',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => '选择收件人',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => '通讯录',
    'LBL_EMAIL_REPORTS_TITLE' => '报表',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => '警告！您要删除的邮件发送账户已经与一个邮件接收账户绑定，您确定要继续？',
    'LBL_EMAIL_ADDRESSES' => 'Email 地址',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Email 地址',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR' => '导入',
    'LBL_EMAIL_ASSIGNMENT' => '分配',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => '添加附件',
    'LBL_EMAIL_ATTACHMENT' => '邮件附件',
    'LBL_EMAIL_ATTACHMENTS' => '来自本地',
    'LBL_EMAIL_ATTACHMENTS2' => '来自文档',
    'LBL_EMAIL_ATTACHMENTS3' => '模板附件',
    'LBL_EMAIL_ATTACHMENTS_FILE' => '文件',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => '文档',
    'LBL_EMAIL_BCC' => '密送',
    'LBL_EMAIL_CANCEL' => '取消',
    'LBL_EMAIL_CC' => '抄送',
    'LBL_EMAIL_CHARSET' => '字符集',
    'LBL_EMAIL_CHECK' => '收信',
    'LBL_EMAIL_CHECKING_NEW' => '正在查收新邮件',
    'LBL_EMAIL_CHECKING_DESC' => '请稍候...<br /><br />如果是首次查收邮件，可能需要一些时间。',
    'LBL_EMAIL_CLOSE' => '关闭',
    'LBL_EMAIL_COFFEE_BREAK' => '正在检查新邮件。<br /><br />如果邮件账户邮件较多可能花费更多时间。',

    'LBL_EMAIL_COMPOSE' => '写信',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => '请填写收件人。',
    'LBL_EMAIL_COMPOSE_NO_BODY' => '此邮件未填写正文。您确定要继续发送？',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => '此邮件未填写主题。您确定要继续发送？',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '未填写主题',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => '请填写有效的邮件地址',

    'LBL_EMAIL_CONFIRM_CLOSE' => '您确定要放弃此邮件？',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => '您确定要删除此签名？',

    'LBL_EMAIL_SENT_SUCCESS' => '已发送',

    'LBL_EMAIL_CREATE_NEW' => '--保存后创建--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => '多用户',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => '空',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => '发送日期',
    'LBL_EMAIL_DATE_TODAY' => '今天',
    'LBL_EMAIL_DELETE' => '删除',
    'LBL_EMAIL_DELETE_CONFIRM' => '是否删除所选邮件？',
    'LBL_EMAIL_DELETE_SUCCESS' => '已成功删除电子邮件。',
    'LBL_EMAIL_DELETING_MESSAGE' => '正在删除',
    'LBL_EMAIL_DETAILS' => '详细信息',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => '日常工作中仅使用主邮件地址联系联系人。',

    'LBL_EMAIL_EMPTYING_TRASH' => '清空垃圾箱',
    'LBL_EMAIL_DELETING_OUTBOUND' => '正在删除邮件发送账户',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => '正在清除缓存文件',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => '文件夹名称必须唯一且不为空，请重试。',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => '无法删除文件夹，此文件夹或子节点包含邮件或有邮箱与之相关联。',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => '无法确定从上下文中的文件夹，请重试。',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => '请检查您的设置。',
    'LBL_EMAIL_ERROR_DESC' => '检测到错误：',
    'LBL_EMAIL_DELETE_ERROR_DESC' => '您没有访问权限，请联系管理员。',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM 文件夹名称必须唯一。',
    'LBL_EMAIL_ERROR_EMPTY' => '请输入搜索条件。',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => '出现错误',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => '从服务器中移除的邮件',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => '邮件已从服务器中删除或移动到不同的文件夹',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => '无法连接到邮件服务器，请联系您的管理员。',
    'LBL_EMAIL_ERROR_MOVE' => '当前不支持在邮件服务器或邮件账户之间移动邮件。',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => '移动错误',
    'LBL_EMAIL_ERROR_NAME' => '必须填写名称。',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => '必须设置发件人地址，请输入可用的发件人地址。',
    'LBL_EMAIL_ERROR_NO_FILE' => '请提供一个文件。',
    'LBL_EMAIL_ERROR_SERVER' => '必须填写邮件服务器地址。',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => '邮件账户可能未被保存。',
    'LBL_EMAIL_ERROR_TIMEOUT' => '与邮件服务器通信时出错。',
    'LBL_EMAIL_ERROR_USER' => '必须填写登录名。',
    'LBL_EMAIL_ERROR_PORT' => '必须填写邮件服务器端口。',
    'LBL_EMAIL_ERROR_PROTOCOL' => '必须填写邮件接收协议。',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => '必须设置受监视的文件夹。',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => '必须指定垃圾箱。',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => '当前信息不可用',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => '未指定邮件发送账户',
    'LBL_EMAIL_ERROR_SENDING' => '发送邮件时出错，请联系管理员以寻求帮助。',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0',        null, null, '.gif', '') . '文件夹',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder',        'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ADD' => '添加',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => '添加文件夹',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => '重命名文件夹',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => '保存',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => '添加此文件夹到',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => '此文件夹无法更改',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => '您确定要删除此文件夹及其所有文件？\n此过程无法撤消。',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => '新建文件夹',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => '请在执行此操作之前，选择一个文件夹。',
    'LBL_EMAIL_FOLDERS_TITLE' => '文件夹管理',

    'LBL_EMAIL_FORWARD' => '转发',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => '已下载 [[count]] / [[total]] 邮件',
    'LBL_EMAIL_FROM' => '发件人',
    'LBL_EMAIL_GROUP' => '群组',
    'LBL_EMAIL_UPPER_CASE_GROUP' => '组',
    'LBL_EMAIL_HOME_FOLDER' => '首页',
    'LBL_EMAIL_IE_DELETE' => '删除邮件账户',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => '删除签名',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => '您确定要删除此邮件账户？',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => '删除成功。',
    'LBL_EMAIL_IE_SAVE' => '保存邮件账户信息',
    'LBL_EMAIL_IMPORTING_EMAIL' => '正在导入邮件',
    'LBL_EMAIL_IMPORT_EMAIL' => '导入邮件',
    'LBL_EMAIL_IMPORT_SETTINGS' => '导入设置',
    'LBL_EMAIL_INVALID' => '无效',
    'LBL_EMAIL_LOADING' => '正在加载...',
    'LBL_EMAIL_MARK' => '标记',
    'LBL_EMAIL_MARK_FLAGGED' => '作为标记',
    'LBL_EMAIL_MARK_READ' => '已读',
    'LBL_EMAIL_MARK_UNFLAGGED' => '未标记',
    'LBL_EMAIL_MARK_UNREAD' => '未读',
    'LBL_EMAIL_ASSIGN_TO' => '负责人',

    'LBL_EMAIL_MENU_ADD_FOLDER' => '创建文件夹',
    'LBL_EMAIL_MENU_COMPOSE' => '写信',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => '删除文件夹',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => '清空垃圾箱',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => '同步',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => '清除缓存',
    'LBL_EMAIL_MENU_REMOVE' => '移除',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => '重命名文件夹',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => '正在重命名文件夹',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => '在尝试此操作前请先选择。',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => '创建一个文件夹',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => '删除一个文件夹',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => '清空垃圾箱中的所有内容',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => '将这些邮件标记为已读',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => '将这些邮件设为未标记',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => '重命名一个文件夹',

    'LBL_EMAIL_MESSAGES' => '消息',

    'LBL_EMAIL_ML_NAME' => '列表名称',
    'LBL_EMAIL_ML_ADDRESSES_1' => '已选列表地址',
    'LBL_EMAIL_ML_ADDRESSES_2' => '可用列表地址',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl + 单击</b> 选择多个<br />(Mac用户使用 <b>CMD + 单击</b>)',

    'LBL_EMAIL_NO' => '否',
    'LBL_EMAIL_NOT_SENT' => '系统无法处理您的请求，请联系管理员。',

    'LBL_EMAIL_OK' => '确定',
    'LBL_EMAIL_ONE_MOMENT' => '请稍候...',
    'LBL_EMAIL_OPEN_ALL' => '打开多个邮件',
    'LBL_EMAIL_OPTIONS' => '邮件选项',
    'LBL_EMAIL_QUICK_COMPOSE' => '快速撰写',
    'LBL_EMAIL_OPT_OUT' => '退出邮件列表',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => '选择退出和无效',
    'LBL_EMAIL_PERFORMING_TASK' => '正在运行任务...',
    'LBL_EMAIL_PRIMARY' => '主要',
    'LBL_EMAIL_PRINT' => '打印',

    'LBL_EMAIL_QC_BUGS' => 'Bug',
    'LBL_EMAIL_QC_CASES' => '客户反馈',
    'LBL_EMAIL_QC_LEADS' => '潜在客户',
    'LBL_EMAIL_QC_CONTACTS' => '联系人',
    'LBL_EMAIL_QC_TASKS' => '任务',
    'LBL_EMAIL_QC_OPPORTUNITIES' => '商业机会',
    'LBL_EMAIL_QUICK_CREATE' => '快速创建',

    'LBL_EMAIL_REBUILDING_FOLDERS' => '正在重建文件夹',
    'LBL_EMAIL_RELATE_TO' => '关联到',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => '查看关联',
    'LBL_EMAIL_RECORD' => '邮件记录',
    'LBL_EMAIL_REMOVE' => '移除',
    'LBL_EMAIL_REPLY' => '回复',
    'LBL_EMAIL_REPLY_ALL' => '回复全部',
    'LBL_EMAIL_REPLY_TO' => '回复',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => '正在检索邮件',
    'LBL_EMAIL_RETRIEVING_RECORD' => '正在检索邮件记录',
    'LBL_EMAIL_SELECT_ONE_RECORD' => '请选择一条邮件记录',
    'LBL_EMAIL_RETURN_TO_VIEW' => '是否返回？',
    'LBL_EMAIL_REVERT' => '还原',
    'LBL_EMAIL_RELATE_EMAIL' => '关联邮件',

    'LBL_EMAIL_RULES_TITLE' => '邮件规则管理',

    'LBL_EMAIL_SAVE' => '保存',
    'LBL_EMAIL_SAVE_AND_REPLY' => '保存并回复',
    'LBL_EMAIL_SAVE_DRAFT' => '保存草稿',
    'LBL_EMAIL_DRAFT_SAVED' => '草稿已保存',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null,    '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null,        null, '.gif', ''),
    'LBL_EMAIL_SEARCH_DATE_FROM' => '开始日期',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => '结束日期',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => '未找到任何结果。',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => '搜索结果',

    'LBL_EMAIL_SELECT' => '选择',

    'LBL_EMAIL_SEND' => '发送',
    'LBL_EMAIL_SENDING_EMAIL' => '正在发送邮件',

    'LBL_EMAIL_SETTINGS' => '设置',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => '邮件账户',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => '清除表单',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => '检查间隔',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => '发件人地址',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => '接收测试邮件的地址',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => '发件人名称',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => '回复邮件地址',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => '同步所有邮件账户',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => '已经通过此邮件发送账户发送了一封测试邮件，请检查受否收到测试邮件。',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => '是否执行完全同步？\n可能需要几分钟时间。',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => '按住 Shift 键或 Ctrl 键可选择多个文件夹。',
    'LBL_EMAIL_SETTINGS_GENERAL' => '常规设置',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => '创建群组文件夹',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => '编辑群组文件夹',

    'LBL_EMAIL_SETTINGS_NAME' => '名称',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => '设置收件箱中每页显示的邮件数目，此设置可能需要刷新页面才能生效。',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => '检索邮件账户',
    'LBL_EMAIL_SETTINGS_SAVED' => '设置已保存。',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => '以纯文本发送',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => '每页邮件数量',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => '布局设置',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => '首选项',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => '可用的用户文件夹',
    'LBL_EMAIL_ERROR_PREPEND' => '错误：',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => '选定的邮件发送账户无效，请检查设置或选择另外一个邮件发送账户。',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => '未设置邮件发送账户，请设置邮件发送账户或选择现有邮件账户发送。',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => '默认签名',
    'LBL_EMAIL_SIGNATURES' => '签名',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => '其他',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[远程文件夹]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[本地文件夹]',
    'LBL_EMAIL_SUBJECT' => '主题',
    'LBL_EMAIL_SUCCESS' => '成功',
    'LBL_EMAIL_SUGAR_FOLDER' => 'SuiteCRM 文件夹',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => '邮件模板的正文为空',
    'LBL_EMAIL_TEMPLATES' => '邮件模板',
    'LBL_EMAIL_TO' => '收件人',
    'LBL_EMAIL_VIEW' => '视图',
    'LBL_EMAIL_VIEW_HEADERS' => '显示标题',
    'LBL_EMAIL_VIEW_RAW' => '显示原始邮件',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => '使用 POP3 协议不支持此功能。',
    'LBL_DEFAULT_LINK_TEXT' => '默认链接文本',
    'LBL_EMAIL_YES' => '是',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => '测试设置',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => '测试邮件已发送',
    'LBL_EMAIL_MESSAGE_NO' => '邮件编号', // Counter. Message number xx
    'LBL_EMAIL_IMPORT_SUCCESS' => '导入成功',
    'LBL_EMAIL_IMPORT_FAIL' => '导入失败，邮件已导入或已从服务器删除',

    'LBL_LINK_NONE' => '无',
    'LBL_LINK_ALL' => '全部',
    'LBL_LINK_RECORDS' => '记录',
    'LBL_LINK_SELECT' => '选择',
    'LBL_LINK_ACTIONS' => '动作', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CLOSE_ACTIVITY_HEADER' => '确认',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => '您确定要关闭此 #module# ？',
    'LBL_INVALID_FILE_EXTENSION' => '无效的文件扩展名',

    'ERR_AJAX_LOAD' => '出现错误：',
    'ERR_AJAX_LOAD_FAILURE' => '处理您的请求时出错，请稍后再试。',
    'ERR_AJAX_LOAD_FOOTER' => '如果此错误仍然存在，请联系管理员禁用此模块的 AJAX。',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => '小数点符号和千分符不能相同。\n\n请更改它们的值。',
    'ERR_DELETE_RECORD' => '您必须指定记录编号才能删除。',
    'ERR_EXPORT_DISABLED' => '导出已禁用。',
    'ERR_EXPORT_TYPE' => '导出时出错',
    'ERR_INVALID_EMAIL_ADDRESS' => '无效的 email 地址',
    'ERR_INVALID_FILE_REFERENCE' => '无效的文件引用',
    'ERR_NO_HEADER_ID' => '此功能在这个主题中不可用。',
    'ERR_NOT_ADMIN' => '没有管理权限。',
    'ERR_MISSING_REQUIRED_FIELDS' => '缺少必填字段',
    'ERR_INVALID_REQUIRED_FIELDS' => '无效的必填字段',
    'ERR_INVALID_VALUE' => '无效的值：',
    'ERR_NO_SUCH_FILE' => '文件在系统中不存在',
    'ERR_NO_SINGLE_QUOTE' => '不能使用单引号',
    'ERR_NOTHING_SELECTED' => '继续之前请选择。',
    'ERR_SELF_REPORTING' => '用户不能向自己报告。',
    'ERR_SQS_NO_MATCH_FIELD' => '没有匹配字段',
    'ERR_SQS_NO_MATCH' => '没有匹配',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => '请为元数据定义在 displayParams 属性中指定 \'key\' 索引',
    'ERR_EXISTING_PORTAL_USERNAME' => '错误：门户名称已经分配给另一个联系人。',
    'ERR_COMPATIBLE_PRECISION_VALUE' => '数值与精度不匹配',
    'ERR_EXTERNAL_API_SAVE_FAIL' => '试图保存到外部客户时出错。',
    'ERR_NO_DB' => '无法连接到数据库。请参阅 suitecrm.log 错误日志文件以获取详细信息。',
    'ERR_DB_FAIL' => '数据库失败。请参阅 suitecrm.log 错误日志文件以获取详细信息。',
    'ERR_DB_VERSION' => 'SuiteCRM {0} 文件只能与 SuiteCRM {1} 数据库使用。',

    'LBL_ACCOUNT' => '客户',
    'LBL_ACCOUNTS' => '客户',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => '查看摘要',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => '查看摘要',
    'LBL_ADD_BUTTON' => '添加',
    'LBL_ADD_DOCUMENT' => '添加文档',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => '添加到目标群体',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => '添加联系人到目标群体',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => '点击关闭',
    'LBL_ADDITIONAL_DETAILS' => '更多详细信息',
    'LBL_ADMIN' => '系统管理',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => '存档',
    'LBL_ASSIGNED_TO_USER' => '负责人',
    'LBL_ASSIGNED_TO' => '负责人',
    'LBL_BACK' => '返回',
    'LBL_BILLING_ADDRESS' => '账单地址',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - 开源客户管理系统',
    'LBL_BUGS' => 'Bugs',
    'LBL_BY' => '由',
    'LBL_CALLS' => '电话',
    'LBL_CAMPAIGNS_SEND_QUEUED' => '发送队列中的营销活动邮件',
    'LBL_SUBMIT_BUTTON_LABEL' => '提交',
    'LBL_CASE' => '客户反馈',
    'LBL_CASES' => '客户反馈',
    'LBL_CHANGE_PASSWORD' => '更改密码',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => '全选',
    'LBL_CITY' => '城市',
    'LBL_CLEAR_BUTTON_LABEL' => '清除',
    'LBL_CLEAR_BUTTON_TITLE' => '清除',
    'LBL_CLEARALL' => '全不选',
    'LBL_CLOSE_BUTTON_TITLE' => '关闭', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => '关闭并创建', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => '关闭并创建', // As in closing a task
    'LBL_OPEN_ITEMS' => '进行中的条目',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => '写信',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => '写信',
    'LBL_SEARCH_DROPDOWN_YES' => '是',
    'LBL_SEARCH_DROPDOWN_NO' => '否',
    'LBL_CONTACT_LIST' => '联系人列表',
    'LBL_CONTACT' => '联系人',
    'LBL_CONTACTS' => '联系人',
    'LBL_CONTRACT' => '合同',
    'LBL_CONTRACTS' => '合同',
    'LBL_COUNTRY' => '国家',
    'LBL_CREATE_BUTTON_LABEL' => '创建', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CREATED_BY_USER' => '创建人',
    'LBL_CREATED_USER' => '创建人',
    'LBL_CREATED' => '创建人',
    'LBL_CURRENT_USER_FILTER' => '我的条目',
    'LBL_CURRENCY' => '货币',
    'LBL_DOCUMENTS' => '文档',
    'LBL_DATE_ENTERED' => '创建日期',
    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_EDIT_BUTTON' => '编辑',
    'LBL_DUPLICATE_BUTTON' => '复制',
    'LBL_DELETE_BUTTON' => '删除',
    'LBL_DELETE' => '删除',
    'LBL_DELETED' => '已删除',
    'LBL_DIRECT_REPORTS' => '直接报告',
    'LBL_DONE_BUTTON_LABEL' => '完成',
    'LBL_DONE_BUTTON_TITLE' => '完成',
    'LBL_FAVORITES' => '收藏夹',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => '请选择一个 vCard 文件',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard 没有此模块所需的必填字段。详细信息请参阅 suitecrm.log 日志。',
    'LBL_VCARD_ERROR_FILESIZE' => '上传文件大小超出了 HTML 表单中 30000 bytes 限制。',
    'LBL_VCARD_ERROR_DEFAULT' => '上传 vCard 文件时出现错误。详细信息请参阅 suitecrm.log 日志。',
    'LBL_IMPORT_VCARD' => '导入 vCard',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => '导入 vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => '导入 vCard',
    'LBL_VIEW_BUTTON' => '查看',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => '邮件发送 PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => '邮件发送 PDF',
    'LBL_EMAILS' => '电子邮件',
    'LBL_EMPLOYEES' => '员工',
    'LBL_ENTER_DATE' => '创建日期',
    'LBL_EXPORT' => '导出',
    'LBL_FAVORITES_FILTER' => '我的收藏夹',
    'LBL_GO_BUTTON_LABEL' => '执行',
    'LBL_HIDE' => '隐藏',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => '导入',
    'LBL_IMPORT_STARTED' => '开始导入：',
    'LBL_LAST_VIEWED' => '最近查看',
    'LBL_LEADS' => '潜在客户',
    'LBL_LESS' => '少于',
    'LBL_CAMPAIGN' => '营销活动',
    'LBL_CAMPAIGNS' => '营销活动',
    'LBL_CAMPAIGNLOG' => '营销活动日志',
    'LBL_CAMPAIGN_CONTACT' => '营销活动',
    'LBL_CAMPAIGN_ID' => '营销活动ID',
    'LBL_CAMPAIGN_NONE' => '无',
    'LBL_THEME' => '主题',
    'LBL_FOUND_IN_RELEASE' => '发现 Bug 的版本',
    'LBL_FIXED_IN_RELEASE' => '修复 Bug 的版本',
    'LBL_LIST_ACCOUNT_NAME' => '客户名称',
    'LBL_LIST_ASSIGNED_USER' => '负责人',
    'LBL_LIST_CONTACT_NAME' => '联系人',
    'LBL_LIST_CONTACT_ROLE' => '角色',
    'LBL_LIST_DATE_ENTERED' => '创建日期',
    'LBL_LIST_EMAIL' => 'Email 地址',
    'LBL_LIST_NAME' => '名称',
    'LBL_LIST_OF' => '的',
    'LBL_LIST_PHONE' => '电话',
    'LBL_LIST_RELATED_TO' => '关联到',
    'LBL_LIST_USER_NAME' => '用户名',
    'LBL_LISTVIEW_NO_SELECTED' => '请选择至少 1 条记录进行操作。',
    'LBL_LISTVIEW_TWO_REQUIRED' => '请选择至少 2 条记录进行操作。',
    'LBL_LISTVIEW_OPTION_SELECTED' => '已选的记录',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => '已选：',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => '大为',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => '张',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => '博士',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => '非凡程序猿',
    'LBL_LOGOUT' => '注销',
    'LBL_PROFILE' => '个人配置',
    'LBL_MAILMERGE' => '邮件合并',
    'LBL_MASS_UPDATE' => '批量更新',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => '没有支持批量更新操作的字段',
    'LBL_OPT_OUT_FLAG_PRIMARY' => '选择退出主邮件',
    'LBL_MEETINGS' => '会议',
    'LBL_MEETING_GO_BACK' => '返回',
    'LBL_MEMBERS' => '成员',
    'LBL_MEMBER_OF' => '上级',
    'LBL_MODIFIED_BY_USER' => '修改人',
    'LBL_MODIFIED_USER' => '修改人',
    'LBL_MODIFIED' => '修改人',
    'LBL_MODIFIED_NAME' => '修改人',
    'LBL_MORE' => '更多',
    'LBL_MY_ACCOUNT' => '我的设置',
    'LBL_NAME' => '名称',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => '创建',
    'LBL_NEW_BUTTON_TITLE' => '创建',
    'LBL_NEXT_BUTTON_LABEL' => '下一步',
    'LBL_NONE' => '-无-',
    'LBL_NOTES' => '备忘录',
    'LBL_OPPORTUNITIES' => '商业机会',
    'LBL_OPPORTUNITY_NAME' => '商业机会',
    'LBL_OPPORTUNITY' => '商业机会',
    'LBL_OR' => '或',
    'LBL_PANEL_OVERVIEW' => '概述', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ASSIGNMENT' => '其他', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ADVANCED' => '详细信息', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PARENT_TYPE' => '上级类型',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => '邮编',
    'LBL_PRIMARY_ADDRESS_CITY' => '[主要地址]城市',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '[主要地址]国家',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '[主要地址]邮编',
    'LBL_PRIMARY_ADDRESS_STATE' => '[主要地址]省份',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '[主要地址]街道 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '[主要地址]街道3',
    'LBL_PRIMARY_ADDRESS_STREET' => '[主要地址]街道',
    'LBL_PRIMARY_ADDRESS' => '主要地址',

    'LBL_PROSPECTS' => '目标对象',
    'LBL_PRODUCTS' => '产品',
    'LBL_PROJECT_TASKS' => '项目任务',
    'LBL_PROJECTS' => '项目',
    'LBL_QUOTES' => '报价',

    'LBL_RELATED' => '关联的',
    'LBL_RELATED_RECORDS' => '关联的记录',
    'LBL_REMOVE' => '移除',
    'LBL_REPORTS_TO' => '上级',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => '表示必填',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => '完成',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => '完整表单',
    'LBL_FULL_FORM_BUTTON_TITLE' => '完整表单',
    'LBL_SAVE_NEW_BUTTON_LABEL' => '保存并创建',
    'LBL_SAVE_NEW_BUTTON_TITLE' => '保存并创建',
    'LBL_SAVE_OBJECT' => '保存 {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => '搜索',
    'LBL_SEARCH_BUTTON_TITLE' => '搜索',
    'LBL_FILTER' => '筛选',
    'LBL_SEARCH' => '搜索',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => '更多',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => '无效的文件格式，仅支持上传图片文件。',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => '选择',
    'LBL_SELECT_BUTTON_TITLE' => '选择',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => '浏览文档',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => '浏览文档',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => '选择联系人',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => '选择联系人',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => '选择报表',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => '选择报表',
    'LBL_SELECT_USER_BUTTON_LABEL' => '选择用户',
    'LBL_SELECT_USER_BUTTON_TITLE' => '选择用户',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => '选择用户',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => '选择用户',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => '清除用户',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => '清除用户',
    'LBL_SERVER_RESPONSE_RESOURCES' => '构造此页的资源（查询、文件）',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => '秒。',
    'LBL_SERVER_RESPONSE_TIME' => '服务器响应时间：',
    'LBL_SERVER_MEMORY_BYTES' => '字节',
    'LBL_SERVER_MEMORY_USAGE' => '服务器内存使用：{0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => '使用方法：- 模块：{0} - 操作：{1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => '服务器峰值内存使用：{0} ({1})',
    'LBL_SHIPPING_ADDRESS' => '送货地址',
    'LBL_SHOW' => '显示',
    'LBL_STATE' => '状态', //Used for Case State, situation, condition
    'LBL_STATUS_UPDATED' => '您的状态已更新。',
    'LBL_STATUS' => '状态',
    'LBL_STREET' => '街道',
    'LBL_SUBJECT' => '主题',

    'LBL_INBOUNDEMAIL_ID' => '邮件接收ID',

    'LBL_SCENARIO_SALES' => '销售',
    'LBL_SCENARIO_MARKETING' => '营销活动',
    'LBL_SCENARIO_FINANCE' => '金融',
    'LBL_SCENARIO_SERVICE' => '服务',
    'LBL_SCENARIO_PROJECT' => '项目管理',

    'LBL_SCENARIO_SALES_DESCRIPTION' => '此场景适合管理销售条目',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => '此场景适合管理市场营销条目',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => '此场景适合管理财务条目',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => '此场景适合管理服务相关条目',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => '此场景适合管理项目相关条目',

    'LBL_SYNC' => '同步',
    'LBL_TABGROUP_ALL' => '全部',
    'LBL_TABGROUP_ACTIVITIES' => '活动',
    'LBL_TABGROUP_COLLABORATION' => '协作',
    'LBL_TABGROUP_MARKETING' => '市场营销',
    'LBL_TABGROUP_OTHER' => '其他',
    'LBL_TABGROUP_SALES' => '销售',
    'LBL_TABGROUP_SUPPORT' => '支持',
    'LBL_TASKS' => '任务',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => '存档邮件',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => '存档邮件',
    'LBL_UNDELETE_BUTTON_LABEL' => '撤消删除',
    'LBL_UNDELETE_BUTTON_TITLE' => '撤消删除',
    'LBL_UNDELETE_BUTTON' => '撤消删除',
    'LBL_UNDELETE' => '撤消删除',
    'LBL_UNSYNC' => '撤消同步',
    'LBL_UPDATE' => '更新',
    'LBL_USER_LIST' => '用户列表',
    'LBL_USERS' => '用户',
    'LBL_VERIFY_EMAIL_ADDRESS' => '检查邮件...',
    'LBL_VERIFY_PORTAL_NAME' => '检查门户名称...',
    'LBL_VIEW_IMAGE' => '查看',

    'LNK_ABOUT' => '关于',
    'LNK_ADVANCED_FILTER' => '高级筛选',
    'LNK_BASIC_FILTER' => '快速筛选',
    'LBL_ADVANCED_SEARCH' => '高级筛选',
    'LBL_QUICK_FILTER' => '快速筛选',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => '显示全部',
    'LNK_CLOSE' => '关闭',
    'LBL_MODIFY_CURRENT_FILTER' => '修改筛选',
    'LNK_SAVED_VIEWS' => '保存的视图',
    'LNK_DELETE' => '删除',
    'LNK_EDIT' => '编辑',
    'LNK_GET_LATEST' => '获取新版',
    'LNK_GET_LATEST_TOOLTIP' => '用新版替换',
    'LNK_HELP' => '帮助',
    'LNK_CREATE' => '创建',
    'LNK_LIST_END' => '末页',
    'LNK_LIST_NEXT' => '下页',
    'LNK_LIST_PREVIOUS' => '上页',
    'LNK_LIST_RETURN' => '返回',
    'LNK_LIST_START' => '首页',
    'LNK_LOAD_SIGNED' => '签名',
    'LNK_LOAD_SIGNED_TOOLTIP' => '用签名文档替换',
    'LNK_PRINT' => '打印',
    'LNK_BACKTOTOP' => '向上',
    'LNK_REMOVE' => '移除',
    'LNK_RESUME' => '恢复',
    'LNK_VIEW_CHANGE_LOG' => '查看更改日志',

    'NTC_CLICK_BACK' => '请点击浏览器的后退按钮并修复此错误。',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => '您确定要删除所选的记录？',
    'NTC_TEMPLATE_IS_USED' => '此模板至少被一个邮件营销活动所使用。您确定要删除？',
    'NTC_TEMPLATES_IS_USED' => '下列模板在营销活动中被使用。您确定要删除？\n',
    'NTC_DELETE_CONFIRMATION' => '您确定要删除此项记录？',
    'NTC_DELETE_CONFIRMATION_NUM' => '您确定要删除',
    'NTC_UPDATE_CONFIRMATION_NUM' => '您确定要更新',
    'NTC_DELETE_SELECTED_RECORDS' => '所选的记录？',
    'NTC_LOGIN_MESSAGE' => '请输入您的用户名和密码。',
    'NTC_NO_ITEMS_DISPLAY' => '无',
    'NTC_REMOVE_CONFIRMATION' => '您确定要移除此关联关系？仅移除关联关系而不会删除记录。',
    'NTC_REQUIRED' => '表示必填',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => '欢迎使用',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => '当前记录已修改，离开当前界面，修改数据将丢失。您确定要离开当前界面？',
    'ERROR_NO_RECORD' => '检索记录时出错。此记录可能已被删除，或者您没有权限。',
    'WARN_BROWSER_VERSION_WARNING' => '<b>警告：</b>您使用的浏览器不被支持<p></p>推荐使用<p></p><ul><li>Internet Explorer 10 (不支持兼容性试图)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>警告：</b>您 IE 浏览器的兼容性视图模式不被支持。',
    'ERROR_TYPE_NOT_VALID' => '错误：此类型无效。',
    'ERROR_NO_BEAN' => '获取 bean 失败。',
    'LBL_DUP_MERGE' => '查找重复项',
    'LBL_MANAGE_SUBSCRIPTIONS' => '管理订阅',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => '管理订阅',
    // Ajax status strings
    'LBL_LOADING' => '正在加载',
    'LBL_SAVING_LAYOUT' => '正在保存布局...',
    'LBL_SAVED_LAYOUT' => '布局已保存。',
    'LBL_SAVED' => '已保存',
    'LBL_SAVING' => '正在保存...',
    'LBL_DISPLAY_COLUMNS' => '显示的列',
    'LBL_HIDE_COLUMNS' => '隐藏的列',
    'LBL_PROCESSING_REQUEST' => '正在处理...',
    'LBL_REQUEST_PROCESSED' => '已处理',
    'LBL_AJAX_FAILURE' => 'Ajax 失败',
    'LBL_MERGE_DUPLICATES' => '合并重复',
    'LBL_SAVED_FILTER_SHORTCUT' => '保存的筛选',
    'LBL_SEARCH_POPULATE_ONLY' => '使用搜索表单进行搜索',
    'LBL_DETAILVIEW' => '详细视图',
    'LBL_LISTVIEW' => '列表视图',
    'LBL_EDITVIEW' => '编辑视图',
    'LBL_BILLING_STREET' => '街道',
    'LBL_SHIPPING_STREET' => '街道',
    'LBL_SEARCHFORM' => '搜索表单',
    'LBL_SAVED_SEARCH_ERROR' => '请设置视图名称。',
    'LBL_DISPLAY_LOG' => '显示日志',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => '系统',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => '会话超时',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => '您的会话将在 2 分钟后过期。请保存您的工作。',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => '您的会话已超时。',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\n议题：",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => '会议',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => '电话',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => '时间',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => '地点',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => '说明',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => '状态',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => '关联到',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\n点击 \"确定\" 查看此电话，或点击 \"取消\" 关闭。",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\n点击 \"确定\" 查看此会议，或点击 \"取消\" 关闭。",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => '会展',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => '会展未设置',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => '地点未设置。',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => '开始日期未设置。',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => '未找到任何结果。',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => '未找到任何结果。',
    'MSG_LIST_VIEW_NO_RESULTS' => '未找到任何结果：<item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => '创建 <item1> 作为一个新的 <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => '或更改您的搜索条件',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => '您目前有没有保存任何记录，现在 <item2> 或 <item3> 。',

    'LBL_CLICK_HERE' => '单击此处',
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => '添加到收藏夹',
    'LBL_CREATE_CONTACT' => '创建联系人',
    'LBL_CREATE_CASE' => '创建客户反馈',
    'LBL_CREATE_NOTE' => '创建备忘录',
    'LBL_CREATE_OPPORTUNITY' => '创建商业机会',
    'LBL_SCHEDULE_CALL' => '创建电话',
    'LBL_SCHEDULE_MEETING' => '创建会议',
    'LBL_CREATE_TASK' => '创建任务',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => '生成表单',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => '保存表单',
    'LBL_AVAILABLE_FIELDS' => '可用的字段',
    'LBL_FIRST_FORM_COLUMN' => '表单第一列',
    'LBL_SECOND_FORM_COLUMN' => '表单第二列',
    'LBL_ASSIGNED_TO_REQUIRED' => '缺少必填字段：负责人',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => '缺少必填字段：营销活动',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => '表单类型',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => '提交此表单将创建',

    'LBL_ADD_ALL_LEAD_FIELDS' => '添加所有字段',
    'LBL_RESET_ALL_LEAD_FIELDS' => '重置所有字段',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => '移除所有字段',
    'LBL_NEXT_BTN' => '下一步',
    'LBL_ONLY_IMAGE_ATTACHMENT' => '图片类型仅支持： jpg 或 png 。',
    'LBL_TRAINING' => '支持论坛',
    'ERR_MSSQL_DB_CONTEXT' => '将数据库上下文更改为',
    'ERR_MSSQL_WARNING' => '警告：',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => '错误：文件 [[file]] 丢失。由于未找到对应的 HTML 文件无法进行创建。',
    'ERR_CANNOT_FIND_MODULE' => '错误：[module]模块不存在。',
    'LBL_ALT_ADDRESS' => '其他地址',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => '错误：在 displayParams 数组中，有一个数值在 \'key\' 和 \'copy\' 元素中不相等。',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => '常规',
    'LBL_DASHLET_CONFIGURE_FILTERS' => '筛选',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => '仅显示我的条目',
    'LBL_DASHLET_CONFIGURE_TITLE' => '标题',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => '显示行数',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => '您 Dashlet 的个数已经达到管理员设置的上限。请先移除一个现有的，再添加新的 Dashlet。',
    'LBL_ADDING_DASHLET' => '正在添加 Dashlet ...',
    'LBL_ADDED_DASHLET' => 'Dashlet 已添加',
    'LBL_REMOVE_DASHLET_CONFIRM' => '您确定要删除此 Dashlet ？',
    'LBL_REMOVING_DASHLET' => '正在移除 Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'Dashlet 已移除',

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => '正在加载页面...',

    'LBL_RELOAD_PAGE' => '请重新<a href="javascript:window.location.reload()">刷新页面</a>来使用此 Dashlet。',
    'LBL_ADD_DASHLETS' => '添加 Dashlet',
    'LBL_CLOSE_DASHLETS' => '关闭',
    'LBL_OPTIONS' => '选项',
    'LBL_1_COLUMN' => '1 列',
    'LBL_2_COLUMN' => '2 列',
    'LBL_3_COLUMN' => '3 列',
    'LBL_PAGE_NAME' => '页面名称',

    'LBL_SEARCH_RESULTS' => '搜索结果',
    'LBL_SEARCH_MODULES' => '模块',
    'LBL_SEARCH_TOOLS' => '工具',
    'LBL_SEARCH_HELP_TITLE' => '搜索帮助',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => '没有图像',

    'LBL_MODULE' => '模块',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => '复制地址',
    'LBL_SAVE_AND_CONTINUE' => '保存并继续',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>多项选择控制</strong><br /><ul><li>点击选择一个属性。</li><li>按住 Ctrl 键并使用鼠标点击&nbsp;来&nbsp;选择多个。Mac 用户按住 CMD 键并使用鼠标点击。</li><li>鼠标点击选择第一个属性，按住 shift 键并使用鼠标点击选择多个连续的属性。</li></ul><br /><br /></p><p><strong>高级搜索 & 布局选项</strong><br /><br />使用 <b>保存的搜索 & 布局</b> 选项，您可以保存多个搜索参数以及自定义列表视图，此后可以快速获取想要的搜索结果。所有保存的索搜，按名称在已保存的搜索列表中显示，最近使用的搜索将在列表顶部显示。<br /><br />自定义列表视图布局，在隐藏列和显示列中拖动字段来控制搜索结果的显示字段。例如：您可以隐藏搜索结果记录的名称、负责人等字段。<br /><br /></p><p><strong>提示</strong><br /><br />可以使用 % 通配符进行搜索。例如：搜索以 Apples 开头的所有结果，可以使用 Apples% 进行搜索。</p>',

    //resource management
    'ERR_QUERY_LIMIT' => '错误：$module模块达到查询上限 $limit。',
    'ERROR_NOTIFY_OVERRIDE' => '错误：ResourceObserver->notify() 需要重写。',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => '错误：由于 metedata 文件为空或者不存在，无法创建监控。',
    'ERR_MONITOR_NOT_CONFIGURED' => '错误：请求的名称未配置监控。',
    'ERR_UNDEFINED_METRIC' => '错误：无法设置未定义的度量值。',
    'ERR_STORE_FILE_MISSING' => '错误：无法找到存储执行文件',

    'LBL_MONITOR_ID' => '监控ID',
    'LBL_USER_ID' => '用户ID',
    'LBL_MODULE_NAME' => '模块名称',
    'LBL_ITEM_ID' => '条目ID',
    'LBL_ITEM_SUMMARY' => '条目摘要',
    'LBL_ACTION' => '动作',
    'LBL_SESSION_ID' => '会话ID',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack 为用户 id {0} 创建',
    'LBL_VISIBLE' => '记录可见',
    'LBL_DATE_LAST_ACTION' => '上次执行日期',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => '不早于',
    'MSG_IS_MORE_THAN' => '大于',
    'MSG_IS_LESS_THAN' => '小于',
    'MSG_SHOULD_BE' => '应该是',
    'MSG_OR_GREATER' => '或者大于',

    'LBL_LIST' => '列表',
    'LBL_CREATE_BUG' => '创建 Bug',

    'LBL_OBJECT_IMAGE' => '图形',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => '选择日期',

    'LBL_VALIDATE_RANGE' => '不在有效范围内',
    'LBL_CHOOSE_START_AND_END_DATES' => '请选择开始日期和结束日期的范围',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => '请选择开始日期和结束日期的范围',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => '全部',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => '错误：Bean 参数的数组个数和结果数组的个数不相符。',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => '错误：模块映射入口不存在。',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => '错误：无法检索 {0} 连接器的数据，连接器当前无法访问或配置有误。 连接器错误消息：（{1}）。',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => '如果使用 IIS/FastCGI sapi 建议修改 php.ini 配置文件或通过其他途径修改 fastcgi.logging = 0 。',

    //Collection Field
    'LBL_COLLECTION_NAME' => '名称',
    'LBL_COLLECTION_PRIMARY' => '主要',
    'ERROR_MISSING_COLLECTION_SELECTION' => '未填写必填字段',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => '负责人',
    'LBL_DESCRIPTION' => '说明',

    'LBL_YESTERDAY' => '昨天',
    'LBL_TODAY' => '今天',
    'LBL_TOMORROW' => '明天',
    'LBL_NEXT_WEEK' => '下周',
    'LBL_NEXT_MONDAY' => '下周一',
    'LBL_NEXT_FRIDAY' => '下周五',
    'LBL_TWO_WEEKS' => '两星期',
    'LBL_NEXT_MONTH' => '下月',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => '下个月的第一天',
    'LBL_THREE_MONTHS' => '三个月',
    'LBL_SIXMONTHS' => '六个月',
    'LBL_NEXT_YEAR' => '明年',

    //Datetimecombo fields
    'LBL_HOURS' => '小时',
    'LBL_MINUTES' => '分钟',
    'LBL_MERIDIEM' => '正午',
    'LBL_DATE' => '日期',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => '自动刷新',

    'LBL_DURATION_DAY' => '天',
    'LBL_DURATION_HOUR' => '小时',
    'LBL_DURATION_MINUTE' => '分钟',
    'LBL_DURATION_DAYS' => '天',
    'LBL_DURATION_HOURS' => '期限(小时)',
    'LBL_DURATION_MINUTES' => '期限(分钟)',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => '选择月份',
    'LBL_ENTER_YEAR' => '输入年份',
    'LBL_ENTER_VALID_YEAR' => '请输入有效的年份',

    //File write error label
    'ERR_FILE_WRITE' => '错误：无法写入文件 {0}。请检查系统和 Web 服务器权限。',
    'ERR_FILE_NOT_FOUND' => '错误：无法加载文件 {0}。请检查系统和 Web 服务器权限。',

    'LBL_AND' => '和',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => '外部源的文件',
    'LBL_EXTERNAL_SECURITY_LEVEL' => '安全',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
“这是一个提供准备好导入文件内容的例子的样品导入文件。”

“此文件是用逗号分隔的.csv文件，使用双引号作为领域限定符。”

“就像您会在程序中看到的，头行在文件中为最顶端行列并且包含领域标签。”
这些标签在程序中是用来测绘文件中的数据到领域。”

“提示：数据库名称也能在头行里使用。 这在您正使用phpMyAdmin或其他数据库工具来提供一个导入数据的导出单时很实用。”
“导入进程与根据头行合适领域数据不匹配时，纵向按序排列不是决定性的。”


“要使用此文件作为模板，请参照：”
“1. 移出样板行数据”
“2.移出您正在阅读的帮助文本”
“3.输入您自己的数据到相应的行列”
“4.保存此文件到您系统上的一个可知位置”
“5.在程序里的行动目录中点击导入选项，选择上传文件。”',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => '没有新消息',
    'LBL_ALT_SORT_DESC' => '降序',
    'LBL_ALT_SORT_ASC' => '升序',
    'LBL_ALT_SORT' => '排序',
    'LBL_ALT_SHOW_OPTIONS' => '显示选项',
    'LBL_ALT_HIDE_OPTIONS' => '隐藏选项',
    'LBL_ALT_MOVE_COLUMN_LEFT' => '将所选的条目移动到左侧列表',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => '将所选的条目移动到右侧列表',
    'LBL_ALT_MOVE_COLUMN_UP' => '将所选的条目靠前显示',
    'LBL_ALT_MOVE_COLUMN_DOWN' => '在显示的列表顺序中向下移动选定的条目',
    'LBL_ALT_INFO' => '信息',
    'MSG_DUPLICATE' => '您将要创建的{0}记录可能与已经存在的{0}记录重复。下面列出了包含类似名称的{1}记录。<br />点击创建{1}来继续创建此新的{0}，或者从下面列出的现有{0}选择一个。',
    'MSG_SHOW_DUPLICATES' => '您将要创建的{0}可能与已经存在的{0}重复。下面列出了包含类似名称的{1}。<br />点击保存来继续创建此新的{0}，或者点击取消。',
    'LBL_EMAIL_TITLE' => '邮件地址',
    'LBL_EMAIL_OPT_TITLE' => '选择退出邮件地址',
    'LBL_EMAIL_INV_TITLE' => '无效的邮件地址',
    'LBL_EMAIL_PRIM_TITLE' => '标记为主邮件地址',
    'LBL_SELECT_ALL_TITLE' => '全选',
    'LBL_SELECT_THIS_ROW_TITLE' => '选择此行',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => '在上传过程中出错。错误代码： {0}-{1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => '在上传过程中出错。错误代码： {0}-{1}。设定的 upload_maxsize 为 {2}',
    'UPLOAD_ERROR_HOME_TEXT' => '在上传过程中出错，请联系管理员寻求帮助。',
    'UPLOAD_MAXIMUM_EXCEEDED' => '上传文件的大小为 ( {0} bytes) 超出了最大限制( {1} bytes)',
    'UPLOAD_REQUEST_ERROR' => '发生错误。请刷新页面，然后重试。',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => '编辑',
    'LBL_EDIT_BUTTON_TITLE' => '编辑',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => '复制',
    'LBL_DUPLICATE_BUTTON_TITLE' => '复制',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => '删除',
    'LBL_DELETE_BUTTON_TITLE' => '删除',
    'LBL_BULK_ACTION_BUTTON_LABEL' => '批量操作', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => '操作', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => '保存',
    'LBL_SAVE_BUTTON_TITLE' => '保存',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => '取消',
    'LBL_CANCEL_BUTTON_TITLE' => '取消',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => '连接器中的 {0} 配置不正确或无法使用。',
    'ERR_SUHOSIN' => '上传流被 Suhosin 阻断，请将 "upload" 添加到 suhosin.executor.include.whitelist 白名单中（详细信息请查看 suitecrm.log）',
    'ERR_BAD_RESPONSE_FROM_SERVER' => '服务器未正确响应',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => '报价',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => '售价',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => '手动',
        '5' => '每隔 5 分钟',
        '15' => '每隔 15 分钟',
        '30' => '每隔 30 分钟',
        '60' => '每小时',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => '提醒为空或不正确。',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => '未设置提醒，无法弹出提醒或邮件提醒。',
    'ERR_NO_INVITEES_FOR_REMINDER' => '没有需要提醒的受邀者',
    'LBL_DELETE_REMINDER_CONFIRM' => '当前提醒未包括任何被邀请者，您确定要移除提醒？',
    'LBL_DELETE_REMINDER' => '删除提醒',
    'LBL_OK' => '确定',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => '选择列',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => '保存更改',
    'LBL_DISPLAYED' => '已显示',
    'LBL_HIDDEN' => '已隐藏',
    'ERR_EMPTY_COLUMNS_LIST' => '至少需要一个元素',

    'LBL_FILTER_HEADER_TITLE' => '筛选',

    'LBL_CATEGORY' => '类别',
    'LBL_LIST_CATEGORY' => '类别',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => '忽略草稿',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => '此操作将删除草稿邮件，您确定要继续？',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => '应用邮件模板',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => '此操作将覆盖邮件正文和主题，是否继续？',
);

$app_list_strings['moduleList']['Library'] = '图书馆';
$app_list_strings['moduleList']['EmailAddresses'] = '邮件地址';
$app_list_strings['project_priority_default'] = '中';
$app_list_strings['project_priority_options'] = array(
    'High' => '高',
    'Medium' => '中',
    'Low' => '低',
);

$app_list_strings['moduleList']['KBDocuments'] = '知识库';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => '阿布达比',
    'ADEN' => '亚丁',
    'AFGHANISTAN' => '阿富汗',
    'ALBANIA' => '阿尔巴尼亚',
    'ALGERIA' => '阿尔及利亚',
    'AMERICAN SAMOA' => '美属萨摩亚',
    'ANDORRA' => '安道尔',
    'ANGOLA' => '安哥拉',
    'ANTARCTICA' => '南极洲',
    'ANTIGUA' => '安提瓜',
    'ARGENTINA' => '阿根廷',
    'ARMENIA' => '亚美尼亚',
    'ARUBA' => '阿鲁巴',
    'AUSTRALIA' => '澳大利亚',
    'AUSTRIA' => '奥地利',
    'AZERBAIJAN' => '阿塞拜疆',
    'BAHAMAS' => '巴哈马',
    'BAHRAIN' => '巴林',
    'BANGLADESH' => '孟加拉国',
    'BARBADOS' => '巴巴多斯',
    'BELARUS' => '白俄罗斯',
    'BELGIUM' => '比利时',
    'BELIZE' => '伯利兹',
    'BENIN' => '贝宁',
    'BERMUDA' => '百慕大',
    'BHUTAN' => '不丹',
    'BOLIVIA' => '玻利维亚',
    'BOSNIA' => '波斯尼亚',
    'BOTSWANA' => '博茨瓦纳',
    'BOUVET ISLAND' => '布维岛',
    'BRAZIL' => '巴西',
    'BRITISH ANTARCTICA TERRITORY' => '英属南极领地',
    'BRITISH INDIAN OCEAN TERRITORY' => '英属印度洋领地',
    'BRITISH VIRGIN ISLANDS' => '英属维尔京群岛',
    'BRITISH WEST INDIES' => '英属西印度群岛',
    'BRUNEI' => '文莱',
    'BULGARIA' => '保加利亚',
    'BURKINA FASO' => '布吉纳法索',
    'BURUNDI' => '布隆迪',
    'CAMBODIA' => '柬埔寨',
    'CAMEROON' => '喀麦隆',
    'CANADA' => '加拿大',
    'CANAL ZONE' => '运河区',
    'CANARY ISLAND' => '加那利岛',
    'CAPE VERDI ISLANDS' => '海角威尔第群岛',
    'CAYMAN ISLANDS' => '开曼群岛',
    'CHAD' => '乍得',
    'CHANNEL ISLAND UK' => '频道岛屋',
    'CHILE' => '智利',
    'CHINA' => '中国',
    'CHRISTMAS ISLAND' => '圣诞岛',
    'COCOS (KEELING) ISLAND' => '科科斯（基林）岛',
    'COLOMBIA' => '哥伦比亚',
    'COMORO ISLANDS' => '科摩罗群岛',
    'CONGO' => '刚果',
    'CONGO KINSHASA' => '刚果金沙萨',
    'COOK ISLANDS' => '库克群岛',
    'COSTA RICA' => '哥斯达黎加',
    'CROATIA' => '克罗地亚',
    'CUBA' => '古巴',
    'CURACAO' => '库拉索',
    'CYPRUS' => '塞浦路斯',
    'CZECH REPUBLIC' => '捷克共和国',
    'DAHOMEY' => '达荷美',
    'DENMARK' => '丹麦',
    'DJIBOUTI' => '吉布提',
    'DOMINICA' => '多米尼克',
    'DOMINICAN REPUBLIC' => '多米尼加共和国',
    'DUBAI' => '迪拜',
    'ECUADOR' => '厄瓜多尔',
    'EGYPT' => '埃及',
    'EL SALVADOR' => '萨尔瓦多',
    'EQUATORIAL GUINEA' => '赤道几内亚',
    'ESTONIA' => '爱沙尼亚',
    'ETHIOPIA' => '埃塞俄比亚',
    'FAEROE ISLANDS' => '法罗群岛',
    'FALKLAND ISLANDS' => '福克兰群岛',
    'FIJI' => '斐济',
    'FINLAND' => '芬兰',
    'FRANCE' => '法国',
    'FRENCH GUIANA' => '法属圭亚那',
    'FRENCH POLYNESIA' => '法属玻利尼西亚',
    'GABON' => '加蓬',
    'GAMBIA' => '冈比亚',
    'GEORGIA' => '格鲁吉亚',
    'GERMANY' => '德国',
    'GHANA' => '加纳',
    'GIBRALTAR' => '直布罗陀',
    'GREECE' => '希腊',
    'GREENLAND' => '格陵兰岛',
    'GUADELOUPE' => '瓜德罗普岛',
    'GUAM' => '关岛',
    'GUATEMALA' => '危地马拉',
    'GUINEA' => '几内亚',
    'GUYANA' => '圭亚那',
    'HAITI' => '海地',
    'HONDURAS' => '洪都拉斯',
    'HONG KONG' => '香港',
    'HUNGARY' => '匈牙利',
    'ICELAND' => '冰岛',
    'IFNI' => '伊夫尼',
    'INDIA' => '印度',
    'INDONESIA' => '印度尼西亚',
    'IRAN' => '伊朗',
    'IRAQ' => '伊拉克',
    'IRELAND' => '爱尔兰',
    'ISRAEL' => '以色列',
    'ITALY' => '意大利',
    'IVORY COAST' => '象牙海岸',
    'JAMAICA' => '牙买加',
    'JAPAN' => '日本',
    'JORDAN' => '约旦',
    'KAZAKHSTAN' => '哈萨克斯坦',
    'KENYA' => '肯尼亚',
    'KOREA' => '韩国',
    'KOREA, SOUTH' => '韩国',
    'KUWAIT' => '科威特',
    'KYRGYZSTAN' => '吉尔吉斯斯坦',
    'LAOS' => '老挝',
    'LATVIA' => '拉托维亚',
    'LEBANON' => '黎巴嫩',
    'LEEWARD ISLANDS' => '背风群岛',
    'LESOTHO' => '莱索托',
    'LIBYA' => '利比亚',
    'LIECHTENSTEIN' => '列支敦士登',
    'LITHUANIA' => '立陶宛',
    'LUXEMBOURG' => '卢森堡',
    'MACAO' => '澳门',
    'MACEDONIA' => '马其顿',
    'MADAGASCAR' => '马达加斯加',
    'MALAWI' => '马拉维',
    'MALAYSIA' => '马来西亚',
    'MALDIVES' => '马尔代夫',
    'MALI' => '马里',
    'MALTA' => '马耳他',
    'MARTINIQUE' => '马提尼克',
    'MAURITANIA' => '毛里塔尼亚',
    'MAURITIUS' => '毛里求斯',
    'MELANESIA' => '美拉尼西亚',
    'MEXICO' => '墨西哥',
    'MOLDOVIA' => '摩尔多瓦',
    'MONACO' => '摩纳哥',
    'MONGOLIA' => '蒙古',
    'MOROCCO' => '摩洛哥',
    'MOZAMBIQUE' => '莫桑比克',
    'MYANAMAR' => '缅甸',
    'NAMIBIA' => '纳米比亚',
    'NEPAL' => '尼泊尔',
    'NETHERLANDS' => '荷兰',
    'NETHERLANDS ANTILLES' => '荷属安地列斯群岛',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => '荷兰荷属安的列斯中立区',
    'NEW CALADONIA' => '新加多利亚',
    'NEW HEBRIDES' => '新赫布里底',
    'NEW ZEALAND' => '新西兰',
    'NICARAGUA' => '尼加拉瓜',
    'NIGER' => '尼日尔',
    'NIGERIA' => '尼日利亚',
    'NORFOLK ISLAND' => '诺福克岛',
    'NORWAY' => '挪威',
    'OMAN' => '阿曼',
    'OTHER' => '其他',
    'PACIFIC ISLAND' => '太平洋岛国',
    'PAKISTAN' => '巴基斯坦',
    'PANAMA' => '巴拿马',
    'PAPUA NEW GUINEA' => '巴布亚新几内亚',
    'PARAGUAY' => '巴拉圭',
    'PERU' => '秘鲁',
    'PHILIPPINES' => '菲律宾',
    'POLAND' => '波兰',
    'PORTUGAL' => '葡萄牙',
    'PORTUGUESE TIMOR' => '东帝汶',
    'PUERTO RICO' => '波多黎各',
    'QATAR' => '卡塔尔',
    'REPUBLIC OF BELARUS' => '白俄罗斯共和国',
    'REPUBLIC OF SOUTH AFRICA' => '南非共和国',
    'REUNION' => '留尼汪',
    'ROMANIA' => '罗马尼亚',
    'RUSSIA' => '俄罗斯',
    'RWANDA' => '卢旺达',
    'RYUKYU ISLANDS' => '琉球群岛',
    'SABAH' => '沙巴',
    'SAN MARINO' => '圣马力诺',
    'SAUDI ARABIA' => '沙特阿拉伯',
    'SENEGAL' => '塞内加尔',
    'SERBIA' => '塞尔维亚',
    'SEYCHELLES' => '塞舌耳',
    'SIERRA LEONE' => '塞拉利昂',
    'SINGAPORE' => '新加坡',
    'SLOVAKIA' => '斯洛伐克',
    'SLOVENIA' => '斯洛文尼亚',
    'SOMALILIAND' => '索马里兰',
    'SOUTH AFRICA' => '南非',
    'SOUTH YEMEN' => '南也门',
    'SPAIN' => '西班牙',
    'SPANISH SAHARA' => '西班牙撒哈拉',
    'SRI LANKA' => '斯里兰卡',
    'ST. KITTS AND NEVIS' => '圣基茨和尼维斯',
    'ST. LUCIA' => '圣卢西亚',
    'SUDAN' => '苏丹',
    'SURINAM' => '苏里南',
    'SW AFRICA' => '非洲西南部',
    'SWAZILAND' => '斯威士兰',
    'SWEDEN' => '瑞典',
    'SWITZERLAND' => '瑞士',
    'SYRIA' => '叙利亚',
    'TAIWAN' => '台湾',
    'TAJIKISTAN' => '塔吉克斯坦',
    'TANZANIA' => '坦桑尼亚',
    'THAILAND' => '泰国',
    'TONGA' => '汤加',
    'TRINIDAD' => '特立尼达',
    'TUNISIA' => '突尼斯',
    'TURKEY' => '土耳其',
    'UGANDA' => '乌干达',
    'UKRAINE' => '乌克兰',
    'UNITED ARAB EMIRATES' => '阿拉伯联合酋长国',
    'UNITED KINGDOM' => '英国',
    'URUGUAY' => '乌拉圭',
    'US PACIFIC ISLAND' => '美国太平洋岛屿',
    'US VIRGIN ISLANDS' => '美属维尔京群岛',
    'USA' => '美国',
    'UZBEKISTAN' => '乌兹别克斯坦',
    'VANUATU' => '瓦努阿图',
    'VATICAN CITY' => '梵蒂冈城',
    'VENEZUELA' => '委内瑞拉',
    'VIETNAM' => '越南',
    'WAKE ISLAND' => '威克岛',
    'WEST INDIES' => '西印度群岛',
    'WESTERN SAHARA' => '西撒哈拉',
    'YEMEN' => '也门',
    'ZAIRE' => '扎伊尔',
    'ZAMBIA' => '赞比亚',
    'ZIMBABWE' => '津巴布韦',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (台湾和香港)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (微软西里尔)',
    'CP1252' => 'CP1252 (微软西欧和美国)',
    'EUC-CN' => 'EUC-CN (简体中文GB2312)',
    'EUC-JP' => 'EUC-JP (Unix日本)',
    'EUC-KR' => 'EUC-KR (韩国)',
    'EUC-TW' => 'EUC-TW (台湾)',
    'ISO-2022-JP' => 'ISO-2022-JP (日本)',
    'ISO-2022-KR' => 'ISO-2022-KR (韩国)',
    'ISO-8859-1' => 'ISO-8859-1 (西欧和美国)',
    'ISO-8859-2' => 'ISO-8859-2 (中欧和东欧)',
    'ISO-8859-3' => 'ISO-8859-3 (拉丁3)',
    'ISO-8859-4' => 'ISO-8859-4 (拉丁4)',
    'ISO-8859-5' => 'ISO-8859-5 (西里尔)',
    'ISO-8859-6' => 'ISO-8859-6 (阿拉伯)',
    'ISO-8859-7' => 'ISO-8859-7 (希腊)',
    'ISO-8859-8' => 'ISO-8859-8 (希伯来)',
    'ISO-8859-9' => 'ISO-8859-9 (拉丁5)',
    'ISO-8859-10' => 'ISO-8859-10 (拉丁6)',
    'ISO-8859-13' => 'ISO-8859-13 (拉丁7)',
    'ISO-8859-14' => 'ISO-8859-14 (拉丁8)',
    'ISO-8859-15' => 'ISO-8859-15 (拉丁9)',
    'KOI8-R' => 'KOI8-R (西里尔俄罗斯)',
    'KOI8-U' => 'KOI8-U (西里尔乌克兰)',
    'SJIS' => 'SJIS (微软日本)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => '非洲/阿尔及尔',
    'Africa/Luanda' => '非洲/罗安达',
    'Africa/Porto-Novo' => '非洲/波多诺伏',
    'Africa/Gaborone' => '非洲/哈博罗内',
    'Africa/Ouagadougou' => '非洲/瓦加杜古',
    'Africa/Bujumbura' => '非洲/布琼布拉',
    'Africa/Douala' => '非洲/杜阿拉',
    'Atlantic/Cape_Verde' => '大西洋/佛得角',
    'Africa/Bangui' => '非洲/班吉',
    'Africa/Ndjamena' => '非洲/恩贾梅纳',
    'Indian/Comoro' => '印度洋/科摩罗',
    'Africa/Kinshasa' => '非洲/金沙萨',
    'Africa/Lubumbashi' => '非洲/卢本巴希',
    'Africa/Brazzaville' => '非洲/布拉柴维尔',
    'Africa/Abidjan' => '非洲/阿比让',
    'Africa/Djibouti' => '非洲/吉布提',
    'Africa/Cairo' => '非洲/开罗',
    'Africa/Malabo' => '非洲/马拉博',
    'Africa/Asmera' => '非洲/阿斯马拉',
    'Africa/Addis_Ababa' => '非洲/亚的斯亚贝巴',
    'Africa/Libreville' => '非洲/利伯维尔',
    'Africa/Banjul' => '非洲/班珠尔',
    'Africa/Accra' => '非洲/阿克拉',
    'Africa/Conakry' => '非洲/科纳克里',
    'Africa/Bissau' => '非洲/比绍',
    'Africa/Nairobi' => '非洲/内罗毕',
    'Africa/Maseru' => '非洲/马塞卢',
    'Africa/Monrovia' => '非洲/蒙罗维亚',
    'Africa/Tripoli' => '非洲/的黎波里',
    'Indian/Antananarivo' => '印度洋/塔那那利佛',
    'Africa/Blantyre' => '非洲/布兰太尔',
    'Africa/Bamako' => '非洲/巴马科',
    'Africa/Nouakchott' => '非洲/努瓦克肖特',
    'Indian/Mauritius' => '印度洋/毛里求斯',
    'Indian/Mayotte' => '印度洋/马约特',
    'Africa/Casablanca' => '非洲/卡萨布兰卡',
    'Africa/El_Aaiun' => '非洲/阿尤恩',
    'Africa/Maputo' => '非洲/马普托',
    'Africa/Windhoek' => '非洲/温得和克',
    'Africa/Niamey' => '非洲/尼亚美',
    'Africa/Lagos' => '非洲/拉各斯',
    'Indian/Reunion' => '印度洋/留尼汪',
    'Africa/Kigali' => '非洲/基加利',
    'Atlantic/St_Helena' => '大西洋/圣赫勒拿',
    'Africa/Sao_Tome' => '非洲/圣多美',
    'Africa/Dakar' => '非洲/达喀尔',
    'Indian/Mahe' => '印度洋/马埃',
    'Africa/Freetown' => '非洲/弗里敦',
    'Africa/Mogadishu' => '非洲/摩加迪沙',
    'Africa/Johannesburg' => '非洲/约翰内斯堡',
    'Africa/Khartoum' => '非洲/喀土穆',
    'Africa/Mbabane' => '非洲/姆巴巴纳',
    'Africa/Dar_es_Salaam' => '非洲/达累斯萨拉姆',
    'Africa/Lome' => '非洲/洛美',
    'Africa/Tunis' => '非洲/突尼斯',
    'Africa/Kampala' => '非洲/坎帕拉',
    'Africa/Lusaka' => '非洲/卢萨卡',
    'Africa/Harare' => '非洲/哈尔',
    'Antarctica/Casey' => '南极洲/凯西站',
    'Antarctica/Davis' => '南极洲/戴维斯站',
    'Antarctica/Mawson' => '南极洲/莫森站',
    'Indian/Kerguelen' => '印度洋/凯尔盖朗',
    'Antarctica/DumontDUrville' => '南极洲/都蒙特得乌尔维尔站',
    'Antarctica/Syowa' => '南极洲/斯由瓦站',
    'Antarctica/Vostok' => '南极洲/沃斯托克站',
    'Antarctica/Rothera' => '南极洲/罗瑟拉站',
    'Antarctica/Palmer' => '南极洲/帕默',
    'Antarctica/McMurdo' => '南极洲/麦克默多站',
    'Asia/Kabul' => '亚洲/喀布尔',
    'Asia/Yerevan' => '亚洲/埃里温',
    'Asia/Baku' => '亚洲/巴库',
    'Asia/Bahrain' => '亚洲/巴林',
    'Asia/Dhaka' => '亚洲/达卡',
    'Asia/Thimphu' => '亚洲/廷布',
    'Indian/Chagos' => '印度洋/查戈斯',
    'Asia/Brunei' => '亚洲/文莱',
    'Asia/Rangoon' => '亚洲/仰光',
    'Asia/Phnom_Penh' => '亚洲/金边',
    'Asia/Beijing' => '亚洲/北京',
    'Asia/Harbin' => '亚洲/哈尔滨',
    'Asia/Shanghai' => '亚洲/上海',
    'Asia/Chongqing' => '亚洲/重庆',
    'Asia/Urumqi' => '亚洲/乌鲁木齐',
    'Asia/Kashgar' => '亚洲/喀什',
    'Asia/Hong_Kong' => '亚洲/香港',
    'Asia/Taipei' => '亚洲/台北',
    'Asia/Macau' => '亚洲/澳门',
    'Asia/Nicosia' => '亚洲/尼科西亚',
    'Asia/Tbilisi' => '亚洲/梯比利斯',
    'Asia/Dili' => '亚洲/帝力',
    'Asia/Calcutta' => '亚洲/加尔各答',
    'Asia/Jakarta' => '亚洲/雅加达',
    'Asia/Pontianak' => '亚洲/坤甸',
    'Asia/Makassar' => '亚洲/望加锡',
    'Asia/Jayapura' => '亚洲/查亚普拉',
    'Asia/Tehran' => '亚洲/德黑兰',
    'Asia/Baghdad' => '亚洲/巴格达',
    'Asia/Jerusalem' => '亚洲/耶路撒冷',
    'Asia/Tokyo' => '亚洲/东京',
    'Asia/Amman' => '亚洲/安曼',
    'Asia/Almaty' => '亚洲/阿拉木图',
    'Asia/Qyzylorda' => '亚洲/奥尔达',
    'Asia/Aqtobe' => '亚洲/阿克纠宾斯克',
    'Asia/Aqtau' => '亚洲/阿克陶',
    'Asia/Oral' => '亚洲/乌拉尔',
    'Asia/Bishkek' => '亚洲/比什凯克',
    'Asia/Seoul' => '亚洲/首尔',
    'Asia/Pyongyang' => '亚洲/平壤',
    'Asia/Kuwait' => '亚洲/科威特',
    'Asia/Vientiane' => '亚洲/万象',
    'Asia/Beirut' => '亚洲/贝鲁特',
    'Asia/Kuala_Lumpur' => '亚洲/吉隆坡',
    'Asia/Kuching' => '亚洲/古晋',
    'Indian/Maldives' => '印度洋/马尔代夫',
    'Asia/Hovd' => '亚洲/吉尔格朗图',
    'Asia/Ulaanbaatar' => '亚洲/乌兰巴托',
    'Asia/Choibalsan' => '亚洲/乔巴山',
    'Asia/Katmandu' => '亚洲/加德满都',
    'Asia/Muscat' => '亚洲/马斯喀特',
    'Asia/Karachi' => '亚洲/卡拉奇',
    'Asia/Gaza' => '亚洲/加沙',
    'Asia/Manila' => '亚洲/马尼拉',
    'Asia/Qatar' => '亚洲/卡塔尔',
    'Asia/Riyadh' => '亚洲/利雅得',
    'Asia/Singapore' => '亚洲/新加坡',
    'Asia/Colombo' => '亚洲/科伦坡',
    'Asia/Damascus' => '亚洲/大马士革',
    'Asia/Dushanbe' => '亚洲/杜尚别',
    'Asia/Bangkok' => '亚洲/曼谷',
    'Asia/Ashgabat' => '亚洲/阿什哈巴德',
    'Asia/Dubai' => '亚洲/迪拜',
    'Asia/Samarkand' => '亚洲/撒马尔罕',
    'Asia/Tashkent' => '亚洲/塔什干',
    'Asia/Saigon' => '亚洲/西贡',
    'Asia/Aden' => '亚洲/亚丁',
    'Australia/Darwin' => '澳大利亚/达尔文',
    'Australia/Perth' => '澳大利亚/珀斯',
    'Australia/Brisbane' => '澳大利亚/布里斯班',
    'Australia/Lindeman' => '澳大利亚/林德曼岛',
    'Australia/Adelaide' => '澳大利亚/阿得雷德',
    'Australia/Hobart' => '澳大利亚/霍巴特',
    'Australia/Currie' => '澳大利亚/柯里',
    'Australia/Melbourne' => '澳大利亚/墨尔本',
    'Australia/Sydney' => '澳大利亚/悉尼',
    'Australia/Broken_Hill' => '澳大利亚/断山',
    'Indian/Christmas' => '印度洋/圣诞岛',
    'Pacific/Rarotonga' => '太平洋/拉罗汤加岛',
    'Indian/Cocos' => '印度洋/可可斯岛',
    'Pacific/Fiji' => '太平洋/斐济',
    'Pacific/Gambier' => '太平洋/甘比尔',
    'Pacific/Marquesas' => '太平洋/马尔萨斯群岛',
    'Pacific/Tahiti' => '太平洋/塔希提',
    'Pacific/Guam' => '太平洋/关岛',
    'Pacific/Tarawa' => '太平洋/塔拉瓦',
    'Pacific/Enderbury' => '太平洋/恩德伯里',
    'Pacific/Kiritimati' => '太平洋/基里提马蒂',
    'Pacific/Saipan' => '太平洋/塞班岛',
    'Pacific/Majuro' => '太平洋/马朱罗',
    'Pacific/Kwajalein' => '太平洋/夸贾林',
    'Pacific/Truk' => '太平洋/特鲁克',
    'Pacific/Pohnpei' => '太平洋/波纳佩',
    'Pacific/Kosrae' => '太平洋/科斯雷',
    'Pacific/Nauru' => '太平洋/瑙鲁',
    'Pacific/Noumea' => '太平洋/努美阿',
    'Pacific/Auckland' => '太平洋/奥克兰',
    'Pacific/Chatham' => '太平洋/查塔姆',
    'Pacific/Niue' => '太平洋/扭埃',
    'Pacific/Norfolk' => '太平洋/诺福克',
    'Pacific/Palau' => '太平洋/帕劳',
    'Pacific/Port_Moresby' => '太平洋/莫尔兹比港',
    'Pacific/Pitcairn' => '太平洋/皮特凯恩',
    'Pacific/Pago_Pago' => '太平洋/帕果帕果',
    'Pacific/Apia' => '太平洋/阿皮亚',
    'Pacific/Guadalcanal' => '太平洋/瓜达尔卡纳尔岛',
    'Pacific/Fakaofo' => '太平洋/法考福',
    'Pacific/Tongatapu' => '太平洋/汤加塔布',
    'Pacific/Funafuti' => '太平洋/富纳富提',
    'Pacific/Johnston' => '太平洋/约翰斯顿岛',
    'Pacific/Midway' => '太平洋/中途岛',
    'Pacific/Wake' => '太平洋/威克岛',
    'Pacific/Efate' => '太平洋/埃法特',
    'Pacific/Wallis' => '太平洋/瓦利斯',
    'Europe/London' => '欧洲/伦敦',
    'Europe/Dublin' => '欧洲/都伯林',
    'WET' => '欧洲西部时间',
    'CET' => '欧洲中部时间',
    'MET' => '欧洲中部时间',
    'EET' => '欧洲东部时间',
    'Europe/Tirane' => '欧洲/地拉那',
    'Europe/Andorra' => '欧洲/安道尔',
    'Europe/Vienna' => '欧洲/维也纳',
    'Europe/Minsk' => '欧洲/明斯克',
    'Europe/Brussels' => '欧洲/布鲁塞尔',
    'Europe/Sofia' => '欧洲/索非亚',
    'Europe/Prague' => '欧洲/布拉格',
    'Europe/Copenhagen' => '欧洲/哥本哈根',
    'Atlantic/Faeroe' => '大西洋/法罗群岛',
    'America/Danmarkshavn' => '美洲/丹麦港',
    'America/Scoresbysund' => '美洲/斯科斯比松',
    'America/Godthab' => '美洲/戈特霍布',
    'America/Thule' => '美洲/图勒',
    'Europe/Tallinn' => '欧洲/塔林',
    'Europe/Helsinki' => '欧洲/赫尔辛基',
    'Europe/Paris' => '欧洲/巴黎',
    'Europe/Berlin' => '欧洲/伯林',
    'Europe/Gibraltar' => '欧洲/直布罗陀',
    'Europe/Athens' => '欧洲/雅典',
    'Europe/Budapest' => '欧洲/布达佩斯',
    'Atlantic/Reykjavik' => '大西洋/雷克雅未克',
    'Europe/Rome' => '欧洲/罗马',
    'Europe/Riga' => '欧洲/里加',
    'Europe/Vaduz' => '欧洲/瓦杜兹',
    'Europe/Vilnius' => '欧洲/维尔纽斯',
    'Europe/Luxembourg' => '欧洲/卢森堡',
    'Europe/Malta' => '欧洲/马尔他',
    'Europe/Chisinau' => '欧洲/基希讷乌',
    'Europe/Monaco' => '欧洲/摩纳哥',
    'Europe/Amsterdam' => '欧洲/阿姆斯特丹',
    'Europe/Oslo' => '欧洲/奥斯陆',
    'Europe/Warsaw' => '欧洲/华沙',
    'Europe/Lisbon' => '欧洲/里斯本',
    'Atlantic/Azores' => '大西洋/亚速尔群岛',
    'Atlantic/Madeira' => '大西洋/马德拉群岛',
    'Europe/Bucharest' => '欧洲/布加勒斯特',
    'Europe/Kaliningrad' => '欧洲/加里宁格勒',
    'Europe/Moscow' => '欧洲/莫斯科',
    'Europe/Samara' => '欧洲/萨马拉',
    'Asia/Yekaterinburg' => '亚洲/叶卡特琳堡',
    'Asia/Omsk' => '亚洲/鄂木斯克',
    'Asia/Novosibirsk' => '亚洲/新西伯利亚',
    'Asia/Krasnoyarsk' => '亚洲/克拉斯诺雅斯克',
    'Asia/Irkutsk' => '亚洲/伊尔库次克',
    'Asia/Yakutsk' => '亚洲/雅库茨克',
    'Asia/Vladivostok' => '亚洲/符拉迪沃斯托克（海参崴）',
    'Asia/Sakhalin' => '亚洲/萨哈林',
    'Asia/Magadan' => '亚洲/马加丹',
    'Asia/Kamchatka' => '亚洲/勘察加',
    'Asia/Anadyr' => '亚洲/阿纳德尔',
    'Europe/Belgrade' => '欧洲/贝尔格莱德',
    'Europe/Madrid' => '欧洲/马德里',
    'Africa/Ceuta' => '非洲/休达',
    'Atlantic/Canary' => '大西洋/加那利群岛',
    'Europe/Stockholm' => '欧洲/斯德哥尔摩',
    'Europe/Zurich' => '欧洲/苏黎世',
    'Europe/Istanbul' => '欧洲/伊斯坦布尔',
    'Europe/Kiev' => '欧洲/基辅',
    'Europe/Uzhgorod' => '欧洲/乌兹哥罗德',
    'Europe/Zaporozhye' => '欧洲/扎波罗热',
    'Europe/Simferopol' => '欧洲/辛菲罗波尔',
    'America/New_York' => '美洲/纽约',
    'America/Chicago' => '美洲/芝加哥',
    'America/North_Dakota/Center' => '美洲/北达科达州/中部',
    'America/Denver' => '美洲/丹佛',
    'America/Los_Angeles' => '美洲/洛杉矶',
    'America/Juneau' => '美洲/朱诺',
    'America/Yakutat' => '美洲/亚库塔特',
    'America/Anchorage' => '美洲/安克雷奇',
    'America/Nome' => '美洲/诺姆',
    'America/Adak' => '美洲/埃达克',
    'Pacific/Honolulu' => '太平洋/火奴鲁鲁',
    'America/Phoenix' => '美洲/菲尼克斯',
    'America/Boise' => '美洲/博伊西',
    'America/Indiana/Indianapolis' => '美洲/印第安那/印第安纳波利斯',
    'America/Indiana/Marengo' => '美洲/印第安那/马伦哥',
    'America/Indiana/Knox' => '美洲/印第安那/诺克斯',
    'America/Indiana/Vevay' => '美洲/印第安那/瓦维',
    'America/Kentucky/Louisville' => '美洲/肯塔基/路易斯维尔',
    'America/Kentucky/Monticello' => '美洲/肯塔基/蒙帝塞罗',
    'America/Detroit' => '美洲/底特律',
    'America/Menominee' => '美洲/梅诺米尼',
    'America/St_Johns' => '美洲/圣约翰',
    'America/Goose_Bay' => '美洲/古斯贝',
    'America/Halifax' => '美洲/哈利法克斯',
    'America/Glace_Bay' => '美洲/格莱斯贝',
    'America/Montreal' => '美洲/蒙特利尔',
    'America/Toronto' => '美洲/多伦多',
    'America/Thunder_Bay' => '美洲/桑德贝',
    'America/Nipigon' => '美洲/尼皮贡',
    'America/Rainy_River' => '美洲/雷尼里弗',
    'America/Winnipeg' => '美洲/温尼伯',
    'America/Regina' => '美洲/里贾纳',
    'America/Swift_Current' => '美洲/斯威福特卡润特',
    'America/Edmonton' => '美洲/埃德蒙顿',
    'America/Vancouver' => '美洲/温哥华',
    'America/Dawson_Creek' => '美洲/道森克里克',
    'America/Pangnirtung' => '美洲/庞纳唐',
    'America/Iqaluit' => '美洲/伊魁特',
    'America/Coral_Harbour' => '美洲/科勒尔港',
    'America/Rankin_Inlet' => '美洲/兰金因莱特',
    'America/Cambridge_Bay' => '美洲/剑桥湾',
    'America/Yellowknife' => '美洲/耶洛奈夫',
    'America/Inuvik' => '美洲/伊努维克',
    'America/Whitehorse' => '美洲/怀特霍斯',
    'America/Dawson' => '美洲/道森',
    'America/Cancun' => '美洲/坎昆',
    'America/Merida' => '美洲/梅里达',
    'America/Monterrey' => '美洲/蒙特雷',
    'America/Mexico_City' => '美洲/墨西哥城',
    'America/Chihuahua' => '美洲/奇瓦瓦',
    'America/Hermosillo' => '美洲/埃尔莫西略',
    'America/Mazatlan' => '美洲/马萨特兰',
    'America/Tijuana' => '美洲/蒂华纳',
    'America/Anguilla' => '美洲/安圭拉',
    'America/Antigua' => '美洲/安提瓜岛',
    'America/Nassau' => '美洲/拿骚',
    'America/Barbados' => '美洲/巴巴多斯',
    'America/Belize' => '美洲/伯利兹',
    'Atlantic/Bermuda' => '大西洋/百慕大',
    'America/Cayman' => '美洲/开曼',
    'America/Costa_Rica' => '美洲/哥斯达黎加',
    'America/Havana' => '美洲/哈瓦那',
    'America/Dominica' => '美洲/多米尼加',
    'America/Santo_Domingo' => '美洲/圣多明各',
    'America/El_Salvador' => '美洲/萨尔瓦多',
    'America/Grenada' => '美洲/格林纳达',
    'America/Guadeloupe' => '美洲/瓜德罗普岛',
    'America/Guatemala' => '美洲/危地马拉',
    'America/Port-au-Prince' => '美洲/太子港',
    'America/Tegucigalpa' => '美洲/特古西加尔巴',
    'America/Jamaica' => '美洲/牙买加',
    'America/Martinique' => '美洲/马提尼克岛',
    'America/Montserrat' => '美洲/蒙特塞拉特',
    'America/Managua' => '美洲/马那瓜',
    'America/Panama' => '美洲/巴拿马',
    'America/Puerto_Rico' => '美洲/波多黎各',
    'America/St_Kitts' => '美洲/圣基茨',
    'America/St_Lucia' => '美洲/圣卢西亚',
    'America/Miquelon' => '美洲/密克隆',
    'America/St_Vincent' => '美洲/圣文森特',
    'America/Grand_Turk' => '美洲/大特克岛',
    'America/Tortola' => '美洲/托投拉',
    'America/St_Thomas' => '美洲/圣托马斯',
    'America/Argentina/Buenos_Aires' => '美洲/阿根廷/布宜诺斯艾利斯',
    'America/Argentina/Cordoba' => '美洲/阿根廷/科尔多瓦',
    'America/Argentina/Tucuman' => '美洲/阿根廷/图库曼',
    'America/Argentina/La_Rioja' => '美洲/阿根廷/里奥哈',
    'America/Argentina/San_Juan' => '美洲/阿根廷/圣胡安',
    'America/Argentina/Jujuy' => '美洲/阿根廷/胡胡伊',
    'America/Argentina/Catamarca' => '美洲/阿根廷/卡塔马卡',
    'America/Argentina/Mendoza' => '美洲/阿根廷/门多萨',
    'America/Argentina/Rio_Gallegos' => '美洲/阿根廷/里约热内卢',
    'America/Argentina/Ushuaia' => '美洲/阿根廷/乌斯怀亚',
    'America/Aruba' => '美洲/阿鲁巴',
    'America/La_Paz' => '美洲/拉巴斯',
    'America/Noronha' => '美洲/诺罗尼亚',
    'America/Belem' => '美洲/贝伦',
    'America/Fortaleza' => '美洲/福塔雷萨',
    'America/Recife' => '美洲/累西腓',
    'America/Araguaina' => '美洲/阿拉瓜伊纳',
    'America/Maceio' => '美洲/马塞约',
    'America/Bahia' => '美洲/巴伊亚',
    'America/Sao_Paulo' => '美洲/圣保罗',
    'America/Campo_Grande' => '美洲/大坎普',
    'America/Cuiaba' => '美洲/库亚巴',
    'America/Porto_Velho' => '美洲/波多韦柳',
    'America/Boa_Vista' => '美洲/泊亚维斯特',
    'America/Manaus' => '美洲/马瑙斯',
    'America/Eirunepe' => '美洲/埃鲁内佩',
    'America/Rio_Branco' => '美洲/里约布兰科',
    'America/Santiago' => '美洲/圣地亚哥',
    'Pacific/Easter' => '太平洋/复活节岛',
    'America/Bogota' => '美洲/波哥大',
    'America/Curacao' => '美洲/库拉索',
    'America/Guayaquil' => '美洲/瓜亚基尔',
    'Pacific/Galapagos' => '太平洋/加拉帕戈斯群岛',
    'Atlantic/Stanley' => '大西洋/斯坦利',
    'America/Cayenne' => '美洲/卡宴',
    'America/Guyana' => '美洲/圭亚那',
    'America/Asuncion' => '美洲/亚松森',
    'America/Lima' => '美洲/利马',
    'Atlantic/South_Georgia' => '大西洋/南乔治亚',
    'America/Paramaribo' => '美洲/帕拉马里博',
    'America/Port_of_Spain' => '美洲/西班牙港',
    'America/Montevideo' => '美洲/蒙得维的亚',
    'America/Caracas' => '美洲/加拉加斯',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google 联系人',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => '请求',
    2 => '访问',
    3 => '无效',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => '营销活动',
    'email' => '电子邮件',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => '营销活动',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => '营销活动',
    'email' => '电子邮件',
    'system' => '系统',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = '知识库'; // Shows in the ALL menu entries
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = '知识库类别'; // Shows in the ALL menu entries
$app_list_strings['aok_status_list']['Draft'] = '草稿';
$app_list_strings['aok_status_list']['Expired'] = '已过期';
$app_list_strings['aok_status_list']['In_Review'] = '审查中';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = '私有';
$app_list_strings['aok_status_list']['published_public'] = '公共';

$app_list_strings['moduleList']['FP_events'] = '展会';
$app_list_strings['moduleList']['FP_Event_Locations'] = '会展地点';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = '已邀请';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = '未邀请';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = '已参加';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = '未参加';
$app_list_strings['fp_event_status_dom']['Accepted'] = '已接受';
$app_list_strings['fp_event_status_dom']['Declined'] = '已拒绝';
$app_list_strings['fp_event_status_dom']['No Response'] = '未响应';

$app_strings['LBL_STATUS_EVENT'] = '邀请状态';
$app_strings['LBL_ACCEPT_STATUS'] = '接受状态';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = '选择当前页';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = '全选';
$app_strings['LBL_LISTVIEW_NONE'] = '取消全选';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = '索引事件';
$app_list_strings['moduleList']['AOD_Index'] = '索引';

$app_list_strings['moduleList']['AOP_Case_Events'] = '客户反馈事件';
$app_list_strings['moduleList']['AOP_Case_Updates'] = '客户反馈更新';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== 请在此线上方填写回复 ==========';



//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => '已开放',
        'Closed' => '已关闭',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => '新建',
        'Open_Assigned' => '已分配',
        'Closed_Closed' => '已关闭',
        'Open_Pending Input' => '待输入',
        'Closed_Rejected' => '已拒绝',
        'Closed_Duplicate' => '重复',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => '单用户',
        'Account' => '客户用户',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => '使用默认',
    'singleUser' => '单个用户',
    'roundRobin' => '轮询',
    'leastBusy' => '最少忙碌',
    'random' => '随机',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = '报表';
$app_list_strings['moduleList']['AOR_Conditions'] = '报表条件';
$app_list_strings['moduleList']['AOR_Charts'] = '报表图表';
$app_list_strings['moduleList']['AOR_Fields'] = '报表字段';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = '任务计划报表';
$app_list_strings['aor_operator_list']['Equal_To'] = '等于';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = '不等于';
$app_list_strings['aor_operator_list']['Greater_Than'] = '大于';
$app_list_strings['aor_operator_list']['Less_Than'] = '小于';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = '大于等于';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = '小于等于';
$app_list_strings['aor_operator_list']['Contains'] = '包含';
$app_list_strings['aor_operator_list']['Not_Contains'] = '不包含';
$app_list_strings['aor_operator_list']['Starts_With'] = '开始于';
$app_list_strings['aor_operator_list']['Ends_With'] = '结束于';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-m-d';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = '与';
$app_list_strings['aor_condition_operator_list']['OR'] = '或';
$app_list_strings['aor_condition_type_list']['Value'] = '值';
$app_list_strings['aor_condition_type_list']['Field'] = '字段';
$app_list_strings['aor_condition_type_list']['Date'] = '日期';
$app_list_strings['aor_condition_type_list']['Multi'] = '之一';
$app_list_strings['aor_condition_type_list']['Period'] = '时段';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = '当前用户';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = '分钟';
$app_list_strings['aor_date_type_list']['hour'] = '小时';
$app_list_strings['aor_date_type_list']['day'] = '天';
$app_list_strings['aor_date_type_list']['week'] = '周';
$app_list_strings['aor_date_type_list']['month'] = '月';
$app_list_strings['aor_date_type_list']['business_hours'] = '上班时间';
$app_list_strings['aor_date_options']['now'] = '现在';
$app_list_strings['aor_date_options']['field'] = '此字段';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = '升序';
$app_list_strings['aor_sort_operator']['DESC'] = '降序';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = '计数';
$app_list_strings['aor_function_list']['MIN'] = '最小';
$app_list_strings['aor_function_list']['MAX'] = '最大';
$app_list_strings['aor_function_list']['SUM'] = '求和';
$app_list_strings['aor_function_list']['AVG'] = '平均';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = '合计';
$app_list_strings['aor_total_options']['SUM'] = '总和';
$app_list_strings['aor_total_options']['AVG'] = '平均';
$app_list_strings['aor_chart_types']['bar'] = '条形图';
$app_list_strings['aor_chart_types']['line'] = '折线图';
$app_list_strings['aor_chart_types']['pie'] = '饼图';
$app_list_strings['aor_chart_types']['radar'] = '雷达图';
$app_list_strings['aor_chart_types']['polar'] = '极坐标图';
$app_list_strings['aor_chart_types']['stacked_bar'] = '堆积条形图';
$app_list_strings['aor_chart_types']['grouped_bar'] = '分组条形图';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = '每月';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = '每周';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = '每天';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = '启用';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = '停用';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Email 地址';
$app_list_strings['aor_email_type_list']['Specify User'] = '指定用户';
$app_list_strings['aor_email_type_list']['Users'] = '多个用户';
$app_list_strings['aor_assign_options']['all'] = '所有用户';
$app_list_strings['aor_assign_options']['role'] = '角色';
$app_list_strings['aor_assign_options']['security_group'] = '用户组';
$app_list_strings['date_time_period_list']['today'] = '今天';
$app_list_strings['date_time_period_list']['yesterday'] = '昨天';
$app_list_strings['date_time_period_list']['this_week'] = '本周';
$app_list_strings['date_time_period_list']['last_week'] = '上周';
$app_list_strings['date_time_period_list']['last_month'] = '上月';
$app_list_strings['date_time_period_list']['this_month'] = '本月';
$app_list_strings['date_time_period_list']['this_quarter'] = '本季度';
$app_list_strings['date_time_period_list']['last_quarter'] = '上季度';
$app_list_strings['date_time_period_list']['this_year'] = '今年';
$app_list_strings['date_time_period_list']['last_year'] = '去年';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = '在';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = '在';
$app_strings['LBL_CRON_AT'] = '在';
$app_strings['LBL_CRON_RAW'] = '高级';
$app_strings['LBL_CRON_MIN'] = '分';
$app_strings['LBL_CRON_HOUR'] = '时';
$app_strings['LBL_CRON_DAY'] = '日';
$app_strings['LBL_CRON_MONTH'] = '月';
$app_strings['LBL_CRON_DOW'] = '星期';
$app_strings['LBL_CRON_DAILY'] = '每天';
$app_strings['LBL_CRON_WEEKLY'] = '每周';
$app_strings['LBL_CRON_MONTHLY'] = '每月';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = '合同';
$app_list_strings['moduleList']['AOS_Invoices'] = '发票';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF 模板';
$app_list_strings['moduleList']['AOS_Product_Categories'] = '产品类别';
$app_list_strings['moduleList']['AOS_Products'] = '产品';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = '产品报价';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = '条目组';
$app_list_strings['moduleList']['AOS_Quotes'] = '报价';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = '分析师';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = '竞争对手';
$app_list_strings['aos_quotes_type_dom']['Customer'] = '客户';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = '系统集成商';
$app_list_strings['aos_quotes_type_dom']['Investor'] = '投资者';
$app_list_strings['aos_quotes_type_dom']['Partner'] = '合作伙伴';
$app_list_strings['aos_quotes_type_dom']['Press'] = '出版商';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = '目标对象';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = '经销商';
$app_list_strings['aos_quotes_type_dom']['Other'] = '其他';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = '草稿';
$app_list_strings['quote_stage_dom']['Negotiation'] = '交涉';
$app_list_strings['quote_stage_dom']['Delivered'] = '已递送';
$app_list_strings['quote_stage_dom']['On Hold'] = '待确认';
$app_list_strings['quote_stage_dom']['Confirmed'] = '已确认';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = '成单-已关闭';
$app_list_strings['quote_stage_dom']['Closed Lost'] = '丢单-已关闭';
$app_list_strings['quote_stage_dom']['Closed Dead'] = '未成-已关闭';
$app_list_strings['quote_term_dom']['Net 15'] = '货到15天付款';
$app_list_strings['quote_term_dom']['Net 30'] = '货到30天付款';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = '已审批';
$app_list_strings['approval_status_dom']['Not Approved'] = '未审批';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = '百分比';
$app_list_strings['discount_list']['Amount'] = '金额';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = '分析师';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = '竞争对手';
$app_list_strings['aos_invoices_type_dom']['Customer'] = '客户';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = '系统集成商';
$app_list_strings['aos_invoices_type_dom']['Investor'] = '投资者';
$app_list_strings['aos_invoices_type_dom']['Partner'] = '合作伙伴';
$app_list_strings['aos_invoices_type_dom']['Press'] = '出版商';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = '目标对象';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = '经销商';
$app_list_strings['aos_invoices_type_dom']['Other'] = '其他';
$app_list_strings['invoice_status_dom']['Paid'] = '已付';
$app_list_strings['invoice_status_dom']['Unpaid'] = '未付';
$app_list_strings['invoice_status_dom']['Cancelled'] = '已取消';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = '未开票';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = '已开票';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = '笔记本';
$app_list_strings['product_category_dom']['Desktops'] = '台式机';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = '商品';
$app_list_strings['product_type_dom']['Service'] = '服务';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = '报价';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = '发票';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = '合同';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = '报价';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = '发票';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = '合同';
$app_list_strings['pdf_template_type_dom']['Accounts'] = '客户';
$app_list_strings['pdf_template_type_dom']['Contacts'] = '联系人';
$app_list_strings['pdf_template_type_dom']['Leads'] = '潜在客户';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = '未开始';
$app_list_strings['contract_status_list']['In Progress'] = '进行中';
$app_list_strings['contract_status_list']['Signed'] = '已签署';
$app_list_strings['contract_type_list']['Type'] = '类型';
$app_strings['LBL_PRINT_AS_PDF'] = '生成 PDF 文件';
$app_strings['LBL_SELECT_TEMPLATE'] = '请选择一个模板';
$app_strings['LBL_NO_TEMPLATE'] = '错误\n未找到模板。请到 PDF 模板模块创建一个模板。';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = '工作流';
$app_list_strings['moduleList']['AOW_Conditions'] = '工作流条件';
$app_list_strings['moduleList']['AOW_Processed'] = '工作流审计';
$app_list_strings['moduleList']['AOW_Actions'] = '工作流动作';
$app_list_strings['aow_status_list']['Active'] = '启用';
$app_list_strings['aow_status_list']['Inactive'] = '停用';
$app_list_strings['aow_operator_list']['Equal_To'] = '等于';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = '不等于';
$app_list_strings['aow_operator_list']['Greater_Than'] = '大于';
$app_list_strings['aow_operator_list']['Less_Than'] = '小于';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = '大于等于';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = '小于等于';
$app_list_strings['aow_operator_list']['Contains'] = '包含';
$app_list_strings['aow_operator_list']['Starts_With'] = '开始于';
$app_list_strings['aow_operator_list']['Ends_With'] = '结束于';
$app_list_strings['aow_operator_list']['is_null'] = '为空';
$app_list_strings['aow_sql_operator_list']['Equal_To'] = '=';
$app_list_strings['aow_sql_operator_list']['Not_Equal_To'] = '!=';
$app_list_strings['aow_sql_operator_list']['Greater_Than'] = '>';
$app_list_strings['aow_sql_operator_list']['Less_Than'] = '<';
$app_list_strings['aow_sql_operator_list']['Greater_Than_or_Equal_To'] = '>=';
$app_list_strings['aow_sql_operator_list']['Less_Than_or_Equal_To'] = '<=';
$app_list_strings['aow_sql_operator_list']['Contains'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Starts_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Ends_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['is_null'] = 'IS NULL';
$app_list_strings['aow_process_status_list']['Complete'] = '完成';
$app_list_strings['aow_process_status_list']['Running'] = '运行中';
$app_list_strings['aow_process_status_list']['Pending'] = '挂起';
$app_list_strings['aow_process_status_list']['Failed'] = '失败';
$app_list_strings['aow_condition_operator_list']['And'] = '与';
$app_list_strings['aow_condition_operator_list']['OR'] = '或';
$app_list_strings['aow_condition_type_list']['Value'] = '值';
$app_list_strings['aow_condition_type_list']['Field'] = '字段';
$app_list_strings['aow_condition_type_list']['Any_Change'] = '任何更改';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = '用户组';
$app_list_strings['aow_condition_type_list']['Date'] = '日期';
$app_list_strings['aow_condition_type_list']['Multi'] = '之一';
$app_list_strings['aow_action_type_list']['Value'] = '值';
$app_list_strings['aow_action_type_list']['Field'] = '字段';
$app_list_strings['aow_action_type_list']['Date'] = '日期';
$app_list_strings['aow_action_type_list']['Round_Robin'] = '轮询';
$app_list_strings['aow_action_type_list']['Least_Busy'] = '最少忙碌';
$app_list_strings['aow_action_type_list']['Random'] = '随机';
$app_list_strings['aow_rel_action_type_list']['Value'] = '值';
$app_list_strings['aow_rel_action_type_list']['Field'] = '字段';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = '分钟';
$app_list_strings['aow_date_type_list']['hour'] = '小时';
$app_list_strings['aow_date_type_list']['day'] = '天';
$app_list_strings['aow_date_type_list']['week'] = '周';
$app_list_strings['aow_date_type_list']['month'] = '月';
$app_list_strings['aow_date_type_list']['business_hours'] = '上班时间';
$app_list_strings['aow_date_options']['now'] = '现在';
$app_list_strings['aow_date_options']['today'] = '今天';
$app_list_strings['aow_date_options']['field'] = '此字段';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = '所有用户';
$app_list_strings['aow_assign_options']['role'] = '角色';
$app_list_strings['aow_assign_options']['security_group'] = '用户组';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Email 地址';
$app_list_strings['aow_email_type_list']['Record Email'] = '记录邮件';
$app_list_strings['aow_email_type_list']['Related Field'] = '关联字段';
$app_list_strings['aow_email_type_list']['Specify User'] = '指定用户';
$app_list_strings['aow_email_type_list']['Users'] = '多个用户';
$app_list_strings['aow_email_type_list']['Record Field'] = '模块字段';
$app_list_strings['aow_email_to_list']['to'] = '收件人';
$app_list_strings['aow_email_to_list']['cc'] = '抄送';
$app_list_strings['aow_email_to_list']['bcc'] = '密送';
$app_list_strings['aow_run_on_list']['All_Records'] = '所有记录';
$app_list_strings['aow_run_on_list']['New_Records'] = '新建的记录';
$app_list_strings['aow_run_on_list']['Modified_Records'] = '修改的记录';
$app_list_strings['aow_run_when_list']['Always'] = '始终';
$app_list_strings['aow_run_when_list']['On_Save'] = '保存时';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = '在调度时';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = '项目模板';
$app_list_strings['moduleList']['AM_TaskTemplates'] = '项目任务模板';
$app_list_strings['relationship_type_list']['FS'] = '完成到开始';
$app_list_strings['relationship_type_list']['SS'] = '开始到开始';
$app_list_strings['duration_unit_dom']['Days'] = '天';
$app_list_strings['duration_unit_dom']['Hours'] = '小时';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = '查看甘特图';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = '查看详细信息';
$app_strings['LBL_CREATE_PROJECT'] = '创建项目';

//gmaps
$app_strings['LBL_MAP'] = '地图';

$app_strings['LBL_JJWG_MAPS_LNG'] = '经度';
$app_strings['LBL_JJWG_MAPS_LAT'] = '纬度';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = '地理编码状态';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = '地址';

$app_list_strings['moduleList']['jjwg_Maps'] = '地图';
$app_list_strings['moduleList']['jjwg_Markers'] = '地图标注';
$app_list_strings['moduleList']['jjwg_Areas'] = '地图区域';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = '地图地址缓存';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = '英里';
$app_list_strings['map_unit_type_list']['km'] = '公里';

$app_list_strings['map_module_type_list']['Accounts'] = '客户';
$app_list_strings['map_module_type_list']['Contacts'] = '联系人';
$app_list_strings['map_module_type_list']['Cases'] = '客户反馈';
$app_list_strings['map_module_type_list']['Leads'] = '潜在客户';
$app_list_strings['map_module_type_list']['Meetings'] = '会议';
$app_list_strings['map_module_type_list']['Opportunities'] = '商业机会';
$app_list_strings['map_module_type_list']['Project'] = '项目';
$app_list_strings['map_module_type_list']['Prospects'] = '目标对象';

$app_list_strings['map_relate_type_list']['Accounts'] = '客户';
$app_list_strings['map_relate_type_list']['Contacts'] = '联系人';
$app_list_strings['map_relate_type_list']['Cases'] = '客户反馈';
$app_list_strings['map_relate_type_list']['Leads'] = '潜在客户';
$app_list_strings['map_relate_type_list']['Meetings'] = '会议';
$app_list_strings['map_relate_type_list']['Opportunities'] = '商业机会';
$app_list_strings['map_relate_type_list']['Project'] = '项目';
$app_list_strings['map_relate_type_list']['Prospects'] = '目标对象';

$app_list_strings['marker_image_list']['accident'] = '事故';
$app_list_strings['marker_image_list']['administration'] = '系统管理';
$app_list_strings['marker_image_list']['agriculture'] = '农业';
$app_list_strings['marker_image_list']['aircraft_small'] = '小飞机';
$app_list_strings['marker_image_list']['airplane_tourism'] = '飞行旅游';
$app_list_strings['marker_image_list']['airport'] = '机场';
$app_list_strings['marker_image_list']['amphitheater'] = '露天剧场';
$app_list_strings['marker_image_list']['apartment'] = '公寓';
$app_list_strings['marker_image_list']['aquarium'] = '水族馆';
$app_list_strings['marker_image_list']['arch'] = '拱门';
$app_list_strings['marker_image_list']['atm'] = '自动取款机';
$app_list_strings['marker_image_list']['audio'] = '音频';
$app_list_strings['marker_image_list']['bank'] = '银行';
$app_list_strings['marker_image_list']['bank_euro'] = '银行欧元';
$app_list_strings['marker_image_list']['bank_pound'] = '银行英镑';
$app_list_strings['marker_image_list']['bar'] = '酒吧';
$app_list_strings['marker_image_list']['beach'] = '海滩';
$app_list_strings['marker_image_list']['beautiful'] = '漂亮';
$app_list_strings['marker_image_list']['bicycle_parking'] = '自行车停车场';
$app_list_strings['marker_image_list']['big_city'] = '大城市';
$app_list_strings['marker_image_list']['bridge'] = '桥';
$app_list_strings['marker_image_list']['bridge_modern'] = '现代桥梁';
$app_list_strings['marker_image_list']['bus'] = '公共汽车';
$app_list_strings['marker_image_list']['cable_car'] = '缆车';
$app_list_strings['marker_image_list']['car'] = '汽车';
$app_list_strings['marker_image_list']['car_rental'] = '汽车出租';
$app_list_strings['marker_image_list']['carrepair'] = '汽车修理';
$app_list_strings['marker_image_list']['castle'] = '城堡';
$app_list_strings['marker_image_list']['cathedral'] = '大教堂';
$app_list_strings['marker_image_list']['chapel'] = '殡仪馆';
$app_list_strings['marker_image_list']['church'] = '教堂';
$app_list_strings['marker_image_list']['city_square'] = '城市广场';
$app_list_strings['marker_image_list']['cluster'] = '公路';
$app_list_strings['marker_image_list']['cluster_2'] = '公路2';
$app_list_strings['marker_image_list']['cluster_3'] = '公路3';
$app_list_strings['marker_image_list']['cluster_4'] = '公路4';
$app_list_strings['marker_image_list']['cluster_5'] = '公路5';
$app_list_strings['marker_image_list']['coffee'] = '咖啡馆';
$app_list_strings['marker_image_list']['community_centre'] = '社区活动中心';
$app_list_strings['marker_image_list']['company'] = '公司';
$app_list_strings['marker_image_list']['conference'] = '协会';
$app_list_strings['marker_image_list']['construction'] = '建筑';
$app_list_strings['marker_image_list']['convenience'] = '便利店';
$app_list_strings['marker_image_list']['court'] = '法院';
$app_list_strings['marker_image_list']['cruise'] = '邮轮';
$app_list_strings['marker_image_list']['currency_exchange'] = '货币兑换';
$app_list_strings['marker_image_list']['customs'] = '海关';
$app_list_strings['marker_image_list']['cycling'] = '骑行';
$app_list_strings['marker_image_list']['dam'] = '大坝';
$app_list_strings['marker_image_list']['days_dim'] = 'Days Dim';
$app_list_strings['marker_image_list']['days_dom'] = 'Days Dom';
$app_list_strings['marker_image_list']['days_jeu'] = 'Days Jeu';
$app_list_strings['marker_image_list']['days_jue'] = 'Days Jue';
$app_list_strings['marker_image_list']['days_lun'] = 'Days Lun';
$app_list_strings['marker_image_list']['days_mar'] = 'Days Mar';
$app_list_strings['marker_image_list']['days_mer'] = 'Days Mer';
$app_list_strings['marker_image_list']['days_mie'] = 'Days Mie';
$app_list_strings['marker_image_list']['days_qua'] = 'Days Qua';
$app_list_strings['marker_image_list']['days_qui'] = 'Days Qui';
$app_list_strings['marker_image_list']['days_sab'] = 'Days Sab';
$app_list_strings['marker_image_list']['days_sam'] = 'Days Sam';
$app_list_strings['marker_image_list']['days_seg'] = 'Days Seg';
$app_list_strings['marker_image_list']['days_sex'] = 'Days Sex';
$app_list_strings['marker_image_list']['days_ter'] = 'Days Ter';
$app_list_strings['marker_image_list']['days_ven'] = 'Days Ven';
$app_list_strings['marker_image_list']['days_vie'] = 'Days Vie';
$app_list_strings['marker_image_list']['dentist'] = '牙医';
$app_list_strings['marker_image_list']['deptartment_store'] = '百货商店';
$app_list_strings['marker_image_list']['disability'] = '残疾人';
$app_list_strings['marker_image_list']['disabled_parking'] = '残疾人专用停车场';
$app_list_strings['marker_image_list']['doctor'] = '医生';
$app_list_strings['marker_image_list']['dog_leash'] = '宠物寄存处';
$app_list_strings['marker_image_list']['down'] = '向下';
$app_list_strings['marker_image_list']['down_left'] = '左下';
$app_list_strings['marker_image_list']['down_right'] = '右下';
$app_list_strings['marker_image_list']['down_then_left'] = '向下然后向左';
$app_list_strings['marker_image_list']['down_then_right'] = '向下然后向右';
$app_list_strings['marker_image_list']['drugs'] = '药店';
$app_list_strings['marker_image_list']['elevator'] = '电梯';
$app_list_strings['marker_image_list']['embassy'] = '大使馆';
$app_list_strings['marker_image_list']['expert'] = '专家';
$app_list_strings['marker_image_list']['factory'] = '工厂';
$app_list_strings['marker_image_list']['falling_rocks'] = '落石';
$app_list_strings['marker_image_list']['fast_food'] = '快餐';
$app_list_strings['marker_image_list']['festival'] = '节日';
$app_list_strings['marker_image_list']['fjord'] = '峡湾';
$app_list_strings['marker_image_list']['forest'] = '森林';
$app_list_strings['marker_image_list']['fountain'] = '喷泉';
$app_list_strings['marker_image_list']['friday'] = '星期五';
$app_list_strings['marker_image_list']['garden'] = '花园';
$app_list_strings['marker_image_list']['gas_station'] = '加油站';
$app_list_strings['marker_image_list']['geyser'] = '喷泉';
$app_list_strings['marker_image_list']['gifts'] = '礼品店';
$app_list_strings['marker_image_list']['gourmet'] = '美食';
$app_list_strings['marker_image_list']['grocery'] = '杂货铺';
$app_list_strings['marker_image_list']['hairsalon'] = '发廊';
$app_list_strings['marker_image_list']['helicopter'] = '直升机';
$app_list_strings['marker_image_list']['highway'] = '高速公路';
$app_list_strings['marker_image_list']['historical_quarter'] = '历史季度';
$app_list_strings['marker_image_list']['home'] = '首页';
$app_list_strings['marker_image_list']['hospital'] = '医院';
$app_list_strings['marker_image_list']['hostel'] = '招待所	
';
$app_list_strings['marker_image_list']['hotel'] = '酒店';
$app_list_strings['marker_image_list']['hotel_1_star'] = '一星级酒店';
$app_list_strings['marker_image_list']['hotel_2_stars'] = '二星级酒店';
$app_list_strings['marker_image_list']['hotel_3_stars'] = '三星级酒店';
$app_list_strings['marker_image_list']['hotel_4_stars'] = '四星级酒店';
$app_list_strings['marker_image_list']['hotel_5_stars'] = '五星级酒店';
$app_list_strings['marker_image_list']['info'] = '信息';
$app_list_strings['marker_image_list']['justice'] = '法院';
$app_list_strings['marker_image_list']['lake'] = '湖泊';
$app_list_strings['marker_image_list']['laundromat'] = '洗衣店';
$app_list_strings['marker_image_list']['left'] = '向左';
$app_list_strings['marker_image_list']['left_then_down'] = '向左然后向下';
$app_list_strings['marker_image_list']['left_then_up'] = '向左然后向上';
$app_list_strings['marker_image_list']['library'] = '图书馆';
$app_list_strings['marker_image_list']['lighthouse'] = ' 灯塔';
$app_list_strings['marker_image_list']['liquor'] = '酒馆';
$app_list_strings['marker_image_list']['lock'] = '锁';
$app_list_strings['marker_image_list']['main_road'] = '主干道';
$app_list_strings['marker_image_list']['massage'] = '按摩店';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = '手机信号塔';
$app_list_strings['marker_image_list']['modern_tower'] = '现代大厦';
$app_list_strings['marker_image_list']['monastery'] = '修道院';
$app_list_strings['marker_image_list']['monday'] = '星期一';
$app_list_strings['marker_image_list']['monument'] = '纪念碑';
$app_list_strings['marker_image_list']['mosque'] = '清真寺';
$app_list_strings['marker_image_list']['motorcycle'] = '摩托车';
$app_list_strings['marker_image_list']['museum'] = '博物馆';
$app_list_strings['marker_image_list']['music_live'] = '音乐现场';
$app_list_strings['marker_image_list']['oil_pump_jack'] = '抽油机';
$app_list_strings['marker_image_list']['pagoda'] = '宝塔';
$app_list_strings['marker_image_list']['palace'] = '宫殿';
$app_list_strings['marker_image_list']['panoramic'] = '景区';
$app_list_strings['marker_image_list']['park'] = '公园';
$app_list_strings['marker_image_list']['park_and_ride'] = '换乘';
$app_list_strings['marker_image_list']['parking'] = '停车场';
$app_list_strings['marker_image_list']['photo'] = '照片';
$app_list_strings['marker_image_list']['picnic'] = '野餐';
$app_list_strings['marker_image_list']['places_unvisited'] = '未去过的地方';
$app_list_strings['marker_image_list']['places_visited'] = '去过的地方';
$app_list_strings['marker_image_list']['playground'] = '运动场';
$app_list_strings['marker_image_list']['police'] = '警察局';
$app_list_strings['marker_image_list']['port'] = '港口';
$app_list_strings['marker_image_list']['postal'] = '邮局';
$app_list_strings['marker_image_list']['power_line_pole'] = '电线杆';
$app_list_strings['marker_image_list']['power_plant'] = '发电站';
$app_list_strings['marker_image_list']['power_substation'] = '变电站';
$app_list_strings['marker_image_list']['public_art'] = '公共艺术';
$app_list_strings['marker_image_list']['rain'] = '雨';
$app_list_strings['marker_image_list']['real_estate'] = '房地产';
$app_list_strings['marker_image_list']['regroup'] = '重组';
$app_list_strings['marker_image_list']['resort'] = '度假村';
$app_list_strings['marker_image_list']['restaurant'] = '餐厅';
$app_list_strings['marker_image_list']['restaurant_african'] = '非洲餐厅';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = '烧烤餐厅';
$app_list_strings['marker_image_list']['restaurant_buffet'] = '自助餐厅';
$app_list_strings['marker_image_list']['restaurant_chinese'] = '中餐厅';
$app_list_strings['marker_image_list']['restaurant_fish'] = '鱼餐厅';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = '炸鱼薯条餐厅';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = '美食餐厅';
$app_list_strings['marker_image_list']['restaurant_greek'] = '希腊餐厅';
$app_list_strings['marker_image_list']['restaurant_indian'] = '印度餐厅';
$app_list_strings['marker_image_list']['restaurant_italian'] = '意大利餐厅';
$app_list_strings['marker_image_list']['restaurant_japanese'] = '日本餐厅';
$app_list_strings['marker_image_list']['restaurant_kebab'] = '烤串餐厅';
$app_list_strings['marker_image_list']['restaurant_korean'] = '韩国餐厅';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = '地中海餐厅';
$app_list_strings['marker_image_list']['restaurant_mexican'] = '墨西哥餐厅';
$app_list_strings['marker_image_list']['restaurant_romantic'] = '罗马尼亚餐厅';
$app_list_strings['marker_image_list']['restaurant_thai'] = '泰国餐厅';
$app_list_strings['marker_image_list']['restaurant_turkish'] = '土耳其餐厅';
$app_list_strings['marker_image_list']['right'] = '向右';
$app_list_strings['marker_image_list']['right_then_down'] = '向右然后向下';
$app_list_strings['marker_image_list']['right_then_up'] = '向右然后向上';
$app_list_strings['marker_image_list']['saturday'] = '星期六';
$app_list_strings['marker_image_list']['school'] = '学校';
$app_list_strings['marker_image_list']['shopping_mall'] = '购物中心';
$app_list_strings['marker_image_list']['shore'] = '岸边';
$app_list_strings['marker_image_list']['sight'] = '风景';
$app_list_strings['marker_image_list']['small_city'] = '小城市';
$app_list_strings['marker_image_list']['snow'] = '雪';
$app_list_strings['marker_image_list']['spaceport'] = '航天发射场';
$app_list_strings['marker_image_list']['speed_100'] = '时速 100';
$app_list_strings['marker_image_list']['speed_110'] = '时速 110';
$app_list_strings['marker_image_list']['speed_120'] = '时速 120';
$app_list_strings['marker_image_list']['speed_130'] = '时速 130';
$app_list_strings['marker_image_list']['speed_20'] = '时速 20';
$app_list_strings['marker_image_list']['speed_30'] = '时速 30';
$app_list_strings['marker_image_list']['speed_40'] = '时速 40';
$app_list_strings['marker_image_list']['speed_50'] = '时速 50';
$app_list_strings['marker_image_list']['speed_60'] = '时速 60';
$app_list_strings['marker_image_list']['speed_70'] = '时速 70';
$app_list_strings['marker_image_list']['speed_80'] = '时速 80';
$app_list_strings['marker_image_list']['speed_90'] = '时速 90';
$app_list_strings['marker_image_list']['speed_hump'] = '减速带';
$app_list_strings['marker_image_list']['stadium'] = '体育场';
$app_list_strings['marker_image_list']['statue'] = '雕像';
$app_list_strings['marker_image_list']['steam_train'] = '蒸汽火车';
$app_list_strings['marker_image_list']['stop'] = '停止';
$app_list_strings['marker_image_list']['stoplight'] = '红绿灯';
$app_list_strings['marker_image_list']['subway'] = '地铁';
$app_list_strings['marker_image_list']['sun'] = '周日';
$app_list_strings['marker_image_list']['sunday'] = '星期日';
$app_list_strings['marker_image_list']['supermarket'] = '超市';
$app_list_strings['marker_image_list']['synagogue'] = '犹太教堂';
$app_list_strings['marker_image_list']['tapas'] = '小吃';
$app_list_strings['marker_image_list']['taxi'] = '出租车';
$app_list_strings['marker_image_list']['taxiway'] = '滑行道';
$app_list_strings['marker_image_list']['teahouse'] = '茶馆';
$app_list_strings['marker_image_list']['telephone'] = '电话';
$app_list_strings['marker_image_list']['temple_hindu'] = '印度寺庙';
$app_list_strings['marker_image_list']['terrace'] = '露台';
$app_list_strings['marker_image_list']['text'] = '文本';
$app_list_strings['marker_image_list']['theater'] = '剧院';
$app_list_strings['marker_image_list']['theme_park'] = '主题公园';
$app_list_strings['marker_image_list']['thursday'] = '星期四';
$app_list_strings['marker_image_list']['toilets'] = '洗手间';
$app_list_strings['marker_image_list']['toll_station'] = '收费站';
$app_list_strings['marker_image_list']['tower'] = '塔';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = '公路探头';
$app_list_strings['marker_image_list']['train'] = '火车';
$app_list_strings['marker_image_list']['tram'] = '电车';
$app_list_strings['marker_image_list']['truck'] = '卡车';
$app_list_strings['marker_image_list']['tuesday'] = '星期二';
$app_list_strings['marker_image_list']['tunnel'] = '隧道';
$app_list_strings['marker_image_list']['turn_left'] = '左转';
$app_list_strings['marker_image_list']['turn_right'] = '右转';
$app_list_strings['marker_image_list']['university'] = '大学';
$app_list_strings['marker_image_list']['up'] = '向上';
$app_list_strings['marker_image_list']['up_left'] = '左上';
$app_list_strings['marker_image_list']['up_right'] = '右上';
$app_list_strings['marker_image_list']['up_then_left'] = '向上再向左';
$app_list_strings['marker_image_list']['up_then_right'] = '向上再向右';
$app_list_strings['marker_image_list']['vespa'] = '小型摩托车';
$app_list_strings['marker_image_list']['video'] = '视频';
$app_list_strings['marker_image_list']['villa'] = '别墅';
$app_list_strings['marker_image_list']['water'] = '水';
$app_list_strings['marker_image_list']['waterfall'] = '瀑布';
$app_list_strings['marker_image_list']['watermill'] = '水磨坊';
$app_list_strings['marker_image_list']['waterpark'] = '水上乐园';
$app_list_strings['marker_image_list']['watertower'] = '水塔';
$app_list_strings['marker_image_list']['wednesday'] = '星期三';
$app_list_strings['marker_image_list']['wifi'] = 'Wifi';
$app_list_strings['marker_image_list']['wind_turbine'] = '风力发电机';
$app_list_strings['marker_image_list']['windmill'] = '风磨坊';
$app_list_strings['marker_image_list']['winery'] = '酒厂';
$app_list_strings['marker_image_list']['work_office'] = '办公室';
$app_list_strings['marker_image_list']['world_heritage_site'] = '世界文化遗产';
$app_list_strings['marker_image_list']['zoo'] = '动物园';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = '不在办公室';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = '会议中';

$app_strings['LBL_RESCHEDULE_LABEL'] = '重新安排';
$app_strings['LBL_RESCHEDULE_TITLE'] = '请输入重新安排信息';
$app_strings['LBL_RESCHEDULE_DATE'] = '日期';
$app_strings['LBL_RESCHEDULE_REASON'] = '原因';
$app_strings['LBL_RESCHEDULE_ERROR1'] = '请选择一个有效的日期';
$app_strings['LBL_RESCHEDULE_ERROR2'] = '请选择一个原因';

$app_strings['LBL_RESCHEDULE_PANEL'] = '重新安排';
$app_strings['LBL_RESCHEDULE_HISTORY'] = '重排纪录';
$app_strings['LBL_RESCHEDULE_COUNT'] = '呼叫尝试';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = '用户组';
$app_strings['LBL_SECURITYGROUP'] = '用户组';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = '邮件发送账户';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = '社交 Feed';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = '筛选';

$app_strings['LBL_QUICK_ACCOUNT'] = '创建客户';
$app_strings['LBL_QUICK_CONTACT'] = '创建联系人';
$app_strings['LBL_QUICK_OPPORTUNITY'] = '创建商业机会';
$app_strings['LBL_QUICK_LEAD'] = '创建潜在客户';
$app_strings['LBL_QUICK_DOCUMENT'] = '创建文档';
$app_strings['LBL_QUICK_CALL'] = '创建电话';
$app_strings['LBL_QUICK_TASK'] = '创建任务';
$app_strings['LBL_QUICK_Company'] = '创建公司'; //Create a new company Add by Michael 2018/1/6
$app_strings['LBL_COLLECTION_TYPE'] = '类型';

$app_strings['LBL_ADD_TAB'] = '添加';
$app_strings['LBL_EDIT_TAB'] = '编辑标签';
$app_strings['LBL_SUITE_DASHBOARD'] = '仪表盘'; //Can be translated in all caps. This string will be used by SuiteP template menu actions
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = '输入仪表盘名称';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = '选择列数';
$app_strings['LBL_DELETE_DASHBOARD1'] = '您确定要删除';
$app_strings['LBL_DELETE_DASHBOARD2'] = '仪表盘？';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = '添加仪表盘';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = '移除仪表盘';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = '重命名仪表盘';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = '动作'; //Can be translated in all caps. This string will be used by SuiteP template menu actions

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => '任务',
    'Meetings' => '会议',
    'Calls' => '电话',
    'Notes' => '备忘录',
    'Emails' => '电子邮件'
);

$app_list_strings['moduleList']['TemplateEditor'] = '模板部件';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "您的编辑的字段未保存。点击“确定”退出，点击“取消”继续。";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "可能是由于您的会话已超时，在加载字段时出错。请重新登录以修复此问题。";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => '销售',
    'getAccountsSpotsData' => '客户',
    'getLeadsSpotsData' => '潜在客户',
    'getServiceSpotsData' => '服务',
    'getMarketingSpotsData' => '营销活动',
    'getMarketingActivitySpotsData' => '市场营销活动',
    'getActivitiesSpotsData' => '活动',
    'getQuotesSpotsData' => '报价'
);

$app_list_strings['moduleList']['Spots'] = '数据分析';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = '上班时间';
$app_list_strings['business_hours_list']['0'] = '0 点';
$app_list_strings['business_hours_list']['1'] = '1 点';
$app_list_strings['business_hours_list']['2'] = '2 点';
$app_list_strings['business_hours_list']['3'] = '3 点';
$app_list_strings['business_hours_list']['4'] = '4 点';
$app_list_strings['business_hours_list']['5'] = '5 点';
$app_list_strings['business_hours_list']['6'] = '6 点';
$app_list_strings['business_hours_list']['7'] = '7 点';
$app_list_strings['business_hours_list']['8'] = '8 点';
$app_list_strings['business_hours_list']['9'] = '9 点';
$app_list_strings['business_hours_list']['10'] = '10 点';
$app_list_strings['business_hours_list']['11'] = '11 点';
$app_list_strings['business_hours_list']['12'] = '12 点';
$app_list_strings['business_hours_list']['13'] = '13 点';
$app_list_strings['business_hours_list']['14'] = '14 点';
$app_list_strings['business_hours_list']['15'] = '15 点';
$app_list_strings['business_hours_list']['16'] = '16 点';
$app_list_strings['business_hours_list']['17'] = '17 点';
$app_list_strings['business_hours_list']['18'] = '18 点';
$app_list_strings['business_hours_list']['19'] = '19 点';
$app_list_strings['business_hours_list']['20'] = '20 点';
$app_list_strings['business_hours_list']['21'] = '21 点';
$app_list_strings['business_hours_list']['22'] = '22 点';
$app_list_strings['business_hours_list']['23'] = '23 点';
$app_list_strings['day_list']['Monday'] = '星期一';
$app_list_strings['day_list']['Tuesday'] = '星期二';
$app_list_strings['day_list']['Wednesday'] = '星期三';
$app_list_strings['day_list']['Thursday'] = '星期四';
$app_list_strings['day_list']['Friday'] = '星期五';
$app_list_strings['day_list']['Saturday'] = '星期六';
$app_list_strings['day_list']['Sunday'] = '星期日';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = '纵向';
$app_list_strings['pdf_orientation_dom']['Landscape'] = '横向';
$app_list_strings['LBL_REPORTS_RESTRICTED'] = '您没有访问权限，请选择具有访问权限的目标模块。';
