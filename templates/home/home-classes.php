<?php global $fitnessspace; ?>

<?php if (!empty($fitnessspace['classes_text_id']['title01']) || !empty($fitnessspace['classes_image_id']['url01'])  ): ?>

<div class="home-sections" id="home-classes"> 
	<div class="row">

		<?php if (!empty($fitnessspace['classes_image_id']['url01'])){

			?>
				<a href="<?php echo $fitnessspace['classes_text_id']['link01']?>"><div class="col-md-6 home-classes class1" style="background-image:url(<?php echo $fitnessspace['classes_image_id']['url01']; ?> )">
					<h1 class="classes"><?php echo $fitnessspace['classes_text_id']['title01']?></h1>
				</div></a>

			<?php
		} ?>

		<?php if (!empty($fitnessspace['classes_image_id']['url02'])){

			?>
				<a href="<?php echo $fitnessspace['classes_text_id']['link02']?>"><div class="col-md-6 home-classes class2" style="background-image:url(<?php echo $fitnessspace['classes_image_id']['url02']; ?> )">
					<h1 class="classes"><?php echo $fitnessspace['classes_text_id']['title02']?></h1>
				</div></a>

			<?php
		} ?>

		<!-- <div class="col-md-6 home-classes class1" style="background-image:url(./wp-content/themes/fitness-space/img/fit1.jpg)">
			<h1 class="classes">PERSONAL TRAINING</h1>
		</div> -->
		<!-- <div class="col-md-6 home-classes class2" style="background-image:url(./wp-content/themes/fitness-space/img/fit2.jpg)">
			<h1 class="classes">GROUP FITNESS</h1>
		</div> -->
	</div>
	<div class="row">

		<?php if (!empty($fitnessspace['classes_image_id']['url03'])){

			?>
				<a href="<?php echo $fitnessspace['classes_text_id']['link03']?>"><div class="col-md-6 home-classes class3" style="background-image:url(<?php echo $fitnessspace['classes_image_id']['url03']; ?> )">
					<h1 class="classes"><?php echo $fitnessspace['classes_text_id']['title03']?></h1>
				</div></a>

			<?php
		} ?>

		<?php if (!empty($fitnessspace['classes_image_id']['url04'])){

			?>
				<a href="<?php echo $fitnessspace['classes_text_id']['link04']?>"><div class="col-md-6 home-classes class4" style="background-image:url(<?php echo $fitnessspace['classes_image_id']['url04']; ?> )">
					<h1 class="classes"><?php echo $fitnessspace['classes_text_id']['title04']?></h1>
				</div></a>

			<?php
		} ?>
		<!-- <div class="col-md-6 home-classes class3" style="background-image:url(./wp-content/themes/fitness-space/img/fit3.jpg)">
			<h1 class="classes">FUNCTIONAL FITNESS</h1>
		</div>
		<div class="col-md-6 home-classes class4" style="background-image:url(./wp-content/themes/fitness-space/img/fit4.jpg)">
			<h1 class="classes">GENERAL FITNESS</h1>
		
		</div> -->
	</div>
</div>
<?php endif; ?>