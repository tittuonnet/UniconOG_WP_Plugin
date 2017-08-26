<?php
/* Register Admin Menu */
add_action('admin_menu', 'unicon_og_menu');

function unicon_og_menu() {
  // add_menu_page(Page Title, Menu Title, Capabilities, slug, call back function,icon);
	add_menu_page('Unicon OG Settings', 'Open Graph Snippets', 'administrator', 'unicon-og-dashboard', 'unicon_og_dashboard_page','dashicons-thumbs-up');
  // add_submenu_page(Parent slug, Page title, Menu Title, Capabilities, slug, call back function);
  add_submenu_page( 'unicon-og-dashboard', 'Unicon OG Settings', "Dashboard", "administrator", "unicon-og-dashboard", 'unicon_og_dashboard_page');
  add_submenu_page( 'unicon-og-dashboard', 'Unicon OG Settings', "Settings", "administrator", "unicon-og-settings", 'unicon_og_dashboard_settings');
}
