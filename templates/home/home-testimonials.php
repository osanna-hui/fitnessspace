<div class="home-sections title-padding center" id="home-testimonials">
	<h1 class="section-title">TESTIMONIALS</h1>
	<div class="swiper-container" id="testimonial-swiper">
        <div class="swiper-wrapper">
        	<div class="swiper-slide">
            	<h4 class="testimonial-body">
            	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula placerat nisi, non consectetur dui vehicula vitae. Mauris sed euismod elit. Nam purus ex, sagittis finibus diam quis, interdum elementum nulla."</h4>
            	<h2 class="testimonial-author">- Wilson Martinez</h2>
            </div>
            <div class="swiper-slide">
            	<h4 class="testimonial-body">
            	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula placerat nisi, non consectetur dui vehicula vitae. Mauris sed euismod elit. Nam purus ex, sagittis finibus diam quis, interdum elementum nulla."</h4>
            	<h2 class="testimonial-author">- Tyler Anderson</h2>
            </div>
            <div class="swiper-slide">
            	<h4 class="testimonial-body">
            	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula placerat nisi, non consectetur dui vehicula vitae. Mauris sed euismod elit. Nam purus ex, sagittis finibus diam quis, interdum elementum nulla."</h4>
            	<h2 class="testimonial-author">- Samantha Johnson</h2>
            </div>
            <div class="swiper-slide">
            	<h4 class="testimonial-body">
            	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula placerat nisi, non consectetur dui vehicula vitae. Mauris sed euismod elit. Nam purus ex, sagittis finibus diam quis, interdum elementum nulla."</h4>
            	<h2 class="testimonial-author">- Scott Evans</h2>
            </div>

           
        </div>

        <div id="testimonial-next" class="swiper-button-next swiper-button-black top15"></div>
        <div id="testimonial-prev" class="swiper-button-prev swiper-button-black top15"></div><!-- Slider Arrows -->
	</div>
</div>
<script>
var swiper = new Swiper('#testimonial-swiper', {
    pagination: '.swiper-pagination',
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