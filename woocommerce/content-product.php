<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

/* 

	Desire structure


<div class="col-md-3 col-sm-6">
  <div class="shop-product">
    <div class="product-thumb">
	    
	    <a href="#">
	    	<img src="images/shop/1.jpg" alt="">
	    </a>

	    <div class="product-overlay">
	      	<a href="#" class="btn btn-color-out btn-sm">Add To Cart<i class="ti-bag"></i></a>
	    </div>
    </div>

    <div class="product-info">
      <h4 class="upper"><a href="#">Premium Notch Blazer</a></h4><span>$79.99</span>
      <div class="save-product"><a href="#"><i class="icon-heart"></i></a></div>
    </div>


  </div>
</div>

__________________________________________________________________________________________________________________________________

	our structure


<div class="col-md-3 col-sm-6">
	<div class="shop-product">
		<img width="300" height="300" src="http://localhost/class56/wp-content/uploads/2019/01/album-1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="http://localhost/class56/wp-content/uploads/2019/01/album-1-300x300.jpg 300w, http://localhost/class56/wp-content/uploads/2019/01/album-1-100x100.jpg 100w, http://localhost/class56/wp-content/uploads/2019/01/album-1-600x600.jpg 600w, http://localhost/class56/wp-content/uploads/2019/01/album-1-150x150.jpg 150w, http://localhost/class56/wp-content/uploads/2019/01/album-1-768x768.jpg 768w, http://localhost/class56/wp-content/uploads/2019/01/album-1.jpg 800w" sizes="(max-width: 300px) 100vw, 300px">

		<h2 class="woocommerce-loop-product__title">Album</h2>
		<span class="price">
			<span class="woocommerce-Price-amount amount">
				<bdi>
					<span class="woocommerce-Price-currencySymbol">$</span>15.00
				</bdi>
			</span>
		</span>
	</div>
	<a href="?add-to-cart=369" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="369" data-product_sku="woo-album" aria-label="Add “Album” to your cart" aria-describedby="" rel="nofollow">
		Add to cart
	</a>
</div>


*/

defined( 'ABSPATH' ) || exit;

global $product;

?>
<div class=" col-md-3 col-sm-6 " >
<div class="shop-product">
	 <div class="product-thumb">
	    
	    <a href="<?php the_permalink(); ?>">
	    	<?php the_post_thumbnail()?>
	    </a>

	    <div class="product-overlay">
	    	<?php do_action('woocommerce_after_shop_loop_item');?>
	    </div>
    </div>

    <div class="product-info">
      <h4 class="upper"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4><span><?php  echo $product->get_price_html();?></span>
      <div class="save-product"><a href="#"><i class="icon-heart"></i></a></div>
    </div>

</div>
</div>