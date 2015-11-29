<?php /* Smarty version Smarty-3.1.19, created on 2015-10-26 20:00:03
         compiled from "D:\Just-Things\wamp\www\PrestaShop\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8336562e6a23f17860-32529262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8b0bffcef8215a9bf8eb132be7273d713991aa2' => 
    array (
      0 => 'D:\\Just-Things\\wamp\\www\\PrestaShop\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1440053014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8336562e6a23f17860-32529262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562e6a240e05a8_33067894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562e6a240e05a8_33067894')) {function content_562e6a240e05a8_33067894($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
