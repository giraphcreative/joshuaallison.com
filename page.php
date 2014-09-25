<?php

get_header();

?>

	<main class="content-narrow">

		<?php 
		while ( have_posts() ) : the_post(); ?>
		
		<h1><?php the_title() ?></h1>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>

			<?php
		endwhile; 
		?>

	</main><!-- #primary -->

<?php

get_footer();

?>