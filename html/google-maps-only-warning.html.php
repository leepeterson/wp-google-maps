<div class="wpgmza-halt wpgmza-engine-not-google-maps">
	<?php
	_e('This feature is only available using the Google Maps engine. If you with to use this setting, please', 'wp-google-maps');
	?>
	
	<a href="<?php echo get_admin_url() . 'admin.php?page=wp-google-maps-menu-settings'; ?>"><?php 
		_e('switch your map engine here', 'wp-google-maps'); 
	?></a>
	
	<?php
	_e('and follow', 'wp-google-maps');
	?>
	
	<a href="https://www.wpgmaps.com/documentation/creating-a-google-maps-api-key/" target="_blank">
		<?php
		_e('these instructions', 'wp-google-maps');
		?>
	</a>
	
	<?php
	_e('to set up the Google Maps API', 'wp-google-maps');
	?>
</div>