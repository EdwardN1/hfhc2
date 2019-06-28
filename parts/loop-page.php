<?php
/**
 * Template part for displaying page content in page.php
 */

$full_width_title = get_field('full_width_title');
$headerClass = ' grid-container';
if($full_width_title) {
    $headerClass = '';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<!--<header class="article-header<?php /*echo $headerClass; */?>">
		<h1 class="page-title"><?php /*the_title(); */?></h1>
	</header> --><!-- end article header -->
					
    <section class="entry-content" itemprop="text">
	    <?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->
						    
	<?php //comments_template(); ?>
					
</article> <!-- end article -->