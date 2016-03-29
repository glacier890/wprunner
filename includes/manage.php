<?php

class ManageRunners {
	/** Construct function to call class
	*/
	public function __construct(){
		echo 'New tab created.';
		add_action( 'wp', array( $this, 'sandbox_initialize_theme_options' ) );

	}

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


}
global $general_runner;
$general_runner = new ManageRunners();
?>
