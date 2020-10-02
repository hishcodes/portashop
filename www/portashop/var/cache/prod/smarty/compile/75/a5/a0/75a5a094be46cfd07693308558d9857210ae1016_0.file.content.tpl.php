<?php
/* Smarty version 3.1.33, created on 2020-09-30 03:37:42
  from 'D:\UwAmp\UwAmp\www\portashop\admin\themes\default\template\controllers\shop\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f73fd861ac217_74782431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75a5a094be46cfd07693308558d9857210ae1016' => 
    array (
      0 => 'D:\\UwAmp\\UwAmp\\www\\portashop\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73fd861ac217_74782431 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div>
<?php }
}
