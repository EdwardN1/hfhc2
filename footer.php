<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<?php
$PageType = 'normal';
if (is_front_page() && is_home()) {
    // Default homepage
    $PageType = 'Default home';
} elseif (is_front_page()) {
    // static homepage
    $PageType = 'Static home';
} elseif (is_home()) {
    // blog page
    $PageType = 'blog';
} else {

}

?>

<?php $light_blue_swoosh_in_footer = get_field('light_blue_swoosh_in_footer'); ?>
<?php $remove_swoosh_in_footer = get_field('remove_swoosh_in_footer'); ?>
<footer class="footer" role="contentinfo">

    <?php if (!$remove_swoosh_in_footer): ?>
        <?php if ($light_blue_swoosh_in_footer || ($PageType == 'blog')) {
            ?>
            <hr class="swoosh-left-blue">
            <?php
        } else {
            ?>
            <hr class="swoosh-left">
        <?php } ?>
    <?php endif; ?>
    <div class="blue-background">
        <div class="grid-container" style="padding-bottom: 2em;">
            <div class="rtp" data-magellan><a class="round-button reversed direction-white-up" href="#top-of-page">Return
                    to top of page</a></div>
            <div class="grid-x">
                <div class="large-4 medium-auto small-12 logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-reversed.png"/>
                </div>
                <div class="large-4 medium-auto small-12 contact">
                    <div class="light-blue-left-border">
                        <?php $middle_column_content = get_field('middle_column_content', 'option'); ?>
                        <div class="more-letter-spacing"><?php echo $middle_column_content; ?></div>

                        <p class="social">
                            <a href="<?php the_field('facebook', 'option') ?>" target="_blank" class="social-icon"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/facebookicon-white.svg"></a>
                            <a href="<?php the_field('linkedin', 'option') ?>" target="_blank" class="social-icon"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedInicon-white.svg"></a>
                            <a href="<?php the_field('twitter', 'option') ?>" target="_blank" class="social-icon"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/twittericon-white.svg"></a>
                        </p>
                    </div>
                </div>
                <div class="large-4 medium-shrink small-12 icon-section">
                    <div class="light-blue-left-border">
                        <p style="font-weight: bold; font-size: 20px">
                            Supported by
                        </p>
                        <p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ambassadors-logo.png"/>
                        </p>
                        <p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/confident-logo.png"/>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="inner-footer grid-x" style="background: #5dcae3;">
            <div class="cell auto">&nbsp;</div>
            <div class="shrink cell">
                <nav class="white pad-top-10 pad-bottom-10" role="navigation">
                    <?php joints_footer_links(); ?>
                </nav>
            </div>
            <div class="cell auto">&nbsp;</div>
            <!--<div class="small-12 medium-12 large-12 cell">
							<p class="source-org copyright">&copy; <?php /*echo date('Y'); */ ?> <?php /*bloginfo('name'); */ ?>.</p>
						</div>-->

        </div> <!-- end #inner-footer -->
        <div class="reduced-font" style="background: #5dcae3;"><p class="text-center"
                                                                  style="font-size: 15px; margin: 0; line-height: 2">
                <?php $copyright_notice = get_field('copyright_notice', 'option'); ?>
                <?php echo $copyright_notice; ?>
            </p>
            <div class="mobile-show-on-portrait show-on-narrow" style="height: 55px; width: 100%;"></div>
        </div>
    </div>
    <!--<div class="blue-background">
    <div class="grid-container footer-columns pad-bottom-10">
        <div class="grid-x pad-top-32">
            <div class="large-3 medium-6 small-12 fontsize-18 lineheight-13">
                <?php /*the_field('footer_column_1', 'option'); */ ?>
            </div>
            <div class="large-3 medium-6 small-12 fontsize-14 lineheight-13">
                <?php /*the_field('footer_column_2', 'option'); */ ?>
            </div>
            <div class="large-3 medium-6 small-12 fontsize-14 lineheight-13">
                <?php /*the_field('footer_column_3', 'option'); */ ?>
            </div>
            <div class="large-3 medium-6 small-12 fontsize-14 lineheight-19 pad-top-20">
                <p>
                    SOCIAL MEDIA:<br>
                    <a href="<?php /*the_field('facebook', 'option') */ ?>" target="_blank" class="social-icon"><img
                                src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/facebookicon-white.svg"></a>
                    <a href="<?php /*the_field('linkedin', 'option') */ ?>" target="_blank" class="social-icon"><img
                                src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/linkedInicon-white.svg"></a>
                    <a href="<?php /*the_field('twitter', 'option') */ ?>" target="_blank" class="social-icon"><img
                                src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/twittericon-white.svg"></a>
                </p>
                <div>
                    <a href="<?php /*the_field('request_a_call_back', 'option'); */ ?>"><img
                                src="<?php /*echo get_template_directory_uri(); */ ?>/assets/images/Request-a-Call-Icon.png">
                        REQUEST A CALL</a>
                </div>
                <div>
                    <?php /*the_field('footer_column_4', 'option'); */ ?>
                </div>
            </div>
        </div>
    </div>
    <div class="inner-footer grid-x show-for-medium" style="background: #5dcae3;">
        <div class="cell auto">&nbsp;</div>
        <div class="shrink cell">
            <nav class="white pad-top-10 pad-bottom-10" role="navigation">
                <?php /*joints_footer_links(); */ ?>
            </nav>
        </div>
        <div class="cell auto">&nbsp;</div>
    </div>
</div>-->

</footer> <!-- end .footer -->

</div>  <!-- end .off-canvas-content -->

</div> <!-- end .off-canvas-wrapper -->

<?php wp_footer(); ?>

</body>

</html> <!-- end page -->