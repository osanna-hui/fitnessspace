<div class="home-sections" id="home-contact">
	<div id="contact-map"></div>

	<div class="contact-bottom" style="background-image:url(./wp-content/themes/fitness-space/img/contact.jpg)">
		<div class="container">

			<div class="contact-info col-md-6">
				<div class="contact-location darken">
					<h2>LOCATION</h2>
					<span>1234 Main Street<br/>Vancouver, BC</span>
					<br/><br/>
					<h2>CONTACT US</h2>
					<span>youremail@address.com</span><br/>
					<span>(604)777-1234</span><br/><br/>
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
						<!-- <i class="socialmediaicons fa fa-facebook-official fa-3x circle" aria-hidden="true"></i>
						<i class="socialmediaicons fa fa-twitter-square fa-3x circle" aria-hidden="true"></i>
						<i class="socialmediaicons fa fa-instagram fa-3x circle" aria-hidden="true"></i>
						<i class="socialmediaicons fa fa-youtube-play fa-3x circle" aria-hidden="true"></i> -->
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
</div>
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
