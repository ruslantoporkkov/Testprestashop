<?php
/* Smarty version 3.1.39, created on 2022-03-01 04:30:54
  from 'module:blockwishlist4viewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_621de7ce8b64f5_75114162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a994ce6c934e6608958d529617b87e511aafda1' => 
    array (
      0 => 'module:blockwishlist4viewstempla',
      1 => 1646068064,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621de7ce8b64f5_75114162 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['login_or_not']->value == '1') {?>
	<button type="button" id="" class="btn_signin_2 wishlist-button-add wishlist-button-product" data-idprodcurr="" data-reallycustomerid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['really_customer_id']->value, ENT_QUOTES, 'UTF-8');?>
" style="margin-left: 5px;">
		<i class="material-icons">favorite_border</i>
	</button>
<?php }?>

<?php echo '<script'; ?>
>
window.onload = function(){
	$('.thumbnail-container').each(function(index, value){
	var search_a = value.innerHTML.match(/data-id="..?"/im);
	console.log(search_a[0].split('"')[1]);
	var wishlist_elem = search_a[0].split('"')[1];
	$(".product .product-miniature[data-id-product='"+wishlist_elem+"'] .wishlist-button-add").attr('data-idprodcurr', wishlist_elem);
	$(".product .product-miniature[data-id-product='"+wishlist_elem+"'] .wishlist-button-add").attr('id', 'id_prod_num-'+wishlist_elem);
	});
	
	$( ".wishlist-button-add" ).click(function() {
		//alert(this.id);
		var customer_id_front = $('#'+this.id).attr('data-reallycustomerid');
		var product_id_front = $('#'+this.id).attr('data-idprodcurr');
		//console.log(customer_id_front, product_id_front);
		var url = 'https://<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['host_url_for_template']->value, ENT_QUOTES, 'UTF-8');?>
/modules/blockwishlist4/ajax2.php';
		$.ajax({
			url : url,
			data: { 
				customer_id_front: customer_id_front,
				product_id_front: product_id_front,
			},
			method: "POST",
			success : function(response){
			  //console.log(response);
			  alert(response);
			  //$('#random_number').html(response);
			} 
		});
		
	});
};
<?php echo '</script'; ?>
>


<?php }
}
