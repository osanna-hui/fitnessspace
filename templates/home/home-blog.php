<?php global $fitnessspace; ?>


<div class="home-sections center" id="home-blog">
	<h1 class="section-title">BLOG</h1>
	<div class="blog-grid">

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
					} 
				?>
				<h2 class="indv-blog-title"><?php the_title(); ?></h2>
				</a>
			</div>
		<?php
		endforeach; 
		wp_reset_postdata();
		?><!-- the loop -->

		
	</div>

	<?php if (!empty($fitnessspace['blog_text_id']['text01']) || !empty($fitnessspace['blog_text_id']['link01']) ): ?>
		<a href="<?php echo $fitnessspace['blog_text_id']['link01']?>">
			<input type="button" value="<?php echo $fitnessspace['blog_text_id']['text01']?>"/>
		</a>
	<?php endif; ?>

</div>