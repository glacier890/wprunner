<?php

class ManageRunners {
	/** Construct function to call class
	*/
	public function __construct(){
		echo 'New tab created.';
		add_action( 'admin_init', array( $this, 'sandbox_initialize_theme_options' ) );
		add_action( 'admin_init', array( $this, 'sandbox_general_options_callback' ) );
	}

	public function sandbox_initialize_theme_options() {

			// First, we register a section. This is necessary since all future options must belong to one.
			add_settings_section(
					'general_settings_section',         // ID used to identify this section and with which to register options
					'Sandbox Options',                  // Title to be displayed on the administration page
					array( $this, 'sandbox_general_options_callback'), // Callback used to render the description of the section
					'permalink'
				);                           // Page on which to add this section of options

				}

				public function sandbox_general_options_callback(){
					echo 'New Settings page';
				}


}
global $general_runner;
$general_runner = new ManageRunners();
?>
