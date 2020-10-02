<?php
/* Smarty version 3.1.33, created on 2020-09-30 03:37:36
  from 'D:\UwAmp\UwAmp\www\portashop\admin\themes\default\template\controllers\outstanding\_print_pdf_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f73fd807712f5_88379661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09d9a61fd9e0c4feb664f8e6aac11334b62aca33' => 
    array (
      0 => 'D:\\UwAmp\\UwAmp\\www\\portashop\\admin\\themes\\default\\template\\controllers\\outstanding\\_print_pdf_icon.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73fd807712f5_88379661 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf',true,array(),array('submitAction'=>'generateInvoicePDF','id_order_invoice'=>$_smarty_tpl->tpl_vars['id_invoice']->value)),'html','UTF-8' ));?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }
}
}
