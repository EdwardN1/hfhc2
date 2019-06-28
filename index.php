<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

<?php $image = get_field( 'blog_archive_header_image', 'option' ); ?>
<?php $imageURL = $image['url']; ?>
<?php $imageALT = $image['alt']; ?>

    <div class="heading-image" style="background-image: url(<?php echo $imageURL; ?>)">
        <div class="white-overlay blog">
            <div class="grid-container">
				<?php $heading = get_field( 'blog_archive_heading', 'option' ); ?>
                <h1><?php echo $heading; ?></h1>
				<?php $description = get_field( 'blog_archive_description', 'option' ); ?>
                <p><?php echo $description; ?></p>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="inner-content grid-x">


            <main class="main small-12 medium-12 large-12 cell" role="main">


				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>

				<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

            </main> <!-- end #main -->

			<?php //get_sidebar(); ?>

        </div> <!-- end #inner-content -->

        <div class="blog-footer light-blue-background">
            <div class="grid-container">
			<?php the_field( 'blog_archive_footer', 'option' ); ?>
            </div>
        </div>

    </div> <!-- end #content -->

<?php get_footer(); ?>