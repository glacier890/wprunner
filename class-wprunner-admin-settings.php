<?php

class WP_Admin_Settings {

	public function __construct(){
		add_action('wp', array($this, 'admin_output'));
		echo 'New Tab';
	}

/*
	private static $settings = array();
	private static $errors   = array();
	private static $messages = array();



	function sandbox_initialize_theme_options() {

	    // First, we register a section. This is necessary since all future options must belong to one.
	    add_settings_section(
	        'general_settings_section',         // ID used to identify this section and with which to register options
	        'Sandbox Options',                  // Title to be displayed on the administration page
	        'sandbox_general_options_callback', // Callback used to render the description of the section
	        'general' )  ;                      // Pa

}
*/




public function sandbox_initialize_theme_options() {

		// First, we register a section. This is necessary since all future options must belong to one.
		add_settings_section(
				'general_settings_section',         // ID used to identify this section and with which to register options
				'Sandbox Options',                  // Title to be displayed on the administration page
				array( $this, 'sandbox_general_options_callback'), // Callback used to render the description of the section
				'runners_settings_page&type=managerunners'
			);

			// Add the field with the names and function to use for our new
// settings, put it in our new section
		add_settings_field(
			'show_header',
			'Header',
			array($this, 'sandbox_toggle_header_callback'),
			'runners_settings_page',
			'general_settings_section',
			'Activate this setting to display the header.'
		);                         // Page on which to add this section of options

			}

			public function sandbox_general_options_callback(){
				echo 'Check this area if you want the runners to be displayed in the table.';
			}

			public function sandbox_toggle_header_callback(){
				$html = '<input type="checkbox" id="showrunners" name="runner_options" value="1" ' . checked( 1, isset( $options['show_runner'] ) ? $options['show_footer'] : 0, false ) . '/>';
			}
  public function admin_output(){
	global $wpdb;
			if( isset($_GET["type"]) && !empty( $_GET["type"]) ):
				$type	= $_GET["type"];
			else:
				$type	= '';
			endif;
			?>
<div class="membermousegroupaddon">
					<div class="membermousegrouptabs">
						<?php include_once(dirname(__FILE__)."/includes/tabs.php");?>
					</div>
					<?php		if ( $type == "managerunners" ) { ?>
					<div class="runner-general">
								<?php include_once(dirname( __FILE__ )."/includes/manage.php");?>
					</div>
         <?php }  else {?>
					<div class="runner-main">
					<?php  ?>
								<?php include_once(dirname( __FILE__ )."/includes/general.php"); ?>
					</div>
				<?php }
			}
			}
			global $wp_admin;
			$wp_admin = new WP_Admin_Settings(); ?>
<?php  ?>
