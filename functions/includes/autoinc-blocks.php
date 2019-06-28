<?php
/**
 * Created by PhpStorm.
 * User: Edward Nickerson
 * Date: 23/01/2019
 * Time: 10:19
 */

//error_log('loaded');

add_filter( 'block_categories', function( $categories, $post ) {
	//error_log('Block Cats Loading');
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'hfhcblocks',
				'title' => __( 'HFHC Blocks', 'hfhcblocks' ),
			),
		)
	);
}, 10, 2 );
// Update CSS within in Admin
function admin_style() {
	$version=filemtime(get_template_directory().'/assets/styles/style.css');
	wp_enqueue_style('hfhc-admin-styles', get_template_directory_uri().'/assets/styles/admin.css?v='.$version);
}
add_action('admin_enqueue_scripts', 'admin_style');

add_action( 'acf/init', 'acfgbc_StandardContent' );
function acfgbc_StandardContent() {
	if ( ! function_exists( 'acf_register_block' ) ) {
		return;
	}
	acf_register_block( array(
		'name'            => 'acfgbcStandardContent',
		'title'           => __( 'Standard Content' ),
		'description'     => __( 'Standard Content' ),
		'render_callback' => 'acfgbc_StandardContent_rc',
		'category'        => 'hfhcblocks',
		'icon'            => 'format-aside',
		'mode'            => 'edit',
		'supports'        => array( 'align' => false, 'multiple' => true, ),
		'keywords'        => array( 'Row', 'Common' ),
	) );
}
function acfgbc_StandardContent_rc( $block, $content = '', $is_preview = false ) {
	if ($is_preview) {
		include_once get_template_directory().'/parts/blocks/editor/styles.php';
	}
	include get_template_directory(). '/parts/blocks/StandardContent.php';
}
add_action( 'acf/init', 'acfgbc_HeroSections' );
function acfgbc_HeroSections() {
	if ( ! function_exists( 'acf_register_block' ) ) {
		return;
	}
	acf_register_block( array(
		'name'            => 'acfgbcHeroSections',
		'title'           => __( 'Hero Sections' ),
		'description'     => __( 'Hero Sections' ),
		'render_callback' => 'acfgbc_HeroSections_rc',
		'category'        => 'hfhcblocks',
		'icon'            => 'money',
		'mode'            => 'preview',
		'supports'        => array( 'align' => false, 'multiple' => true, ),
		'keywords'        => array( 'Row', 'Common' ),
	) );
}
function acfgbc_HeroSections_rc( $block, $content = '', $is_preview = false ) {
	if ($is_preview) {
		include_once get_template_directory().'/parts/blocks/editor/styles.php';
	}
	include get_template_directory(). '/parts/blocks/HeroSections.php';
}

add_action( 'acf/init', 'acfgbc_CarouselSection' );
function acfgbc_CarouselSection() {
    if ( ! function_exists( 'acf_register_block' ) ) {
        return;
    }
    acf_register_block( array(
        'name'            => 'acfgbcCarouselSection',
        'title'           => __( 'Carousel Section' ),
        'description'     => __( 'Carousel Section' ),
        'render_callback' => 'acfgbc_CarouselSection_rc',
        'category'        => 'hfhcblocks',
        'icon'            => 'leftright',
        'mode'            => 'preview',
        'supports'        => array( 'align' => false, 'multiple' => true, ),
        'keywords'        => array( 'Row', 'Common' ),
    ) );
}
function acfgbc_CarouselSection_rc( $block, $content = '', $is_preview = false )
{
    if ($is_preview) {
        include_once get_template_directory() . '/parts/blocks/editor/styles.php';
    }
    include get_template_directory() . '/parts/blocks/CarouselSection.php';
}

add_action( 'acf/init', 'acfgbc_FeaturedArticlesSection' );
function acfgbc_FeaturedArticlesSection() {
    if ( ! function_exists( 'acf_register_block' ) ) {
        return;
    }
    acf_register_block( array(
        'name'            => 'acfgbcFeaturedArticlesSection',
        'title'           => __( 'Featured Articles Section' ),
        'description'     => __( 'Featured Articles Section' ),
        'render_callback' => 'acfgbc_FeaturedArticlesSection_rc',
        'category'        => 'hfhcblocks',
        'icon'            => 'id',
        'mode'            => 'preview',
        'supports'        => array( 'align' => false, 'multiple' => true, ),
        'keywords'        => array( 'Row', 'Common' ),
    ) );
}
function acfgbc_FeaturedArticlesSection_rc( $block, $content = '', $is_preview = false ) {
    if ($is_preview) {
        include_once get_template_directory().'/parts/blocks/editor/styles.php';
    }
    include get_template_directory(). '/parts/blocks/FeaturedArticlesSection.php';
}

add_action( 'acf/init', 'acfgbc_HeaderStyleImageSection' );
function acfgbc_HeaderStyleImageSection() {
    if ( ! function_exists( 'acf_register_block' ) ) {
        return;
    }
    acf_register_block( array(
        'name'            => 'acfgbcHeaderStyleImageSection',
        'title'           => __( 'Header Style Image Section' ),
        'description'     => __( 'Header Style Image Section' ),
        'render_callback' => 'acfgbc_HeaderStyleImageSection_rc',
        'category'        => 'hfhcblocks',
        'icon'            => 'format-image',
        'mode'            => 'preview',
        'supports'        => array( 'align' => false, 'multiple' => true, ),
        'keywords'        => array( 'Row', 'Common' ),
    ) );
}
function acfgbc_HeaderStyleImageSection_rc( $block, $content = '', $is_preview = false ) {
    if ($is_preview) {
        include_once get_template_directory().'/parts/blocks/editor/styles.php';
    }
    include get_template_directory(). '/parts/blocks/HeaderStyleImageSection.php';
}

add_action( 'acf/init', 'acfgbc_JobBlock' );
function acfgbc_JobBlock() {
    if ( ! function_exists( 'acf_register_block' ) ) {
        return;
    }
    acf_register_block( array(
        'name'            => 'acfgbcJobBlock',
        'title'           => __( 'Job Block' ),
        'description'     => __( 'Job Block' ),
        'render_callback' => 'acfgbc_JobBlock_rc',
        'category'        => 'hfhcblocks',
        'icon'            => 'groups',
        'mode'            => 'preview',
        'supports'        => array( 'align' => false, 'multiple' => true, ),
        'keywords'        => array( 'Row', 'Common' ),
    ) );
}
function acfgbc_JobBlock_rc( $block, $content = '', $is_preview = false ) {
    if ($is_preview) {
        include_once get_template_directory().'/parts/blocks/editor/styles.php';
    }
    include get_template_directory(). '/parts/blocks/JobBlock.php';
}
add_action( 'acf/init', 'acfgbc_SwooshSection' );
function acfgbc_SwooshSection() {
    if ( ! function_exists( 'acf_register_block' ) ) {
        return;
    }
    acf_register_block( array(
        'name'            => 'acfgbcSwooshSection',
        'title'           => __( 'Swoosh Section' ),
        'description'     => __( 'Swoosh Section' ),
        'render_callback' => 'acfgbc_SwooshSection_rc',
        'category'        => 'hfhcblocks',
        'icon'            => 'tide',
        'mode'            => 'preview',
        'supports'        => array( 'align' => false, 'multiple' => true, ),
        'keywords'        => array( 'Row', 'Common' ),
    ) );
}
function acfgbc_SwooshSection_rc( $block, $content = '', $is_preview = false ) {
    if ($is_preview) {
        include_once get_template_directory().'/parts/blocks/editor/styles.php';
    }
    include get_template_directory(). '/parts/blocks/SwooshSection.php';
}
add_action( 'acf/init', 'acfgbc_CTASection' );
function acfgbc_CTASection() {
    if ( ! function_exists( 'acf_register_block' ) ) {
        return;
    }
    acf_register_block( array(
        'name'            => 'acfgbcCTASection',
        'title'           => __( 'CTA Section' ),
        'description'     => __( 'CTA Section' ),
        'render_callback' => 'acfgbc_CTASection_rc',
        'category'        => 'hfhcblocks',
        'icon'            => 'universal-access-alt',
        'mode'            => 'preview',
        'supports'        => array( 'align' => false, 'multiple' => true, ),
        'keywords'        => array( 'Row', 'Common' ),
    ) );
}
function acfgbc_CTASection_rc( $block, $content = '', $is_preview = false ) {
    if ($is_preview) {
        include_once get_template_directory().'/parts/blocks/editor/styles.php';
    }
    include get_template_directory(). '/parts/blocks/CTASection.php';
}
add_action( 'acf/init', 'acfgbc_NavigationTarget' );
function acfgbc_NavigationTarget() {
    if ( ! function_exists( 'acf_register_block' ) ) {
        return;
    }
    acf_register_block( array(
        'name'            => 'acfgbcNavigationTarget',
        'title'           => __( 'Navigation Target' ),
        'description'     => __( 'Navigation Target' ),
        'render_callback' => 'acfgbc_NavigationTarget_rc',
        'category'        => 'hfhcblocks',
        'icon'            => 'admin-post',
        'mode'            => 'edit',
        'supports'        => array( 'align' => false, 'multiple' => true, ),
        'keywords'        => array( 'Row', 'Common' ),
    ) );
}
function acfgbc_NavigationTarget_rc( $block, $content = '', $is_preview = false ) {
    if ($is_preview) {
        include_once get_template_directory().'/parts/blocks/editor/styles.php';
    }
    include get_template_directory(). '/parts/blocks/NavigationTarget.php';
}
add_action( 'acf/init', 'acfgbc_TwoColumnRow' );
function acfgbc_TwoColumnRow() {
    if ( ! function_exists( 'acf_register_block' ) ) {
        return;
    }
    acf_register_block( array(
        'name'            => 'acfgbcTwoColumnRow',
        'title'           => __( 'Two Column Row' ),
        'description'     => __( 'Two Column Row' ),
        'render_callback' => 'acfgbc_TwoColumnRow_rc',
        'category'        => 'hfhcblocks',
        'icon'            => 'grid-view',
        'mode'            => 'preview',
        'supports'        => array( 'align' => false, 'multiple' => true, ),
        'keywords'        => array( 'Row', 'Common' ),
    ) );
}
function acfgbc_TwoColumnRow_rc( $block, $content = '', $is_preview = false ) {
    if ($is_preview) {
        include_once get_template_directory().'/parts/blocks/editor/styles.php';
    }
    include get_template_directory(). '/parts/blocks/TwoColumnRow.php';
}