<?php
/**
 * Template Name: Full Width (Alternating background color)
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
				/*if($count >= 3)
					break;*/
				$count++;
				$content = apply_filters('the_content', $content);

				if ($count == 1 || $count % 2 == 1){
				?>
					<div class="row black">
						<div class="temp2-img">
							<?php echo get_the_post_thumbnail( $page->ID, $size = array('1120') ); ?>
						</div>
						<div class="temp2-info">
							<h1 class="temp2-title center">
								<?php echo $page->post_title ?>
							</h1>
							<?php echo $content ?>
							<a class="whitetext" href="<?php echo get_permalink($page->ID)?>">Find Out More About <?php echo $page->post_title ?></a>
						</div>
						
					</div>
				<?php
				} else if ($count % 2 == 0) {
				?>
					<div class="row white">
						<div class="temp2-img">
							<?php echo get_the_post_thumbnail( $page->ID, $size = array('1120') ); ?>
						</div>
						<div class="temp2-info white">
							<h1 class="temp2-title center"><?php echo $page->post_title ?></h1>
							<?php echo $content ?>
							<a href="<?php echo get_permalink($page->ID)?>">Find Out More About <?php echo $page->post_title ?></a>
						</div>
						
					</div>

				<?php
				}
				
			}
		?><!-- get_pages -->
		<div class="tips center swiper-container" id="tips-swiper">
	        <div class="swiper-wrapper">
				<?php $args = array(
					'posts_per_page'   => 5,
					'offset'           => 0,
					'category_name'    => 'Tips',
					'orderby'          => 'date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true 
				);
				$posts_array = get_posts( $args ); 
				$posts = array();

				foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
					
			        	<div class="swiper-slide padding-top tips-swiper-slide" style="background-image:url(<?php the_post_thumbnail_url(); ?>); background-size:cover; background-position-y:60%;">
			        		<h1>NUTRITION AND TRAINING TIPS</h1>
			        		<!-- <a href="<?php the_permalink(); ?>"> -->
							<!-- <h2 class="padding-top"><?php the_title(); ?></h2> -->
							<div class="container padding-top tips-slide"><?php the_content( "READ MORE..." );?></div>
							<!-- </a> -->
							<div class="contact-socialmediaicons" id="tips-socialmediaicons">
								<?php if ( has_nav_menu( 'social' ) ) : ?>
									<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'fitnessspace' ); ?>">
										<?php
											wp_nav_menu( array(
												'theme_location' => 'social',
												'menu_class'     => 'social-links-menu',
												'menu_id'		 => 'tips-socialnav',
												'depth'          => 1,
												'link_before'    => '<span class="screen-reader-text">',
												'link_after'     => '</span>',
											) );
										?>
									</nav><!-- .social-navigation -->
								<?php endif; ?>
							</div>
						</div>
							
					
				<?php endforeach; 
				wp_reset_postdata();?>

				        <!-- Slider Arrows -->
		        <div class="swiper-button-next swiper-button-white"></div>
		        <div class="swiper-button-prev swiper-button-white"></div>

			</div><!-- swiper -->

			
		
		</div><!-- get_posts -->

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
var swiper = new Swiper('#tips-swiper', {
    pagination: '.swiper-pagination',
    slidesPerView: 1,
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 30,
    effect: 'fade',
    autoplay: 3500,
    autoplayDisableOnInteraction: false,
    loop: true
});
</script>
