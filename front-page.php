<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php
			// Start the loop.
			// Get template parts for home page
			//while ( have_posts() ) : the_post();

				get_template_part( 'templates/home/home', 'imageslider' );
				get_template_part( 'templates/home/home', 'videolanding' );
				get_template_part( 'templates/home/home', 'about' );
				get_template_part( 'templates/home/home', 'classes' );
				get_template_part( 'templates/home/home', 'trainers' );
				get_template_part( 'templates/home/home', 'features' );
				get_template_part( 'templates/home/home', 'pricing' );
				get_template_part( 'templates/home/home', 'blog' );
				get_template_part( 'templates/home/home', 'calltoaction' );
				get_template_part( 'templates/home/home', 'testimonials' );
				get_template_part( 'templates/home/home', 'contact' );

			// End the loop.
			//endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'fitnessspace' ),
				'next_text'          => __( 'Next page', 'fitnessspace' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'fitnessspace' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'templates/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
