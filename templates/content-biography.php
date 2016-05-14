<div class="author-info">
	<div class="author-description">
		<p class="author-title">
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				<span class="author-heading"><?php _e( 'by ', 'fitnessspace' ); ?></span> <?php echo get_the_author(); ?>
			</a>
			<?php 
				if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
					echo 'posted on ';
					echo get_the_date();
				}
			?>
		</p>
	</div><!-- .author-description -->
</div><!-- .author-info -->

<div class="category-info">
	<?php fitnessspace_entry_taxonomies();?>

</div><!-- .category-info -->