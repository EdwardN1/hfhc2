<?php $background_colour = strtolower(get_field('background_colour')).'-background'; ?>
<?php $image = get_field('image'); ?>
<?php $imageURL = $image['url']; ?>
<?php $imageALT = $image['alt']; ?>
<?php $content = get_field('content'); ?>
<?php $image_position = get_field( 'image_position' ); ?>
<?php $demo_transparent_top = get_field( 'demo_transparent_top' ); ?>


<?php
$descriptionClass = 'description';
if($center_content) {
    $descriptionClass = 'float-center';
}
$debugClass = '';
if($demo_transparent_top) {
    $debugClass = ' debug_top_swoosh';
}

if($image_position=='Right'):?>

<div class="swoosh-section image-right<?php echo $debugClass; ?>">
    <div class="grid-x align-middle <?php echo $background_colour; ?>">
        <div class="large-6 medium-12 small-12 left">
            <div class="<?php echo $descriptionClass;?>">
                <?php echo $content; ?>
            </div>
        </div>
        <div class="large-6 medium-12 small-12 right">
            <div class="image" style="background-image: url(<?php echo $imageURL; ?>)"></div>
        </div>
    </div>
</div>

<?php else:?>

<div class="swoosh-section image-left<?php echo $debugClass; ?>">
    <div class="grid-x align-middle <?php echo $background_colour; ?>">
        <div class="large-6 medium-12 small-12 left">
            <div class="image" style="background-image: url(<?php echo $imageURL; ?>)"></div>
        </div>
        <div class="large-6 medium-12 small-12 right">
            <div class="<?php echo $descriptionClass;?>">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>