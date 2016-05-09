<?php global $fitnessspace; ?>
<?php if (!empty($fitnessspace['cta_text_id']['text01']) || !empty($fitnessspace['cta_image_id']['url01'])  ): ?>

<div class="home-sections center" id="home-calltoaction" style="background-image:url(<?php echo $fitnessspace['cta_image_id']['url01'] ?>)"> 
	<h1 class="section-title"><?php echo $fitnessspace['cta_text_id']['text01']; ?></h1>

	<a href="<?php echo $fitnessspace['cta_button_id']['link01']; ?>">
		<input type="button" class="clear-button" value="<?php echo $fitnessspace['cta_button_id']['text01']; ?>"/>
	</a>
</div>
<?php endif; ?>