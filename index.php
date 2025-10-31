<?php
/*
* Plugin Name: WordPress Video Popup Form 
* Plugin URI: http://localhost
* Description: This is a WordPress Popup Form with an video element for a specific client. The plugin is made with PHP, HTML, CSS and JS 
* Version: 5.7.7
* Author: Murat Kilic
* Author URI: http://localhost
* License: GPL2
*/
function video_popup_form(){
    $content = '';
    
    return $content;
}


function register_plugin_assets(){
    wp_enqueue_style('CustomStylesheet',plugins_url('video-popup-form/css/style.css'));
    /* wp_deregister_script('jquery');
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.1.1.min.js',array(),null,true); */
    wp_enqueue_script('CustomScript',plugins_url('video-popup-form/js/script.js'),array(),null,true);
}

add_shortcode('show_video_popup_form','video_popup_form');
add_action('wp_enqueue_scripts','register_plugin_assets');
