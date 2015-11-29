<?php /* Smarty version Smarty-3.1.19, created on 2015-11-15 21:46:25
         compiled from "D:\Just-Things\wamp\www\PrestaShop\themes\default-bootstrap\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:231065648e111b1a800-50661701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9c3e5e64c7d07e6df94547491ddfc5f0c8c9879' => 
    array (
      0 => 'D:\\Just-Things\\wamp\\www\\PrestaShop\\themes\\default-bootstrap\\modules\\blockwishlist\\my-account.tpl',
      1 => 1440053012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231065648e111b1a800-50661701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5648e111d795a2_68541294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5648e111d795a2_68541294')) {function content_5648e111d795a2_68541294($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
