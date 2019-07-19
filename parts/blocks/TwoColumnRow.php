<?php $image = get_field('image'); ?>
<?php $imageURL = $image['url']; ?>
<?php $imageALT = $image['alt']; ?>
<?php $content = get_field('content'); ?>
<?php $decoration_colour = strtolower(get_field('decoration_colour')) . '-decoration'; ?>
<?php $image_aligned = get_field('image_aligned'); ?>

<div class="two-column-row <?php echo $decoration_colour; ?>">
    <div class="grid-x">
        <?php if ($image_aligned == 'Right'): ?>
            <div class="large-7 medium-7 small-12 image-right">
                <div class="content-container">
                    <?php echo $content; ?>
                </div>
            </div>
            <div class="large-5 medium-5 small-12 image-right">
                <div class="decorated float-right">
                    <img src="<?php echo $imageURL; ?>" alt="<?php echo $imageALT; ?>"/>
                </div>
            </div>
        <?php else: ?>
            <div class="large-5 medium-5 small-12 image-left">
                <div class="decorated float-left">
                    <img src="<?php echo $imageURL; ?>" alt="<?php echo $imageALT; ?>"/>
                </div>
            </div>
            <div class="large-7 medium-7 small-12 image-left">
                <div class="content-container">
                    <?php echo $content; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
