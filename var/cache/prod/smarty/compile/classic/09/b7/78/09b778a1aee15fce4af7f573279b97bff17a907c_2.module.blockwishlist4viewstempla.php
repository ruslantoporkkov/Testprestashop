<?php
/* Smarty version 3.1.39, created on 2022-03-01 04:32:28
  from 'module:blockwishlist4viewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_621de82c39c114_58847496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09b778a1aee15fce4af7f573279b97bff17a907c' => 
    array (
      0 => 'module:blockwishlist4viewstempla',
      1 => 1646068495,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621de82c39c114_58847496 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['login_or_not']->value == '1') {?>
	<button type="button" id="btn_signin" class="wishlist-button-add wishlist-button-product" style="margin-left: 5px;"><i class="material-icons">favorite_border</i></button>
<?php } else { ?>
    <button type="button" id="btn_signout" class="btn btn-primary wishlist-button-add wishlist-button-product" data-bs-toggle="modal" style="margin-left: 5px;" data-bs-target="#exampleModal"><i class="material-icons">favorite_border</i></button>
<?php }?>




<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		You need to be logged in to save products in your wishlist.
		<a href="https://<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['host_url_for_template_2']->value, ENT_QUOTES, 'UTF-8');?>
/login" title="Log in to your customer account" rel="nofollow">
		  <i class="material-icons"></i>
		  <span class="hidden-sm-down">Sign in</span>
        </a>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div id="product_id_front" style="display: none;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idprodcurr']->value, ENT_QUOTES, 'UTF-8');?>
</div>
<div id="customer_id_front" style="display: none;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['really_customer_id']->value, ENT_QUOTES, 'UTF-8');?>
</div>
<div id="random_number"></div>

<?php echo '<script'; ?>
>
  window.onload = function(){
  
    $( "#btn_signin" ).click(function() {

		var customer_id_front = $('#customer_id_front').html();
		var product_id_front = $('#product_id_front').html();
		var url = 'https://<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['host_url_for_template_2']->value, ENT_QUOTES, 'UTF-8');?>
/modules/blockwishlist4/ajax.php'; 
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
