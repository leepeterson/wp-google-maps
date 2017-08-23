<div>
	<h1>
		<?php 
		_e("Welcome to WP Google Maps version ","wp-google-maps"); 
		echo (string)WPGMZA\Plugin::$version;
		?>
	</h1>
	
	<div id="time-limit-warning" style="display: none;" class="update-nag">
		<?php
		_e("Your host would not allow us to extend the time limit for this script. Migrating large databases may fail.");
		?>
	</div>
	
	<div id="wpgmza-fail" class="error">
		<p>
			<?php
			_e("Sorry, we couldn't migrate your data. No data has been lost. Please ", "wp-google-maps"); 
			?>
			
			<a href="http://wpgmaps.com"><?php
				_e("contact us", "wp-google-maps");
			?></a>
			
			<?php
			_e(" for support.", "wp-google-maps");
			?>
		</p>
		<textarea id="wpgzma-report" style="width: 100%; height: 33vh; overflow: scroll;" readonly="readonly" onclick="this.select();"></textarea>
	</div>
	
	<div id="wpgmza-success"></div>
</div>