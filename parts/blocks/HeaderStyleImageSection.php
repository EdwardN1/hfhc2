<?php $image = get_field('image'); ?>
<?php $imageURL = $image['url']; ?>
<?php $imageALT = $image['alt']; ?>
<?php $font_colour = get_field('font_colour'); ?>
<?php $shadow = get_field('shadow'); ?>

<?php
$fontClass = '';
if ($font_colour) {
    $fontClass = ' dark';
}

if ($shadow) {
    $fontClass .= ' shadow';
}
?>

<?php $heading = get_field('heading'); ?>
<?php $description = get_field('description'); ?>
<?php $add_link = get_field('add_link'); ?>
<?php $url = get_field('url'); ?>
<?php $navigation_target_id = '#' . get_field('navigation_target_id'); ?>
<?php $page_link = get_field('page_link'); ?>

<div class="heading-image<?php echo $fontClass; ?> hide-on-narrow mobile-hide-on-portrait"
     style="background-image: url(<?php echo $imageURL; ?>)">
    <div class="white-overlay">
        <div class="grid-container">

            <?php if (get_field('make_h1_heading') == 1) {
                ?>
                <h1><?php echo $heading; ?></h1>
                <?php
            } else {
                ?>
                <h2><?php echo $heading; ?></h2>
                <?php
            } ?>

            <p class="show-above-portrait"><?php echo $description; ?></p>
            <?php $link_text = get_field('link_text'); ?>
            <?php $link_type = get_field('link_type'); ?>
            <?php $add_link = get_field('add_link'); ?>
            <?php if ($add_link): ?>

                <?php $bdatamagellan = ''; ?>
                <?php
                $bLink = '';
                if ($link_type == 'Navigation Target') {
                    $bLink = $navigation_target_id;
                    $bdatamagellan = ' data-magellan';
                }
                if ($link_type == 'Url') {
                    $bLink = $url;
                }
                if ($link_type == 'Page/Post') {
                    $bLink = $page_link;
                }
                if ($bLink != '' || $bLink != '#') {
                    $buttonClass = ' reversed clear';
                    if ($font_colour) {
                        $buttonClass = ' reversed dark';
                    }
                    if (($link_type == 'Navigation Target')) {
                        $buttonClass .= ' direction-white-down';
                        if ($font_colour) {
                            $buttonClass .= ' direction-blue-down';
                        }
                    }
                    ?>
                    <p<?php echo $bdatamagellan; ?> data-offset="100"><a class="round-button<?php echo $buttonClass; ?>"
                                                                         href="<?php echo $bLink; ?>"><?php echo $link_text; ?></a>
                    </p>
                <?php }
            endif; ?>

        </div>
    </div>
    <?php if (have_rows('buttons')) : ?>
        <?php $button_count = 1 ?>
        <div class="buttons-container">
            <div class="grid-container">
                <div class="grid-x">
                    <?php while (have_rows('buttons')) : the_row(); ?>
                        <?php $datamagellan = ''; ?>
                        <?php $target = ''; ?>
                        <?php $link_type = get_sub_field('link_type'); ?>
                        <?php $navigation_target_id = '#' . get_sub_field('navigation_target_id'); ?>
                        <?php $button_text = get_sub_field('button_text'); ?>
                        <?php $url = get_sub_field('url'); ?>
                        <?php $pagepost = get_sub_field('pagepost'); ?>
                        <?php $icon = get_sub_field('icon'); ?>
                        <?php
                        $link = '';
                        $iconClass = '';
                        if ($icon == 'House') {
                            $iconClass = ' has-icon icon-House';
                        }
                        if ($icon == 'Money') {
                            $iconClass = ' has-icon icon-Money';
                        }
                        if ($icon == 'Stethoscope') {
                            $iconClass = ' has-icon icon-Stethoscope';
                        }
                        if ($icon == 'Magnifying Glass') {
                            $iconClass = ' has-icon icon-Magnifying-Glass';
                        }
                        if ($icon == 'Shield') {
                            $iconClass = ' has-icon icon-Shield';
                        }
	                    if ($icon == 'Person') {
		                    $iconClass = ' has-icon icon-Person';
	                    }
	                    if ($icon == 'People') {
		                    $iconClass = ' has-icon icon-People';
	                    }
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
                            <div class="cell auto">
                                <div class="nav-button colour-<?php echo $button_count . $datamagellan . $iconClass; ?>"<?php echo $datamagellan; ?>
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
    <?php else : ?>
        <?php // no rows found ?>
    <?php endif; ?>
</div>

<div class="mobile-heading-image show-on-narrow mobile-show-on-portrait">
    <div class="image" style="background-image: url(<?php echo $imageURL; ?>)">
        <div class="blue-swoosh">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blue-swoosh.png"/>
        </div>
    </div>
    <div class="content">
        <?php if (get_field('make_h1_heading') == 1) {
            ?>
            <h1><?php echo strip_tags($heading); ?></h1>
            <?php
        } else {
            ?>
            <h2><?php echo strip_tags($heading); ?></h2>
            <?php
        } ?>
    </div>
    <div class="link">
        <?php if ($add_link): ?>
            <?php $link_text = get_field('link_text'); ?>
            <?php $link_type = get_field('link_type'); ?>

            <?php $bdatamagellan = ''; ?>
	        <?php $bdirectiondown = ''; ?>
            <?php
            $bLink = '';
            if ($link_type == 'Navigation Target') {
                $navigation_target_id = '#' . get_field('navigation_target_id');
                $bLink = $navigation_target_id;
                $bdatamagellan = ' data-magellan';
                $bdirectiondown = ' direction-white-down';
            }
            if ($link_type == 'Url') {
                $bLink = $url;
            }
            if ($link_type == 'Page/Post') {
                $bLink = $page_link;
            }
            if ($bLink != '' || $bLink != '#') {
                if (($link_type == 'Navigation Target')) {
                    $buttonClass .= ' direction-white-down';
                    if ($font_colour) {
                        $buttonClass .= ' direction-blue-down';
                    }
                }
                ?>
                <div<?php echo $bdatamagellan; ?>><a href="<?php echo $bLink; ?>"
                                                     class="round-button reversed clear<?php echo $bdirectiondown;?>"><?php echo $link_text; ?></a>
                </div>
                <?php
            }
        endif; ?>
    </div>
    <div class="the-buttons">
        <?php $button_count=1; ?>
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

                <div class="mobile-nav-button colour-<?php echo $button_count . $datamagellan; ?>"<?php echo $datamagellan; ?>>
                    <a href="<?php echo $link; ?>"<?php echo $target; ?> class="white"><?php echo $button_text; ?></a>
                </div>

            <?php } ?>

            <?php $button_count++; ?>
        <?php endwhile; ?>
    </div>
</div>