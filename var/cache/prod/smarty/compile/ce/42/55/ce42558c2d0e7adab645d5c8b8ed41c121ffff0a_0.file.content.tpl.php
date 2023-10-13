<?php
/* Smarty version 3.1.39, created on 2023-10-13 14:56:42
  from '/var/www/html/PrestaShop/admin203uk1x56/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65290d5283f7f8_83972851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce42558c2d0e7adab645d5c8b8ed41c121ffff0a' => 
    array (
      0 => '/var/www/html/PrestaShop/admin203uk1x56/themes/default/template/content.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65290d5283f7f8_83972851 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
