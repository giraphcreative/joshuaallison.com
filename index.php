<?php
/*
Home/catch-all template
*/

get_header(); ?>


	<div class="content-area">

		<div class="content-narrow">
		<?php
		if ( is_search() ) {
			?><h1>Search Results for <span>'<?php print $_REQUEST["s"]; ?>'</span></h1><?php
		} else {
			?><h1>Thoughts</h1><?php
		}

		while ( have_posts() ) : the_post();
			?>
			<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
			<?php
		endwhile;
		?>
		</div>

	</div><!-- #primary -->


<?php get_footer(); ?>