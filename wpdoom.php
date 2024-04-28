<?php
/**
 * Plugin Name: WP Doom
 * Description: WordPress, running Doom.
 * Plugin URI: 
 * Author: Dwi'n Rhys
 * Author URI: https://dwinrhys.com/?utm_source=author-link&utm_medium=plugin&utm_campaign=freelance-availability-widget
 * Version: 1.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: freelanceavailabilitywidget
 * Domain Path: Domain Path
 * Network: false
 */


defined( 'ABSPATH' ) or exit;

define('WPDOOM_PLUGIN_VERSION', '1.0');
define('WPDOOM_PLUGIN_PATH',dirname(__FILE__));
define('WPDOOM_PLUGIN_URL',plugins_url('', __FILE__));

require_once WPDOOM_PLUGIN_PATH . '/inc/core.php';