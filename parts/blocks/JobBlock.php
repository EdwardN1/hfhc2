<?php $heading = get_field( 'heading' ); ?>
<?php $sub_heading = get_field( 'sub_heading' ); ?>
<?php $content = wp_trim_words(get_field( 'content' ), $num_words = 50, $more = '...' ); ?>
<?php $image = get_field( 'image' ); ?>
<?php $imageURL = $image['url']; ?>
<?php $imageALT = $image['alt']; ?>
<?php $link_description = get_field( 'link_description' ); ?>
<?php $page_link = get_field( 'page_link' ); ?>
<?php $double_top_margin = get_field( 'double_top_margin' );?>
<?php $double_bottom_margin = get_field( 'double_bottom_margin' );?>

<?php
$padClass = '';
if($double_bottom_margin) {
    $padClass .= ' pad-bottom-60';
} else {
    $padClass .= ' pad-bottom-30';
}
if($double_top_margin) {
    $padClass .= ' pad-top-60';
} else {
    $padClass .= ' pad-top-30';
}
?>


<div class="job-block blog-background<?php echo $padClass; ?>">
    <div class="grid-container white-background pad-top-30 pad-bottom-30 pad-left-0 pad-right-0">
        <div class="grid-x">
            <div class="cell large-4 medium-4 hide-for-small-only pad-left-30 jobimage">
                <a class="img" href="<?php echo $page_link; ?>"style="background: url(<?php echo $imageURL; ?>) no-repeat; background-size: cover;">&nbsp;</a>
            </div>
            <div class="cell large-8 medium-8 small-12 pad-left-30 pad-right-30">
                <h2 class="mainheading semi-bold"><?php echo $heading; ?></h2>
                <h3 class="subheading dark-grey caps semi-bold"><?php echo $sub_heading; ?></h3>
                <div class="maincontent">
                    <?php echo $content; ?>
                </div>
                <div class="joblink">
                <a href="<?php echo $page_link; ?>" class="round-button"><?php echo $link_description; ?> ></a>
                </div>
            </div>
        </div>
        <div class="social">
            <a href="<?php the_field('facebook','option')?>" target="_blank" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebookicon.svg"></a>
            <a href="<?php the_field('linkedin','option')?>" target="_blank" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedInicon.svg"></a>
            <a href="<?php the_field('twitter','option')?>" target="_blank" class="social-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twittericon.svg"></a>
        </div>
    </div>
</div>