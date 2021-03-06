<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="referrer" content="same-origin">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="site-header">
		<div class="container">
			<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">¯\_(ツ)_/¯</a></div>
			<div class="top-bar">
				<div class="nav-trigger">
					<div class="hamburger hamburger--3dx">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				</div>
			</div>
			<nav class="main-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary'
					) );
				?>
			</nav>
		</div>
	</header>

	<main class="site-body">
