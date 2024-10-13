<?php
/**
 * Class for the Admin Menu Style.
 * REQUIRES Admin Menu Editor plugin.
 *
 * @package WPMB_AME_Toggle
 */

namespace WPMB_AME_Toggle\classes;

defined( 'ABSPATH' ) || exit;

/**
 * Class for the Admin Menu Style.
 */
class Admin_Menu_Style {
	/*
		*** METHODS ***
	*/
	/**
	 * Constructor.
	 *
	 * @return void
	 */
	public function __construct() {
		\add_action( 'admin_head', array( $this, 'add_styles_to_head' ) );
		\add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_assets' ) );
	}

	/**
	 * Add the styles to the head.
	 *
	 * @return void
	 */
	public function add_styles_to_head() {
		/*
			There are no checks. If you put in an invalid color, it will do its
			best to apply that color.
		*/
		$header_bg     = '#002244';
		$header_text   = '#ffffff';
		$a_header_bg   = '#820000';
		$a_header_text = '#ffffff';

		$header_bg     = $header_bg ?? '#002244';
		$header_text   = $header_text ?? '#ffffff';
		$a_header_bg   = $a_header_bg ?? '#820000';
		$a_header_text = $a_header_text ?? '#ffffff';

		$style = <<<HTML
			<style id='admin-menu-styler'>
				#adminmenu li[class*="-menu-section-header"] {
					background-color: {$header_bg};
					color: {$header_text};
				}
		
				#adminmenu li[class*="-menu-section-header"] > a.menu-top:focus,
				#adminmenu li[class*="-menu-section-header"] > a.menu-top:hover {
					background-color: {$a_header_bg};
					color: {$a_header_text};
				}
		
				#adminmenu li[class*="-menu-section-item"] {
					display: none;
				}
			</style>
		HTML;

		// No kses. It breaks the style.
		echo $style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	/**
	 * Enqueue the admin assets.
	 *
	 * @return void
	 */
	public function enqueue_admin_assets() {
		wp_enqueue_script(
			'wpmb-admin-menu-style',
			WPMB_AME_TOGGLE_URL . 'js/admin-menu.js',
			array(),
			WPMB_AME_TOGGLE_PATH . 'js/admin-menu.js',
			true
		);
	}
}
