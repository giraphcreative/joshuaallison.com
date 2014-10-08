<?php
/*
Home/catch-all template
*/

get_header(); ?>


	<div class="blog">

		<div class="content-narrow">
		<?php
		if ( is_search() ) {
			?><h1>Search Results for <span>'<?php print $_REQUEST["s"]; ?>'</span></h1><?php
		} else {
			?><h1>Thoughts</h1><?php
		}

		while ( have_posts() ) : the_post();
			?>
			<div class="entry-content">
				<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
				<?php the_excerpt(); ?>
			</div>
			<?php
		endwhile;
		?>
		</div>

	</div><!-- #primary -->


<?php get_footer(); ?>