<?php /*%%SmartyHeaderCode:438562e6a21bf3584-32812733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5acfc961ae079a2bf15d7d72f607d37af3c94f26' => 
    array (
      0 => 'D:\\Just-Things\\wamp\\www\\PrestaShop\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1440053012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '438562e6a21bf3584-32812733',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5648e21ae2a082_91084113',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5648e21ae2a082_91084113')) {function content_5648e21ae2a082_91084113($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/prestashop/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
