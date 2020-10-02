<?php
/* Smarty version 3.1.33, created on 2020-09-30 03:37:22
  from 'D:\UwAmp\UwAmp\www\portashop\admin\themes\default\template\controllers\orders\form_customization_feedback.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f73fd720cd685_42598084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf1daafe48929df0d41e04280f106da9c02dae79' => 
    array (
      0 => 'D:\\UwAmp\\UwAmp\\www\\portashop\\admin\\themes\\default\\template\\controllers\\orders\\form_customization_feedback.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f73fd720cd685_42598084 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css_files']->value, 'media', false, 'css_uri');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['css_uri']->value => $_smarty_tpl->tpl_vars['media']->value) {
?>
		<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</head>
<body>
	<?php echo '<script'; ?>
 type="text/javascript">
		var id_selected_product = parent.$('#id_product option:selected').val();

		parent.$('#products_err', window.parent.document).html('<?php echo $_smarty_tpl->tpl_vars['customization_errors']->value;?>
');
		parent.$('#id_product option[value="'+id_selected_product+'"]').attr('selected', true);
		parent.$('#id_product').change();

		<?php if ($_smarty_tpl->tpl_vars['customization_errors']->value) {?>
			parent.customization_errors = true;
		<?php } else { ?>
			parent.customization_errors = false;
		<?php }?>

		parent.customizationProductListener();
	<?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
