<?php
/* Smarty version 3.1.39, created on 2022-03-01 04:32:01
  from 'module:blockwishlist4viewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_621de81110c601_71692156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf2cafaa2936d0b5da2a21d05ab9719ded3d5053' => 
    array (
      0 => 'module:blockwishlist4viewstempla',
      1 => 1645772276,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621de81110c601_71692156 (Smarty_Internal_Template $_smarty_tpl) {
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
