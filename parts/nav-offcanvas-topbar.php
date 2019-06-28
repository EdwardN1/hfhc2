<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>
<div class="grid-container">
    <div class="show-for-medium">
        <div class="grid-x">
            <div class="cell auto"></div>
            <div class="cell shrink"><?php joints_top_nav(); ?></div>
            <div class="cell auto"></div>
        </div>
    </div>
    <div class="show-for-small-only">
        <ul class="menu">
            <!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
            <li><a data-toggle="off-canvas" class="hamburger-icon">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                    <div class="bar4"></div>
                </a></li>
        </ul>
    </div>
</div>
