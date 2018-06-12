<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta charset="UTF-8">
	<meta name="description" content="VERSE Technology"/>
	<title>VERSE Technology</title>
    <meta name="description" content="VERSE Technology. Enabling Access to the Industrial Digital World."/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/Normalize/normalize.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/Bootstrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/font-verse.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/paperkit.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/style.css' ?>">
	<link href="<?php echo get_template_directory_uri() . '/favicon.ico';?>" rel="shortcut icon" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/mobile.css' ?>">
</head>
<body>

<header class="cd-morph-dropdown">
		<a href="<?php echo get_home_url(); ?>">
			<img alt="" class="logomobile" src="<?php echo get_template_directory_uri() . '/images/Logo.png'?>">
		</a>
		<a href="#0" class="nav-trigger">
			<span aria-hidden="true"></span>
		</a>	
		<nav class="main-nav">
			<ul>
				<li>
				<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
					<img alt="" class="logoImg" src="<?php echo get_template_directory_uri() . '/images/Logo.png'?>">
				</a>
				</li>
				<li class="has-dropdown gallery" data-content="about">
					<a href="#0">Industries</a>
				</li>
				<li data-content="contact">
					<a href="<?php echo get_home_url() . "/blog"; ?>">Blog</a>
				</li>
				<li data-content="contact">
					<a href="<?php echo get_home_url() . "/blog/press"; ?>">Press</a>
				</li>
				<li data-content="contact">
					<a href="<?php echo get_home_url() . "/shop"; ?>">Store</a>
				</li>
				<li data-content="contact">
					<a href="<?php echo get_home_url() . "/careers"; ?>">Careers</a>
				</li>
				<li data-content="contact">
					<a href="<?php echo get_home_url() . "/investment"; ?>">Investment</a>
				</li>
				<li data-content="contact">
					<a href="#0">Spanish</a>
				</li>
			</ul>
		</nav>
		
		<div class="morph-dropdown-wrapper">
			<div class="dropdown-list">
				<ul>
					<li id="about" class="dropdown gallery">
						<a href="#" class="label">Industries</a>
						<div class="content">	
							<ul>
								<li>
									<a href="<?php echo get_home_url() . "/agriculture"; ?>">
										<em>Agriculture</em>
									</a>
								</li>

								<li>
									<a href="<?php echo get_home_url() . "/aquaculture"; ?>">
										<em>Aquaculture</em>
									</a>
								</li>

								<li>
									<a href="<?php echo get_home_url() . "/manufacturing"; ?>">
										<em>Manufacturing</em>
									</a>
								</li>

								<li>
									<a href="<?php echo get_home_url() . "/oil-gas"; ?>">
										<em>Oil and Gas</em>
									</a>
								</li>
								<li>
									<a href="<?php echo get_home_url() . "/logistics"; ?>">
										<em>Logistics</em>
									</a>
								</li>
								<li>
									<a href="<?php echo get_home_url() . "/livestock"; ?>">
										<em>Livestock</em>
									</a>
								</li>
								<li>
									<a href="<?php echo get_home_url() . "/smartcities"; ?>">
										<em>Smart Cities</em>
									</a>
								</li>
							</ul>
						</div>
					</li>

					<li id="pricing" class="dropdown links">
						<a href="#0" class="label">Company</a>

						<div class="content">
							<ul>
								<li>
									<h2>Sections</h2>

									<ul class="links-list">
										<li><a href="<?php echo get_home_url() . "/blog"; ?>">Blog</a></li>
										<li><a href="#0">Press</a></li>
										<li><a href="#0">Careers</a></li>
										<li><a href="#0">Store</a></li>
										<li><a href="#0">Investment</a></li>
									</ul>
								</li>
								<li>
									<h2>Find Us</h2>
								<ul class="links-list">
								<li><a href="#0">Facebook</a></li>
								<li><a href="#0">Twitter</a></li>
								<li><a href="#0">Youtube</a></li>
							</ul>
								</li>

							</ul>
						</div>
					</li>
				</ul>

				<div class="bg-layer" aria-hidden="true" style="transform: scaleX(390) scaleY(320);"></div>
			</div> <!-- dropdown-list -->
		</div> <!-- morph-dropdown-wrapper -->
	</header>
	<main class="cd-main-content" id="main-content">