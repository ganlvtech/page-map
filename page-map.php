<?php
/*
 * Plugin Name: Page Map
 * Plugin URI: https://github.com/ganlvtech/page-map
 * Description: A mini map for WordPress page.
 * Author: Ganlv
 * Author URI: https://github.com/ganlvtech
 * Version: 1.0
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 */

function page_map_enqueue_script() {
    wp_enqueue_script('page-map-lib', plugins_url('js/pagemap-0.4.0.min.js', __FILE__), array(), '0.4.0', true);
    wp_enqueue_script('page-map-script', plugins_url('js/script.js', __FILE__), array('page-map-lib'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'page_map_enqueue_script');
