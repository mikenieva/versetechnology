<?php get_header() ?>

	


<section class="blog-2 section section-gray bloghome">
	<div class="container">
		<div class="row">
			<h2 class="title">See our Case Studies</h2>
			<div class="row">
				<?php query_posts('showposts=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="col-md-4">
					<div class="card card-blog">
						<div class="card-image">
							<a href="<?php the_permalink(); ?>">
								<img class="img img-raised" style="width: 100%;" src=" <?php the_post_thumbnail_url(); ?>"/>
							</a>
						</div>
						<div class="card-body">
							<h6 class="card-category text-info category">
							<?php 
							$categories = get_the_category();
							echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
							echo "</a>";
							?>
							</h6>
							<h5 class="card-title titulo">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h5>
							<p class="card-description">
								<?php the_excerpt(); ?><br/>
							</p>
						</div>
					</div>
				</div>
				<?php endwhile; else : ?>
				<?php endif; wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>

<section class="trusted">
	<div class="container">
		<div class="row fila">
			<div class="text-center text">
				<h2 class="title">Trusted by</h2>
            </div>
        </div>
        <div class="row fila">
			<div class="col-md-2 col-md-offset-1 att">
				<div class="info">
					<div class="icon icon-danger">
						<i class="nc-icon nc-palette"></i>
					</div>
					<div class="description">
						<img src="<?php echo get_template_directory_uri() . '/images/att-logo.png' ?>">
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="info">
					<div class="icon icon-danger">
						<i class="nc-icon nc-palette"></i>
					</div>
					<div class="description">
						<img src="<?php echo get_template_directory_uri() . '/images/sigfox.png'?>">
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="info">
					<div class="icon icon-danger">
						<i class="nc-icon nc-palette"></i>
					</div>
					<div class="description">
						<img src="<?php echo get_template_directory_uri() . '/images/microsoft2x.png'?>">
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="info">
					<div class="icon icon-danger">
						<i class="nc-icon nc-palette"></i>
					</div>
					<div class="description">
						<img class="original" src="<?php echo get_template_directory_uri() .  '/images/arduinoblue.png'?>">
					</div>
				</div>
			</div>
		</div>							
	</div>
</section>
			
<section class="row meetsolutions">
	<div class="col-md-4 col-md-offset-2">
		<div class="card card-plain">
			<div class="card-body">
            	<a href="#productos">
					<h3 class="card-title titulo">Meet our Solutions</h3>
				</a>
				<p class="card-description pitch">State-of-the-art devices designed to cover industrial requirements and implement complete IIoT solutions monitoring suitable variables.</p>
				<div class="card-footer cta">
					<a href="#" class="btn btn-link btn-home-bookademo">
						Book a demo
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2 productos">
		<img src="<?php echo get_template_directory_uri() . '/images/oni-home.png'?>">
		<img src="<?php echo get_template_directory_uri() . '/images/kraken_home.png'?>">
	</div>
</section>

<!--
<?php get_template_part('subscribe') ?>
-->
<?php get_footer() ?>