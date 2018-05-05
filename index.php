<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta charset="UTF-8">
	<meta name="description" content="VERSE Technology"/>
	<meta name="google-site-verification" content="eMm5vhErJw5nDnJ0pS3ujhbnRtO_USo7gVHAIw5j4No" />
	<title>VERSE Technology</title>
    <meta name="description" content="VERSE Technology. Research, development, implementation and support for the Internet of Things."/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/Normalize/normalize.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/Bootstrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/Bootstrap/css/bootstrap-theme.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/Pop-Up/magnific-popup.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/style.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/mobile.css' ?>">
	
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/font-verse.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/build.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/paperkit.css' ?>">




	<link href="<?php echo get_template_directory_uri() . '/favicon.ico';?>" rel="shortcut icon" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.2/angular.min.js"></script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-90893061-1', 'auto');
      ga('send', 'pageview');
  </script>

  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '554650828259573'); // Insert your pixel ID here.
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=554650828259573&ev=PageView&noscript=1"
  /></noscript>
  <!-- DO NOT MODIFY -->
  <!-- End Facebook Pixel Code -->

  <!-- event fb -->
  <!--<script>
  fbq('track', 'CompleteRegistration', {
  value: 25.00,
  currency: 'USD'
  });
  </script>-->
  <!-- end event fb -->

  <!-- Add event to the button's click handler -->
    <script type="text/javascript">
    $( '#addToRegistrationButton' ).click(function() {
    fbq('track', 'CompleteRegistration', {
    value: 25.00,
    currency: 'USD'
    });
    });
    </script>

</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="border-bottom: none; background-color: #08142E">
		<div class="container" style="background-color: none;">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
				<div class="col-xs-6 col-sm-2">
					<a class="navbar-brand" href="https://verse-technology.com/" style="width:100%">
						<img alt="" class="logoImg" src="<?php echo get_template_directory_uri() . '/images/Logo.png' ?>">
					</a>
				</div>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav" style="padding-right: 15px;">
					<li>
						<a href="/hardware" style="text-align: center;">Industries</a>
					</li>
					<li>
						<a href="/solutions" style="text-align: center;">Blog</a>
					</li>
					<li>
						<a href="/vt/blog/" style="text-align: center;">Press</a>
					</li>
					<li>
						<a href="/investment" style="text-align: center;">Store</a>
					</li>
					<li>
						<a href="/investment" style="text-align: center;">Careers</a>
					</li>
					<li>
						<a href="/investment" style="text-align: center;">Investment</a>
					</li>
					<li><a href="" style="text-align: center;"><img src="<?php echo get_template_directory_uri() . '/images/united-states.png' ?>"></a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</nav>
	<section>
		<div id="inicio" style="background-image: url('<?php echo get_template_directory_uri() . '/images/background-home.png' ?>');background-size: cover !important; ">
			<div class="row clearfix">
				<div class="col-xs-12" style="padding: 80px 0px;">
							<h1>Justo Ligula Nullam Ornare enenatis vest at lobortis.</h1>
							<br>
							<br>
						<center>
							<a href="/contact-us"><button class="btn button-up main-button" style="box-shadow: none; float: center; margin-right: 0px; margin-left: 0px; background-color: #2e69f0; color:white">Call to action</button></a>
						</center>
						<br>
						<br>
						<div style="text-align:center">
							<img src="<?php echo get_template_directory_uri() . '/images/graficos1x.png'?>" alt="">
						</div>
				</div>
			</div>
 			<!--     *********     FEATURES 1      *********      -->
        <div class="">
                <div class="row" style="color:white";>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-palette">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icn_1.png'?>" alt="">
                                </i>
                            </div>
                            <div class="description">
                                <h4 class="info-title" style="color:white";>Measure</h4>
                                <p class="description" style="color:white";>Spend your time generating new ideas. You don't have to think of implementing. Spend your time generating new ideas. You don't have to think of implementing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-bulb-63">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icn_2.png'?>" alt="">
                                </i>
                            </div>
                            <div class="description" style="color:white";>
                                <h4 class="info-title" style="color:white";>Analyse</h4>
                                <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. Larger, yet dramatically thinner. More powerful, but remarkably power efficient</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-chart-bar-32">
                                    <img src="<?php echo get_template_directory_uri() . '/images/icn_3.png'?>" alt="">
                                </i>
                            </div>
                            <div class="description" style="color:white";>
                                <h4 class="info-title" style="color:white";>Take action</h4>
                                <p>Choose from a veriety of many colors resembling sugar paper pastels. Choose from a veriety of many colors resembling sugar paper pastels</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
			</div>
	</section>



<div class="">
			<div class="container">
					<div class="row" style="text-align:center;">
			<div class="text-center" style="text-align:center;">
            <br>
            <br>
				<h2 class="title">Trusted by</h2>
            </div>
        </div>
        
      
					<div class="row" style="text-align:center;">
							<div class="col-md-2 col-md-offset-1" >
									<div class="info">
											<div class="icon icon-danger">
													<i class="nc-icon nc-palette"></i>
											</div>
											<div class="description">
													<img src="<?php echo get_template_directory_uri() . '/images/atmelblue.png' ?>">
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
            <br>
            <br>
<!--     *********     BLOGS 2      *********      -->

<div class="blog-2 section section-gray" style="background-color:#f1f5ff">
	<div class="container">
<div class="row">
		<h2 class="title" style="text-align:center">Case Studies</h2>
		<br />
		<div class="row">
			<div class="col-md-4">
				<div class="card card-blog">
					<div class="card-image">
						<a href="#pablo">
							<img class="img img-raised" src="https://images.unsplash.com/photo-1489575623533-95058aaa3685?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c09344811798ed7f6621dad7d83538f8&auto=format&fit=crop&w=1050&q=80" />
						</a>
					</div>
					<div class="card-body">
						<h6 class="card-category text-info">Agricultura</h6>
						<h5 class="card-title">
							<a href="#pablo">LinkedIn’s new desktop app arrives</a>
						</h5>
						<p class="card-description">
							LinkedIn is today launching its official desktop application for Windows 10, allowing the professional social networking service to... <br/>
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card card-blog">
					<div class="card-image">
						<a href="#pablo">
							<img class="img img-raised" src="https://images.unsplash.com/photo-1489575623533-95058aaa3685?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c09344811798ed7f6621dad7d83538f8&auto=format&fit=crop&w=1050&q=80" />
						</a>
					</div>
					<div class="card-body">
						<h6 class="card-category text-success">
							Startups
						</h6>
						<h5 class="card-title">
							<a href="#pablo">MIT’s Cheetah 3 robot is built to save lives</a>
						</h5>
						<p class="card-description">
							The latest version of MIT’s Cheetah robot made its stage debut today at TC Sessions: Robotics in Cambridge, Mass. It’s a familiar project... <br/>
						</p>

					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card card-blog">
					<div class="card-image">
						<a href="#pablo">
							<img class="img img-raised" src="https://images.unsplash.com/photo-1489575623533-95058aaa3685?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c09344811798ed7f6621dad7d83538f8&auto=format&fit=crop&w=1050&q=80" />
						</a>
					</div>

					<div class="card-body">
						<h6 class="card-category text-danger">
							<i class="fa fa-free-code-camp" aria-hidden="true"></i> Enterprise
						</h6>
						<h5 class="card-title">
							<a href="#pablo">Lionel Richie says “Hello” to startup investors</a>
						</h5>
						<p class="card-description">
							Because developing a doctor-on-demand service that would a, booked through an app on a user’s phone is... <br/>
						</p>
															
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card card-blog">
					<div class="card-image">
						<a href="#pablo">
							<img class="img img-raised" src="https://images.unsplash.com/photo-1489575623533-95058aaa3685?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c09344811798ed7f6621dad7d83538f8&auto=format&fit=crop&w=1050&q=80" />
						</a>
					</div>

					<div class="card-body">
						<h6 class="card-category text-danger">
							<i class="fa fa-free-code-camp" aria-hidden="true"></i> Enterprise
						</h6>
						<h5 class="card-title">
							<a href="#pablo">Lionel Richie says “Hello” to startup investors</a>
						</h5>
						<p class="card-description">
							Because developing a doctor-on-demand service that would allow personalized medical visits, booked through an app on a user’s phone is... <br/>
						</p>
															
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card card-blog">
					<div class="card-image">
						<a href="#pablo">
							<img class="img img-raised" src="https://images.unsplash.com/photo-1489575623533-95058aaa3685?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c09344811798ed7f6621dad7d83538f8&auto=format&fit=crop&w=1050&q=80" />
						</a>
					</div>

					<div class="card-body">
						<h6 class="card-category text-danger">
							<i class="fa fa-free-code-camp" aria-hidden="true"></i> Enterprise
						</h6>
						<h5 class="card-title">
							<a href="#pablo">Lionel Richie says “Hello” to startup investors</a>
						</h5>
						<p class="card-description">
							Because developing a doctor-on-demand service that would allow personalized medical visits,  through an app on a user’s phone is...  medical visits  medical visits  medical visits <br/>
						</p>
															
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card card-blog">
					<div class="card-image">
						<a href="#pablo">
							<img class="img img-raised" src="https://images.unsplash.com/photo-1489575623533-95058aaa3685?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c09344811798ed7f6621dad7d83538f8&auto=format&fit=crop&w=1050&q=80" />
						</a>
					</div>

					<div class="card-body">
						<h6 class="card-category text-danger">
							<i class="fa fa-free-code-camp" aria-hidden="true"></i> Enterprise
						</h6>
						<h5 class="card-title">
							<a href="#pablo">Lionel Richie says “Hello” to startup investors</a>
						</h5>
						<p class="card-description">
							Because developing a doctor-on-demand service that would allow personalized medical visits, user’s phone is... medical visits  medical visits  medical visits <br/>
						</p>
															
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

<div class="row" style="background-color:white">
	<div class="col-md-4 ml-auto col-md-offset-1">
		<div class="card card-plain">
									<div class="card-body">
			<br>
			<br>
			<br>
            <a href="#productos">
				<h3 class="card-title">Nuestros Productos</h3>
			</a>
											<p class="card-description">Eventually, the data collected from the grant program could allow the two to play a bit of machine learning moneyball — valuing machine learning engineers without traditional metrics (like having a PhD from Stanford)...</p>
											<br>
											<br>
											<div class="card-footer">
													<a href="#pablo" class="btn btn-link btn-neutral" style="background-color: #2e69f0;">
															<i class="fa fa-book" aria-hidden="true"></i> Go to Store
													</a>
													<a href="#pablo" class="btn btn-link btn-neutral" style="background-color: white; color:#2e69f0; border: 1px solid #2e69f0">
														<i class="fa fa-book" aria-hidden="true"></i> Book a demo
												</a>
													
											</div>
											<br>
											<br>
											<br>
		</div>
		</div>
	</div>

					<div class="col-md-3"style="text-align:center;">
						<br>
						<br>
                        <img src="<?php echo get_template_directory_uri() . '/images/oni.png'?>" style="    width: 62%;" alt="">
                    </div>
                    <div class="col-md-3">
						<br>
						<br>
                        <img src="<?php echo get_template_directory_uri() . '/images/kraken3.png'?>" style="    width: 100%;" alt="">
					</div>
</div>

	
<!-- Footer oficial -->
		<section class="hidden-xs" style="background-color: #1B1D1F; padding: 20px;">
			<div class="row clearfix" style="padding: 0;">
				<div class="col-xs-12 no-pad" style="border-bottom: 1px solid #C8C8C8; padding: 50px 0px 25px 0px; ">
					<div class="col-xs-12 col-sm-3 SubFooter" style=" padding-left: 50px;">
					    <p class="vsp" style="font-size: 20px !important; margin-bottom: 5px;">VERSE <b>Technology</b></p>
					    <p class="vsp">VERSE Technology</p>
						<p class="vsp">VERSE Software S.A.P.I. de C.V.</p>
                        <p class="vsp">Insurgentes Sur 859 | Pisa 2</p>
                        <br>
                        <p class="vsp">Nápoles | Benito Juárez</p>
                        <p class="vsp">Mexico City 03810</p>
						</br>
						</br>
						</br>
						<p class="vsp" style="margin-top: 20px;"><span class="copyright"> 2018 VERSE Technology</p>
					</div>
					<div class="col-xs-12 col-sm-3 SubFooter" style="padding-left: 50px;">
					    <p class="vsp" style="font-size: 13px !important; margin: 2.5px 0px;"><b>COMPANY</b></p>
						<p class="vsp">(+52) 1 55 4122 0131</p>
						<p class="vsp">hi@verse-technology.com</p>
						<a href="/vt/blog/" target="_blank"><p class="vsp">Blog</p></a>
						<a href="/investment"><p class="vsp">Investment</p></a>
						</br>
						</br>
						</br>
						<a href="/privacy"><p class="vsp" style="margin-top: 17px;">Privacy Policy</p></a>
					</div>
					<div class="col-xs-12 col-sm-3 SubFooter" style="padding-left: 50px;">
						<p class="vsp" style="font-size: 13px !important; margin: 2.5px 0px;"><b>HARDWARE</b></p>
						<a href="/goblin2"><p class="vsp">GOBLIN 2</p></a>
						<a href="/goblin2plus"><p class="vsp">GOBLIN 2 Plus</p></a>
						<a href="/goblin2plussigfox"><p class="vsp">GOBLIN 2 Plus Sigfox</p></a>
						<p class="vsp" style="font-size: 13px !important; margin: 20px 0px 2.5px 0px;"><b>SOLUTIONS</b></p>
						<a href="/kraken"><p class="vsp" style="padding-top: 0px;">Water monitoring</p></a>
						<a href="/golem"><p class="vsp">Smart irrigation</p></a>
						<a href="/oni"><p class="vsp">Temperature & Humidity</p></a>
						<a href="/argos"><p class="vsp">Tracking & Logistics</p></a>
					</div>
					<div class="col-xs-12 col-sm-3 SubFooter" style="padding-left: 50px;">
						<p class="vsp" style="font-size: 13px !important; margin: 2.5px 0px;"><b>FIND US</b></p>
						<ul class="socials">
							<li>
								<a href="https://www.facebook.com/versetechnology/" target="_blank"><i class="gv-facebook-03"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Facebook</p></a>
							</li>
							<li>
								<a href="https://twitter.com/VERSETechnology" target="_blank"><i class="gv-twitter-03"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Twitter</p></a>
							</li>
							<!--
							<li>
								<a href="https://www.instagram.com/verse_technology"><i class="gv-instagram-03 footer1"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Instagram</p></a></li>
           		<li>
							-->
           						<a href="https://www.youtube.com/channel/UCoU72-E8t9C-9hKWhJuK80g"><i class="gv-youtube-03 footer1"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Youtube</p></a>
           					</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row clearfix" style="padding: 0;">
				<div class="col-xs-12 no-pad" style="padding: 25px 0px 35px 0px; text-align: center;">
					<div class="col-xs-12 SubFooter">
						<a href="https://www.grupoverse.com" target="_blank"><p class="vsp" style="font-size: 16px !important;">VERSE</p></a>
					</div>
				</div>
			</div>
		</section>
		<!-- end footer -->
		<section class="visible-xs" style="background-color: #1B1D1F; padding: 20px;">
			<div class="row clearfix" style="padding: 0;">
				<div class="col-xs-12 no-pad" style="padding: 30px 0px 25px 0px;">
					<p class="menucollapse">
					  <a class="btn btn-collapse" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
					    COMPANY
					  </a>
					</p>
					<div class="collapse" id="collapseExample">
					  <div class="card card-body">
					    <p class="vsp" style="padding-top: 20px;">(+52) 1 55 4122 0131</p>
						<p class="vsp">hi@verse-technology.com</p>
						<a href="/vt/blog/" target="_blank"><p class="vsp">Blog</p></a>
						<a href="/investment"><p class="vsp">Investment</p></a>
						<a href="/privacy"><p class="vsp">Privacy Policy</p></a>
					  </div>
					</div>
					<p class="menucollapse">
					  <a class="btn btn-collapse" href="/hardware" aria-expanded="false">
					    HARDWARE
					  </a>
					</p>
					<div class="collapse" id="collapseExample1">
					  <div class="card card-body">
					    <a href="/goblin2"><p class="vsp" style="padding-top: 20px;">GOBLIN 2</p></a>
						<a href="/goblin2plus"><p class="vsp">GOBLIN 2 Plus</p></a>
						<a href="/goblin2plussigfox"><p class="vsp">GOBLIN 2 Plus Sigfox</p></a>
					  </div>
					</div>
					<p class="menucollapse">
            <a class="btn btn-collapse" href="/solutions" aria-expanded="false">
              SOLUTIONS
            </a>
          </p>
					<div class="collapse" id="collapseExample2">
					  <div class="card card-body">
							<a href="/kraken"><p class="vsp" style="padding-top: 10px;">Water Monitoring</p></a>
							<a href="/golem"><p class="vsp">Smart Irrigation</p></a>
							<a href="/oni"><p class="vsp">Temperature & Humidity</p></a>
							<a href="/argos"><p class="vsp">Tracking & Logistics</p></a>
					  </div>
					</div>
					<div class="col-xs-12 SubFooter" style="border-bottom: 1px solid #C8C8C8; padding: 0px;">
						<div class="col-xs-3 redes">
							<a href="https://www.facebook.com/versetechnology/" target="_blank"><i class="gv-facebook-03 redescolor"></i><p class="vsp" style="display: inline-block; position: absolute;"></p></a>
						</div>
						<div class="col-xs-3 redes">
							<a href="https://twitter.com/VERSETechnology" target="_blank"><i class="gv-twitter-03 redescolor"></i><p class="vsp" style="display: inline-block; position: absolute;"></p></a>
						</div>
						<!--
						<div class="col-xs-3 redes">
							<a href="https://www.instagram.com/verse_technology"><i class="gv-instagram-03 redescolor"></i><p class="vsp" style="display: inline-block; position: absolute;"></p></a>
						</div> -->
						<div class="col-xs-3 redes">
							<a href="https://www.youtube.com/channel/UCoU72-E8t9C-9hKWhJuK80g"><i class="gv-youtube-03 redescolor"></i><p class="vsp" style="display: inline-block; position: absolute;"></p></a>
						</div>
					</div>
					<div class="col-xs-12">
						<a href="https://www.grupoverse.com" target="_blank"><p class="menucollapse btn-collapse" style="border-bottom: none;">VERSE</p></a>
					</div>
				</div>
			</div>
		</section>
		</div><!--div main-->
	</div><!--div wrapper-->

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document" style="margin-top: 80px;">
	    <div class="modal-content">
	      <div class="modal-header" style="background-color: #0F2352; border: 1px solid #0F2352; text-align: center;">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -12px;" style="color: #fff;"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
	        <h4 class="modal-title title-contact" id="myModalLabel">Contact us</h4>
	      </div>
	      <form action="thanks.php" method="post">
		      <div class="modal-body text-contact">
			        <div class="col-xs-12 no-pad">
			        	<input type="text" name="name" class="col-xs-12 input-contact" placeholder="What's your name?" required="" style="margin-top: 20px;">
			        </div>
			        <div class="col-xs-12 no-pad">
			        	<input type="email" name="email" class="col-xs-12 input-contact" placeholder="What's your e-mail?" required="">
			    	</div>
			    	<div class="col-xs-12 no-pad">
			        	<input type="text" name="cellphone" class="col-xs-12 input-contact" pattern="[0-9]{10}" placeholder=" What's your WhatsApp?" required="">
			        </div>
			        <div class="col-xs-12 no-pad">
			        	<textarea rows="3" type="text" name="message" class="col-xs-12 input-contact" placeholder="How can we help you?"></textarea>
			        </div>
		      </div>
		      <div class="modal-footer" style="border-top: none; padding: 30px 50px;">
		        <button name="submit" type="submit" class="btn btn-contact col-xs-12">Send your message</button>
		      </div>
	  	  </form>
	    </div>
	  </div>
	</div>

	<script src="js/Jquery/jquery.min.js" type="text/javascript">
	</script>
	<script src="js/Bootstrap/bootstrap.min.js" type="text/javascript">
	</script>
	<script src="js/app.js"></script>
	<script src="js/wow.js" type="text/javascript">
	</script>
	<script src="js/wow-custom.js" type="text/javascript">
	</script>
	<script src="js/Pop-Up/jquery.magnific-popup.js" type="text/javascript">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js" type="text/javascript">
	</script>
	<script src="https://use.fontawesome.com/06f1165186.js">
	</script>
</body>
</html>
