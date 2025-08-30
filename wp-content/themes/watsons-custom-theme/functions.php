<?php
function watsons_theme_support() {
    // Add support for featured images
    add_theme_support( 'post-thumbnails' );
    // Add support for custom headers
    add_theme_support( 'custom-header' );
}
add_action( 'after_setup_theme', 'watsons_theme_support' );

function add_page_attributes_meta_box() {
    add_meta_box(
        'pageparentdiv',
        'Page Attributes',
        'page_attributes_meta_box',
        'page',
        'side',
        'core'
    );
}
add_action( 'add_meta_boxes', 'add_page_attributes_meta_box' );

function disable_block_editor_for_pages( $use_block_editor, $post_type ) {
    if ( 'page' === $post_type ) {
        return false;
    }
    return $use_block_editor;
}
add_filter( 'use_block_editor_for_post_type', 'disable_block_editor_for_pages', 10, 2 );

function watsons_theme_scripts() {
    wp_enqueue_style( 'watsons-style', get_stylesheet_uri() );
    wp_enqueue_script( 'custom-home', get_template_directory_uri() . '/custom-home.js', array(), '1.0', true );

    $pages_data = array();
    $pages = get_pages(array(
        'sort_column' => 'menu_order',
        'sort_order' => 'ASC'
    ));

    foreach ($pages as $page) {
        $pages_data[] = array(
            'id' => $page->ID,
            'title' => $page->post_title,
            'content' => apply_filters('the_content', $page->post_content),
            'featured_image_url' => get_the_post_thumbnail_url($page->ID, 'full')
        );
    }

    wp_localize_script('custom-home', 'pageData', $pages_data);
}
add_action( 'wp_enqueue_scripts', 'watsons_theme_scripts' );
?>