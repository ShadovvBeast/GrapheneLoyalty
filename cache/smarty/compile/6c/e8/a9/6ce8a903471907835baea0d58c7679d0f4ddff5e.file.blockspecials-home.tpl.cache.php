<?php /* Smarty version Smarty-3.1.19, created on 2015-10-26 20:00:08
         compiled from "D:\Just-Things\wamp\www\PrestaShop\modules\blockspecials\views\templates\hook\blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25511562e6a28b90784-07504531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce8a903471907835baea0d58c7679d0f4ddff5e' => 
    array (
      0 => 'D:\\Just-Things\\wamp\\www\\PrestaShop\\modules\\blockspecials\\views\\templates\\hook\\blockspecials-home.tpl',
      1 => 1440053014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25511562e6a28b90784-07504531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562e6a28bf6729_56829042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562e6a28bf6729_56829042')) {function content_562e6a28bf6729_56829042($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
