<?php
/**
 * Template part for displaying a single post
 */
?>
<?php $light_blue_swoosh_in_footer = get_field('light_blue_swoosh_in_footer'); ?>
<?php
$aFooterClass = '';
if($light_blue_swoosh_in_footer) {
    $aFooterClass = ' light-blue-background';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<!--<h1 class="entry-title single-title" itemprop="headline"><?php /*the_title(); */?></h1>
		--><?php /*get_template_part( 'parts/content', 'byline' ); */?>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">
		<?php //the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">

        <div class="text-center<?php echo $aFooterClass;?>" style="padding-top: 2em; padding-bottom: 2em;">
            <a href="/blog/" class="round-button">Return to article list</a>
        </div>
	</footer> <!-- end article footer -->
						
	<?php //comments_template(); ?>
													
</article> <!-- end article -->