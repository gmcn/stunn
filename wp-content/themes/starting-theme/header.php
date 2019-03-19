<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>
		<div class="container-fluid">
			<?php $description = get_bloginfo( 'description', 'display' ); ?>
			<div class="row">
				<div class="col-xs-6">
					<a href="/">
						<img class="branding" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Stunn Photography | <?php echo $description; /* WPCS: xss ok. */ ?>">
					</a>
				</div><!-- .col-md-6 -->
				<div class="col-xs-6">
					<div class="social-nav">
						<span class="open" onclick="openNav()">
		          <img src="<?php echo get_template_directory_uri(); ?>/images/menu-icon.svg" alt="close">
		        </span>
						<a href="https://www.instagram.com/stunnphotography/">
							<img src="//localhost:3000/wp-content/themes/starting-theme/images/instagram-logo.svg" alt="instagram">
						</a>
						<a href="https://www.facebook.com/STUNNPhotography/">
							<img src="//localhost:3000/wp-content/themes/starting-theme/images/facebook-logo.svg" alt="facebook">
						</a>
						<a href="#">
							<img src="//localhost:3000/wp-content/themes/starting-theme/images/youtube-logo.svg" alt="youtube">
						</a>
					</div>
				</div><!-- .col-md-6 -->
			</div><!-- .row -->
		</div><!-- .container-fluid -->



		<!-- The overlay -->
		<div id="myNav" class="overlay">

		  <!-- Button to close the overlay navigation -->
		  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->

			<img class="branding" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Stunn Photography">

			<div class="social">
				<a href="javascript:void(0)" onclick="closeNav()">
					<img src="<?php echo get_template_directory_uri(); ?>/images/close.svg" alt="close">
				</a>
				<a href="https://www.instagram.com/stunnphotography/">
					<img src="<?php echo get_template_directory_uri(); ?>/images/instagram-logo.svg" alt="instagram">
				</a>
				<a href="https://www.facebook.com/STUNNPhotography/">
					<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-logo.svg" alt="facebook">
				</a>
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/images/youtube-logo.svg" alt="youtube">
				</a>
			</div>

		  <!-- Overlay content -->
		  <div class="overlay-content">

				<div class="nav__wrapper">
					<h3>Menu</h3>
						<?php wp_nav_menu( array(
					'theme_location' => 'main-menu' ) );
					?>
				</div>
		  </div>

		</div>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
