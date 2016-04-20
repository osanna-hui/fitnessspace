<div class="home-sections" id="home-trainers">

<div class="accordian">
	<ul>
		<li>
			<div class="image_title">
				<h1>Toy Story 2</h1>
			</div>
			<img src="./wp-content/themes/fitness-space/img/fit1.jpg"/>	
		</li>
		<li>
			<div class="image_title">
				<h1>Wall-E</h1>
			</div>		
			<img src="./wp-content/themes/fitness-space/img/fit2.jpg"/>
		</li>
		<li>
			<div class="image_title">
				<h1>Up</h1>
			</div>
			<img src="./wp-content/themes/fitness-space/img/fit3.jpg"/>
		</li>
	</ul>
</div>
<script>
	$("ul li").click(function(){
		console.log("click");
		/*$("ul li").removeClass("expand");
		$(this).addClass("expand");*/
		$(".accordian ul li").css("width", "30%");
		$(this).css("width", "60%");
		$(this).css("z-index", "10");
	});
</script>
			
	
	<!-- <div class="wrapper">
		<div id="accordion-wrapper">
		    <div class="slide active">
		        <img class="accordion-img" src="./wp-content/themes/fitness-space/img/fit1.jpg" />
		        <div class="caption">
		            <a href="#">
		                <h1>
		                    Caption title</h1>
		            </a>
		            <p>
		                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in lorem vitae nibh
		                ultrices adipiscing. In fringilla auctor mauris ac mollis.</p>
		        </div>
		    </div>
		    <div class="slide">
		        <img class="accordion-img" src="./wp-content/themes/fitness-space/img/fit2.jpg" />
		        <div class="caption">
		            <a href="#">
		                <h1>
		                    Caption title</h1>
		            </a>
		            <p>
		                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in lorem vitae nibh
		                ultrices adipiscing. In fringilla auctor mauris ac mollis.</p>
		        </div>
		    </div>
		    <div class="slide">
		        <img class="accordion-img" src="./wp-content/themes/fitness-space/img/fit3.jpg" />
		        <div class="caption">
		            <a href="#">
		                <h1>
		                    Caption title</h1>
		            </a>
		            <p>
		                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in lorem vitae nibh
		                ultrices adipiscing. In fringilla auctor mauris ac mollis.</p>
		        </div>
		    </div>
		</div>
	</div> -->
</div>
<!--<script type="text/javascript">
    $(window).load(function () {
        $('#accordion-wrapper').raccordion({
            speed: 1000,
            sliderWidth: "100%",
            sliderHeight: 640,
            autoCollapse: false
        });

    }); 
</script>-->