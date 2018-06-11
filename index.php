<?php get_header() ?>

	<section>
	<div id="inicio" style="background-image: url('<?php echo get_template_directory_uri() . '/images/VT_hero_home.jpg' ?>');margin: 0;background-position: -600px -735px;height: 590px;background-size: auto 1665px !important;">
			<div class="" style="width: 30%;text-align: left;display: inline-block;vertical-align: top;margin-left: 325px;">
				<div class="" style="padding: 0px 0px 25px;width: 100%;">
					<h1 style="text-align: left;font-size: 39px;line-height: 37px;margin-left: 80px;margin-top: 80px;    line-height: 52px;">Design House<br> &amp; IIoT Consultancy</h1>	
				</div>

				<img style="margin-left: 80px; width: 270px;" src="<?php echo get_template_directory_uri() . '/images/temperature.png'?>" alt="">
				<img style="margin-left: 80px; width: 270px;" src="<?php echo get_template_directory_uri() . '/images/humidity.png'?>" alt="">
			</div>
			<figure style="width: 45%;text-align: right;padding-right: 420px;display: inline-block;margin-top: 20px;">
				<img style="width: 160px;" src="<?php echo get_template_directory_uri() . '/images/dispositivo-oni.png'?>" alt="">
			</figure>
		</div>
	</section>

	<div style="background-color: #2f69f0;padding-bottom: 80px;">
		<div>
			<h2 style="text-align: center;font-size: 27px;color: white;padding-top: 60px;margin: 0;padding-bottom: 60px;">
				Implementing our Complete Systems
			</h2>
		</div>
		<div style="background-color: #2f69f0;width: 36%;display: inline-block;vertical-align: top;margin-left: 20%;">
        <div class="description" style="margin-top: 34px;width: 85%;">
			<figure style="display: inline-block;vertical-align: top;">
				<img src="<?php echo get_template_directory_uri() . '/images/icn_variable.png'?>" alt="" style="width: 60px;">
			</figure>
			<div style="display: inline-block;margin-left: 16px;">
				<h4 class="info-title" style="color:white;display: block;vertical-align: top;margin: 0;" ;="">1. Variable</h4>
				<p class="description" style="color:white;display: inline-block;width: 308px;margin-top: 9px;">Measure any type of variable, such as temperature, humidity, conductivity, etc...</p>
			</div>
		</div>
		<div class="description" style="margin-top: 34px;width: 85%;">
			<figure style="display: inline-block;vertical-align: top;">
				<img src="<?php echo get_template_directory_uri() . '/images/icn_hardware.png'?>" alt="" style="width: 60px;">
			</figure>
			<div style="display: inline-block;margin-left: 16px;">
				<h4 class="info-title" style="color:white;display: block;vertical-align: top;margin: 0;" ;="">2. Hardware</h4>
				<p class="description" style="color:white;display: inline-block;width: 308px;margin-top: 9px;">Install devices anywhere such as fields, pools or enclosed spaces.</p>
			</div>
		</div>
		<div class="description" style="margin-top: 34px;width: 85%;">
			<figure style="display: inline-block;vertical-align: top;">
				<img src="<?php echo get_template_directory_uri() . '/images/icn_monitoring.png'?>" alt="" style="width: 60px;">
			</figure>
			<div style="display: inline-block;margin-left: 16px;">
				<h4 class="info-title" style="color:white;display: block;vertical-align: top;margin: 0;" ;="">3. Monitoring</h4>
				<p class="description" style="color:white;display: inline-block;width: 308px;margin-top: 9px;">Access to the necessary information in real time. Access to the necessary information in real time.</p>
			</div>
		</div>
	</div>

<div style="background-color: #2f69f0;width: 35%;display: inline-block;vertical-align: top;">
		<div class="description" style="margin-top: 34px;">
			<figure style="display: inline-block;vertical-align: top;">
				<img src="<?php echo get_template_directory_uri() . '/images/icn_monitoring.png'?>" alt="" style="width: 60px;">
			</figure>
			<div style="display: inline-block;margin-left: 16px;">
				<h4 class="info-title" style="color:white;display: block;vertical-align: top;margin: 0;" ;="">4. Connectivity</h4>
				<p class="description" style="color:white;display: inline-block;width: 308px;margin-top: 9px;">Connect to the platform at all times thanks to the extensive communications network that reaches remote locations.</p>
			</div>
		</div>
		<div class="description" style="margin-top: 34px;">
			<figure style="display: inline-block;vertical-align: top;">
				<img src="http://localhost:8888/wordpress-vt/wp-content/themes/vt/images/icn_notifications.png" alt="" style="width: 60px;">
			</figure>
			<div style="display: inline-block;margin-left: 16px;">
				<h4 class="info-title" style="color:white;display: block;vertical-align: top;margin: 0;" ;="">5. Notifications</h4>
				<p class="description" style="color:white;display: inline-block;width: 308px;margin-top: 9px;">Receive alerts on any device.</p>
			</div>
		</div>
		<div class="description" style="margin-top: 34px;">
			<figure style="display: inline-block;vertical-align: top;">
				<img src="http://localhost:8888/wordpress-vt/wp-content/themes/vt/images/icn_outcome.png" alt="" style="width: 60px;">
			</figure>
			<div style="display: inline-block;margin-left: 16px;">
				<h4 class="info-title" style="color:white;display: block;vertical-align: top;margin: 0;" ;="">6. Results</h4>
				<p class="description" style="color:white;display: inline-block;width: 308px;margin-top: 9px;">Get more benefit from the impact that optimization and automation of your processes will have in making decisions with reliable data.</p>
			</div>
		</div>
    </div>
</div>

</section>
<div class="blog-2 section section-gray" style="background-color:#f1f5ff">
	<div class="container">
<div class="row">
		<h2 class="title" style="text-align:center;font-size: 27px;color: #2f68f0;">Some Applications</h2>
		<br/>
		<br/>
 

		<div class="row">
		<?php query_posts('showposts=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="col-md-4">
				<div class="card card-blog">
					<div class="card-image">
						<a href="<?php the_permalink(); ?>">
							<img class="img img-raised" style="    width: 100%;" src=" <?php the_post_thumbnail_url(); ?>"/>
						</a>
					</div>
					<div class="card-body">
						<h6 class="card-category text-info">
							<?php 
							$categories = get_the_category();
							echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
							echo "</a>";
							?>
						</h6>
						<h5 class="card-title">
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
</div>
</div>

<div class="" style="margin-bottom: 70px;">
			<div class="container">
					<div class="row" style="text-align:center;">
			<div class="text-center" style="text-align:center;">
            <br>
            <br>
				<h2 class="title" style="font-size: 27px;color: #2f68f0;">Trusted by</h2>
            </div>
        </div>
        
      
					<div class="row" style="text-align:center;">
							<div class="col-md-2 col-md-offset-1" >
									<div class="info">
											<div class="icon icon-danger">
													<i class="nc-icon nc-palette"></i>
											</div>
											<div class="description">
													<img style="width: 100px;" src="<?php echo get_template_directory_uri() . '/images/att-logo.png' ?>">
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
										<img src="<?php echo get_template_directory_uri() .  '/images/arduinoblue.png'?>">
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="info">
								<div class="icon icon-danger">
										<i class="nc-icon nc-palette"></i>
								</div>
								<div class="description">
									<img src="<?php echo get_template_directory_uri() . '/images/ubidotsblue.png' ?>">
								</div>
							</div>
						</div>
					</div>							
				</div>
			</div>


<div class="row" style="
    background: #f1f5ff;
    margin: 0;
    width: 100%;
    max-width: inherit;
">
	<div class="col-md-4 col-md-offset-2">
		<div class="card card-plain">
									<div class="card-body">
			<br>
			<br>
			<br>
            <a href="#productos">
				<h3 class="card-title">Meet Our Solutions</h3>
			</a>
											<p class="card-description">State-of-the-art devices designed to cover industrial requirements and implement complete IIoT solutions monitoring suitable variables.</p>
											<br>
											<br>
											<div class="card-footer">
													<a href="" class="btn btn-link btn-neutral" style="background-color: #2e69f0;">
															<i class="fa fa-book" aria-hidden="true"></i> Go to Store
													</a>
													<a href="#pablo" class="btn btn-link btn-neutral" style="background-color: white; color:#2e69f0">
														<i class="fa fa-book" aria-hidden="true"></i> Book a demo
												</a>
													
											</div>
											<br>
											<br>
											<br>
		</div>
		</div>
	</div>



					<div class="col-md-2" style="text-align:center;">
						<br>
						<br>
                        <img src="http://localhost:8888/wordpress-vt/wp-content/themes/vt/images/oni.png" style="    width: 62%;" alt="">
                    </div>
                    <div class="col-md-2">
						<br>
						<br>
                        <img src="http://localhost:8888/wordpress-vt/wp-content/themes/vt/images/kraken3.png" style="    width: 100%;" alt="">
					</div>
</div>

<?php get_template_part('subscribe') ?>

<?php get_footer() ?>