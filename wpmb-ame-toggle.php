<?php
/**
 * Plugin Name: WPMB AME Toggle
 * Plugin URI: https://wpmasterbuilder.com
 * Description: A simple plugin to create menu toggles with Admin Menu Editor.
 * Version: 1.0.6
 * Author: Josh Robbs
 * Author URI: https://wpmasterbuilder.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wpmb-ame-toggle
 *
 * @package WPMB_AME_Toggle
 */

namespace WPMB_AME_Toggle;

use WPMB_AME_Toggle\classes\Admin_Menu_Style;

defined( 'ABSPATH' ) || exit;

// Constants.
define( 'WPMB_AME_TOGGLE_URL', plugin_dir_url( __FILE__ ) );
define( 'WPMB_AME_TOGGLE_PATH', plugin_dir_path( __FILE__ ) );

new Admin_Menu_Style();
