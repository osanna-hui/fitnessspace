<?php
/**
 * Template Name: Contact
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
	<div class="entry-content" id="contact-page">
		<div id="contact-map"></div>

		<?php 
			if ( has_post_thumbnail() ) {?>
			<div id="contact-page-bottom" class="contact-bottom" style="background-size:cover; background-image:url(<?php the_post_thumbnail_url();?>">
			<?php
		} else {?>
			<div id="contact-page-bottom" class="contact-bottom">
		<?php 
		} 
		?>
			<div class="container">
				<div class="contact-info col-md-6">
					<div class="contact-location darken">

					<?php the_content(); ?>

					<div class="contact-socialmediaicons">
							<?php if ( has_nav_menu( 'social' ) ) : ?>
								<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'fitnessspace' ); ?>">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'social',
											'menu_class'     => 'social-links-menu',
											'depth'          => 1,
											'link_before'    => '<span class="screen-reader-text">',
											'link_after'     => '</span>',
										) );
									?>
								</nav><!-- .social-navigation -->
							<?php endif; ?>
						</div>
					</div>
					<div class="newsletter-signup">
						<h2>SIGN UP FOR OUR NEWSLETTER</h2>
						<input id="newsletter-signup-input" placeholder="YOUR EMAIL"/><br/>
						<button class="clear-button" id="newsletter-submit">SUBSCRIBE</button>
					</div>
				</div>

				<div class="contact-form col-md-6">
					<h1 class="contact-form-title">SEND US AN EMAIL</h1>
					<form id="home-contact-form">
						<input class="home-contact-input" id="home-contact-name" name="home-contact-name" placeholder="YOUR NAME"/><br/>
						<input class="home-contact-input" id="home-contact-email" name="home-contact-email"placeholder="YOUR EMAIL"/><br/>
						<textarea class="home-contact-input" id="home-contact-msg" name="home-contact-msg" placeholder="YOUR MESSAGE"></textarea><br/>
						<input id="home-contact-submit" type="submit" placeholder="SUBMIT"/>
					</form>
				</div>
			</div>
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


<script>
	// Specify features and elements to define styles.
	var styleArray = [
	{
	  featureType: "all",
	  stylers: [
	   { saturation: -30 }
	  ]
	},{
	  featureType: "road.arterial",
	  elementType: "geometry",
	  stylers: [
	    { hue: "#00ffee" },
	    { saturation: 50  }
	  ]
	},{
	  featureType: "poi.business",
	  elementType: "labels",
	  stylers: [
	    { visibility: "off" }
	  ]
	}
	];

	var myLatLng = {lat: 49.188350, lng: -122.841839};
	var map = new google.maps.Map(document.getElementById('contact-map'), {
	center: myLatLng,
	scrollwheel: false,
	styles: styleArray,
	zoom: 9
	});

	var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Hello World!'
    });
</script>
<?php get_sidebar(); ?>
<div class="margin"></div>
<?php get_footer(); ?>

