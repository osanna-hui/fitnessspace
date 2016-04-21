<div class="home-sections" id="home-imageslider">
	<div class="swiper-container" style="height:100%;">
        <div class="title-container">
            <div class="headline">
                <h1>FITNESS SPACE</h1>
                <button class="clear-button">BOOK A CLASS</button>
            </div>
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
        <div class="landing-nav">
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <nav id="landing-nav" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'fitnessspace' ); ?>">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'primary-menu',
                         ) );
                    ?>
                </nav><!-- .main-navigation -->
            <?php endif; ?>
        </div><!-- .site-header-menu -->
    <?php endif; ?>
        </div>

        <div class="swiper-wrapper">
        	<!-- slider item -->
            <div class="swiper-slide" style="background-image:url(./wp-content/themes/fitness-space/img/unsplash_slider01.jpeg)">
            </div>
            <!-- slider item end-->
            <!-- slider item -->
            <div class="swiper-slide" style="background-image:url(./wp-content/themes/fitness-space/img/unsplash_slider02.jpeg)">
            </div>
            <!-- slider item end-->
            <!-- slider item -->
            <div class="swiper-slide" style="background-image:url(./wp-content/themes/fitness-space/img/unsplash_slider03.jpeg)">
            </div>
            <!-- slider item end-->
            <!-- slider item -->
            <div class="swiper-slide" style="background-image:url(./wp-content/themes/fitness-space/img/unsplash_slider04.jpeg)">
            </div>
            <!-- slider item end-->
        </div>
        <!-- Slider Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Slider Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
        
	</div>
</div>

<script>
var swiper = new Swiper('.swiper-container', {
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