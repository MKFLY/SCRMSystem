<?php /* Smarty version 2.6.29, created on 2018-01-11 15:28:13
         compiled from themes/SuiteP/include/ListView/ListViewPaginationTop.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_action_menu', 'themes/SuiteP/include/ListView/ListViewPaginationTop.tpl', 55, false),)), $this); ?>


<?php $this->assign('alt_start', $this->_tpl_vars['navStrings']['start']); ?>
<?php $this->assign('alt_next', $this->_tpl_vars['navStrings']['next']); ?>
<?php $this->assign('alt_prev', $this->_tpl_vars['navStrings']['previous']); ?>
<?php $this->assign('alt_end', $this->_tpl_vars['navStrings']['end']); ?>

	<tr id='pagination' class="pagination-unique" role='presentation'>
		<td colspan='<?php if ($this->_tpl_vars['prerow']): ?><?php echo $this->_tpl_vars['colCount']+1; ?>
<?php else: ?><?php echo $this->_tpl_vars['colCount']; ?>
<?php endif; ?>'>
			<table border='0' cellpadding='0' cellspacing='0' width='100%' class='paginationTable'>
				<tr>
					<td nowrap="nowrap" class='paginationActionButtons'>
						<?php if ($this->_tpl_vars['prerow']): ?>

                        <?php echo smarty_function_sugar_action_menu(array('id' => $this->_tpl_vars['link_select_id'],'params' => $this->_tpl_vars['selectLink']), $this);?>

					
						<?php endif; ?>

						<?php echo smarty_function_sugar_action_menu(array('id' => $this->_tpl_vars['link_action_id'],'params' => $this->_tpl_vars['actionsLink']), $this);?>


                        <?php if ($this->_tpl_vars['actionDisabledLink'] != ""): ?><div class='selectActionsDisabled' id='select_actions_disabled_<?php echo $this->_tpl_vars['action_menu_location']; ?>
'><?php echo $this->_tpl_vars['actionDisabledLink']; ?>
<span class='ab'></span></div><?php endif; ?>
						<?php if ($this->_tpl_vars['showFilterIcon']): ?>
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/ListView/ListViewSearchLink.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php endif; ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/ListView/ListViewColumnsFilterLink.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						&nbsp;<?php echo $this->_tpl_vars['selectedObjectsSpan']; ?>

					</td>
					<td  nowrap='nowrap' align="right" class='paginationChangeButtons' width="1%">
						<?php if ($this->_tpl_vars['pageData']['urls']['startPage']): ?>
							<button type='button' id='listViewStartButton_<?php echo $this->_tpl_vars['action_menu_location']; ?>
' name='listViewStartButton' title='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(0, "<?php echo $this->_tpl_vars['moduleString']; ?>
");'<?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['startPage']; ?>
"' <?php endif; ?>></button>
						<?php else: ?>
							<button type='button' id='listViewStartButton_<?php echo $this->_tpl_vars['action_menu_location']; ?>
' name='listViewStartButton' title='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' class='button' disabled='disabled'></button>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pageData']['urls']['prevPage']): ?>
							<button type='button' id='listViewPrevButton_<?php echo $this->_tpl_vars['action_menu_location']; ?>
' name='listViewPrevButton' title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['prev']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['prevPage']; ?>
"'<?php endif; ?>></button>
						<?php else: ?>
							<button type='button' id='listViewPrevButton_<?php echo $this->_tpl_vars['action_menu_location']; ?>
' name='listViewPrevButton' class='button' title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' disabled='disabled'></button>
						<?php endif; ?>
					</td>
					<td nowrap='nowrap' width="1%" class="paginationActionButtons">
						<div class='pageNumbers'>(<?php if ($this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage'] == 0): ?>0<?php else: ?><?php echo $this->_tpl_vars['pageData']['offsets']['current']+1; ?>
<?php endif; ?> - <?php echo $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']; ?>
 <?php echo $this->_tpl_vars['navStrings']['of']; ?>
 <?php if ($this->_tpl_vars['pageData']['offsets']['totalCounted']): ?><?php echo $this->_tpl_vars['pageData']['offsets']['total']; ?>
<?php else: ?><?php echo $this->_tpl_vars['pageData']['offsets']['total']; ?>
<?php if ($this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage'] != $this->_tpl_vars['pageData']['offsets']['total']): ?>+<?php endif; ?><?php endif; ?>)</div>
					</td>
					<td nowrap='nowrap' align="right" class='paginationActionButtons' width="1%">
						<?php if ($this->_tpl_vars['pageData']['urls']['nextPage']): ?>
							<button type='button' id='listViewNextButton_<?php echo $this->_tpl_vars['action_menu_location']; ?>
' name='listViewNextButton' title='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['next']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['nextPage']; ?>
"'<?php endif; ?>></button>
						<?php else: ?>
							<button type='button' id='listViewNextButton_<?php echo $this->_tpl_vars['action_menu_location']; ?>
' name='listViewNextButton' class='button' title='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' disabled='disabled'></button>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pageData']['urls']['endPage'] && $this->_tpl_vars['pageData']['offsets']['total'] != $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']): ?>
							<button type='button' id='listViewEndButton_<?php echo $this->_tpl_vars['action_menu_location']; ?>
' name='listViewEndButton' title='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks("end", "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['endPage']; ?>
"'<?php endif; ?>></button>
						<?php elseif (! $this->_tpl_vars['pageData']['offsets']['totalCounted'] || $this->_tpl_vars['pageData']['offsets']['total'] == $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']): ?>
							<button type='button' id='listViewEndButton_<?php echo $this->_tpl_vars['action_menu_location']; ?>
' name='listViewEndButton' title='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' class='button' disabled='disabled'></button>
						<?php endif; ?>
					</td>
					<td nowrap='nowrap' width="4px" class="paginationActionButtons"></td>
				</tr>
			</table>
		</td>
	</tr>