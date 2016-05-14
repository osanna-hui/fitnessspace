<?php

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<h2 class="comments-title">
		COMMENTS
	</h2>

	<?php
		comment_form( array(
			'title_reply' =>  __( '' ),
				
			/*'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',*/
		) );
	?>

	<?php if ( have_comments() ) : ?>
		

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'fitnessspace' ); ?></p>
	<?php endif; ?>

	

</div><!-- .comments-area -->
