<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>
			
	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
			<main class="main small-12 medium-12 large-12 cell" role="main">

				<article class="content-not-found">
				
					<header class="article-header" style="padding-top: 5em; padding-bottom: 5em;">
						<h1 class="text-center"><?php _e( 'The page you were looking for no longer appears to exist. Please try again', 'jointswp' ); ?></h1>
					</header> <!-- end article header -->

			
				</article> <!-- end article -->
	
			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>