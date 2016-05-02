<div class="home-sections" id="home-imageslider">
	<div class="swiper-container" id="img-swiper" style="height:100%;">
        <div class="title-container">
            <div class="headline">
                <img class="slider-logo" src="./wp-content/themes/fitness-space/img/logoslider.png"/>
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
                                'menu_id'        => 'menu-landingnav-i',
                             ) );
                        ?>
                    </nav><!-- .main-navigation -->
                <?php endif; ?>
            </div><!-- .site-header-menu -->
            <?php endif; ?>
        </div>

        <div class="swiper-wrapper">
        	
            <div class="swiper-slide" style="background-image:url(./wp-content/themes/fitness-space/img/contact.jpg)">
            </div>
            
            <div class="swiper-slide" style="background-image:url(./wp-content/themes/fitness-space/img/unsplash_slider02.jpeg)">
            </div>
            
            <div class="swiper-slide" style="background-image:url(./wp-content/themes/fitness-space/img/unsplash_slider03.jpeg)">
            </div>
            
            <div class="swiper-slide" style="background-image:url(./wp-content/themes/fitness-space/img/unsplash_slider04.jpeg)">
            </div>
            
        </div>

        <!-- Slider Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>

        <!-- Slider Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
        
	</div>
</div>

<script>
var swiper = new Swiper('#img-swiper', {
    pagination: '.swiper-pagination',
    slidesPerView: 1,
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 30,
    effect: 'fade',
    autoplay: 3500,
    autoplayDisableOnInteraction: false,
    loop: true
});
</script>