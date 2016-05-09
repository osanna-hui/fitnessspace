<?php global $fitnessspace; ?>
<?php if (!empty($fitnessspace['trainers_text_id']['name01']) || !empty($fitnessspace['trainers_image_id']['url01'])  ): ?>

<div class="home-sections" id="home-trainers">	
	<div class="wrapper">
		<div id="accordion-wrapper">

			<?php if (!empty($fitnessspace['trainers_text_id']['name01'])): ?>
			    <div class="slide active">
			        <img class="accordion-img" src="<?php echo $fitnessspace['trainers_image_id']['url01']?>" />
			        <div class="caption">
			            <h1 class="trainer-name"><?php echo $fitnessspace['trainers_text_id']['name01'] ?></h1>
						<h2 class="trainer-title"><?php echo $fitnessspace['trainers_text_id']['pos01'] ?></h2>
						<a href="<?php echo $fitnessspace['trainers_text_id']['link01'] ?>"><input type="button" class="trainer-button clear-button" value="VIEW PROFILE"/></a>
			        </div>
			    </div>
			<?php endif; ?>


		    <?php if (!empty($fitnessspace['trainers_text_id']['name02'])): ?>
			    <div class="slide">
			        <img class="accordion-img" src="<?php echo $fitnessspace['trainers_image_id']['url02']?>" />
			        <div class="caption">
			            <h1 class="trainer-name"><?php echo $fitnessspace['trainers_text_id']['name02'] ?></h1>
						<h2 class="trainer-title"><?php echo $fitnessspace['trainers_text_id']['pos02'] ?></h2>
						<a href="<?php echo $fitnessspace['trainers_text_id']['link02'] ?>"><input type="button" class="trainer-button clear-button" value="VIEW PROFILE"/></a>
			        </div>
			    </div>
			<?php endif; ?>

		    <?php if (!empty($fitnessspace['trainers_text_id']['name03'])): ?>
			    <div class="slide">
			        <img class="accordion-img" src="<?php echo $fitnessspace['trainers_image_id']['url03']?>" />
			        <div class="caption">
			            <h1 class="trainer-name"><?php echo $fitnessspace['trainers_text_id']['name03'] ?></h1>
						<h2 class="trainer-title"><?php echo $fitnessspace['trainers_text_id']['pos03'] ?></h2>
						<a href="<?php echo $fitnessspace['trainers_text_id']['link03'] ?>"><input type="button" class="trainer-button clear-button" value="VIEW PROFILE"/></a>
			        </div>
			    </div>
			<?php endif; ?>
		</div>
	</div>
</div>
<script type="text/javascript">
    if(window.innerWidth>993){
    	$(window).load(function () {
	        $('#accordion-wrapper').raccordion({
	            speed: 1000,
	            sliderWidth: "100%",
	            sliderHeight: 640,
	            autoCollapse: false
	        });

	    }); 
    }
</script>

<?php endif; ?>