<style>
	.woocommerce-breadcrumb{
		display:none;
	}
	.woocommerce-products-header{
    	margin-top: 50px;
    	margin-bottom: 60px;
	}

	h1.woocommerce-products-header__title{
    	text-align: center;
    	color: #2b66ff;
    	font-weight: 300;
    	font-size: 31px;
	}

	.woocommerce-ordering{
		display:none;
	}

	#sidebar{
		display:none;
	}

	.woocommerce-result-count{
		display:none;
	}

	h2.woocommerce-loop-product__title{
		text-align: center;
	}

	.has-post-thumbnail{
	    width: 30%;
	    display: inline-block;
	    text-align: center;
	}

	.product-type-simple{
	    width: 32%;
    	display: inline-block;
    	text-align: center;
    	margin-bottom: 100px;
	}

	span.onsale{
		display:none;
	}

	.add_to_cart_button{
		display:block;
		background: #2b66ff;
    	color: white;
    	border-radius: 10px;
    	margin: 15px 35% 0px;
    	text-align: center;
	}

	.woocommerce-Price-amount{
		color: #9B9B9B;
    	font-weight: bold;
	}

	a del{
		color: #9B9B9B;
	}

	.woocommerce-message{
		text-align: center;
    	border: 1px solid #9a9b9b;
    	margin: 10px 25% 70px;
    	padding: 20px 0 20px;		
	}

	.woocommerce-message a{
		color: #2b66ff;
    	text-decoration: underline;
	}

	.wc-forward{
		display: block;
	}

</style>

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
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php post_class(); ?>>
	<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>