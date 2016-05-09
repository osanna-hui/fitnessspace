<?php global $fitnessspace ?>
<?php if (!empty($fitnessspace['video_id']['url'])): ?>

<div class="homepage-hero-module">
    <div class="video-container home-sections">
        <div class="title-container">
	        <div class="headline">
                <?php

                    if (!empty($fitnessspace['slider_image_id']['url00'])){
                        ?>
                            <img class="slider-logo" src="<?php echo $fitnessspace['slider_image_id']['url00']?>"/>
                        <?php
                    } else {
                        ?>
                            <img class="slider-logo" src="<?php echo get_template_directory_uri();?>/img/logoslider.png"/>
                        <?php
                    }
                ?><!-- Logo -->

                <?php
                    if(!empty($fitnessspace['slider_text']['button_text'])){
                        ?>
                        <h1><?php echo do_shortcode($fitnessspace['slider_text']['title_text']);?></h1>
                    <?php 
                    } 
                ?><!-- Title Text -->

                <?php
                    if(!empty($fitnessspace['slider_text']['button_text'])){
                        ?>
                        <button class="clear-button"><?php echo do_shortcode($fitnessspace['slider_text']['button_text']);?></button>
                    <?php 
                    } 
                ?><!-- Button Text -->
                
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
        <?php 
        if (!empty($fitnessspace['video_id']['url'])){
            ?>
                <video autoplay loop id="bgvid">
                    
                    <source src="<?php echo $fitnessspace['video_id']['url']; ?>" type="video/mp4" />
                </video>
            <?php
        }

        ?>
        <!-- <video autoplay loop poster="./wp-content/themes/fitness-space/img/Sunset-Lapse.jpg" id="bgvid">
            <source src="./wp-content/themes/fitness-space/img/Sunset-Lapse.webm" type="video/webm" />
            <source src="./wp-content/themes/fitness-space/img/Sunset-Lapse.mp4" type="video/mp4" />
        </video> -->

    </div>
</div>
<?php endif; ?>
