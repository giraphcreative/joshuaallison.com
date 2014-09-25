<?php

/*
Template Name: Page - Home
*/

get_header();

?>

	<div class="home-head">
		<div class="wrap">

		<?php
		while ( have_posts() ) : the_post();
			?>
			<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
			<?php 
			the_excerpt();
		endwhile;
		?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php 

get_footer();

?>