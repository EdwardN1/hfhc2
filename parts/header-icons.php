<div class="grid-x header-icons">
    <div class="cell auto"></div>
    <div class="large-shrink medium-4 small-4 cell pad-right-10 pad-top-9">
        <!--<div class="text-center"><a href="<?php /*the_field('request_a_call_back','option');*/?>"><img
                        src="<?php /*echo get_template_directory_uri(); */?>/assets/images/Request-a-Call-Icon.png"></a>
        </div>
        <div class="fontsize-xlarge-17 fontsize-medium-14 fontsize-small-14 text-center"><a href="<?php /*the_field('request_a_call_back','option');*/?>" class="white">Request a call</a></div>-->
        <a href="<?php the_field('request_a_call_back','option');?>" class="header-button">Request a call</a>
    </div>
    <div class="large-shrink medium-4 small-4 cell pad-right-10 pad-left-10 pad-top-9">
        <!--<div class="text-center"><a href="<?php /*the_field('vacancies','option');*/?>" class="white"><img
                        src="<?php /*echo get_template_directory_uri(); */?>/assets/images/Vacancies-Icon.png"></a>
        </div>
        <div class="fontsize-xlarge-17 fontsize-medium-14 fontsize-small-14 text-center"><a href="<?php /*the_field('vacancies','option');*/?>" class="white">Vacancies</a></div>-->
        <a href="<?php the_field('vacancies','option');?>" class="header-button">Vacancies</a>
    </div>
    <div class="large-shrink medium-4 small-4 cell pad-left-10 pad-top-9">
        <!--<a href="<?php /*echo get_permalink( get_option( 'page_for_posts' ) ); */?>" class="white fontsize-17"><div class="text-center"><img
                    src="<?php /*echo get_template_directory_uri(); */?>/assets/images/blog-icon-white.png">
            </div>
            <div class="fontsize-xlarge-17 fontsize-medium-14 fontsize-small-14 text-center">Blog</div></a>-->
        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="header-button">Blog</a>
    </div>
</div>