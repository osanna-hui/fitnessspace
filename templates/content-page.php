<?php 
// general page template
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" style="background-image:url('../wp-content/themes/fitness-space/img/fit3.jpg')">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 page-content">

					<?php the_content(); ?>
				</div>
				<div class="col-md-6 page-thumbnail">
					<?php fitnessspace_post_thumbnail(); ?>
				</div>
			</div>
			
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
