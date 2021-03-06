<?php
/**
 * The Home Header for Fitness Space
**/

/*OPTION DEFAULTS*/
global $fitnessspace;
$fitnessspace = fitnessspace_option_defaults();

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		

			<header>
			</header><!-- .site-header -->

		<div id="content" class="site-content">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php
					// Start the loop.
					// Get template parts for home page
					//while ( have_posts() ) : the_post();

						get_template_part( 'templates/home/home', 'imageslider' );
						get_template_part( 'templates/home/home', 'videolanding' );
					else :
						get_template_part( 'templates/content', 'none' );

					endif ?>

			<div id="masthead" class="site-header" role="banner">
				<div class="site-header-main">
					<div class="site-branding">
						<?php fitnessspace_the_custom_logo(); ?>

						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->

					<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'footer' ) ) : ?>
						<button id="menu-toggle" class="menu-toggle"><?php _e( '<i class="fa fa-bars fa-3x" aria-hidden="true"></i>', 'fitnessspace' ); ?></button>

						<div id="site-header-menu" class="site-header-menu">
							<?php if ( has_nav_menu( 'primary' ) ) : ?>
								<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'fitnessspace' ); ?>">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'primary',
											'menu_class'     => 'primary-menu',
										 ) );
									?>
								</nav><!-- .main-navigation -->
							<?php endif; ?>
						</div><!-- .site-header-menu -->
					<?php endif; ?>
				</div>
			</div><!-- .site-header-main -->
