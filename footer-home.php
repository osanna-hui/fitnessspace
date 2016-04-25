<?php
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'fitnessspace' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-links-menu',
							'depth'          => 1,
						) );
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<?php
					do_action( 'fitnessspace_credits' );
				?>
				<!-- <span class="site-title"><a href="<?php echo esc_url( home_url( '' ) ); ?>"><?php bloginfo( 'name' ); ?></a></span> -->
				<a href="<?php echo esc_url( __( 'http://www.wittycookie.ca/', 'fitnessspace' ) ); ?>"><?php printf( __( 'All Rights Reserved. %s', 'fitnessspace' ), 'FitnessSpace by WittyCookie' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
