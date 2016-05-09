<?php global $fitnessspace ?>
<?php if (!empty($fitnessspace['slider_image_id']['url01'])): ?>
<div class="home-sections" id="home-imageslider">
	<div class="swiper-container" id="img-swiper" style="height:100%;">
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

<?php endif; ?><!-- image slider -->