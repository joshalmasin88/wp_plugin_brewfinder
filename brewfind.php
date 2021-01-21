<?php
/*
Plugin Name: BrewFinder
Plugin URI: https://www.Almasin.net/
Description: Find Breweries
Version: 1.0
Author: Joshua Almasin
Author URI: https://www.Almasin.net/
License: GPL2
*/

// Exit if accessed directly
if(!defined('ABSPATH')){
    exit;
}

require_once(plugin_dir_path(__FILE__). '/includes/brewfind-scripts.php');
require_once(plugin_dir_path(__FILE__). '/includes/Brew_Find.php');

function register_brewfind()
{
    register_widget('Brew_Find');
}

add_action('widgets_init', 'register_brewfind');