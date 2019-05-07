<?php
/**
 * @package inc2734/wp-plugin-view-controller
 * @author inc2734
 * @license GPL-2.0+
 */

namespace Inc2734\WP_Plugin_View_Controller;

class Bootstrap {

	public function __construct() {
		load_textdomain( 'inc2734-wp-plugin-view-controller', __DIR__ . '/languages/' . get_locale() . '.mo' );
	}
}
