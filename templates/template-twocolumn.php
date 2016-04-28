<?php
/**
 * Template Name: Two Columns
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
		<div class="container">
			<!--<?php the_content(); ?>-->
			<?php
				$pages = get_pages('child_of='.$post->ID.'&sort_column=post_date&sort_order=desc');
				$count = 0;
				foreach($pages as $page)
				{
					$content = $page->post_content;
					if(!$content)
						continue;
					/*if($count >= 3)
						break;*/
					$count++;
					$content = apply_filters('the_content', $content);

					?>
						<div class="col-md-6 temp3-block">
							<a href="<?php echo get_page_link($page->ID) ?>">
								<div class="col-md-6 temp3-img">
									<?php echo get_the_post_thumbnail( $page->ID, $size = array('300') ); ?>
								</div>
								<div class="col-md-6 temp3-info">
									<h2 class="temp3-title"><?php echo $page->post_title ?></h2>
									<?php echo $content ?>
								</div>
							</a>
						</div>
					<?php
					
				}
			?>		
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
<?php get_footer(); ?>
