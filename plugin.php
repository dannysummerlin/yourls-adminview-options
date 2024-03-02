<?php
/*
Plugin Name: Admin View Options
Plugin URI: http://summerlin.co/
Description: Customize the admin view
Version: 0.1
Author: Danny Summerlin
Author URI: http://summerlin.co/
*/

// going to be adding actual settings pages etc, just need this for today
yourls_add_filter( 'admin_view_per_page', 'avo_numberOfDisplayedLinks' );
function avo_numberOfDisplayedLinks() {
  return 100;
}
