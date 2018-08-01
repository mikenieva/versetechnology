<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
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
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;

$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( '', 'woocommerce' ) ) );

?>

<?php if ( $heading ) : ?>
  <h2><?php echo $heading; ?></h2>
<?php endif; ?>

<div style="width: 50%; display:inline-block;">
  <?php the_content(); ?>
</div>


<div style="width: 260px;display:inline-block;vertical-align: top;background-color: #f1f5ff;margin: 135px 10% 0;">
    <div style="border: solid 1px #2f68f0;border-radius: 6px;">
      <section style="text-align: center;padding-top: 15px;">
          <h4 style="color: #2f68f0;font-weight: 400;">Explore the docs</h4>
      </section>
      <article style="margin-left: 30px;">
      <a target="_blank" href="
          <?php if(get_post_meta($post->ID, 'starting_guide', true)){echo get_post_meta($post->ID, 'starting_guide', true);}?>" style="color:white;font-weight:400">
        <button style="background-color: #2f68f0;color: white;font-weight: 400;border-radius: 4px;padding: 10px;width: 200px;text-align: left;border: none;margin-bottom: 20px;">
          Starting Guide
          <span style="float:right;"><i class="fas fa-angle-right"></i></span>
        </button>
        </a>
      </article>
      <article style="margin-left: 30px;">
        <a href="<?php if(get_post_meta($post->ID, 'github', true)){echo get_post_meta($post->ID, 'github', true);}?>" style="color:#2f68f0;font-weight:400">
        <button style="background-color: white;color: #2f68f0;font-weight: 400;border-radius: 4px;padding: 10px;width: 200px;text-align: left;border: none;margin-bottom: 20px;">
        GitHub
        <span style="float:right;"><i class="fas fa-angle-right"></i></span>
        </button>
        </a>
      </article>
    </div>
</div>


<div style=" margin-top: 150px;">
<h3 style="color: #2f68f0;font-weight: 400;">Tutorials</h3>
<?php
if(get_post_meta($post->ID, 'tutorial', true)){
  echo get_post_meta($post->ID, 'tutorial', true);
}
?>
</div>