<?php
$type = get_post_type();
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  &&  $type == 'post' && !is_front_page())  : ?>

	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php echo 'no'; ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
