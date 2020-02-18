<?php
/**
 * Plugin Name: Jetpack's Mobile Theme
 * Plugin URI: https://jetpack.com
 * Description: Automatically optimize your site for mobile with Jetpack's Mobile Theme.
 * Author: Automattic
 * Version: 1.0.0
 * Author URI: https://jetpack.com
 * License: GPL2+
 * Text Domain: minileven
 * Domain Path: /languages/
 *
 * @package Minileven
 *
 * Credits
 * -------
 * This plugin is based off Jetpack's Mobile Theme feature.
 * The feature was removed from Jetpack in version 8.3.
 *
 * Jetpack's Mobile Theme was originally based off WordPress Mobile Edition, a plugin by Alex King.
 * Copyright (c) 2002-2008 Alex King
 * http://alexking.org/projects/wordpress
 *
 * Released under the GPL license
 * https://www.opensource.org/licenses/gpl-license.php
 *
 * **********************************************************************
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * *****************************************************************
 */

namespace Minileven;

/**
 * Load plugin files.
 *
 * We only want to load this plugin if:
 * 1. You use the Jetpack plugin.
 * 2. You do not already use Jetpack's Minileven feature.
 */
function load_plugin() {
	if (
		! class_exists( 'Jetpack' )
		|| \Jetpack::is_module_active( 'minileven' )
	) {
		return;
	}

	// Load plugin.
	require_once plugin_dir_path( __FILE__ ) . 'src/minileven.php';
}
add_action( 'plugins_loaded', __NAMESPACE__ . '\load_plugin' );
