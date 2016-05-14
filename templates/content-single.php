<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 

		$blogpage = get_page_by_title('blog');
		//echo get_permalink($blogpage);
		$url = wp_get_attachment_url( get_post_thumbnail_id($blogpage) );
		$title = get_the_title($blogpage);

		if ( has_post_thumbnail() ) {?>
			<header class="entry-header" style="background-size:cover; background-position: center center; background-image:url(<?php echo $url ;?>">
				<h1 class="entry-title"><?php echo $title ?></h1>
			</header><!-- .entry-header -->
			<?php
		} else {?>
			<header class="entry-header darken">
				<h1 class="entry-title"><?php echo $title ?></h1>

			</header><!-- .entry-header -->
		<?php 
		} 
	?>

	<div class="entry-content">
		<div class="container">
			<div class="blog_banner">
				<img class="blog_page_thumbnail" src="<?php the_post_thumbnail_url();?>"/>
			</div>
			<?php

			the_title( '<h2 class="blog-title">', '</h2>' );

			get_template_part( 'templates/content-biography' );

			?>
			<div class="search-bar">
				<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<label>
						<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'fitnessspace' ); ?></span>
						<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'fitnessspace' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
					</label>
					<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'fitnessspace' ); ?></span></button>
				</form>

			</div>

			<div class="blog-content">
				<div class="blog-entry".>
					<?php the_content();?>
				</div>
				<?php 
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>
			</div><!-- .blog-content -->



			<div class="blog-side">
				
				<div class="category-list">
					<?php wp_list_categories(array(
						'orderby' => 'name',
						'title_li' => '<h2>' . __( 'CATEGORIES', 'textdomain' ) . '</h2>',
						
					)); ?>
				</div>
				<div class="related-posts">
					<h2>related posts</h2>
					<?php 
						//getting the post's category
						$categories = get_the_category( $post->ID );
						$catID = $categories[0]->term_id;
						//printf($catID);
					    //var_dump( $categories );
					   
					    $args = array(
					    	'category' => $catID,
					    	'posts_per_page' => 4,
					    	'offset' => 1,
					    	'orderby' => 'date',
					    	'post_type' => 'post',
				    	);
					    $posts_array = get_posts($args);
					  	
					  	//var_dump($posts_array) ;
					  	foreach ($posts_array as $post) :
					  		?>
					  		<a href="<?php the_permalink(); ?>">
							<?php
								if ( has_post_thumbnail() ) {
								    the_post_thumbnail();
								}
							?>
							<h2 class="indv-blog-title"><?php the_title(); ?></h2>
							</a>

					  		<?php
				  		endforeach;

						
					?>

				</div>
			</div><!-- .blog-side -->

			
			
			<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'fitnessspace' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'fitnessspace' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );

			?>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
