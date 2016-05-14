<?php
/**
 * Template Name: Full Width (Alternating Image | Text)
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

	<div class="entry-content-2">
		
		<!--<?php the_content(); ?>-->
		<?php
			$pages = get_pages('child_of='.$post->ID.'&sort_column=post_date&sort_order=desc');
			$count = 0;
			foreach($pages as $page)
			{
				$content = $page->post_content;
				

				if(!$content)
					continue;
		
				$count++;
				$content = apply_filters('the_content', $content);


				if ($count == 1 || $count % 2 == 1){
				?>
					<div class="row">
						<div class="child-img">
							<?php echo get_the_post_thumbnail( $page->ID, $size = array('960') ); ?>
						</div>
						<div class="child-info">
							<!-- <h2 class="child-title"><?php echo $page->post_title ?></h2> -->
							<?php echo $content ;?>
							<a href="<?php echo get_permalink($page->ID)?>">Find Out More About <?php echo $page->post_title ?></a>
							
						</div>
						
					</div>
					<!-- <div class="thin-margin"></div> -->
				<?php
				} else if ($count % 2 == 0) {
				?>
					<div class="row">
						<div class="child-img right">
							<?php echo get_the_post_thumbnail( $page->ID, $size = array('960', '500') ); ?>
						</div>
						<div class="child-info left">
							<!-- <h2 class="child-title"><?php echo $page->post_title ?></h2> -->

							<?php echo $content ?>
							
							<a href="<?php echo get_permalink($page->ID)?>">Find Out More About <?php echo $page->post_title ?></a>
						</div>
						
					</div>
					<!-- <div class="thin-margin"></div> -->
				<?php
				}
			}
		?>
				
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
