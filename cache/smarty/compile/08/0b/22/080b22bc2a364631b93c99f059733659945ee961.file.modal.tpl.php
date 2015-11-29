<?php /* Smarty version Smarty-3.1.19, created on 2015-10-18 18:54:41
         compiled from "D:\Just-Things\wamp\www\PrestaShop\admin797eqnvdh\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296225623c0c16eba87-21171583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '080b22bc2a364631b93c99f059733659945ee961' => 
    array (
      0 => 'D:\\Just-Things\\wamp\\www\\PrestaShop\\admin797eqnvdh\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1440053010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296225623c0c16eba87-21171583',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5623c0c16f3338_89345551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5623c0c16f3338_89345551')) {function content_5623c0c16f3338_89345551($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
