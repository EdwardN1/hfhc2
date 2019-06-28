<?php $heading = get_field('heading'); ?>
<?php $description = get_field('description'); ?>
<div class="carousel-section">
    <div class="grid-container">
        <div class="header">
            <h2 class="text-center"><?php echo $heading; ?></h2>
            <div class="description text-center"><?php echo $description; ?></div>
        </div>
        <?php if (have_rows('slides')) : ?>
            <?php
            $response = '"responsive":[';
            $response .= '{"breakpoint":1400,"settings":{"slidesToShow":4}},';
            $response .= '{"breakpoint":1260,"settings":{"slidesToShow":3}},';
            $response .= '{"breakpoint":1024,"settings":{"slidesToShow":2.5,"slidesToScroll":2.5,"dots":false}},';
            $response .= '{"breakpoint":800,"settings":{"slidesToShow":2,"slidesToScroll":2,"dots":false}},';
            $response .= '{"breakpoint":640,"settings":{"slidesToShow":1.5,"slidesToScroll":1.5,"dots":false}},';
            $response .= '{"breakpoint":520,"settings":{"slidesToShow":1,"slidesToScroll":1,"dots":false}}';
            /*$response .= '{"breakpoint":380,"settings":{"slidesToShow":0.75,"slidesToScroll":0.75,"dots":false}}';*/
            $response .= ']';
            ?>
            <div class="carousel-frame">
                <div class="carousel-slider" data-slick-slider
                     data-slick='{"dots": true, "slidesToShow":4, "slidesToScroll":4, "infinite":true, <?php echo $response; ?>}'>
                    <?php while (have_rows('slides')) : the_row(); ?>
                        <div class="slide">
                            <?php $image = get_sub_field('image'); ?>
                            <?php $imageURL = $image['url']; ?>
                            <?php $imageALT = $image['alt']; ?>
                            <?php $heading = get_sub_field('heading'); ?>
                            <?php $description = get_sub_field('description'); ?>
                            <?php $link = get_sub_field('link'); ?>
                            <div class="image text-center"
                                 style="background: url(<?php echo $imageURL; ?>) no-repeat; background-size: cover;">
                                <a class="slide-link" href="<?php echo $link; ?>">
                                    <div class="fontsize-28 white lineheight-12 pad-bottom-30 pad-top-70"><?php echo $heading; ?></div>
                                    <div class="fontsize-24 white lineheight-12"><?php echo $description; ?></div>
                                </a>
                            </div>
                            <div class="title fontsize-26 semi-bold text-center">
                                <a href="<?php echo $link; ?>"><?php echo $heading; ?></a>
                            </div>


                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>