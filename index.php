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
					<h3 class="card-title titulo">Meet Our Solutions</h3>
				</a>
				<p class="card-description pitch">Benefit from our technology and our broad project competence in the Industrial Internet of Things.</p>
				<div class="card-footer cta">	
					<button class="btn btn-link btn-home-bookademo" style="color: white;padding: 14px;background-color: #2f68f0;border-radius: 6px;font-weight: 500;">
					<a href="<?php echo get_home_url() . "/shop"; ?>">
						Go to store
					</a>
					</button>
					<button class="btn btn-link btn-home-bookademo" style="border-radius: 6px; border:1px solid #2f68f0:    border-radius: 6px;border: 2px solid #2f68f0 !important;padding: 14px;">
					<a href="<?php echo get_home_url() . "/booking"; ?>">
						Book a Demo
					</a>
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2 productos">
		<img src="<?php echo get_template_directory_uri() . '/images/oni-home.png'?>">
		<img src="<?php echo get_template_directory_uri() . '/images/kraken_home.png'?>">
	</div>
</section>


<!-- Begin MailChimp Signup Form -->



<section class="subscription">	
    <div class="container">
    	<div class="col-md-4 col-md-offset-1 titulo">
		<h1>Subscribe for updates</h1>
		<p>Get our new releases, developments and applications in your inbox.</p>
	</div>
	<div class="form col-md-offset-1 col-md-4">

	<div id="mc_embed_signup">
	<form action="https://verse-technology.us17.list-manage.com/subscribe/post?u=b6e1486ac7e354ab8b1f6e0af&amp;id=00cfdef602" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div id="mc_embed_signup_scroll">
			<div class="mc-field-group">
				<label style="font-weight: 300" for="mce-EMAIL">Email
				</label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="hi@example.com">
			</div>
			<br>
			<div class="mc-field-group">
				<label for="mce-group[8765]" style="font-weight: 300">Industry of your interest</label>
				<select name="group[8765]" class="REQ_CSS" style="border-radius: 5px;width: 100%;padding: 4px 6px 4px 15px;color: black;text-align: center;height: 35px;font-weight: 300" id="mce-group[8765]">
					<option value=""></option>
					<option value="1">Agriculture</option>
					<option value="2">Manufacturing</option>
					<option value="4">Livestock</option>
					<option value="8">Smart Cities</option>
					<option value="16">Aquaculture</option>
					<option value="32">Oil and Gas</option>
					<option value="64">Logistics and Supply chain</option>
				</select>
			</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b6e1486ac7e354ab8b1f6e0af_00cfdef602" tabindex="-1" value=""></div>
			<br>
			<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="color: white;font-weight: 500;font-size: 16px;background-color: #7ed323;
    		text-align: center;"></div>
		</div>
	</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

</section>

<section class="row meetsolutions">
	<div class="col-md-4 col-md-offset-2">
		<div class="card card-plain">
			<div class="card-body">
            	<a href="#productos">
					<h3 class="card-title titulo">Are you a maker?</h3>
				</a>
				<p class="card-description pitch">Push boundaries with our GOBLIN Collection. The right tool for world class projects.</p>
				<div class="card-footer cta">
					<button style="    color: white;padding: 0px 25px;background-color: #2f68f0;border-radius: 6px;font-weight: 500;">
						<a href="<?php echo get_home_url() . "/shop"; ?>" class="btn btn-link" style="color: white">
							BUY NOW
						</a>
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 goblins">
		<img src="<?php echo get_template_directory_uri() . '/images/goblins.png'?>">
	</div>
</section>

<?php get_footer() ?>