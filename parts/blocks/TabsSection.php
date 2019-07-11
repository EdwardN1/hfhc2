<?php global $isDesktop; ?>
<?php if (have_rows('tabs')) : ?>
    <?php $tabID = 'tabID' . uniqid(); ?>

    <?php if ($isDesktop): ?>
        <div class="tabs-section show-for-large">
            <div class="grid-x tab-layout">
                <div class="cell large-3">
                    <ul class="vertical tabs" data-tabs id="<?php echo $tabID . '-tabs'; ?>">
                        <?php $tabCountTab = 1; ?>
                        <?php $activeTab = ' is-active'; ?>
                        <?php while (have_rows('tabs')) : the_row(); ?>
                            <?php $heading = get_sub_field('heading'); ?>
                            <li class="tabs-title<?php echo $activeTab; ?>"><a
                                        href="#panel-<?php echo $tabID; ?>-<?php echo $tabCountTab; ?>"
                                        aria-selected="true"><span class="big-right-arrow"></span><span class="heading-text"><?php echo $heading; ?></span></a></li>
                            <?php $tabCountTab++; ?>
                            <?php $activeTab = ''; ?>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <div class="cell large-9">
                    <div class="tabs-content" data-tabs-content="<?php echo $tabID . '-tabs'; ?>">
                        <?php $tabCountPanel = 1; ?>
                        <?php $activePanel = ' is-active'; ?>
                        <?php while (have_rows('tabs')) : the_row(); ?>
                            <?php $content = get_sub_field('content'); ?>
                            <div class="tabs-panel<?php echo $activePanel; ?>"
                                 id="panel-<?php echo $tabID; ?>-<?php echo $tabCountPanel; ?>">
                                <?php echo $content; ?>
                            </div>
                            <?php $activePanel = ''; ?>
                            <?php $tabCountPanel++; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="accordion-section hide-for-large">
    <ul class="accordion" data-accordion data-allow-all-closed="true">
        <?php
        $accordionActiveTab = ' is-active';
        $colorCount = 1;
        ?>
        <?php while (have_rows('tabs')) : the_row(); ?>
            <?php $heading = get_sub_field('heading'); ?>
            <?php $content = get_sub_field('content'); ?>
            <li class="accordion-item colour-<?php echo $colorCount;?><?php echo $accordionActiveTab;?>" data-accordion-item>
                <a href="#" class="accordion-title">
                    <?php echo $heading;?>
                </a>
                <div class="accordion-content" data-tab-content>
                    <?php echo $content; ?>
                </div>
            </li>
            <?php
            $accordionActiveTab = '';
            $colorCount++;
            if($colorCount==5) {$colorCount=1;}
            ?>
        <?php endwhile; ?>
    </ul>
    </div>
<?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>