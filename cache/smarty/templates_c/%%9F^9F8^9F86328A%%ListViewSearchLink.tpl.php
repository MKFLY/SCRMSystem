<?php /* Smarty version 2.6.29, created on 2018-01-11 15:28:13
         compiled from include/ListView/ListViewSearchLink.tpl */ ?>

<?php if (! $this->_tpl_vars['currentModule']): ?>
    <?php $this->assign('currentModule', $this->_tpl_vars['savedSearchData']['module']); ?>
    <?php if (! $this->_tpl_vars['currentModule']): ?>
        <?php $this->assign('currentModule', $this->_tpl_vars['pageData']['bean']['moduleName']); ?>
    <?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['savedSearchData']['hasOptions']): ?>
    <ul class="action-link action-link-<?php echo $this->_tpl_vars['action_menu_location']; ?>
 clickMenu selectActions fancymenu show listViewLinkButton listViewLinkButton_<?php echo $this->_tpl_vars['action_menu_location']; ?>
">
        <li class="sugar_action_button">
            <a href="javascript:void(0)" class="parent-dropdown-handler" onclick="return false;">
                <label class="selected-actions-label"><?php echo $this->_tpl_vars['APP']['LBL_SAVED_FILTER_SHORTCUT']; ?>
</label>
            </a>
            <ul class="subnav">
                <?php $_from = $this->_tpl_vars['savedSearchData']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['option']):
?>
                    <li><a href="javascript:void(0)" class="parent-dropdown-action-handler"<?php if ($this->_tpl_vars['id'] != $this->_tpl_vars['savedSearchData']['selected']): ?> onclick="SUGAR.savedViews.shortcutDropdown('<?php echo $this->_tpl_vars['id']; ?>
', '<?php echo $this->_tpl_vars['currentModule']; ?>
');"<?php endif; ?>><?php echo $this->_tpl_vars['option']; ?>
<?php if ($this->_tpl_vars['id'] == $this->_tpl_vars['savedSearchData']['selected']): ?>&nbsp;&#10004<?php endif; ?></a></li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
            <span></span>
        </li>
    </ul>
<?php endif; ?>

<ul class="clickMenu selectmenu searchLink SugarActionMenu listViewLinkButton listViewLinkButton_<?php echo $this->_tpl_vars['action_menu_location']; ?>
">
    <li class="sugar_action_button">
        <a href="javascript:void(0)" class="glyphicon glyphicon-filter parent-dropdown-handler" onclick="listViewSearchIcon.toggleSearchDialog('latest'); $('#searchDialog .nav-tabs .active').removeClass('active'); $('#searchDialog .nav-tabs li').first().addClass('active'); $('#searchDialog').modal('toggle');"></a>
    </li>
</ul>
<ul class="searchAppliedAlert hidden clickMenu selectmenu searchAppliedAlertLink SugarActionMenu listViewLinkButton listViewLinkButton_<?php echo $this->_tpl_vars['action_menu_location']; ?>
">
    <li class="sugar_action_button desktopOnly">
        <a href="javascript:void(0)" class="glyphicon glyphicon-list-alt clearSearchIcon parent-dropdown-handler" onclick="SUGAR.savedViews.shortcutDropdown('_none', '<?php echo $this->_tpl_vars['currentModule']; ?>
');"></a>
        <a href="javascript:void(0)" class="glyphicon glyphicon-remove" onclick="SUGAR.savedViews.shortcutDropdown('_none', '<?php echo $this->_tpl_vars['currentModule']; ?>
');">&Cross;</a>
    </li>
    <li class="sugar_action_button mobileOnly">
        <a href="javascript:void(0)" class="glyphicon glyphicon-list-alt clearSearchIcon parent-dropdown-handler" onclick=""></a>
        <a href="javascript:void(0)" class="glyphicon glyphicon-remove" onclick="SUGAR.savedViews.shortcutDropdown('_none', '<?php echo $this->_tpl_vars['currentModule']; ?>
');"></a>
    </li>
</ul>