<div class="home-sections center" id="home-blog">
	<h1 class="section-title">BLOG</h1>
	<div class="blog-grid">
	<?php 
	// the query

	$args = array(
		'post_type' => 'post',
	);
	$the_query = new WP_Query( $args ); 

	?>

	<?php if ( $the_query->have_posts() ) : ?>
	
		<!-- chagne number of posts shown in 'settings'->'reading settings'-->
		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
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
		

		<?php endwhile; ?>
		<!-- end of the loop -->

		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php _e( "Sorry, you don't have any posts yet." ); ?></p>
	<?php endif; ?>
	</div>

	<button>READ MORE</button>
</div>