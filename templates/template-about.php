<?php
/**
 * Template Name: About
 *
 */
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" style="background-image:url('../wp-content/themes/fitness-space/img/fit3.jpg')">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 page-content">

					<?php the_content(); ?>
				</div>
				<div class="col-md-6 page-thumbnail">
					<?php fitnessspace_post_thumbnail(); ?>
					<div class="page-socialmediaicons">
						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'fitnessspace' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="page-testimonial">
					<?php get_template_part( 'templates/home/home', 'testimonials' );?>
				</div>
			</div>
				
		</div class="container">
	</div><!-- .entry-content -->

</article><!-- #post-## -->

<?php
// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<div class="margin"></div>
<?php get_footer(); ?>
