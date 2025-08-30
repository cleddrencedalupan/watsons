<?php
/**
 * Plugin Name: Watsons
 * Description: A plugin for Watsons Brohub.
 * Version: 1.0
 * Author: Gemini
 */

// Add a simple [watsons] shortcode
function watsons_shortcode() {
    return 'Hello from Watsons!';
}
add_shortcode( 'watsons', 'watsons_shortcode' );
