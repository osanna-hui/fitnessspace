<?php global $fitnessspace ?>
<?php if (!empty($fitnessspace['slider_image_id']['url01'])): ?>
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
        	<?php

                if (!empty($fitnessspace['slider_image_id']['url01'])){
                    ?>
                        <div id="slider-img01" class="swiper-slide" style="background-image:url( <?php echo $fitnessspace['slider_image_id']['url01']; ?> );"></div>

                    <?php
                }
            ?>
            
            <?php

                if (!empty($fitnessspace['slider_image_id']['url02'])){
                    ?>
                        <div id="slider-img02" class="swiper-slide" style="background-image:url( <?php echo $fitnessspace['slider_image_id']['url02']; ?> );"></div>

                    <?php
                }
            ?>
            
            <?php

                if (!empty($fitnessspace['slider_image_id']['url03'])){
                    ?>
                        <div id="slider-img03" class="swiper-slide" style="background-image:url( <?php echo $fitnessspace['slider_image_id']['url03']; ?> );"></div>

                    <?php
                }
            ?>
            
            <?php

                if (!empty($fitnessspace['slider_image_id']['url04'])){
                    ?>
                        <div id="slider-img04" class="swiper-slide" style="background-image:url( <?php echo $fitnessspace['slider_image_id']['url04']; ?> );"></div>

                    <?php
                }
            ?>
        
            
            
   <!--          <div id="slider-img02" class="swiper-slide" style="background-image:url(./wp-content/themes/fitness-space/img/unsplash_slider02.jpeg)">
            </div>
            
            <div id="slider-img03" class="swiper-slide" style="background-image:url(./wp-content/themes/fitness-space/img/unsplash_slider03.jpeg)">
            </div>
            
            <div id="slider-img04" class="swiper-slide" style="background-image:url(./wp-content/themes/fitness-space/img/unsplash_slider04.jpeg)">
            </div> -->

            
        </div>

        <!-- Slider Pagination -->
        <div id="img-pagination" class="swiper-pagination swiper-pagination-white"></div>

        <!-- Slider Arrows -->
        <div id="img-next" class="swiper-button-next swiper-button-white"></div>
        <div id="img-prev" class="swiper-button-prev swiper-button-white"></div>
        
	</div>


</div>

<script>
var swiper = new Swiper('#img-swiper', {
    pagination: '#img-pagination',
    slidesPerView: 1,
    paginationClickable: true,
    nextButton: '#img-next',
    prevButton: '#img-prev',
    spaceBetween: 30,
    autoplay: 5000,
    autoplayDisableOnInteraction: false,
    loop: true,
    effect: 'fade'
});
</script>

<?php endif; ?>