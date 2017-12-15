<?php
/*
Plugin Name: Google Admin Menu
Description: This plugin adds google site tools to the wordpress admin menu
Version: 0.1
Author: @justyy
Author URI: https://steemit.com/@justyy
Plugin URI: 
License: Free
Text Domain: google-admin-menu
*/

function helloacm_add_top_admin_bar_links() {
  global $wp_admin_bar;
  // Top node
  $wp_admin_bar->add_menu(
    array(
      'id' => 'helloacm_add_top_admin_bar_links',
      'title' => 'Links',
      'href' => '#'      
    )
  );
  // Sub menus
  $links = array(
    array(
      'id' => 'helloacm_add_top_admin_bar_google_analytics',
      'title' => 'Google Analytics',
      'href' => 'http://google.com/analytics',
      'parent' => 'helloacm_add_top_admin_bar_links',
      'meta' => array(
        'target' => '_blank'
      )
    ),
    array(
      'id' => 'helloacm_add_top_admin_bar_google_adsense',
      'title' => 'Google Adsense',
      'href' => 'http://google.com/adsense',
      'parent' => 'helloacm_add_top_admin_bar_links',
      'meta' => array(
        'target' => '_blank'
      )
    ),  
    array(
      'id' => 'helloacm_add_top_admin_bar_bing_webmaster',
      'title' => 'Bing Webmaster',
      'href' => 'http://www.bing.com/toolbox/webmaster',
      'parent' => 'helloacm_add_top_admin_bar_links',
      'meta' => array(
        'target' => '_blank'
      )
    ),       
    array(
      'id' => 'helloacm_add_top_admin_bar_google_webmaster',
      'title' => 'Google Webmaster',
      'href' => 'http://google.com/webmaster',
      'parent' => 'helloacm_add_top_admin_bar_links',
      'meta' => array(
        'target' => '_blank'
      )
    )
  );
  foreach ($links as $link) {
    $wp_admin_bar->add_menu($link);
  }
}
add_action('wp_before_admin_bar_render', 'helloacm_add_top_admin_bar_links');
