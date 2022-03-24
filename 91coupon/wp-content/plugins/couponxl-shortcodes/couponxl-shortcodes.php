<?php
/*
Plugin Name: CouponXL Shortcodes
Plugin URI: http://demo.powerthemes.club/themes/couponxl/
Description: Coupon XL all shortcodes
Version: 1.1
Author: pebas
Author URI: http://themeforest.net/user/pebas/
License: GNU General Public License version 3.0
*/

/*
Enqueue script and styles in the backend
*/
if ( ! function_exists( 'couponxl_shortcodes_admin_resources' ) ) {
	function couponxl_shortcodes_admin_resources() {
		if ( strpos( $_SERVER['REQUEST_URI'], 'widget' ) !== false ) {
			wp_enqueue_script( 'couponxl-shortcodes', plugins_url( 'js/shortcodes.js', __FILE__ ), false, false, true );
		}
		wp_enqueue_style( 'couponxl-shortcodes-style', plugins_url( 'css/admin.css', __FILE__ ) );
	}
}
add_action( 'admin_enqueue_scripts', 'couponxl_shortcodes_admin_resources' );

if ( is_admin() ) {
	require_once( plugin_dir_path( __FILE__ ) . 'includes/shortcodes.php' );
}
foreach ( glob( plugin_dir_path( __FILE__ ) . DIRECTORY_SEPARATOR . "includes" . DIRECTORY_SEPARATOR . "shortcodes" . DIRECTORY_SEPARATOR . "*.php" ) as $filename ) {
	require_once( plugin_dir_path( __FILE__ ) . 'includes/shortcodes/' . basename( $filename ) );
}
