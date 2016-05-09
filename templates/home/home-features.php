<?php global $fitnessspace; ?>

<?php if (!empty($fitnessspace['features_text_id']['title01']) || !empty($fitnessspace['features_text_id']['icon01'])  ): ?>

<div class="home-sections title-padding center container" id="home-features"> 
	<h1 class="section-title">FEATURES</h1>
	<div class="row">

		<?php if (!empty($fitnessspace['features_text_id']['title01'])): ?>
			<div class="col-md-4 features">
				<i class="green fa <?php echo $fitnessspace['features_text_id']['icon01']?> fa-3x" aria-hidden="true"></i>
				<h2 class="feature-title"><?php echo $fitnessspace['features_text_id']['title01']?></h2>
				<span class="feature-desc"><?php echo $fitnessspace['features_text_id']['desc01']?></span>
			</div>
		<?php endif; ?>


		<?php if (!empty($fitnessspace['features_text_id']['title02'])): ?>
			<div class="col-md-4 features">
				<i class="green fa <?php echo $fitnessspace['features_text_id']['icon02']?>-o fa-3x" aria-hidden="true"></i>
				<h2 class="feature-title"><?php echo $fitnessspace['features_text_id']['title02']?></h2>
				<span class="feature-desc"><?php echo $fitnessspace['features_text_id']['desc02']?></span>
			</div>
		<?php endif; ?>

		<?php if (!empty($fitnessspace['features_text_id']['title03'])): ?>
			<div class="col-md-4 features">
				<i class="green fa <?php echo $fitnessspace['features_text_id']['icon03']?> fa-3x" aria-hidden="true"></i>
				<h2 class="feature-title"><?php echo $fitnessspace['features_text_id']['title03']?></h2>
				<span class="feature-desc"><?php echo $fitnessspace['features_text_id']['desc03']?></span>
			</div>
		<?php endif; ?>

	</div>
	<div class="feature-buttons">
		<?php if (!empty($fitnessspace['features_text_id']['button01'])): ?>
			<a href="<?php echo $fitnessspace['features_text_id']['link01']?>"><input type="button" class="green-button" value="<?php echo $fitnessspace['features_text_id']['button01']?>"/></a>
		<?php endif; ?>
		
		<?php if (!empty($fitnessspace['features_text_id']['button02'])): ?>
			<a href="<?php echo $fitnessspace['features_text_id']['link02']?>"><input type="button" class="green-button" value="<?php echo $fitnessspace['features_text_id']['button02']?>"/></a>
		<?php endif; ?>

	</div>
</div>

<?php endif; ?>