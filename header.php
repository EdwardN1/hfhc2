<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
global $isMobile;
global $isDesktop;
global $isTablet;
?>

<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">

    <!-- If Site Icon isn't set in customizer -->
    <?php if (!function_exists('has_site_icon') || !has_site_icon()) { ?>
        <!-- Icons & Favicons -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png?v1.1">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png?v1.1"
              rel="apple-touch-icon"/>
    <?php } ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>

</head>

<?php
global $deviceType;
?>

<body <?php body_class($deviceType); ?>>

<div class="off-canvas-wrapper">

    <!-- Load off-canvas container. Feel free to remove if not using. -->
    <?php get_template_part('parts/content', 'offcanvas'); ?>
    <?php //get_template_part( 'parts/content', 'offcanvas-right' );  ?>

    <div class="off-canvas-content" data-off-canvas-content>

        <header class="header" role="banner" id="top-of-page" data-magellan-target="top-of-page">
            <?php
            $home_care_enquiries_number = get_field('home_care_enquiries_number', 'option');
            $looking_for_staff_number = get_field('looking_for_staff_number', 'option');
            $want_to_work_for_us_number = get_field('want_to_work_for_us_number', 'option');
            ?>
            <div class="blue-background white mobile-show-on-portrait show-on-narrow">
                <div class="mobile-contact">
                    <span>Home Care Enquiries: </span> <span style="font-weight: bold;"><a
                                href="tel:<?php echo preg_replace('/\s+/', '', $home_care_enquiries_number) ?>"
                                class="white"><?php echo $home_care_enquiries_number; ?></a></span>
                </div>
                <div class="mobile-contact">
                    <span>Looking for Staff: </span> <span style="font-weight: bold;"><a
                                href="tel:<?php echo preg_replace('/\s+/', '', $looking_for_staff_number) ?>"
                                class="white"><?php echo $looking_for_staff_number; ?></a></span>
                </div>
                <div class="mobile-contact">
                    <span>Want to Work for Us: </span> <span style="font-weight: bold;"><a
                                href="tel:<?php echo preg_replace('/\s+/', '', $want_to_work_for_us_number) ?>"
                                class="white"><?php echo $want_to_work_for_us_number; ?></a></span>
                </div>
                <div class="mobile-request">
                    <a href="<?php the_field('request_a_call_back', 'option'); ?>"
                       class="white">Request a call</a>
                </div>
            </div>
            <div class="blue-background white top-banner mobile-hide-on-portrait hide-on-narrow">
                <div class="grid-container">
                    <div class="grid-x">
                        <div class="cell large-7 medium-9 stretch-below-portrait">
                            <div class="grid-x">
                                <div class="telephone cell large-4 medium-auto small-4">
                                    <div class="description">Home Care Enquiries</div>

                                    <div class="semi-bold"><a
                                                href="tel:<?php echo preg_replace('/\s+/', '', $home_care_enquiries_number) ?>"
                                                class="white"><?php echo $home_care_enquiries_number; ?></a></div>
                                </div>
                                <div class="telephone cell large-4 medium-auto small-4">
                                    <div class="description">Looking for Staff?</div>
                                    <div class="semi-bold"><a
                                                href="tel:<?php echo preg_replace('/\s+/', '', $looking_for_staff_number) ?>"
                                                class="white"><?php echo $looking_for_staff_number; ?></a></div>
                                </div>
                                <div class="telephone cell large-4 medium-auto small-4">
                                    <div class="description">Want to Work for Us?</div>
                                    <div class="semi-bold"><a
                                                href="tel:<?php echo preg_replace('/\s+/', '', $want_to_work_for_us_number) ?>"
                                                class="white"><?php echo $want_to_work_for_us_number; ?></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cell large-auto show-for-large"></div>
                        <div class="cell large-5 medium-3 show-above-portrait">
                            <?php //get_template_part('parts/header', 'icons'); ?>
                            <div class="grid-x header-icons">
                                <div class="cell auto"></div>
                                <div class="shrink cell pad-right-10 pad-top-5 show-above-portrait">
                                    <a href="<?php //the_field('request_a_call_back', 'option'); ?>#"
                                       class="header-button" data-open="call-back-form">Request a call</a>
                                    <div id="call-back-form" class="reveal" data-reveal>
                                        <div class="grid-container">
                                            <div class="grid-x">
                                            <h3 class="white">Request a call</h3>
                                            </div>
                                        </div>
                                        <div class="animated_forms">
                                            <?php gravity_form(4, false, false, false, '', false); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="shrink cell pad-right-10 pad-left-10 pad-top-5 show-for-large">
                                    <a href="<?php the_field('vacancies', 'option'); ?>"
                                       class="header-button">Vacancies</a>
                                </div>
                                <div class="shrink cell pad-left-10 pad-top-5 show-for-large">
                                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"
                                       class="header-button">Blog</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="searchbar" class="grid-container mobile-hide-on-portrait hide-on-narrow">
                <div class="grid-x">
                    <div class="large-7 medium-4 small-6 cell pad-top-15 pad-bottom-15 logo">
                        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                                         class="logo"></a>
                    </div>
                    <div class="cell auto"></div>

                    <div class="cell shrink pad-top-48 social-icons show-above-portrait">
                        <!--<form role="search" method="get" class="search-form inline-block" action="<?php /*echo home_url( '/' ); */ ?>">
                                <input type="search" class="header-search-field" placeholder="<?php /*echo esc_attr_x( 'Search...', 'jointswp' ) */ ?>" value="<?php /*echo get_search_query() */ ?>" name="s" title="<?php /*echo esc_attr_x( 'Search for:', 'jointswp' ) */ ?>" />

                            <input type="submit" class="header-search-submit button" value="" />
                        </form>-->
                        <a href="<?php the_field('facebook', 'option') ?>" target="_blank"
                           class="social-icon facebook"></a>
                        <a href="<?php the_field('linkedin', 'option') ?>" target="_blank"
                           class="social-icon linkedin"></a>
                        <a href="<?php the_field('twitter', 'option') ?>" target="_blank"
                           class="social-icon twitter"></a>
                    </div>
                    <div class="cell shrink hide-above-portrait tablet-menu-container">
                        <span class="tablet-menu-button" data-toggle="off-canvas">MENU</span>
                    </div>

                </div>
            </div>


            <?php if ($isDesktop): ?>
                <div id="header-waypoint"></div>
                <div id="header-nav" class="show-above-portrait">
                    <!-- This navs will be applied to the topbar, above all content
                         To see additional nav styles, visit the /parts directory -->
                    <?php get_template_part('parts/nav', 'offcanvas-topbar'); ?>
                </div>
            <?php endif; ?>
            <div id="mobile-header-nav" class="mobile-show-on-portrait show-on-narrow">
                <div class="grid-x">
                    <div class="cell shrink">
                        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                                         class="logo"></a>
                    </div>
                    <div class="cell auto"></div>
                    <div class="cell shrink tablet-menu-container">
                        <span class="tablet-menu-button" data-toggle="off-canvas">MENU</span>
                    </div>
                </div>

            </div>
        </header> <!-- end .header -->