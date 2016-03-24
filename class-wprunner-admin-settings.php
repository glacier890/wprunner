<?php
class WPRunner_Admin_Settings {

	private static $settings = array();
	private static $errors   = array();
	private static $messages = array();
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
