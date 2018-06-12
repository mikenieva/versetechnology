<?php get_header() ?>

<?php get_template_part('heroindustries') ?>

<?php get_template_part('oni') ?>

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

<?php get_template_part('subscribe') ?>
<?php get_footer() ?>