<?php /* Smarty version 2.6.29, created on 2018-01-11 15:28:31
         compiled from themes%5CSuiteP%5Cinclude/SubPanel/tpls/SubPanelTiles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'themes\\SuiteP\\include/SubPanel/tpls/SubPanelTiles.tpl', 3, false),array('function', 'sugar_getimagepath', 'themes\\SuiteP\\include/SubPanel/tpls/SubPanelTiles.tpl', 19, false),)), $this); ?>
<br>

<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/SubPanel/SubPanelTiles.js'), $this);?>
"></script>

<ul class="noBullet" id="subpanel_list">
<?php $_from = $this->_tpl_vars['subpanel_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['subpanel_tab']):
?>
    <li class="noBullet" id="whole_subpanel_<?php echo $this->_tpl_vars['subpanel_tab']; ?>
">
        <?php echo $this->_tpl_vars['subpanel_tabs_properties'][$this->_tpl_vars['i']]['collapse_subpanels']; ?>

        <div class="panel panel-default sub-panel">
            <div class="panel-heading panel-heading-collapse">

            <?php if ($this->_tpl_vars['subpanel_tabs_properties'][$this->_tpl_vars['i']]['expanded_subpanels'] == true): ?>
                <a id="subpanel_title_<?php echo $this->_tpl_vars['subpanel_tab']; ?>
" class="in" role="button" data-toggle="collapse" href="#subpanel_<?php echo $this->_tpl_vars['subpanel_tab']; ?>
" aria-expanded="false">
            <?php else: ?>
                <a id="subpanel_title_<?php echo $this->_tpl_vars['subpanel_tab']; ?>
" class="collapsed" role="button" data-toggle="collapse" href="#subpanel_<?php echo $this->_tpl_vars['subpanel_tab']; ?>
" aria-expanded="false">
            <?php endif; ?>
                    <div class="col-xs-10 col-sm-11 col-md-11">
                        <div>
                            <?php ob_start(); ?><?php echo smarty_function_sugar_getimagepath(array('directory' => 'sub_panel','file_name' => $this->_tpl_vars['subpanel_tabs_properties'][$this->_tpl_vars['i']]['module_name'],'file_extension' => 'svg'), $this);?>
<?php $this->_smarty_vars['capture']['sub_panel_img_capture'] = ob_get_contents();  $this->assign('side_bar_img', ob_get_contents());ob_end_clean(); ?>
                            <?php if (! empty ( $this->_tpl_vars['side_bar_img'] )): ?>
                                <img src="<?php echo $this->_tpl_vars['side_bar_img']; ?>
"/>
                            <?php else: ?>
                                <img src="themes/SuiteP/images/sub_panel/basic.svg"/>
                            <?php endif; ?>
                            <?php echo $this->_tpl_vars['subpanel_tabs_properties'][$this->_tpl_vars['i']]['title']; ?>

                        </div>
                    </div>
                </a>

            </div>

            <?php if ($this->_tpl_vars['subpanel_tabs_properties'][$this->_tpl_vars['i']]['expanded_subpanels'] == true): ?>
                <div class="panel-body panel-collapse collapse in" id="subpanel_<?php echo $this->_tpl_vars['subpanel_tab']; ?>
">
            <?php else: ?>
                <div class="panel-body panel-collapse collapse" id="subpanel_<?php echo $this->_tpl_vars['subpanel_tab']; ?>
">
            <?php endif; ?>
                    <div class="tab-content">
                        <div id="list_subpanel_<?php echo $this->_tpl_vars['subpanel_tab']; ?>
">
                            <?php echo $this->_tpl_vars['subpanel_tabs_properties'][$this->_tpl_vars['i']]['subpanel_body']; ?>

                        </div>
                    </div>
            </div>
        </div>
    </li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<?php if (empty ( $this->_tpl_vars['sugar_config']['lock_subpanels'] ) || $this->_tpl_vars['sugar_config']['lock_subpanels'] == false): ?>
        <script>
        <?php echo '
        var SubpanelInit = function() {
            SubpanelInitTabNames('; ?>
<?php echo $this->_tpl_vars['tab_names']; ?>
<?php echo ');
          '; ?>
$('.sub-panel .table-responsive').footable();<?php echo '
          // collapse subpanels when device is mobile / tablet
          if($(window).width() <= SUGAR.measurements.breakpoints.large) {
            $(\'.panel-collapse\').removeClass(\'in\');
            $(\'.panel-heading-collapse a\').removeClass(\'in\');
            $(\'.panel-heading-collapse a\').addClass(\'collapsed\');
          }
        }
        var SubpanelInitTabNames = function(tabNames) {
            subpanel_dd = new Array();
            j = 0;
            for(i in tabNames) {
                subpanel_dd[j] = new ygDDList(\'whole_subpanel_\' + tabNames[i]);
                subpanel_dd[j].setHandleElId(\'subpanel_title_\' + tabNames[i]);
                subpanel_dd[j].onMouseDown = SUGAR.subpanelUtils.onDrag;
                subpanel_dd[j].afterEndDrag = SUGAR.subpanelUtils.onDrop;
                j++;
            }
            YAHOO.util.DDM.mode = 1;
        }
        currentModule = \''; ?>
<?php echo $this->_tpl_vars['module']; ?>
<?php echo '\';
        SUGAR.util.doWhen(
                "typeof(SUGAR.subpanelUtils) == \'object\' && typeof(SUGAR.subpanelUtils.onDrag) == \'function\'" +
                " && document.getElementById(\'subpanel_list\')",
                SubpanelInit
        );
        '; ?>

    </script>
<?php endif; ?>
<script>
    var ModuleSubPanels = <?php echo $this->_tpl_vars['module_sub_panels']; ?>
;
    <?php echo '
    setTimeout(function() {
        if(typeof SUGAR.subpanelUtils.currentSubpanelGroup !== "undefined") {
            SUGAR.subpanelUtils.loadSubpanelGroup(SUGAR.subpanelUtils.currentSubpanelGroup);
        }
    }, 500);
    '; ?>

</script>

