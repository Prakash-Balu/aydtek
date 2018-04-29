<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
	<?php if ( get_theme_mod('site_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
	<?php endif; ?>
<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<?php do_action('sydney_before_header'); //Hooked: sydney_header_clone() ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
            <div class="container">
                <div class="row">
					<div class="col-md-6 col-sm-8 col-xs-12">
						<?php if ( get_theme_mod('site_logo') ) : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" />
								<!-- <span class="site-name">Technologies</span> -->
								<!-- <h6 class="site-tag-name">Creative IT Solutions</h6> -->
							</a>
						<?php else : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
						<?php endif; ?>
					</div>
					<div class="col-md-6 col-sm-4 col-xs-12">
						<div class="btn-menu"></div>
						<nav id="mainnav" class="mainnav" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<?php do_action('sydney_after_header'); ?>

	<div class="sydney-hero-area">
		<?php sydney_slider_template(); ?>
		<?php if( curPageURL() ===  home_url( '/about' )) : sydney_about_slider_template(); ?><?php endif; ?>
		<?php if( curPageURL() ===  home_url( '/services' )) : sydney_service_slider_template(); ?><?php endif; ?>
		
		<?php if( curPageURL() ===  home_url( '/contact' ) ) : ?> <div class="header-image contact-header-image">
			<img class="header-inner" src="<?php echo get_template_directory_uri().'/images/contactbanner.jpg'; ?>" width="100%" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
		</div>
		<?php endif; ?>
		<?php if( curPageURL() ===  home_url( '/' ) ) : ?> <div class="header-image">
			<?php sydney_header_overlay(); ?>
			<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
		</div>
		<?php endif; ?>
		<?php sydney_header_video(); ?>

		<?php do_action('sydney_inside_hero'); ?>
	</div>

	<?php do_action('sydney_after_hero'); ?>

	<?php if( curPageURL() !==  home_url( '/contact' ) ) : ?>
	<div id="content" class="page-wrap">
		<div class="container content-wrapper">
			<div class="row">
	<?php endif; ?>	

	<?php if( curPageURL() ===  home_url( '/contact' ) ) : ?>
	<div id="content" class="page-wrap">
		<div class="container-fluid content-wrapper contact-container">
			<div class="row">
	<?php endif; ?>	