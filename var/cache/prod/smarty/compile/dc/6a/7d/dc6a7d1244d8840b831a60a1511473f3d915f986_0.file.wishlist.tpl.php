<?php
/* Smarty version 3.1.39, created on 2022-03-01 04:32:01
  from 'C:\OpenServer\domains\localhost\modules\blockwishlist4\views\templates\admin\wishlist\wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_621de811186cb2_71519184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc6a7d1244d8840b831a60a1511473f3d915f986' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\blockwishlist4\\views\\templates\\admin\\wishlist\\wishlist.tpl',
      1 => 1645772276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621de811186cb2_71519184 (Smarty_Internal_Template $_smarty_tpl) {
?> 

<table class="table_wishlist_css">
  <tbody>
    <tr>
	  <td class="table_wishlist_css">Номер</td>
	  <td class="table_wishlist_css">Клиенты</td>
	  <td class="table_wishlist_css">Товары</td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['wishlist_result']->value) {?>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlist_result']->value, 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
	      <tr>
			<td class="table_wishlist_css"><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
			<td class="table_wishlist_css"><?php echo $_smarty_tpl->tpl_vars['val']->value['customer_wishlist'];?>
</td>
			<td class="table_wishlist_css"><?php echo $_smarty_tpl->tpl_vars['val']->value['product_wishlist'];?>
</td>
		  </tr>
	  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
  </tbody>
</table>


<?php }
}
