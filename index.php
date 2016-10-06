<?php
/*
Plugin Name: Nextgen Album Widget
Plugin URI: skulpturvej.dk
Description: Visning af et valgt albums gallerier i en sidebar widget
Version: 1.0.0
Author: Jacob Thygesen
Author URI: skulpturvej.dk
License: GPLv2
*/

// include() or require() any necessary files here...
include_once('includes/NextgenAlbumWidget.php');
include_once('includes/NextgenAlbum.php');
// Tie into WordPress Hooks and any functions that should run on load.
add_action('widgets_init', 'NextgenAlbumWidget::register_this_widget');

/* EOF */