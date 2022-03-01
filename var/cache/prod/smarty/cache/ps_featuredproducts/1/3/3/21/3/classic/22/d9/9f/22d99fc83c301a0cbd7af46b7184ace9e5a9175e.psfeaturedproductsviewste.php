<?php
/* Smarty version 3.1.39, created on 2022-03-01 04:30:54
  from 'module:psfeaturedproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_621de7ce9e5cb1_70013675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:psfeaturedproductsviewste',
      1 => 1643096356,
      2 => 'module',
    ),
    'f4ba4e57d886f98cc7b6cef534700cf006a30e5d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\themes\\classic\\templates\\catalog\\_partials\\productlist.tpl',
      1 => 1643096356,
      2 => 'file',
    ),
    'e84291a9701c4c030e06927828df08c412c79bef' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1646018121,
      2 => 'file',
    ),
    '85a680144189ac297c487c63d47592cc5a5819ea' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\themes\\classic\\templates\\catalog\\_partials\\variant-links.tpl',
      1 => 1643096356,
      2 => 'file',
    ),
    '66bef3032e07357f01c2397848b4cd22a1b56ba3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1643096356,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_621de7ce9e5cb1_70013675 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="featured-products clearfix">
  <h2 class="h2 products-section-title text-uppercase">
    Popular Products
  </h2>
  

<div class="products row">
            
<div class="js-product product col-xs-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="https://localhost/men/1-1-hummingbird-printed-t-shirt.html#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
              <img
                src="https://localhost/1-home_default/hummingbird-printed-t-shirt.jpg"
                alt="Hummingbird printed t-shirt"
                loading="lazy"
                data-full-size-image-url="https://localhost/1-large_default/hummingbird-printed-t-shirt.jpg"
                width="250"
                height="250"
              />
            </a>
                  
		<!--<div style="border: 2px solid red; width: 300px; height: 300px;"></div>-->
        <div class="highlighted-informations">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                          <div class="variant-links">
      <a href="https://localhost/men/1-3-hummingbird-printed-t-shirt.html#/2-size-m/8-color-white"
       class="color"
       title="White"
       aria-label="White"
       style="background-color: #ffffff"     ></a>
      <a href="https://localhost/men/1-2-hummingbird-printed-t-shirt.html#/1-size-s/11-color-black"
       class="color"
       title="Black"
       aria-label="Black"
       style="background-color: #434A54"     ></a>
    <span class="js-count count"></span>
</div>
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h3 class="h3 product-title"><a href="https://localhost/men/1-1-hummingbird-printed-t-shirt.html#/1-size-s/8-color-white" content="https://localhost/men/1-1-hummingbird-printed-t-shirt.html#/1-size-s/8-color-white">Hummingbird printed t-shirt</a></h3>
                  

        
                      <div class="product-price-and-shipping">
                              

                <span class="regular-price" aria-label="Regular price">$23.90</span>
                                  <span class="discount-percentage discount-product">-20%</span>
                              
              

              <span class="price" aria-label="Price">
                                                  $19.12
                              </span>

              

              
            </div>
                  

        
      </div>
	  

      
    <ul class="product-flags js-product-flags">
                    <li class="product-flag discount">-20%</li>
                    <li class="product-flag new">New</li>
            </ul>

	  
        
<div class="product-list-reviews" data-id="1" data-url="https://localhost/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

	<button type="button" id="" class="btn_signin_2 wishlist-button-add wishlist-button-product" data-idprodcurr="" data-reallycustomerid="3" style="margin-left: 5px;">
		<i class="material-icons">favorite_border</i>
	</button>

<script>
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
		var url = 'https://localhost/modules/blockwishlist4/ajax2.php';
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
</script>



      
	  
    </div>
  </article>
</div>

            
<div class="js-product product col-xs-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="9">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="https://localhost/women/2-9-brown-bear-printed-sweater.html#/1-size-s" class="thumbnail product-thumbnail">
              <img
                src="https://localhost/21-home_default/brown-bear-printed-sweater.jpg"
                alt="Brown bear printed sweater"
                loading="lazy"
                data-full-size-image-url="https://localhost/21-large_default/brown-bear-printed-sweater.jpg"
                width="250"
                height="250"
              />
            </a>
                  
		<!--<div style="border: 2px solid red; width: 300px; height: 300px;"></div>-->
        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h3 class="h3 product-title"><a href="https://localhost/women/2-9-brown-bear-printed-sweater.html#/1-size-s" content="https://localhost/women/2-9-brown-bear-printed-sweater.html#/1-size-s">Hummingbird printed sweater</a></h3>
                  

        
                      <div class="product-price-and-shipping">
                              

                <span class="regular-price" aria-label="Regular price">$35.90</span>
                                  <span class="discount-percentage discount-product">-20%</span>
                              
              

              <span class="price" aria-label="Price">
                                                  $28.72
                              </span>

              

              
            </div>
                  

        
      </div>
	  

      
    <ul class="product-flags js-product-flags">
                    <li class="product-flag discount">-20%</li>
                    <li class="product-flag new">New</li>
            </ul>

	  
        
<div class="product-list-reviews" data-id="2" data-url="https://localhost/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

	<button type="button" id="" class="btn_signin_2 wishlist-button-add wishlist-button-product" data-idprodcurr="" data-reallycustomerid="3" style="margin-left: 5px;">
		<i class="material-icons">favorite_border</i>
	</button>

<script>
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
		var url = 'https://localhost/modules/blockwishlist4/ajax2.php';
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
</script>



      
	  
    </div>
  </article>
</div>

            
<div class="js-product product col-xs-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="3" data-id-product-attribute="13">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="https://localhost/art/3-13-the-best-is-yet-to-come-framed-poster.html#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
              <img
                src="https://localhost/3-home_default/the-best-is-yet-to-come-framed-poster.jpg"
                alt="The best is yet to come&#039; Framed poster"
                loading="lazy"
                data-full-size-image-url="https://localhost/3-large_default/the-best-is-yet-to-come-framed-poster.jpg"
                width="250"
                height="250"
              />
            </a>
                  
		<!--<div style="border: 2px solid red; width: 300px; height: 300px;"></div>-->
        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h3 class="h3 product-title"><a href="https://localhost/art/3-13-the-best-is-yet-to-come-framed-poster.html#/19-dimension-40x60cm" content="https://localhost/art/3-13-the-best-is-yet-to-come-framed-poster.html#/19-dimension-40x60cm">The best is yet to come&#039;...</a></h3>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Price">
                                                  $29.00
                              </span>

              

              
            </div>
                  

        
      </div>
	  

      
    <ul class="product-flags js-product-flags">
                    <li class="product-flag new">New</li>
            </ul>

	  
        
<div class="product-list-reviews" data-id="3" data-url="https://localhost/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

	<button type="button" id="" class="btn_signin_2 wishlist-button-add wishlist-button-product" data-idprodcurr="" data-reallycustomerid="3" style="margin-left: 5px;">
		<i class="material-icons">favorite_border</i>
	</button>

<script>
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
		var url = 'https://localhost/modules/blockwishlist4/ajax2.php';
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
</script>



      
	  
    </div>
  </article>
</div>

            
<div class="js-product product col-xs-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="4" data-id-product-attribute="16">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="https://localhost/art/4-16-the-adventure-begins-framed-poster.html#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
              <img
                src="https://localhost/4-home_default/the-adventure-begins-framed-poster.jpg"
                alt="The adventure begins Framed poster"
                loading="lazy"
                data-full-size-image-url="https://localhost/4-large_default/the-adventure-begins-framed-poster.jpg"
                width="250"
                height="250"
              />
            </a>
                  
		<!--<div style="border: 2px solid red; width: 300px; height: 300px;"></div>-->
        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h3 class="h3 product-title"><a href="https://localhost/art/4-16-the-adventure-begins-framed-poster.html#/19-dimension-40x60cm" content="https://localhost/art/4-16-the-adventure-begins-framed-poster.html#/19-dimension-40x60cm">The adventure begins Framed...</a></h3>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Price">
                                                  $29.00
                              </span>

              

              
            </div>
                  

        
      </div>
	  

      
    <ul class="product-flags js-product-flags">
                    <li class="product-flag new">New</li>
            </ul>

	  
        
<div class="product-list-reviews" data-id="4" data-url="https://localhost/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

	<button type="button" id="" class="btn_signin_2 wishlist-button-add wishlist-button-product" data-idprodcurr="" data-reallycustomerid="3" style="margin-left: 5px;">
		<i class="material-icons">favorite_border</i>
	</button>

<script>
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
		var url = 'https://localhost/modules/blockwishlist4/ajax2.php';
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
</script>



      
	  
    </div>
  </article>
</div>

            
<div class="js-product product col-xs-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="5" data-id-product-attribute="19">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="https://localhost/art/5-19-today-is-a-good-day-framed-poster.html#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
              <img
                src="https://localhost/5-home_default/today-is-a-good-day-framed-poster.jpg"
                alt="Today is a good day Framed poster"
                loading="lazy"
                data-full-size-image-url="https://localhost/5-large_default/today-is-a-good-day-framed-poster.jpg"
                width="250"
                height="250"
              />
            </a>
                  
		<!--<div style="border: 2px solid red; width: 300px; height: 300px;"></div>-->
        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h3 class="h3 product-title"><a href="https://localhost/art/5-19-today-is-a-good-day-framed-poster.html#/19-dimension-40x60cm" content="https://localhost/art/5-19-today-is-a-good-day-framed-poster.html#/19-dimension-40x60cm">Today is a good day Framed...</a></h3>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Price">
                                                  $29.00
                              </span>

              

              
            </div>
                  

        
      </div>
	  

      
    <ul class="product-flags js-product-flags">
                    <li class="product-flag new">New</li>
            </ul>

	  
        
<div class="product-list-reviews" data-id="5" data-url="https://localhost/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

	<button type="button" id="" class="btn_signin_2 wishlist-button-add wishlist-button-product" data-idprodcurr="" data-reallycustomerid="3" style="margin-left: 5px;">
		<i class="material-icons">favorite_border</i>
	</button>

<script>
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
		var url = 'https://localhost/modules/blockwishlist4/ajax2.php';
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
</script>



      
	  
    </div>
  </article>
</div>

            
<div class="js-product product col-xs-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="6" data-id-product-attribute="0">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="https://localhost/home-accessories/6-mug-the-best-is-yet-to-come.html" class="thumbnail product-thumbnail">
              <img
                src="https://localhost/6-home_default/mug-the-best-is-yet-to-come.jpg"
                alt="Mug The best is yet to come"
                loading="lazy"
                data-full-size-image-url="https://localhost/6-large_default/mug-the-best-is-yet-to-come.jpg"
                width="250"
                height="250"
              />
            </a>
                  
		<!--<div style="border: 2px solid red; width: 300px; height: 300px;"></div>-->
        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h3 class="h3 product-title"><a href="https://localhost/home-accessories/6-mug-the-best-is-yet-to-come.html" content="https://localhost/home-accessories/6-mug-the-best-is-yet-to-come.html">Mug The best is yet to come</a></h3>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Price">
                                                  $11.90
                              </span>

              

              
            </div>
                  

        
      </div>
	  

      
    <ul class="product-flags js-product-flags">
                    <li class="product-flag new">New</li>
            </ul>

	  
        
<div class="product-list-reviews" data-id="6" data-url="https://localhost/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

	<button type="button" id="" class="btn_signin_2 wishlist-button-add wishlist-button-product" data-idprodcurr="" data-reallycustomerid="3" style="margin-left: 5px;">
		<i class="material-icons">favorite_border</i>
	</button>

<script>
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
		var url = 'https://localhost/modules/blockwishlist4/ajax2.php';
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
</script>



      
	  
    </div>
  </article>
</div>

            
<div class="js-product product col-xs-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="7" data-id-product-attribute="0">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="https://localhost/home-accessories/7-mug-the-adventure-begins.html" class="thumbnail product-thumbnail">
              <img
                src="https://localhost/7-home_default/mug-the-adventure-begins.jpg"
                alt="Mug The adventure begins"
                loading="lazy"
                data-full-size-image-url="https://localhost/7-large_default/mug-the-adventure-begins.jpg"
                width="250"
                height="250"
              />
            </a>
                  
		<!--<div style="border: 2px solid red; width: 300px; height: 300px;"></div>-->
        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h3 class="h3 product-title"><a href="https://localhost/home-accessories/7-mug-the-adventure-begins.html" content="https://localhost/home-accessories/7-mug-the-adventure-begins.html">Mug The adventure begins</a></h3>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Price">
                                                  $11.90
                              </span>

              

              
            </div>
                  

        
      </div>
	  

      
    <ul class="product-flags js-product-flags">
                    <li class="product-flag new">New</li>
            </ul>

	  
        
<div class="product-list-reviews" data-id="7" data-url="https://localhost/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

	<button type="button" id="" class="btn_signin_2 wishlist-button-add wishlist-button-product" data-idprodcurr="" data-reallycustomerid="3" style="margin-left: 5px;">
		<i class="material-icons">favorite_border</i>
	</button>

<script>
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
		var url = 'https://localhost/modules/blockwishlist4/ajax2.php';
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
</script>



      
	  
    </div>
  </article>
</div>

            
<div class="js-product product col-xs-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="8" data-id-product-attribute="0">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="https://localhost/home-accessories/8-mug-today-is-a-good-day.html" class="thumbnail product-thumbnail">
              <img
                src="https://localhost/8-home_default/mug-today-is-a-good-day.jpg"
                alt="Mug Today is a good day"
                loading="lazy"
                data-full-size-image-url="https://localhost/8-large_default/mug-today-is-a-good-day.jpg"
                width="250"
                height="250"
              />
            </a>
                  
		<!--<div style="border: 2px solid red; width: 300px; height: 300px;"></div>-->
        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h3 class="h3 product-title"><a href="https://localhost/home-accessories/8-mug-today-is-a-good-day.html" content="https://localhost/home-accessories/8-mug-today-is-a-good-day.html">Mug Today is a good day</a></h3>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Price">
                                                  $11.90
                              </span>

              

              
            </div>
                  

        
      </div>
	  

      
    <ul class="product-flags js-product-flags">
                    <li class="product-flag new">New</li>
            </ul>

	  
        
<div class="product-list-reviews" data-id="8" data-url="https://localhost/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

	<button type="button" id="" class="btn_signin_2 wishlist-button-add wishlist-button-product" data-idprodcurr="" data-reallycustomerid="3" style="margin-left: 5px;">
		<i class="material-icons">favorite_border</i>
	</button>

<script>
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
		var url = 'https://localhost/modules/blockwishlist4/ajax2.php';
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
</script>



      
	  
    </div>
  </article>
</div>

    </div>
  <a class="all-product-link float-xs-left float-md-right h4" href="https://localhost/2-home">
    All products<i class="material-icons">&#xE315;</i>
  </a>
</section>
<?php }
}
