<?php
/**
 * Created by PhpStorm.
 * User: Edward Nickerson
 * Date: 16/12/2018
 * Time: 06:41
 */

add_filter( 'block_categories', function( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'sayhelloblocks',
				'title' => __( 'Say Hello Blocks', 'sayhelloblocks' ),
			),
		)
	);
}, 10, 2 );


// Update CSS within in Admin
function admin_style() {
	$version=filemtime(get_template_directory().'/assets/styles/style.css');
	wp_enqueue_style('admin-styles', get_template_directory_uri().'/assets/styles/admin.css?v='.$version);
}
add_action('admin_enqueue_scripts', 'admin_style');

add_action( 'acf/init', 'sh_home_page_header' );

function sh_home_page_header() {
	if ( ! function_exists( 'acf_register_block' ) ) {
		return;
	}
	acf_register_block( array(
		'name'            => 'HomePageHeader',
		'title'           => __( 'Homepage Header Block' ),
		'description'     => __( 'Homepage Header Block' ),
		'render_callback' => 'sh_home_page_header_rc',
		'category'        => 'sayhelloblocks',
		'icon'            => 'tagcloud',
		'mode'            => 'preview',
		'supports'        => array( 'align' => false, 'multiple' => false, ),
		'keywords'        => array( 'Header', 'Common' ),
	) );
}

function sh_home_page_header_rc( $block, $content = '', $is_preview = false ) {
	if ($is_preview) {
		include_once get_template_directory().'/parts/editor-styles.php';
	}
	include get_template_directory() . '/parts/homepage-header-block.php';
}

add_action( 'acf/init', 'sh_discover_how' );

function sh_discover_how() {
	if ( ! function_exists( 'acf_register_block' ) ) {
		return;
	}
	acf_register_block( array(
		'name'            => 'DiscoverHow',
		'title'           => __( 'Discover How Block' ),
		'description'     => __( 'Discover How Block' ),
		'render_callback' => 'sh_discover_how_rc',
		'category'        => 'sayhelloblocks',
		'icon'            => 'tagcloud',
		'mode'            => 'preview',
		'supports'        => array( 'align' => false, 'multiple' => true, ),
		'keywords'        => array( 'Row', 'Common' ),
	) );
}

function sh_discover_how_rc( $block, $content = '', $is_preview = false ) {
	if ($is_preview) {
		include_once get_template_directory().'parts/editor-styles.php';
	}
	include get_template_directory() . '/parts/discover-how-block.php';
}

add_action( 'acf/init', 'acfgbc_SayHelloEventsBlock' );
function acfgbc_SayHelloEventsBlock() {
	if ( ! function_exists( 'acf_register_block' ) ) {
		return;
	}
	acf_register_block( array(
		'name'            => 'acfgbcSayHelloEventsBlock',
		'title'           => __( 'Say Hello Events Block' ),
		'description'     => __( 'Say Hello Events Block' ),
		'render_callback' => 'acfgbc_SayHelloEventsBlock_rc',
		'category'        => 'sayhelloblocks',
		'icon'            => 'tagcloud',
		'mode'            => 'preview',
		'supports'        => array( 'align' => false, 'multiple' => true, ),
		'keywords'        => array( 'Row', 'Common' ),
	) );
}
function acfgbc_SayHelloEventsBlock_rc( $block, $content = '', $is_preview = false ) {
	if ($is_preview) {
		include_once get_template_directory().'/parts/editor-styles.php';
	}
	include get_template_directory() . '/parts/SayHelloEventsBlock.php';
}