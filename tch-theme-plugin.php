<?php
/**
 * Plugin Name: Theme Functions override Plugin
 * Plugin URI:
 * Description:
 * Version: 1.0
 * License: GPL v3
 * Text Domain: tch-theme-plugin
 * Domain Path: /languages/
 */


if( !defined( 'ABSPATH' ) ) exit; //Exit if accessed directly

define( 'TCH_THEME_PLUGIN_FILE', __FILE__ );
define( 'TCH_THEME_PLUGIN_PATH', dirname( TCH_THEME_PLUGIN_FILE ) );
define( 'TCH_THEME_PLUGIN_URL', plugin_dir_url( TCH_THEME_PLUGIN_FILE ) );
define( 'TCH_THEME_PLUGIN_VERSION', '1' );
define( 'TCH_THEME_PLUGIN_DB_VERSION', '1' );


require_once 'inc/functions.php';
require_once 'inc/helpers.php';

