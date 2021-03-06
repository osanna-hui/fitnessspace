<?php
if ( ! function_exists( 'fitnessspace_gallery_images' ) ) :
function fitnessspace_gallery_images($content){

 	global $post;

 	if( ! is_singular() )
 		return $content;

 	if( ! has_shortcode( $post->post_content, 'gallery' ) )
 		return $content;

 	$gallery = get_post_gallery_images( $post );

	$image_gallery = '<div class="swiper-container" id="gallery-swiper" style="height:100%;">';

	$image_gallery .= '<div id="gallery-wrapper" class="swiper-wrapper">';

	foreach( $gallery as $image_url ) {
		$image_gallery .= '<div id="slider-img03" class="swiper-slide" style="background-image:url( '. $image_url . ');"></div>';
	}
	$image_gallery .= '<div id="gallery-next" class="swiper-button-next swiper-button-white"></div>
        <div id="gallery-prev" class="swiper-button-prev swiper-button-white"></div>';
	$image_gallery .= '</div></div>';


	$content = $image_gallery . $content;

 	return $content;


 }
 add_filter( 'the_content', 'fitnessspace_gallery_images' );
endif;

if ( ! function_exists( 'fitnessspace_entry_meta' ) ) :
/**
 * Prints HTML with meta information for the categories, tags.
 *
 * Create your own fitnessspace_entry_meta() function to override in a child theme.
 *
 * @since Fitness Space 1.0
 */

function fitnessspace_entry_meta() {

	if ( 'post' === get_post_type() ) {
		$author_avatar_size = apply_filters( 'fitnessspace_author_avatar_size', 49 );
		printf( '<span class="byline"><span class="author vcard">%1$s<span class="screen-reader-text">%2$s </span> <a class="url fn n" href="%3$s">%4$s</a></span></span>',
			get_avatar( get_the_author_meta( 'user_email' ), $author_avatar_size ),
			_x( 'Author', 'Used before post author name.', 'fitnessspace' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
		);
	}

	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
		fitnessspace_entry_date();
	}

	$format = get_post_format();
	if ( current_theme_supports( 'post-formats', $format ) ) {
		printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
			sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'fitnessspace' ) ),
			esc_url( get_post_format_link( $format ) ),
			get_post_format_string( $format )
		);
	}

	if ( 'post' === get_post_type() ) {
		fitnessspace_entry_taxonomies();
	}

	if ( ! is_singular() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'fitnessspace' ), get_the_title() ) );
		echo '</span>';
	}
}
endif;



if ( ! function_exists( 'fitnessspace_entry_date' ) ) :
/**
 * Prints HTML with date information for current post.
 *
 * Create your own fitnessspace_entry_date() function to override in a child theme.
 *
 * @since Fitness Space 1.0
 */
function fitnessspace_entry_date() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		get_the_date(),
		esc_attr( get_the_modified_date( 'c' ) ),
		get_the_modified_date()
	);

	printf( '<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>',
		_x( 'Posted on', 'Used before publish date.', 'fitnessspace' ),
		esc_url( get_permalink() ),
		$time_string
	);
}
endif;

if ( ! function_exists( 'fitnessspace_entry_taxonomies' ) ) :
/**
 * Prints HTML with category and tags for current post.
 *
 * Create your own fitnessspace_entry_taxonomies() function to override in a child theme.
 *
 * @since Fitness Space 1.0
 */
function fitnessspace_entry_taxonomies() {
	$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'fitnessspace' ) );

	if ( $categories_list && fitnessspace_categorized_blog() ) {
		printf( '<span class="cat-links"><span>%1$s </span>%2$s</span>',
			_x( 'Category: ', 'Used before category names.', 'fitnessspace' ),
			$categories_list
		);
	} 

	$tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'fitnessspace' ) );
	if ( $tags_list ) {
		printf( '<span class="tags-links"><span>%1$s </span>%2$s</span>',
			_x( 'Tags: ', 'Used before tag names.', 'fitnessspace' ),
			$tags_list
		);
	}
}
endif;

if ( ! function_exists( 'fitnessspace_post_thumbnail' ) ) :
/**
 * Displays an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 *
 * Create your own fitnessspace_post_thumbnail() function to override in a child theme.
 *
 * @since Fitness Space 1.0
 */
function fitnessspace_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
	</a>

	<?php endif; // End is_singular()
}
endif;

if ( ! function_exists( 'fitnessspace_excerpt' ) ) :
	/**
	 * Displays the optional excerpt.
	 *
	 * Wraps the excerpt in a div element.
	 *
	 * Create your own fitnessspace_excerpt() function to override in a child theme.
	 *
	 * @since Fitness Space 1.0
	 *
	 * @param string $class Optional. Class string of the div element. Defaults to 'entry-summary'.
	 */
	function fitnessspace_excerpt( $class = 'entry-summary' ) {
		$class = esc_attr( $class );

		if ( has_excerpt() || is_search() ) : ?>
			<div class="<?php echo $class; ?>">
				<?php the_excerpt(); ?>
			</div><!-- .<?php echo $class; ?> -->
		<?php endif;
	}
endif;

if ( ! function_exists( 'fitnessspace_excerpt_more' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * Create your own fitnessspace_excerpt_more() function to override in a child theme.
 *
 * @since Fitness Space 1.0
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function fitnessspace_excerpt_more() {
	$link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fitnessspace' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'fitnessspace_excerpt_more' );
endif;

/**
 * Determines whether blog/site has more than one category.
 *
 * Create your own fitnessspace_categorized_blog() function to override in a child theme.
 *
 * @since Fitness Space 1.0
 *
 * @return bool True if there is more than one category, false otherwise.
 */
function fitnessspace_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'fitnessspace_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'fitnessspace_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so fitnessspace_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so fitnessspace_categorized_blog should return false.
		return false;
	}
}

/**
 * Flushes out the transients used in fitnessspace_categorized_blog().
 *
 * @since Fitness Space 1.0
 */
function fitnessspace_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'fitnessspace_categories' );
}
add_action( 'edit_category', 'fitnessspace_category_transient_flusher' );
add_action( 'save_post',     'fitnessspace_category_transient_flusher' );

if ( ! function_exists( 'fitnessspace_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since Fitness Space 1.2
 */
function fitnessspace_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;
