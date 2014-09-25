<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>	
	
	</main>
	
	<footer class="footer fixed">
			
		<nav role="navigation">
			<?php wp_nav_menu( array( 
				'theme_location' => 'footer', 
				'menu_class' => 'nav-menu' ) 
			); ?>
		</nav>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>