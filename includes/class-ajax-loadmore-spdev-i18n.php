<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://testmail.com
 * @since      1.0.0
 *
 * @package    Ajax_Loadmore_Spdev
 * @subpackage Ajax_Loadmore_Spdev/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ajax_Loadmore_Spdev
 * @subpackage Ajax_Loadmore_Spdev/includes
 * @author     Sagar Parmar <sagarparmardev@gmail.com>
 */
class Ajax_Loadmore_Spdev_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ajax-loadmore-spdev',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
