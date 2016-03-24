<?php
class WPRunner_Admin_Settings {

	private static $settings = array();
	private static $errors   = array();
	private static $messages = array();

	public function

	function sandbox_initialize_theme_options() {

	    // First, we register a section. This is necessary since all future options must belong to one.
	    add_settings_section(
	        'general_settings_section',         // ID used to identify this section and with which to register options
	        'Sandbox Options',                  // Title to be displayed on the administration page
	        'sandbox_general_options_callback', // Callback used to render the description of the section
	        'general'                           // Pa

} ?>


<?php 	global $wpdb;
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
				<?php }; ?>
<?php  ?>
