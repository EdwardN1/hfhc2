<?php $read_more_text = get_field('read_more_text'); ?>
<?php $heading = get_field('heading'); ?>
<?php $description = get_field('description'); ?>
<?php $image = get_field('image'); ?>
<?php $imageURL = $image['url']; ?>
<?php $imageALT = $image['alt']; ?>
<?php $half_tone_colour = get_field('half_tone_colour'); ?>
<?php $link = get_field('link'); ?>
<?php
$background_class = '';
$ctauniqeid = 'cta-id-' . uniqid();
if ($half_tone_colour) {
    $background_class = ' half-blue';
}
?>

<?php if (get_field('add_header') == 1): ?>
    <?php $header_heading = get_field('header_heading'); ?>

    <div class="cta-header">
        <h2><?php echo $header_heading; ?></h2>
        <?php if (have_rows('header_columns')) : ?>
            <div class="grid-container">
                <div class="grid-x">
                    <?php $colcount = 1; ?>
                    <?php while (have_rows('header_columns')) : the_row(); ?>
                        <div class="cell auto">
                            <?php $header_content = get_sub_field('header_content'); ?>
                            <div class="content-container-<?php echo $colcount; ?>">
                                <?php echo $header_content; ?>
                                <?php if ($colcount == 2): ?>
                                    <div class="cta-btn" data-magellan><a href="#<?php echo $ctauniqeid; ?>"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/HFHCH_down_arrow.svg"/></a>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>
                        <?php $colcount++; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
    </div>
<?php endif; ?>

    <div id="<?php echo $ctauniqeid; ?>" class="cta-section show-above-860<?php echo $background_class; ?>">
        <div class="grid-container">
            <a href="<?php echo $link; ?>" class="action">
                <div class="grid-x">
                    <div class="large-3 medium-3 small-12 image"
                         style="background-image: url(<?php echo $imageURL; ?>)"></div>
                    <div class="large-9 medium-9 small-12 description">
                        <div class="read-more"><?php echo $read_more_text; ?></div>
                        <div class="heading"><?php echo $heading; ?></div>
                        <div class="info"><?php echo $description; ?></div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div id="<?php echo $ctauniqeid; ?>" class="cta-section show-below-860<?php echo $background_class; ?>">

        <a href="<?php echo $link; ?>" class="action">

                <div class="image"
                     style="background-image: url(<?php echo $imageURL; ?>)"></div>
                <div class="description">
                    <div class="read-more"><?php echo $read_more_text; ?></div>
                    <div class="heading"><?php echo $heading; ?></div>
                    <div class="info"><?php echo $description; ?></div>
                </div>

        </a>

    </div>

<?php $add_footer = get_field('add_footer');
if ($add_footer) {
    ?>
    <?php $footer_heading = get_field('footer_heading'); ?>
    <div class="cta-footer<?php echo $background_class; ?>">
        <h2><?php echo $footer_heading; ?></h2>
        <?php if (have_rows('columns')) : ?>
            <div class="grid-container">
                <div class="grid-x">
                    <?php while (have_rows('columns')) : the_row(); ?>
                        <?php $content = get_sub_field('content'); ?>
                        <div class="cell large-auto medium-12 small-12">
                            <?php echo $content; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
    </div>
<?php } ?>