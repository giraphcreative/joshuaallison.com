<?php


require_once( 'twitter/twitteroauth/twitteroauth.php' );

function twitter_posts() {

	// authenticate to Twitter
	$connection = new TwitterOAuth( 'rMDfpPRxbxD8IY87RhsuzZjZK', 'qAm17hbP5qWgBFzbQeplKpsuKXW1SijlE2NqznnX6AEOI3WqaR' );

	// get the posts
	$posts = $connection->get( 'https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=JoshAAllison&count=4' );

	// loop through them
	foreach ( $posts as $post ) { ?>
		<p class="post-twitter">
			<?php print $post->text; ?>
		</p>
		<?php
	}

}


?>