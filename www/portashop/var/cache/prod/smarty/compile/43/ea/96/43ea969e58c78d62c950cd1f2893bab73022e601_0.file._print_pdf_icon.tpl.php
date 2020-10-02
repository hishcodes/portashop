<?php
/* Smarty version 3.1.33, created on 2020-09-30 03:37:44
  from 'D:\UwAmp\UwAmp\www\portashop\admin\themes\default\template\controllers\slip\_print_pdf_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f73fd886573e2_51582777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43ea969e58c78d62c950cd1f2893bab73022e601' => 
    array (
      0 => 'D:\\UwAmp\\UwAmp\\www\\portashop\\admin\\themes\\default\\template\\controllers\\slip\\_print_pdf_icon.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73fd886573e2_51582777 (Smarty_Internal_Template $_smarty_tpl) {
?>

<a class="btn btn-default _blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf',true,array(),array('submitAction'=>'generateOrderSlipPDF','id_order_slip'=>intval($_smarty_tpl->tpl_vars['order_slip']->value->id))),'html','UTF-8' ));?>
">
	<i class="icon-file-text"></i>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download credit slip','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>

</a>

<?php }
}
