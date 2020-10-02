<?php
/* Smarty version 3.1.33, created on 2020-09-30 03:37:07
  from 'D:\UwAmp\UwAmp\www\portashop\admin\themes\default\template\controllers\manufacturers\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f73fd636aef44_35145617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c354b2df009cd3709812f4bf5befd451b8085ed6' => 
    array (
      0 => 'D:\\UwAmp\\UwAmp\\www\\portashop\\admin\\themes\\default\\template\\controllers\\manufacturers\\helpers\\view\\view.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73fd636aef44_35145617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1817228045f73fd633f24d4_32596939', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_1817228045f73fd633f24d4_32596939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_1817228045f73fd633f24d4_32596939',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="panel">
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','d'=>'Admin.Global'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['addresses']->value);?>
</span></h3>
	<?php if (!count($_smarty_tpl->tpl_vars['addresses']->value)) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No address has been found for this brand.','d'=>'Admin.Catalog.Notification'),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'addresse');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['addresse']->value) {
?>
		<div class="panel">
			<div class="panel-heading">
				<?php echo $_smarty_tpl->tpl_vars['addresse']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['addresse']->value['lastname'];?>

				<div class="pull-right">
					<a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminManufacturers',true,array(),array('id_address'=>$_smarty_tpl->tpl_vars['addresse']->value['id_address'],'editaddresses'=>1)),'html','UTF-8' ));?>
">
						<i class="icon-edit"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</a>
				</div>
			</div>

			<table class="table">
				<tbody>
					<tr>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['addresse']->value['address1'];?>
<br />
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['address2']) {
echo $_smarty_tpl->tpl_vars['addresse']->value['address2'];?>
<br /><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['addresse']->value['postcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['addresse']->value['city'];?>
<br />
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['state']) {
echo $_smarty_tpl->tpl_vars['addresse']->value['state'];?>
<br /><?php }?>
							<b><?php echo $_smarty_tpl->tpl_vars['addresse']->value['country'];?>
</b><br />
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['phone']) {
echo $_smarty_tpl->tpl_vars['addresse']->value['phone'];?>
<br /><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['phone_mobile']) {
echo $_smarty_tpl->tpl_vars['addresse']->value['phone_mobile'];?>
<br /><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['other']) {?><div ><br />
								<i><?php echo nl2br($_smarty_tpl->tpl_vars['addresse']->value['other']);?>
</i></div>
							<?php }?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<div class="panel">
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','d'=>'Admin.Global'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
</span></h3>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
		<?php if (!$_smarty_tpl->tpl_vars['product']->value->hasAttributes()) {?>
			<div class="panel">
				<div class="panel-heading">
					<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>

					<div class="pull-right">
						<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts',true,array('id_product'=>intval($_smarty_tpl->tpl_vars['product']->value->id),'updateproduct'=>'1')),'html','UTF-8' ));?>
" class="btn btn-default btn-sm">
							<i class="icon-edit"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

						</a>
						<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts',true,array('id_product'=>intval($_smarty_tpl->tpl_vars['product']->value->id),'deleteproduct'=>'1')),'html','UTF-8' ));?>
" class="btn btn-default btn-sm" onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete item #'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['product']->value->id;?>
 ?');">
							<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

						</a>
					</div>
				</div>

				<table class="table">
					<thead>
						<tr>
							<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->reference)) {?><th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ref:','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->reference;?>
</th><?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->ean13)) {?><th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'EAN13:','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->ean13;?>
</th><?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->upc)) {?><th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'UPC:','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->upc;?>
</th><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['stock_management']->value) {?><th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty:','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->quantity;?>
</th><?php }?>
						</tr>
					</thead>
				</table>
			</div>
		<?php } else { ?>
			<div class="panel">
				<div class="panel-heading">

					<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts',true,array('id_product'=>intval($_smarty_tpl->tpl_vars['product']->value->id),'updateproduct'=>'1')),'html','UTF-8' ));?>
">
						<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>

					</a>
					<div class="pull-right">
						<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts',true,array('id_product'=>intval($_smarty_tpl->tpl_vars['product']->value->id),'updateproduct'=>'1')),'html','UTF-8' ));?>
" class="btn btn-default btn-sm">
							<i class="icon-edit"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

						</a>
						<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts',true,array('id_product'=>intval($_smarty_tpl->tpl_vars['product']->value->id),'deleteproduct'=>'1')),'html','UTF-8' ));?>
" class="btn btn-default btn-sm" onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete item #'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['product']->value->id;?>
 ?');">
							<i class="icon-trash"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

						</a>
					</div>

				</div>

				<table class="table">
					<thead>
						<tr>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute name','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</span></th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'EAN13','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</span></th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'UPC','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</span></th>
							<?php if ($_smarty_tpl->tpl_vars['stock_management']->value && $_smarty_tpl->tpl_vars['shopContext']->value != Shop::CONTEXT_ALL) {?>
								<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available quantity','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</span></th>
							<?php }?>
						</tr>
					</thead>
					<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value->combination, 'product_attribute', false, 'id_product_attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_product_attribute']->value => $_smarty_tpl->tpl_vars['product_attribute']->value) {
?>
						<tr <?php if ($_smarty_tpl->tpl_vars['id_product_attribute']->value%2) {?>class="alt_row"<?php }?> >
							<td><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['attributes'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['reference'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['ean13'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['upc'];?>
</td>
							<?php if ($_smarty_tpl->tpl_vars['stock_management']->value && $_smarty_tpl->tpl_vars['shopContext']->value != Shop::CONTEXT_ALL) {?>
								<td class="right"><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['quantity'];?>
</td>
							<?php }?>
						</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				</table>
			</div>
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php
}
}
/* {/block "override_tpl"} */
}
