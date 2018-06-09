<?php
/*
Template Name: Hero Industries
*/
?>

<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

<section>
		<div style="background-image: url('<?php echo $image[0]; ?>');margin: 0;margin: 0;width: 100%;background-size: cover;height: 600px;background-repeat: no-repeat;">
            <h2 style="padding-top:120px;color: white;font-weight: bold;text-align: center;">
                <?php echo get_the_title()?>
            </h2>
			<figure style="width: 100%;text-align: center;display: inline-block;margin-top: 120px;margin-left: 250px;">
				<img src="<?php echo get_template_directory_uri() . '/images/medicionkraken.png'?>">
			</figure>
            
		</div>
</section>
