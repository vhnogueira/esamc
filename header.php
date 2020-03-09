<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-transparent" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		<?php if ( 'container' === $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>

					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button> -->

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
                        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
                <div class="navbar-nav ml-auto">
                    <a class="btn btn-light mb-2 ml-1 d-none d-lg-inline-block" href="<?php the_field('link_facebook', 'option'); ?>" target="_blank">
                        <i class="fa fa-facebook fa-1x text-light-blue"></i>
                    </a>
                    <a class="btn btn-light mb-2 ml-1 d-none d-lg-inline-block" href="<?php the_field('link_linkedin', 'option'); ?>" target="_blank">
                        <i class="fa fa-linkedin fa-1x text-light-blue"></i>
                    </a>
                    <a class="btn btn-light mb-2 ml-1 d-none d-lg-inline-block" href="<?php the_field('link_youtube', 'option'); ?>" target="_blank">
                        <i class="fa fa-youtube fa-1x text-light-blue"></i>
                    </a>
                    <a class="btn btn-light mb-2 ml-1 d-none d-lg-inline-block" href="<?php the_field('link_instagram', 'option'); ?>" target="_blank">
                        <i class="fa fa-instagram fa-1x text-light-blue"></i>
                    </a>
                </div>
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

        </nav><!-- .site-navigation -->
        
    <div class="hamburger-button">
      <a class="btn-open h5" href="#"><span class="ml-2 text-white montserrat text-uppercase h5 d-none d-lg-inline-block">Categorias</span></a>
    </div>

	</div><!-- #wrapper-navbar end -->

