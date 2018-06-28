<?php get_header() ?>

<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
<section class="hero">
		<div class="background" style="background-image: url('<?php echo $image[0]; ?>')">
            <h2>
                <?php echo get_the_title()?>
            </h2>
			<figure>
				<img src="<?php echo get_template_directory_uri() . '/images/medicion-aquaculture.png'?>">
			</figure>
            
		</div>
</section>

<br>
<?php get_template_part('kraken') ?>
<br>

<!--
<section class="casestudies">
	<h2 style="">Applications</h2>
   	<div class="articulo">
		<figure>
			<a href="">
				<img class="portada" src="http://localhost:8888/wordpress-vt/wp-content/uploads/2018/05/aliis-sinisalu-70432.jpg" style="">
			</a>
		</figure>
		<div class="datos">
			<a href="">
				<h3>Título 1. De esto se trata.</h3>
			</a>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
	   </div>   
	</div>
</section>
-->
<!--
<?php get_template_part('subscribe') ?>
-->

<?php get_footer() ?>