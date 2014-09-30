<?php

/*
Template Name: Page - Home
*/

get_header();

?>

	<div class="home-head">
		<div class="home-head-content">
			
		<?php
		while ( have_posts() ) : the_post();
			?>
			<div class="column-half first">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
			<div class="column-half">
				<img src="<?php print wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
			</div>
			<?php
		endwhile;
		?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<div class="home-posts">
		<div class="home-posts-content">
			
			<div class="column-third">
				<h3 class="lightbulb">Walk the Line</h3>
			<?php
			// The Query
			query_posts( "cat=4" );

			// The Loop
			while ( have_posts() ) : the_post();
			    ?>
			    <div class="entry">
			    	<h4><?php the_title(); ?></h4>
					<?php the_excerpt(); ?>
			    </div>
			    <?php
			endwhile;

			// Reset Query
			wp_reset_query();
			?>
			</div>
			
			<div class="column-third">
				<h3 class="lightbulb">Be-Cause</h3>
			<?php
			// The Query
			query_posts( "cat=5&post_count=2" );

			// The Loop
			while ( have_posts() ) : the_post();
			    ?>
			    <div class="entry">
			    	<h4><?php the_title(); ?></h4>
					<?php the_excerpt(); ?>
			    </div>
			    <?php
			endwhile;

			// Reset Query
			wp_reset_query();
			?>
			</div>
			
			<div class="column-third">
				<h3 class="lightbulb">#purposeffect</h3>
			<?php
			
			?>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php 

get_footer();

?>