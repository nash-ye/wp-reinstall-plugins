<?php
/**
 * Plugin Name: Reinstall Plugins
 * Plugin URI: https://github.com/nash-ye/WP-Reinstall-Plugins
 * Description: A simple plugin to allow plugins re-installation.
 * Author: Nashwan Doaqan
 * Author URI: http://nashwan-d.com
 * Version: 0.1
 *
 * License: GPL3+
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 * Copyright (c) 2016 - 2017 Nashwan Doaqan.  All rights reserved.
 */

// Load the Reinstall_Plugins class.
require_once plugin_dir_path( __FILE__ ) . 'includes/class-reinstall-plugins.php';

// Instance the Reinstall_Plugins class.
add_action( 'plugins_loaded', array( 'Reinstall_Plugins', 'instance' ), 99 );
