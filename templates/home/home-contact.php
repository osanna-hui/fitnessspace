<?php global $fitnessspace; ?>
<?php if (!empty($fitnessspace['contact_text_id']['address']) ): ?>

<div class="home-sections" id="home-contact">
	<div id="contact-map"></div>

	<div class="contact-bottom" style="background-image:url(./wp-content/themes/fitness-space/img/contact.jpg)">
		<div class="container">

			<div class="contact-info col-md-6">
				<div class="contact-location darken">
					<h2>LOCATION</h2>
					<span><?php echo $fitnessspace['contact_text_id']['address'];?><br/>
						<?php echo $fitnessspace['contact_text_id']['city'] . ', ' .  $fitnessspace['contact_text_id']['prov']; ?></span>
					<br/>

					<?php if (!empty($fitnessspace['contact_text_id']['hours01'])):?>
						<h2>HOURS</h2>
						<span><?php echo $fitnessspace['contact_text_id']['hours01'];?><br/><?php echo $fitnessspace['contact_text_id']['hours02'];?></span>
						<br/>
					<?php endif; ?>

					<?php if (!empty($fitnessspace['contact_text_id']['email']) || !empty($fitnessspace['contact_text_id']['phone'])):?>
						<h2>CONTACT US</h2>
						<span><?php echo $fitnessspace['contact_text_id']['email'];?></span><br/>
						<span><?php echo $fitnessspace['contact_text_id']['phone'];?></span><br/>
					<?php endif; ?>
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
				<?php if ($fitnessspace['newsletter']['select'] == 'Yes' ): ?>
					<div class="newsletter-signup">
						<h2>SIGN UP FOR OUR NEWSLETTER</h2>
						<?php if (empty($fitnessspace['newsletter']['shortcode'])):?>
							<input id="newsletter-signup-input" placeholder="YOUR EMAIL"/><br/>
							<input type="button" class="clear-button" id="newsletter-submit" value="SUBSCRIBE"/>
						<?php else: ?>
						<?php echo $fitnessspace['newsletter']['shortcode']; ?>
					<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>

			<?php if ($fitnessspace['contactform']['select'] == 'Yes' ): ?>
				<div class="contact-form col-md-6">
					<h1 class="contact-form-title">SEND US AN EMAIL</h1>
					<?php if (empty($fitnessspace['newsletter']['shortcode'])):?>
						<form id="home-contact-form">
							<input class="home-contact-input" id="home-contact-name" name="home-contact-name" placeholder="YOUR NAME"/><br/>
							<input class="home-contact-input" id="home-contact-email" name="home-contact-email"placeholder="YOUR EMAIL"/><br/>
							<textarea class="home-contact-input" id="home-contact-msg" name="home-contact-msg" placeholder="YOUR MESSAGE"></textarea><br/>
							<input id="home-contact-submit" type="submit" placeholder="SUBMIT"/>
						</form>
					<?php else: ?>
						<?php echo $fitnessspace['contactform']['shortcode']; ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>
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
<?php endif; ?>