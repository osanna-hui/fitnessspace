<?php
/**
 * Template Name: Blog List
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
	<?php 
		if ( has_post_thumbnail() ) {?>
			<header class="entry-header" style="background-size:cover; background-position: center center; background-image:url(<?php the_post_thumbnail_url();?>">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
			<?php
		} else {?>
			<header class="entry-header black">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		<?php 
		} 
	?>

	<div class="entry-content">
		<div class="blog-grid container">
			<?php
			$args = array( 
				'posts_per_page' => 5, 
				'order'=> 'DESC', 
				'orderby' => 'date' );
				$postslist = get_posts( $args );
				
			foreach ( $postslist as $post ) :
			  setup_postdata( $post ); ?> 

				<div class="indv-blog-grid">
					<a href="<?php the_permalink(); ?>">
					<?php
						if ( has_post_thumbnail() ) {
						    the_post_thumbnail();
						} else {?>
							<img src="http://localhost:8888/wordpress/wp-content/uploads/2016/04/blog3.jpg" alt="placeholder-img"/>
						<?php
						}
					?>
					<h2 class="indv-blog-title"><?php the_title(); ?></h2>
					</a>
				</div>
			<?php
			endforeach; 
			wp_reset_postdata();
			?><!-- the loop -->
	</div><!-- blog grid -->

		
		
		
				
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
