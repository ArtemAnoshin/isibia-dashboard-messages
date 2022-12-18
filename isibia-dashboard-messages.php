<?php
/*
  Plugin Name: Isibia Dashboard Messages
  Description: Free Isibia plugin.
  Version: 1.0
  Author: Artem Anoshin <artem.anoshin@gmail.com>
  Text Domain: isibia-dashboard-messages
*/

use IsibiaDashboardMessages\Core\Plugin;

require_once 'vendor/autoload.php';

$plugin = new Plugin();
$plugin->launch();

//add_action('admin_bar_menu', 'wp_kama_admin_bar_menu_action');
//
///**
// * Function for `admin_bar_menu` action-hook.
// *
// * @param WP_Admin_Bar $wp_admin_bar The WP_Admin_Bar instance, passed by reference.
// *
// * @return void
// */
//function wp_kama_admin_bar_menu_action( $wp_admin_bar )
//{
//    print_r($wp_admin_bar);
//    // action...
//}