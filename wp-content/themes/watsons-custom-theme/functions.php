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
}
add_action( 'wp_enqueue_scripts', 'watsons_theme_scripts' );
?>