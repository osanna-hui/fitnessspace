<?php global $fitnessspace; ?>

<?php if (!empty($fitnessspace['pricing_text_id']['text01']) || !empty($fitnessspace['pricing_image_id']['url01'])  ): ?>


<div class="home-sections" id="home-pricing">
	<div class="row">
		
		<div class="pricing-bg center" style="background-image:url(<?php echo $fitnessspace['pricing_image_id']['url01'] ?>)">
			<div class="overlay"></div>
			<a href="<?php echo $fitnessspace['pricing_text_id']['link01']?>">
				<div class="pricing-content">
					<h1 class="section-title"><?php echo $fitnessspace['pricing_text_id']['text01']?></h1>
					<h1 class="section-title"><?php echo $fitnessspace['pricing_text_id']['text02']?></h1>
					<h2><?php echo $fitnessspace['pricing_text_id']['text03']?></h2>
				</div>
			</a>
			<a href="<?php echo $fitnessspace['pricing_text_id']['link02']?>">
				<div class="section-desc pricing-footer darken center">
					<span><?php echo $fitnessspace['pricing_text_id']['text04']?></span>
				</div>
			</a>
		</div>
	</div>
</div>
<?php endif; ?>