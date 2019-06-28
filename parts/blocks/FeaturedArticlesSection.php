<?php $heading = get_field('heading'); ?>


<div class="grid-container featured-articles">
    <div class="heading text-center semi-bold">
        <h2><?php echo $heading; ?></h2>
    </div>
    <?php if (have_rows('articles')) : ?>
        <div class="grid-x">
            <?php $x = 1; ?>
            <?php while (have_rows('articles')) : the_row(); ?>
                <div class="large-3 medium-6 small-12 cell cell-number-<?php echo $x; ?>">
                    <?php $article = get_sub_field('article'); ?>
                    <a href="<?php echo $article; ?>" class="featured-article light-green-background">
                        <?php $image = get_sub_field('image'); ?>
                        <div class="featured-icon" style="background-image: url(<?php echo $image['url'] ?>)"></div>
                        <div class="feature-text">
                            <div class="feature-heading text-center fontsize-34 lineheight-11 semi-bold">
                                <?php $aheading = get_sub_field('heading'); ?>
                                <?php echo $aheading; ?>
                            </div>
                            <hr>
                            <div class="feature-description text-center semi-bold fontsize-20 lineheight-12">
                                <?php $description = get_sub_field('description'); ?>
                                <?php echo $description; ?>
                            </div>
                        </div>
                        <div class="read-more">
                            <hr>
                            Read More
                        </div>
                    </a>
                </div>
                <?php $x++; ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>
