<?php
/* Smarty version 3.1.33, created on 2020-09-30 03:37:39
  from 'D:\UwAmp\UwAmp\www\portashop\admin\themes\default\template\controllers\request_sql\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f73fd83287329_80452385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b92b42536237e3ad2b9e7561d8ece7853165c524' => 
    array (
      0 => 'D:\\UwAmp\\UwAmp\\www\\portashop\\admin\\themes\\default\\template\\controllers\\request_sql\\helpers\\view\\view.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73fd83287329_80452385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17774587425f73fd831d7256_86799571', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_17774587425f73fd831d7256_86799571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_17774587425f73fd831d7256_86799571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="panel">
	<h3><i class="icon-cog"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SQL query result','d'=>'Admin.Advparameters.Feature'),$_smarty_tpl ) );?>
</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['view']->value['error'])) {?>
		<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This SQL query has no result.','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>
</div>
	<?php } else { ?>
		<table class="table" id="viewRequestSql">
			<thead>
				<tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view']->value['key'], 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
					<th><span class="title_box"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</span></th>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view']->value['results'], 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
				<tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['view']->value['key'], 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
?>
						<?php if (isset($_smarty_tpl->tpl_vars['view']->value['attributes'][$_smarty_tpl->tpl_vars['name']->value])) {?>
							<td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['view']->value['attributes'][$_smarty_tpl->tpl_vars['name']->value],'html','UTF-8' ));?>
</td>
						<?php } else { ?>
							<td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['result']->value[$_smarty_tpl->tpl_vars['name']->value],'html','UTF-8' ));?>
</td>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>

		<?php echo '<script'; ?>
 type="text/javascript">
			$(function(){
				var width = $('#viewRequestSql').width();
				if (width > 990){
					$('#viewRequestSql').css('display','block').css('overflow-x', 'scroll');
				}
			});
		<?php echo '</script'; ?>
>
	<?php }?>
</div>
<?php
}
}
/* {/block "override_tpl"} */
}
