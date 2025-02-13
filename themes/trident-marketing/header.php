<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trident-web
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
</script>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'trident-web' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="inner-wrapper">
			<div class="site-branding">
				<!-- Header > Logo -->
				<div class="header-logo site-title logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/trident-logo.svg" /></a>
				</h1>
				<?php
				$trident_web_description = get_bloginfo( 'description', 'display' );
				if ( $trident_web_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $trident_web_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
				<?php
				wp_nav_menu(array('theme_location' => 'primary'));
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .inner-wrapper -->
	</header><!-- #masthead -->
