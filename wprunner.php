<?php
/**
 * Plugin Name: WP Runner
 * Version: 1.0
 * Plugin URI: https://wpclubmanager.com
 * Description: A plugin to help you run a sports club website easily and quickly.
 * Author: Clubpress
 * Author URI: https://wpclubmanager.com
 * Requires at least: 3.8
 * Tested up to: 4.4.1
 *
 * Text Domain: wp-club-manager
 * Domain Path: /languages/
 *
 * @package   WPClubManager
 * @category  Core
 * @author    Clubpress <info@wpclubmanager.com>
 */


 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


	 /**
	  * Main WPRunner Class
	  *
	  * @class WPRunner
	  */
	 final class WPRunner {

		 /**
	* @var string
	*/
 public $version = '1.0';

 /**
	 * @var WPRunner The single instance of the class
	 */
	protected static $_instance = null;

	/**
	 * Main WPRunner Instance
	 *
	 * Ensures only one instance of WPRunner is loaded or can be loaded.
	 *f
	 * @since 1.0.0
	 * @static
	 * @see WPCM()
	 * @return WPRunner - Main instance
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * WPRunner Constructor.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return WPRunner
	 */
	public function __construct() {
		echo '<h1>Wp-Runner works</h1>';
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
/*
		$this->constants();
		$this->includes();
		$this->init_hooks();

		do_action( 'wprunner_loaded' );
		*/
	}

	public function admin_menu(){
		add_menu_page( 'Runners Settings Page', 'WP Runner', 'manage_options', 'runners_settings_page', array($this, 'runner_setting_page') );
	}

	public function runner_setting_page(){
		include_once( 'class-wprunner-admin-settings.php' );
	}

	/**
 * Hook into actions and filters
 * @since  2.3
 */
private function init_hooks() {

	register_activation_hook( __FILE__, array( 'WPRunner_Install', 'install' ) );

	add_action( 'init', array( $this, 'init' ), 0 );
	add_action( 'init', array( 'WPRunner_Shortcodes', 'init' ) );
}

	 }

	 /**
  * Returns the main instance of WPCM to prevent the need to use globals.
  *
  * @since  1.0.0
  * @return WPClubManager
  */
 function WPRunnerManager() {
 	return WPRunner::instance();
 }

 $GLOBALS['wpclubmanager'] = WPRunnerManager();

?>
