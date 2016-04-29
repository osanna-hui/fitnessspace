<div class="homepage-hero-module">
    <div class="video-container home-sections">
        <div class="title-container">
	        <div class="headline">
                <img class="slider-logo" src="./wp-content/themes/fitness-space/img/logoslider.png"/>
	        	<!-- <h1>FITNESS SPACE</h1> -->
	        	<button class="clear-button">BOOK A CLASS</button>
	        </div>
            <?php if ( has_nav_menu( 'landing' ) ) : ?>
            <div class="landing-nav">
                <?php if ( has_nav_menu( 'landing' ) ) : ?>
                    <nav id="landing-nav" class="landing-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Landing Menu', 'fitnessspace' ); ?>">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'landing',
                                'menu_class'     => 'landing-menu',
                                'menu_id'        => 'menu-landingnav-v',
                             ) );
                        ?>
                    </nav><!-- .main-navigation -->
                <?php endif; ?>
            </div><!-- .site-header-menu -->
            <?php endif; ?>
	    </div>
        <video autoplay loop poster="./wp-content/themes/fitness-space/img/Sunset-Lapse.jpg" id="bgvid">
            <source src="./wp-content/themes/fitness-space/img/Sunset-Lapse.webm" type="video/webm" />
            <source src="./wp-content/themes/fitness-space/img/Sunset-Lapse.mp4" type="video/mp4" />
        </video>
       <!--  <video autoplay loop class="fillWidth">
            <source src="./wp-content/themes/fitness-space/img/Sunset-Lapse.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="./wp-content/themes/fitness-space/img/Sunset-Lapse.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class="poster hidden">
            <img src="./wp-content/themes/fitness-space/img/Sunset-Lapse.jpg" alt="">
        </div> -->
    </div>
</div>
