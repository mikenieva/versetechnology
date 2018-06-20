<style>

a{
	color: #2b66ff;
}

.product{	
    width: 90%;
    text-align: left;
    margin-top: 106px;
    margin-left: 5%;
    margin-right: 5%;
}	

.woocommerce-product-gallery{

    display: inline-block;
    width: 53%;
    text-align: center;

}

	.woocommerce-message{
		text-align: center;
    	border: 1px solid #9a9b9b;
    	margin: 40px 25% 10px;
    	padding: 20px 0 20px;		
	}

	.woocommerce-message a{
		color: #2b66ff;
    	text-decoration: underline;
	}
	
	.woocommerce-Tabs-panel h3{
    	margin-top: 80px;
	}

.wc-forward{
	display: block;
}

.price{
    margin-bottom: 20px;	
}

.cart{
    margin-top: 50px;
    margin-bottom: 30px;
}

.single_add_to_cart_button{
    margin-top: 40px;
    display: block;
    background: #2b66ff;
    color: white;
    border-radius: 10px;
}

.posted_in{
    display: block;
    margin-bottom: 11px;
}

.wc-tabs{
	display: none;
}

.woocommerce-tabs{
    margin-left: 7%;
    margin-top: 85px;
}

.woocommerce-Tabs-panel h2{
    line-height: 34px;
    color: #2E69F0;
    font-weight: 400;
    margin-bottom: 40px;
    font-size: 40px;
}

.woocommerce-Price-amount{
	color: #9B9B9B;
    font-weight: bold;
}

#sidebar {
	display: none;
}

figure.woocommerce-product-gallery__wrapper div:nth-child(1){
	display: block;
}

figure.woocommerce-product-gallery__wrapper div:nth-child(2){
	display:inline-block;
	margin-right: 20px;
}

figure.woocommerce-product-gallery__wrapper div:nth-child(3){
	display:inline-block;
	margin-right: 20px;
}

figure.woocommerce-product-gallery__wrapper div:nth-child(4){
	display:inline-block;
	margin-right: 20px;
}

.woocommerce-breadcrumb{
	display: none;
}


.summary{
    display: inline-block;
    width: 41%;
    vertical-align: top;	
}

.summary h1{
	font-size: 26px;
    line-height: 50px;
}

</style>

<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hook Woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
			/**
			 * Hook: Woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
