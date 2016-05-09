<?php global $fitnessspace; ?>
<?php 
	if(!empty($fitnessspace['about_title_text']) || !empty($fitnessspace['about_desc_text'] ) ):
?>
<div class="home-sections" id="home-about"> 
	<div class="container center">
        <div class="headline">

        	<?php
                if(!empty($fitnessspace['about_title_text'])){
                    ?>
                    <h1 id="about-title"><?php echo do_shortcode($fitnessspace['about_title_text']);?></h1>
                <?php 
                } 
            ?><!-- About Title Text -->

            <?php
                if(!empty($fitnessspace['about_desc_text'])){
                    ?>
                    <h3 id="about-desc"><?php echo do_shortcode($fitnessspace['about_desc_text']);?></h3>
                <?php 
                } 
            ?><!-- About Title Text -->
            
        </div>
    </div>
</div>
<?php endif; ?>