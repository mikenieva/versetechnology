<?php get_header() ?>
	<section>
		<div id="inicio" style="background-image: url('<?php echo get_template_directory_uri() . '/images/VT_hero_home.jpg' ?>');">
				<div class="marketing">
					<div class="copyprincipal">
						<h1 style="">Enabling Access to the<br>Industrial Digital World.</h1>	
					</div>
					
					<figure>
						<img class="temperaturemetric" src="<?php echo get_template_directory_uri() . '/images/temperature.png'?>">
						<img class="humiditymetric" src="<?php echo get_template_directory_uri() . '/images/humidity.png'?>" >
					</figure>
					<figure class="onihero">
						<img src="<?php echo get_template_directory_uri() . '/images/onifinal.png'?>" alt="">
					</figure>
				</div>
		</div>
	</section>

	<section class="completesystems">
		<div>
			<h2>
				Complete Systems
			</h2>
		</div>
	
		<div class="icn">
			<div class="firstcolumn">
				<div class="description square1">
					<figure>
						<img src="<?php echo get_template_directory_uri() . '/images/icn_variable.png'?>">
					</figure>
					<div class="icndescription">
						<h4 class="info-title">1. Variable</h4>
						<p class="description">Measure any type of variable, such as temperature, humidity, conductivity, etc.</p>
					</div>
				</div>
				<div class="description square2">
					<figure>
						<img src="<?php echo get_template_directory_uri() . '/images/icn_hardware.png'?>">
					</figure>
					<div class="icndescription">
						<h4 class="info-title">2. Hardware</h4>
						<p class="description">Install devices anywhere such as fields, pools or enclosed spaces.</p>
					</div>
				</div>
				<div class="description square3">
					<figure>
						<img src="<?php echo get_template_directory_uri() . '/images/icn_signal.png'?>">
					</figure>
					<div class="icndescription">
						<h4 class="info-title">3. Connectivity</h4>
						<p class="description">Connect to the platform at all times thanks to the extensive communication network that reaches remote locations.</p>
					</div>
				</div>
			</div>
			<div class="firstcolumn">
				<div class="description square4">
					<figure>
						<img src="<?php echo get_template_directory_uri() . '/images/icn_monitoring.png'?>">
					</figure>
					<div class="icndescription">
						<h4 class="info-title">4. Monitoring</h4>
						<p class="description">Access to the necessary information in real time.</p>
					</div>
				</div>
				<div class="description square5">
					<figure>
						<img src="<?php echo get_template_directory_uri() . '/images/icn_notifications.png'?>">
					</figure>
					<div class="icndescription">
						<h4 class="info-title">5. Notifications</h4>
						<p class="description">Receive alerts on any device when a variable is out of range.</p>
					</div>
				</div>
				<div class="description square6">
					<figure>
						<img src="<?php echo get_template_directory_uri() . '/images/icn_outcome.png'?>">
					</figure>
					<div class="icndescription">
						<h4 class="info-title">6. Results</h4>
						<p class="description">Get more benefit from the impact that optimization and automation of your processes will have in making decisions with reliable data.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

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