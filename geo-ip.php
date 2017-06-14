<?php
   /*
   Plugin Name: Geo IP
   Plugin URI: https://odd-one-out.serek.eu/amazon-ajax-javascript-link-localiser/
   Description: Gets the country code from visitors IP address using an AJAX call to freegeoip.net. Stores the data in a cookie that expires in 24 hours
   Version: 1.0
   Author: Poul Serek
   Author URI: https://odd-one-out.serek.eu
   License: GPL2
   */

function add_assets() {
	wp_register_script( 'geoip-script',  plugin_dir_url( __FILE__ ) . 'assets/geoip.js' );
        wp_enqueue_script('geoip-script');
}
add_action('wp_enqueue_scripts', 'add_assets');

function wpse_4367231_wp_head(){
    ?>
        <link rel="preconnect" href="//freegeoip.net">
    <?php
}
add_action('wp_head', 'wpse_4367231_wp_head', 0);
