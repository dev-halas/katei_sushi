<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if(is_search()):?>
			<meta name="robots" content="noindex, nofollow" />
		<?php endif;?>
		
		<?php wp_head() ?>
		<title><?php echo bloginfo('name'); echo ' - '; bloginfo('description');?></title> 

		<meta charset="<?php bloginfo('charset')?>" />
		<!-- Stylesheets-->
		<link rel="stylesheet" href="<?php echo THEME_URL ?>public/main.css">
	
	</head>
	

	<body <?php body_class()?>>
		<nav class="navbar" id="navbar">
			<div class="navbar__inner">
				<a href="<?php echo esc_url(home_url('/')) ?>" class="navbar__logo">
					<img src="<?php the_field('nav__logo', 'option'); ?>" alt="<?php echo bloginfo('name'); ?>" class="navbar__logo-image">
				</a>
				<button class="hamburger">
					<span class="hamburger__box">
						<span class="hamburger__inner"></span>
					</span>
				</button>
				
			</div>
			<div class="navbar__menu">
				<div class="row">
					<div class="col-6">
						<ul class="navbar__links">
							<?php wp_nav_menu(array(
								'theme_location' => 'main_nav'
								));
							?>
						</ul>
					</div>
					<div class="col-6">
						<h3 class="footerContent__title">Dane kontatowe</h3>
						<p>
							<br>
							62-040 Puszczykowo, ul. Rynek 11<br>
							<br>
							tel. 61 670 61 74<br>
							kom. 602 718 170<br>
							<br>
							e-mail: info@katei.pl
						</p>
					
					<a href="tel: 61 670 61 74" class="call">Zamów przez telefon</a>
					</div>
				</div>
				
			</div>
		</nav>