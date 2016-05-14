<?php
/**
 * Template Name: Child Page with Image Slider
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

		$ancestors =  get_ancestors($post->ID, 'page' );

		foreach ($ancestors as $page_id )  :
			if( $post -> post_parent == $page_id ): 
			    $parent_title = get_the_title($post->post_parent);
			    $parent_thumbnail = get_the_post_thumbnail_url($post->post_parent);
			    
   ?>

				<header class="entry-header" style="background-size:cover; background-position: center center; background-image:url(<?php  echo $parent_thumbnail;?>)" >
					<h1 class="entry-title"><?php echo $parent_title; ?></h1>
				</header>

	<?php 
			endif;
		endforeach;
	?>


	<div class="entry-content">
		
		<?php 

			global $gallery_id;
			$gallery_id = intval( $post->post_parent ) ;
		    $gallery_shortcode = '[gallery id="' . $gallery_id . '"]';
		   
		    //print apply_filters( 'the_content', $gallery_shortcode ));
			//fitnessspace_entry_meta(); 
			fitnessspace_gallery_images($content);

		?>


		<div class="container">

			<?php the_content();?>


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

<script>
var swiper = new Swiper('#gallery-swiper', {
    slidesPerView: 1,
    paginationClickable: true,
    nextButton: '#gallery-next',
    prevButton: '#gallery-prev',
    spaceBetween: 30,
    autoplay: 5000,
    autoplayDisableOnInteraction: false,
    loop: true,
    effect: 'fade'
});
</script>