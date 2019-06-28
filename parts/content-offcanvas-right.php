<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right" id="off-canvas-right" data-off-canvas>
    <div>
        <a data-toggle="off-canvas-right" class="fi-arrow-right large">Close >>></a>
    </div>
    <h3><a href="/jobs/">Jobs at HFHC</a></h3>
	<?php joints_right_off_canvas_nav(); ?>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>

</div>
