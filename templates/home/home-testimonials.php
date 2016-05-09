<?php global $fitnessspace; ?>
<?php if (!empty($fitnessspace['testimonials_text_id']['name01']) || !empty($fitnessspace['testimonials_text_id']['text01'])  ): ?>

<div class="home-sections title-padding center" id="home-testimonials">
	<h1 class="section-title">TESTIMONIALS</h1>
	<div class="swiper-container" id="testimonial-swiper">
        <div class="swiper-wrapper">

        	<div class="swiper-slide">
            	<h4 class="testimonial-body"> <?php echo $fitnessspace['testimonials_text_id']['text01'] ?> </h4>
            	<h2 class="testimonial-author">- <?php echo $fitnessspace['testimonials_text_id']['name01'] ?> </h2>
            </div>

            <?php if (!empty($fitnessspace['testimonials_text_id']['name02']) || !empty($fitnessspace['testimonials_text_id']['text02'])  ){ ?>
                <div class="swiper-slide">
                <h4 class="testimonial-body"> <?php echo $fitnessspace['testimonials_text_id']['text02'] ?> </h4>
                <h2 class="testimonial-author">- <?php echo $fitnessspace['testimonials_text_id']['name02'] ?> </h2>
            </div>
            <?php } ?>

            <?php if (!empty($fitnessspace['testimonials_text_id']['name03']) || !empty($fitnessspace['testimonials_text_id']['text03'])  ){ ?>
                <div class="swiper-slide">
                <h4 class="testimonial-body"> <?php echo $fitnessspace['testimonials_text_id']['text03'] ?> </h4>
                <h2 class="testimonial-author">- <?php echo $fitnessspace['testimonials_text_id']['name03'] ?> </h2>
            </div>
            <?php } ?>

            <?php if (!empty($fitnessspace['testimonials_text_id']['name04']) || !empty($fitnessspace['testimonials_text_id']['text04'])  ){ ?>
                <div class="swiper-slide">
                <h4 class="testimonial-body"> <?php echo $fitnessspace['testimonials_text_id']['text04'] ?> </h4>
                <h2 class="testimonial-author">- <?php echo $fitnessspace['testimonials_text_id']['name04'] ?> </h2>
            </div>
            <?php } ?>

           
        </div>

        <div id="testimonial-next" class="swiper-button-next swiper-button-black top15"></div>
        <div id="testimonial-prev" class="swiper-button-prev swiper-button-black top15"></div><!-- Slider Arrows -->
	</div>
</div>
<script>
var swiper = new Swiper('#testimonial-swiper', {
    slidesPerView: 1,
    paginationClickable: true,
    nextButton: '#testimonial-next',
    prevButton: '#testimonial-prev',
    spaceBetween: 30,
    effect: 'fade',
    autoplay: 5000,
    autoplayDisableOnInteraction: false,
    loop: true
});
</script>
<?php endif; ?>