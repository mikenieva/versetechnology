<?php get_header() ?>

<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
<section class="hero">
		<div class="background" style="background-image: url('<?php echo $image[0]; ?>')">
            <h2>
                <?php echo get_the_title()?>
            </h2>
			<figure>
				<img src="<?php echo get_template_directory_uri() . '/images/medicion-logistics.png'?>">
			</figure>
            
		</div>
</section>

<br>
<?php get_template_part('oni') ?>
<br>
<?php get_template_part('argos') ?>
<br>
<br>
<?php get_template_part('subscribe') ?>
<?php get_footer() ?>