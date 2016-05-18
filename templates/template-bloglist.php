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

	<div id="blog-grid-page" class="entry-content">
		

		<div class="blog-grid">
			<?php
			$args = array( 
				'posts_per_page' => 12, 
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
		<div class="blog-top">
			<div id="cat-list" class="category-list">
			
				<?php wp_list_categories(array(
						'orderby' => 'name',
						'title_li' => '<h2 id="cat-dropdown">' . __( 'CATEGORY<i class="fa fa-caret-down" aria-hidden="true"></i>', 'textdomain' ) . '</h2>',
						
					)); ?>
				
			</div>
			<div class="category-list">
				<li id="date" class="categories">
					<h2 id="date-dropdown">DATE<i class="fa fa-caret-down" aria-hidden="true"></i></h2>
					<ul>
						<?php wp_get_archives(); ?>
					</ul>
				</li>
			</div>
			<div class="search-form">
				<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<label>
						<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'fitnessspace' ); ?></span>
						<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'fitnessspace' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
					</label>
					<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'fitnessspace' ); ?></span></button>
				</form>
			</div>
		</div>

		
		
		
				
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
<script type="text/javascript">
	$('#cat-dropdown').click(function(){
		$('#cat-list .categories ul').toggle();
	});
	$('#date-dropdown').click(function(){
		$('#date ul').toggle();
	});
</script>
<?php get_footer(); ?>
