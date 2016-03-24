<?php
/* Tabs Section */
$current_tab     = empty( $_GET['type'] ) ? 'general' : sanitize_title( $_GET['type'] );
if($_GET["type"] == "managerunners" && isset($_GET["type"]) ){
	$manageClass = 'nav-tab-active';
	$configClass = '';
} else {
	$manageClass = '';
	$configClass = 'nav-tab-active';
}
?>
<?php echo $current_tab; ?>
<h2 class="nav-tab-wrapper">
		<a class= "nav-tab <?php echo $configClass;?>" href="admin.php?page=runners_settings_page" title="Overall settings">Overall Runner Settings</a>
		<a class= "nav-tab <?php echo $manageClass;?>" href="admin.php?page=runners_settings_page&type=managerunners" title="Manage Runners">Manage Runners</a>

</ul>
	<?php
	?>
