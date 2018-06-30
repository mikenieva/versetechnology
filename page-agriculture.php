<?php get_header() ?>

<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
<section class="hero">
		<div class="background" style="background-image: url('<?php echo $image[0]; ?>')">
            <h2>
                <?php echo get_the_title()?>
            </h2>
			<figure>
				<img src="<?php echo get_template_directory_uri() . '/images/medicion-agriculture.png'?>">
			</figure>
            
		</div>
</section>

<br>
<?php get_template_part('oni') ?>
<hr style="padding:0 10%; width: 59%">
<?php get_template_part('golem') ?>
<br>
<!--
<section class="casestudies">
	<h2 style="">Applications</h2>
	<?php query_posts('tag=casos'); if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="articulo">
		<figure>
			<a href="">
				<img class="portada" src="http://localhost:8888/wordpress-vt/wp-content/uploads/2018/05/aliis-sinisalu-70432.jpg" style="">
			</a>
		</figure>
		<div class="datos">
			<a href="">
				<h3><?php the_title(); ?></h3>
			</a>
			<p><?php the_excerpt('100'); ?></p>
	   </div>   
	</div>	
	<?php endwhile; else : ?>
	<?php endif; wp_reset_query(); ?>
</section>
-->
<!--
<?php get_template_part('subscribe') ?>
-->
<?php get_footer() ?>