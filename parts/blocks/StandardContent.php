<?php $content = get_field('content'); ?>
<?php $background_color = get_field('background_colour'); ?>
<?php
$background_class = '';
if ($background_color == 'Green') {
    $background_class = ' class="light-green-background" ';
}
if ($background_color == 'Blue') {
    $background_class = ' class="light-blue-background" ';
}

$no_top_padding = get_field('no_top_padding');
$no_bottom_padding = get_field('no_bottom_padding');
$reduced_font_size = get_field( 'reduced_font_size' );
$full_width = get_field( 'full_width' );

$padClass = '';
if ($no_top_padding) {
    $padClass .= ' no-top-gutter';
}
if ($no_bottom_padding) {
    $padClass .= ' no-bottom-gutter';
}
if($reduced_font_size) {
    $padClass .= ' reduced-font';
}
if($full_width) {
    $padClass .= ' full-width';
}

?>
<div<?php echo $background_class; ?>>
    <div class="standard-content<?php echo $padClass; ?>">
        <?php echo $content; ?>
    </div>
</div>

<?php if (have_rows('buttons')) : ?>
    <div class="buttons-container">
        <div <?php echo $background_class; ?>>
            <div class="grid-container">
                <div class="grid-x">
                    <?php $button_count = 1; ?>
                    <?php while (have_rows('buttons')) : the_row(); ?>
                        <?php $datamagellan = ''; ?>
                        <?php $target = ''; ?>
                        <?php $link_type = get_sub_field('link_type'); ?>
                        <?php $navigation_target_id = '#' . get_sub_field('navigation_target_id'); ?>
                        <?php $button_text = get_sub_field('button_text'); ?>
                        <?php $url = get_sub_field('url'); ?>
                        <?php $pagepost = get_sub_field('pagepost'); ?>
                        <?php
                        $link = '';
                        if ($link_type == 'Navigation Target' && $navigation_target_id != '#') {
                            $datamagellan = ' data-magellan';
                            $link = $navigation_target_id;
                        }
                        if ($link_type == 'Url' && $url != '') {
                            $link = $url;
                            $target = ' target="_blank"';
                        }
                        if ($link_type == 'Page/Post' && $pagepost != '') {
                            $link = $pagepost;
                        }
                        if ($link != '') {
                            ?>
                            <div class="cell large-auto medium-12 small-12">
                                <div class="nav-button colour-<?php echo $button_count . $datamagellan; ?>"<?php echo $datamagellan; ?>
                                     data-offset="100">
                                    <a href="<?php echo $link; ?>"<?php echo $target; ?>><?php echo $button_text; ?></a>
                                </div>
                            </div>
                        <?php } ?>
                        <?php $button_count++; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>

