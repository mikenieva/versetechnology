<?php 
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
?>
<?php
function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>
<?php
function wpdocs_excerpt_more( $more ) {
    return '...<br><a style="margin-top:40px;" href="'.get_the_permalink().'" rel="nofollow"><br><u>Seguir leyendo</u></a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
?>