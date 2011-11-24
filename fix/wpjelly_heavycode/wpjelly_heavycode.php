<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/*
Plugin Name: WPJELLY-PLUGIN-HEAVYCODE
Plugin URI: http://greative.jp/
Description: "入力システム用プラグイン：HEAVYCODE"
Author: Kazuhiro Hara
Version: 0.1
Author URI: http://greative.jp/
*/

function wpjelly_plugin_shortcode_p($atts, $content = null) {
    //挿入その1
    $content = '<div style="background-color:#f00;"><p>' . $content . '</p></div>';
    return $content;
}

//挿入その2
add_shortcode('heavycode_p','wpjelly_plugin_shortcode_p');


function wpjelly_plugin_shortcode_div($atts, $content = null) {
    //挿入その3
    extract( shortcode_atts( array(
        'style' => 'caption',
    ), $atts ) );
    $content = '<div style="' . $style . '"><p>' . $content . '</p></div>';
    return $content;
}

//挿入その4
add_shortcode('heavycode_div','wpjelly_plugin_shortcode_div');




?>