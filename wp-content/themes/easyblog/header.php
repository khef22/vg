<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EasyBlog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="dt-header" <?php $header_image = get_header_image(); if ( ! empty( $header_image ) ) { ?>style="background-image: url('<?php header_image(); ?>');"<?php } ?>>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="dt-logo">

						<?php
						if ( function_exists( 'get_custom_logo' ) && has_custom_logo() ) :
							the_custom_logo();
						else :
						?>

							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php endif; ?>


					</div><!-- .dt-logo -->
				</div><!-- .col-lg-12 -->
			</div><!-- .row -->
		</div><!-- .container -->

		<nav class="dt-menu-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-12">
						<div class="dt-menu-md">
							<?php _e( 'Menu', 'easyblog' ); ?>
							<span><i class="fa fa-bars"></i> </span>
						</div>

						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div><!-- .col-lg-12 -->
					<div class="col-md-3 col-sm-12">
					<?php get_search_form(); ?>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		</nav><!-- .dt-menu-wrap -->

	</header><!-- .dt-header -->
