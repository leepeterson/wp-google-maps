<div id="wpgmza_tabs" data-wpgmza-wp-action-before="wpgmza_settings_tabs_before" data-wpgmza-wp-action-after="wpgmza_settings_tabs_after" class="wpgmza-accordion">
	<!--<ul>
		<li>
			<a href="#general-settings">
				<?php
				_e("General Settings","wp-google-maps");
				?>
			</a>
		</li>
		<li>
			<a href="#themes">
				<?php
				_e("Themes","wp-google-maps");
				?>
			</a>
		</li>
		<li>
			<a href="#directions">
				<?php
				_e("Directions","wp-google-maps");
				?>
			</a>
		</li>
		<li>
			<a href="#store-locator">
				<?php
				_e("Store Locator","wp-google-maps");
				?>
			</a>
		</li>
		<li>
			<a href="#advanced-settings">
				<?php
				_e("Advanced Settings","wp-google-maps");
				?>
			</a>
		</li>
		<li>
			<a href="#marker-listing-options">
				<?php
				_e("Marker Listing Options","wp-google-maps");
				?>
			</a>
		</li>
		<li class="pro-upgrade wpgmza-free-version-only">
			<a href="#pro-upgrade">
				<?php
				_e("Pro Upgrade","wp-google-maps");
				?>
			</a>
		</li>
	</ul>-->
	
	<h3>
		<i class="fa fa-minus-square" aria-hidden="true"></i>
		<i class="fa fa-plus-square" aria-hidden="true"></i>
		
		<?php
		_e("General Settings","wp-google-maps");
		?>
	</h3>
	<div id="general-settings" data-wpgmza-wp-action-before="wpgmza_map_editor_settings_general_before" data-wpgmza-wp-action-after="wpgmza_map_editor_settings_general_after">
		<fieldset>
			<label><?php _e("Short code","wp-google-maps"); ?></label>
			<div>
				<input name="shortcode" class="wpgmza_copy_shortcode" readonly/>
				<div>
					<?php
					_e("Copy this into your post or page to display the map","wp-google-maps");
					?>
				</div>
			</div>
		</fieldset>
		<fieldset>
			<label><?php _e("Map Name","wp-google-maps"); ?></label>
			<input name="title"/>
		</fieldset>
		<fieldset>
			<label><?php _e("Width","wp-google-maps"); ?></label>
			<input name="width_amount" type="number" min="0" step="1" value="100"/>
			<select name="width_units">
				<option value="%">
					<?php
					_e("% of container","wp-google-maps");
					?>
				</option>
				<option value="vw">
					<?php
					_e("% of viewport width","wp-google-maps");
					?>
				</option>
				<option value="vh">
					<?php
					_e("% of viewport height","wp-google-maps");
					?>
				</option>
				<option value="px">
					<?php
					_e("pixels","wp-google-maps");
					?>
				</option>
			</select>
		</fieldset>
		<fieldset>
			<label><?php _e("Height","wp-google-maps"); ?></label>
			<input name="height_amount" type="number" min="0" step="1" value="50"/>
			<select name="height_units">
				<option value="%">
					<?php
					_e("% of container","wp-google-maps");
					?>
				</option>
				<option value="vw">
					<?php
					_e("% of viewport width","wp-google-maps");
					?>
				</option>
				<option value="vh" selected="selected">
					<?php
					_e("% of viewport height","wp-google-maps");
					?>
				</option>
				<option value="px">
					<?php
					_e("pixels","wp-google-maps");
					?>
				</option>
			</select>
			<span class="update-nag">
				<?php
				_e("We recommend that you leave your height in PX. Depending on your theme, using % for the height may break your map.", "wp-google-maps");
				?>
			</span>
		</fieldset>
		
		<fieldset>
			<label>
				<?php 
				_e("General Layout", "wp-google-maps");
				?>
			</label>
			<select name="general_layout">
				<option value="">None</option>
				<option value="wpgmza-compact"><?php _e("Compact", "wp-google-maps"); ?></option>
				<option value="wpgmza-columns"><?php _e("Columns", "wp-google-maps"); ?></option>
			</select>
		</fieldset>
		
		<input name="start_location" type="hidden"/>
		
		<fieldset>
			<label><?php _e("Zoom Level","wp-google-maps"); ?></label>
			<input name="start_zoom" type="hidden"/>
			<div id="zoom-level-slider"></div>
		</fieldset>
		
		<fieldset>
			<label><?php _e("Map Alignment","wp-google-maps"); ?></label>
			<select name="map_align">
				<option value="1"><?php _e("Left","wp-google-maps"); ?></option>
				<option value="2"><?php _e("Center","wp-google-maps"); ?></option>
				<option value="3"><?php _e("Right","wp-google-maps"); ?></option>
				<option value="4"><?php _e("None","wp-google-maps"); ?></option>
			</select>
		</fieldset>
		<fieldset class="wpgmza-engine-google-maps-only">
			<label><?php _e("Map type", "wp-google-maps"); ?></label>
			<select name="map_type">
				<option value="1"><?php _e("Roadmap", "wp-google-maps"); ?></option>
				<option value="2"><?php _e("Satellite", "wp-google-maps"); ?></option>
				<option value="3"><?php _e("Hybrid", "wp-google-maps"); ?></option>
				<option value="4"><?php _e("Terrain", "wp-google-maps"); ?></option>
			</select>
		</fieldset>
		<fieldset>
			<label><?php _e("Lock map start viewport", "wp-google-maps"); ?></label>
			<div class="switch">
				<input type="checkbox" name="lock_start_viewport" class="postform cmn-toggle cmn-toggle-yes-no" id="lock_start_viewport"/>
				<label class="cmn-override-big"
					   data-on="<?php _e('Yes', "wp-google-maps"); ?>"
				data-off="<?php _e('No', "wp-google-maps"); ?>">
				</label>
			</div>
		</fieldset>
	</div>
	
	<h3>
		<i class="fa fa-minus-square" aria-hidden="true"></i>
		<i class="fa fa-plus-square" aria-hidden="true"></i>
	
		<?php
		_e("Themes","wp-google-maps");
		?>
	</h3>
	<div id="themes" data-wpgmza-wp-action-before="wpgmza_map_editor_settings_themes_before" data-wpgmza-wp-action-after="wpgmza_map_editor_settings_themes_after">
		<h3><?php _e("Select a theme for your map", "wp-google-maps"); ?></h3>
		
		<div smart:import-php="<?php echo WPGMZA_DIR . 'html/google-maps-only-warning.html.php'; ?>"/>
		
		<div class="wpgmza-engine-google-maps-only">
			<ul class="presets">
				<li>
					<label>
						<input type="radio" name="theme_selection" value="0" data-theme-json='[ "visibility", "invert_lightness", "color", "weight", "hue", "saturation", "lightness", "gamma"]'/>
						<img src="<?php echo WPGMZA_BASE; ?>images/theme_0.jpg"/>
					</label>
					<label>
						<input type="radio" name="theme_selection" value="1" data-theme-json='[{"featureType": "administrative","elementType": "labels.text.fill","stylers": [{"color": "#444444"}]},{"featureType": "landscape","elementType": "all","stylers": [{"color": "#f2f2f2"}]},{"featureType": "poi","elementType": "all","stylers": [{"visibility": "off"}]},{"featureType": "road","elementType": "all","stylers": [{"saturation": -100},{"lightness": 45}]},{"featureType": "road.highway","elementType": "all","stylers": [{"visibility": "simplified"}]},{"featureType": "road.arterial","elementType": "labels.icon","stylers": [{"visibility": "off"}]},{"featureType": "transit","elementType": "all","stylers": [{"visibility": "off"}]},{"featureType": "water","elementType": "all","stylers": [{"color": "#46bcec"},{"visibility": "on"}]}]'/>
						<img src="<?php echo WPGMZA_BASE; ?>images/theme_1.jpg"/>
					</label>
					<label>
						<input type="radio" name="theme_selection" value="2" data-theme-json='[{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}]'/>
						<img src="<?php echo WPGMZA_BASE; ?>images/theme_2.jpg"/>
					</label>
					<label>
						<input type="radio" name="theme_selection" value="3" data-theme-json='[{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]'/>
						<img src="<?php echo WPGMZA_BASE; ?>images/theme_3.jpg"/>
					</label>
					<label>
						<input type="radio" name="theme_selection" value="4" data-theme-json='[{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2e5d4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]}]'/>
						<img src="<?php echo WPGMZA_BASE; ?>images/theme_4.jpg"/>
					</label>
					<label>
						<input type="radio" name="theme_selection" value="5" data-theme-json='[{"stylers": [ {"hue": "#890000"}, {"visibility": "simplified"}, {"gamma": 0.5}, {"weight": 0.5} ] }, { "elementType": "labels", "stylers": [{"visibility": "off"}] }, { "featureType": "water", "stylers": [{"color": "#890000"}] } ]'/>
						<img src="<?php echo WPGMZA_BASE; ?>images/theme_5.jpg"/>
					</label>
					<label>
						<input type="radio" name="theme_selection" value="6" data-theme-json='[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]'/>
						<img src="<?php echo WPGMZA_BASE; ?>images/theme_6.jpg"/>
					</label>
					<label>
						<input type="radio" name="theme_selection" value="7" data-theme-json='[{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#e9ebed"},{"saturation":-90},{"lightness":-8},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":-78},{"lightness":67},{"visibility":"simplified"}]}]'/>
						<img src="<?php echo WPGMZA_BASE; ?>images/theme_7.jpg"/>
					</label>
					<label>
						<input type="radio" name="theme_selection" value="8" data-theme-json='[{"featureType":"administrative","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"color":"#84afa3"},{"lightness":52}]},{"stylers":[{"saturation":-17},{"gamma":0.36}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#3f518c"}]}]'/>
						<img src="<?php echo WPGMZA_BASE; ?>images/theme_8.jpg"/>
					</label>
				</li>
			</ul>
			<div>
				<h3><?php _e("Or use a custom theme", "wp-google-maps"); ?></h3>
				<p>
					<a href="http://www.wpgmaps.com/map-themes/?utm_source=plugin&amp;utm_medium=link&amp;utm_campaign=browse_themes">
						<?php
						_e("Browse the theme directory", "wp-google-maps");
						?>
					</a>
				</p>
				<p>
					<?php
					_e("Paste your custom theme data here", "wp-google-maps");
					?>
				</p>
				<textarea name="theme_data"></textarea>
				<p class="centre">
					<button id="preview-custom-theme" class="button button-primary" type="button">
						<?php
						_e('Preview Custom Theme', 'wp-google-maps');
						?>
					</button>
				</p>
			</div>
		</div>
	</div>
	
	<h3>
		<i class="fa fa-minus-square" aria-hidden="true"></i>
		<i class="fa fa-plus-square" aria-hidden="true"></i>
		
		<?php
		_e("Directions","wp-google-maps");
		?>
	</h3>
	<div id="directions" data-wpgmza-wp-action-before="wpgmza_map_editor_settings_directions_before" data-wpgmza-wp-action-after="wpgmza_map_editor_settings_directions_after">
		<div smart:import-php="<?php echo WPGMZA_DIR . 'html/google-maps-only-warning.html.php'; ?>"/>
	
		<div class="update-nag update-att wpgmza-free-version-only">
			<i class="fa fa-arrow-circle-right"></i>
			<a target="_blank" href="<?php
			echo WPGMZA\Plugin::getProLink(array(
				'utm_source'	=> 'plugin',
				'utm_medium'	=> 'link',
				'utm_campaign'	=> 'directions'
			));
			?>">
				<?php
				_e("Enable directions", "wp-google-maps");
				?>
			</a>
			<?php
			_e('with the Pro version for only $39.99 once off. Support and updates included forever.', "wp-google-maps");
			?>
		</div>
		
		<div class="wpgmza-engine-google-maps-only">
			<fieldset>
				<label><?php _e("Enable Directions?", "wp-google-maps"); ?></label>
				<div class="switch grey-out">
					<input name="directions_box_enabled" type="checkbox" class="cmn-toggle cmn-toggle-yes-no disabled"/>
					<label class="cmn-override-big"
						data-on="<?php _e('Yes', "wp-google-maps"); ?>"
						data-off="<?php _e('No', "wp-google-maps"); ?>">
					</label>
				</div>
			</fieldset>
			<fieldset>
				<label><?php _e("Directions Box Open by Default?", "wp-google-maps"); ?></label>
				<div class="switch grey-out">
					<input name="directions_box_open_by_default" type="checkbox" class="cmn-toggle cmn-toggle-yes-no disabled"/>
					<label class="cmn-override-big"
						data-on="<?php _e('Yes', "wp-google-maps"); ?>"
						data-off="<?php _e('No', "wp-google-maps"); ?>">
					</label>
				</div>
			</fieldset>
			<!--<fieldset>
				<label><?php _e("Directions Box Width", "wp-google-maps"); ?></label>
				
				<input type="number" name="directions_box_width" value="100" disabled/>
				<select name="dbox_width_type" disabled>
					<option value="px">
						<?php
						_e("px", "wp-google-maps");
						?>
					</option>
					<option value="%" selected>
						<?php
						_e("%", "wp-google-maps");
						?>
					</option>
				</select>
			</fieldset>-->
			<fieldset>
				<label><?php _e("Default 'To' address", "wp-google-maps"); ?></label>
				<input name="default_to" disabled/>
			</fieldset>
			<fieldset>
				<label><?php _e('Directions Box Template', 'wp-google-maps'); ?></label>
				<input name="directions_box_template_id" type="hidden"/>
				<button 
					type="button" 
					class="wpgmza-open-template-picker wpgmza-glow button" 
					data-template-picker-target="directions_box_template_id"
					data-template-picker-type="directions-box"
					>
					<?php
					_e('Select Template', 'wp-google-maps');
					?>
					<strong>
					<?php
					_e('(New!)', 'wp-google-maps');
					?>
					</strong>
				</button>
				<button 
					type="button" 
					class="button"
					id="wpgmza-reset-directions-box-template">
					<?php _e('Reset', 'wp-google-maps'); ?>
				</button>
				<p>
					<small>
						<?php
						_e('Please save and reload this page for template to take effect', 'wp-google-maps');
						?>
					</small>
				</p>
			</fieldset>
		</div>
	</div>
	
	<h3>
		<i class="fa fa-minus-square" aria-hidden="true"></i>
		<i class="fa fa-plus-square" aria-hidden="true"></i>
	
		<?php
		_e("Store Locator","wp-google-maps");
		?>
	</h3>
	<div id="store-locator" data-wpgmza-wp-action-before="wpgmza_map_editor_settings_store_locator_before" data-wpgmza-wp-action-after="wpgmza_map_editor_settings_store_locator_after">
		<h3>
			<?php
			_e('General Options', 'wp-google-maps');
			?>
		</h3>
		<fieldset>
			<label><?php _e("Enable Store Locator", "wp-google-maps"); ?></label>
			<div class="switch">
				<input type="checkbox" name="store_locator_enabled" class="postform cmn-toggle cmn-toggle-yes-no"/>
				<label class="cmn-override-big"
					data-on="<?php _e('Yes', "wp-google-maps"); ?>"
					data-off="<?php _e('No', "wp-google-maps"); ?>">
				</label>
			</div>
		</fieldset>
		<fieldset>
			<label><?php _e("Restrict to country", "wp-google-maps"); ?></label>
			<select name="store_locator_restrict">
				<option value=""><?php _e("No country selected", "wp-google-maps"); ?></option>
				<option value="af"><?php _e("Afghanistan", "wp-google-maps"); ?></option>
				<option value="al"><?php _e("Albania", "wp-google-maps"); ?></option>
				<option value="dz"><?php _e("Algeria", "wp-google-maps"); ?></option>
				<option value="as"><?php _e("American Samoa", "wp-google-maps"); ?></option>
				<option value="ad"><?php _e("Andorra", "wp-google-maps"); ?></option>
				<option value="ao"><?php _e("Angola", "wp-google-maps"); ?></option>
				<option value="ai"><?php _e("Anguilla", "wp-google-maps"); ?></option>
				<option value="ag"><?php _e("Antigua and Barbuda", "wp-google-maps"); ?></option>
				<option value="ar"><?php _e("Argentina", "wp-google-maps"); ?></option>
				<option value="am"><?php _e("Armenia", "wp-google-maps"); ?></option>
				<option value="aw"><?php _e("Aruba", "wp-google-maps"); ?></option>
				<option value="au"><?php _e("Australia", "wp-google-maps"); ?></option>
				<option value="at"><?php _e("Austria", "wp-google-maps"); ?></option>
				<option value="az"><?php _e("Azerbaijan", "wp-google-maps"); ?></option>
				<option value="bh"><?php _e("Bahrain", "wp-google-maps"); ?></option>
				<option value="bd"><?php _e("Bangladesh", "wp-google-maps"); ?></option>
				<option value="bb"><?php _e("Barbados", "wp-google-maps"); ?></option>
				<option value="by"><?php _e("Belarus", "wp-google-maps"); ?></option>
				<option value="be"><?php _e("Belgium", "wp-google-maps"); ?></option>
				<option value="bz"><?php _e("Belize", "wp-google-maps"); ?></option>
				<option value="bj"><?php _e("Benin", "wp-google-maps"); ?></option>
				<option value="bm"><?php _e("Bermuda", "wp-google-maps"); ?></option>
				<option value="bt"><?php _e("Bhutan", "wp-google-maps"); ?></option>
				<option value="bo"><?php _e("Bolivia", "wp-google-maps"); ?></option>
				<option value="an"><?php _e("Bonaire", "wp-google-maps"); ?></option>
				<option value="ba"><?php _e("Bosnia and Herzegovina", "wp-google-maps"); ?></option>
				<option value="bw"><?php _e("Botswana", "wp-google-maps"); ?></option>
				<option value="bv"><?php _e("Bouvet Island", "wp-google-maps"); ?></option>
				<option value="br"><?php _e("Brazil", "wp-google-maps"); ?></option>
				<option value="io"><?php _e("British Indian Ocean Territory", "wp-google-maps"); ?></option>
				<option value="vg"><?php _e("British Virgin Islands", "wp-google-maps"); ?></option>
				<option value="bn"><?php _e("Brunei", "wp-google-maps"); ?></option>
				<option value="bg"><?php _e("Bulgaria", "wp-google-maps"); ?></option>
				<option value="bf"><?php _e("Burkina Faso", "wp-google-maps"); ?></option>
				<option value="bi"><?php _e("Burundi", "wp-google-maps"); ?></option>
				<option value="kh"><?php _e("Cambodia", "wp-google-maps"); ?></option>
				<option value="cm"><?php _e("Cameroon", "wp-google-maps"); ?></option>
				<option value="ca"><?php _e("Canada", "wp-google-maps"); ?></option>
				<option value="cv"><?php _e("Cape Verde", "wp-google-maps"); ?></option>
				<option value="ky"><?php _e("Cayman Islands", "wp-google-maps"); ?></option>
				<option value="cf"><?php _e("Central African Republic", "wp-google-maps"); ?></option>
				<option value="td"><?php _e("Chad", "wp-google-maps"); ?></option>
				<option value="cl"><?php _e("Chile", "wp-google-maps"); ?></option>
				<option value="cn"><?php _e("China", "wp-google-maps"); ?></option>
				<option value="cx"><?php _e("Christmas Island", "wp-google-maps"); ?></option>
				<option value="cc"><?php _e("Cocos (Keeling) Islands", "wp-google-maps"); ?></option>
				<option value="co"><?php _e("Colombia", "wp-google-maps"); ?></option>
				<option value="km"><?php _e("Comoros", "wp-google-maps"); ?></option>
				<option value="ck"><?php _e("Cook Islands", "wp-google-maps"); ?></option>
				<option value="cr"><?php _e("Costa Rica", "wp-google-maps"); ?></option>
				<option value="hr"><?php _e("Croatia", "wp-google-maps"); ?></option>
				<option value="cu"><?php _e("Cuba", "wp-google-maps"); ?></option>
				<option value="cw"><?php _e("Curaçao", "wp-google-maps"); ?></option>
				<option value="cy"><?php _e("Cyprus", "wp-google-maps"); ?></option>
				<option value="cz"><?php _e("Czech Republic", "wp-google-maps"); ?></option>
				<option value="cd"><?php _e("Democratic Republic of the Congo", "wp-google-maps"); ?></option>
				<option value="dk"><?php _e("Denmark", "wp-google-maps"); ?></option>
				<option value="dj"><?php _e("Djibouti", "wp-google-maps"); ?></option>
				<option value="dm"><?php _e("Dominica", "wp-google-maps"); ?></option>
				<option value="do"><?php _e("Dominican Republic", "wp-google-maps"); ?></option>
				<option value="tl"><?php _e("East Timor", "wp-google-maps"); ?></option>
				<option value="ec"><?php _e("Ecuador", "wp-google-maps"); ?></option>
				<option value="eg"><?php _e("Egypt", "wp-google-maps"); ?></option>
				<option value="sv"><?php _e("El Salvador", "wp-google-maps"); ?></option>
				<option value="gq"><?php _e("Equatorial Guinea", "wp-google-maps"); ?></option>
				<option value="er"><?php _e("Eritrea", "wp-google-maps"); ?></option>
				<option value="ee"><?php _e("Estonia", "wp-google-maps"); ?></option>
				<option value="et"><?php _e("Ethiopia", "wp-google-maps"); ?></option>
				<option value="fk"><?php _e("Falkland Islands", "wp-google-maps"); ?></option>
				<option value="fo"><?php _e("Faroe Islands", "wp-google-maps"); ?></option>
				<option value="fm"><?php _e("Federated States of Micronesia", "wp-google-maps"); ?></option>
				<option value="fj"><?php _e("Fiji", "wp-google-maps"); ?></option>
				<option value="fi"><?php _e("Finland", "wp-google-maps"); ?></option>
				<option value="fr"><?php _e("France", "wp-google-maps"); ?></option>
				<option value="gf"><?php _e("French Guiana", "wp-google-maps"); ?></option>
				<option value="pf"><?php _e("French Polynesia", "wp-google-maps"); ?></option>
				<option value="tf"><?php _e("French Southern and Antarctic Lands", "wp-google-maps"); ?></option>
				<option value="ga"><?php _e("Gabon", "wp-google-maps"); ?></option>
				<option value="ge"><?php _e("Georgia", "wp-google-maps"); ?></option>
				<option value="de"><?php _e("Germany", "wp-google-maps"); ?></option>
				<option value="gh"><?php _e("Ghana", "wp-google-maps"); ?></option>
				<option value="gi"><?php _e("Gibraltar", "wp-google-maps"); ?></option>
				<option value="gr"><?php _e("Greece", "wp-google-maps"); ?></option>
				<option value="gl"><?php _e("Greenland", "wp-google-maps"); ?></option>
				<option value="gd"><?php _e("Grenada", "wp-google-maps"); ?></option>
				<option value="gp"><?php _e("Guadeloupe", "wp-google-maps"); ?></option>
				<option value="gu"><?php _e("Guam", "wp-google-maps"); ?></option>
				<option value="gt"><?php _e("Guatemala", "wp-google-maps"); ?></option>
				<option value="gg"><?php _e("Guernsey", "wp-google-maps"); ?></option>
				<option value="gn"><?php _e("Guinea", "wp-google-maps"); ?></option>
				<option value="gw"><?php _e("Guinea-Bissau", "wp-google-maps"); ?></option>
				<option value="gy"><?php _e("Guyana", "wp-google-maps"); ?></option>
				<option value="ht"><?php _e("Haiti", "wp-google-maps"); ?></option>
				<option value="hm"><?php _e("Heard Island and McDonald Islands", "wp-google-maps"); ?></option>
				<option value="hn"><?php _e("Honduras", "wp-google-maps"); ?></option>
				<option value="hk"><?php _e("Hong Kong", "wp-google-maps"); ?></option>
				<option value="hu"><?php _e("Hungary", "wp-google-maps"); ?></option>
				<option value="is"><?php _e("Iceland", "wp-google-maps"); ?></option>
				<option value="in"><?php _e("India", "wp-google-maps"); ?></option>
				<option value="id"><?php _e("Indonesia", "wp-google-maps"); ?></option>
				<option value="ir"><?php _e("Iran", "wp-google-maps"); ?></option>
				<option value="iq"><?php _e("Iraq", "wp-google-maps"); ?></option>
				<option value="im"><?php _e("Isle of Man", "wp-google-maps"); ?></option>
				<option value="il"><?php _e("Israel", "wp-google-maps"); ?></option>
				<option value="it"><?php _e("Italy", "wp-google-maps"); ?></option>
				<option value="ci"><?php _e("Ivory Coast", "wp-google-maps"); ?></option>
				<option value="jm"><?php _e("Jamaica", "wp-google-maps"); ?></option>
				<option value="jp"><?php _e("Japan", "wp-google-maps"); ?></option>
				<option value="je"><?php _e("Jersey", "wp-google-maps"); ?></option>
				<option value="jo"><?php _e("Jordan", "wp-google-maps"); ?></option>
				<option value="kz"><?php _e("Kazakhstan", "wp-google-maps"); ?></option>
				<option value="ke"><?php _e("Kenya", "wp-google-maps"); ?></option>
				<option value="ki"><?php _e("Kiribati", "wp-google-maps"); ?></option>
				<option value="kw"><?php _e("Kuwait", "wp-google-maps"); ?></option>
				<option value="kg"><?php _e("Kyrgyzstan", "wp-google-maps"); ?></option>
				<option value="la"><?php _e("Laos", "wp-google-maps"); ?></option>
				<option value="lv"><?php _e("Latvia", "wp-google-maps"); ?></option>
				<option value="lb"><?php _e("Lebanon", "wp-google-maps"); ?></option>
				<option value="ls"><?php _e("Lesotho", "wp-google-maps"); ?></option>
				<option value="lr"><?php _e("Liberia", "wp-google-maps"); ?></option>
				<option value="ly"><?php _e("Libya", "wp-google-maps"); ?></option>
				<option value="li"><?php _e("Liechtenstein", "wp-google-maps"); ?></option>
				<option value="lt"><?php _e("Lithuania", "wp-google-maps"); ?></option>
				<option value="lu"><?php _e("Luxembourg", "wp-google-maps"); ?></option>
				<option value="mo"><?php _e("Macau", "wp-google-maps"); ?></option>
				<option value="mg"><?php _e("Madagascar", "wp-google-maps"); ?></option>
				<option value="mw"><?php _e("Malawi", "wp-google-maps"); ?></option>
				<option value="my"><?php _e("Malaysia", "wp-google-maps"); ?></option>
				<option value="mv"><?php _e("Maldives", "wp-google-maps"); ?></option>
				<option value="ml"><?php _e("Mali", "wp-google-maps"); ?></option>
				<option value="mt"><?php _e("Malta", "wp-google-maps"); ?></option>
				<option value="mh"><?php _e("Marshall Islands", "wp-google-maps"); ?></option>
				<option value="mq"><?php _e("Martinique", "wp-google-maps"); ?></option>
				<option value="mr"><?php _e("Mauritania", "wp-google-maps"); ?></option>
				<option value="mu"><?php _e("Mauritius", "wp-google-maps"); ?></option>
				<option value="yt"><?php _e("Mayotte", "wp-google-maps"); ?></option>
				<option value="mx"><?php _e("Mexico", "wp-google-maps"); ?></option>
				<option value="md"><?php _e("Moldova", "wp-google-maps"); ?></option>
				<option value="mc"><?php _e("Monaco", "wp-google-maps"); ?></option>
				<option value="mn"><?php _e("Mongolia", "wp-google-maps"); ?></option>
				<option value="me"><?php _e("Montenegro", "wp-google-maps"); ?></option>
				<option value="ms"><?php _e("Montserrat", "wp-google-maps"); ?></option>
				<option value="ma"><?php _e("Morocco", "wp-google-maps"); ?></option>
				<option value="mz"><?php _e("Mozambique", "wp-google-maps"); ?></option>
				<option value="mm"><?php _e("Myanmar", "wp-google-maps"); ?></option>
				<option value="na"><?php _e("Namibia", "wp-google-maps"); ?></option>
				<option value="nr"><?php _e("Nauru", "wp-google-maps"); ?></option>
				<option value="np"><?php _e("Nepal", "wp-google-maps"); ?></option>
				<option value="nl"><?php _e("Netherlands", "wp-google-maps"); ?></option>
				<option value="nc"><?php _e("New Caledonia", "wp-google-maps"); ?></option>
				<option value="nz"><?php _e("New Zealand", "wp-google-maps"); ?></option>
				<option value="ni"><?php _e("Nicaragua", "wp-google-maps"); ?></option>
				<option value="ne"><?php _e("Niger", "wp-google-maps"); ?></option>
				<option value="ng"><?php _e("Nigeria", "wp-google-maps"); ?></option>
				<option value="nu"><?php _e("Niue", "wp-google-maps"); ?></option>
				<option value="nf"><?php _e("Norfolk Island", "wp-google-maps"); ?></option>
				<option value="kp"><?php _e("North Korea", "wp-google-maps"); ?></option>
				<option value="mp"><?php _e("Northern Mariana Islands", "wp-google-maps"); ?></option>
				<option value="no"><?php _e("Norway", "wp-google-maps"); ?></option>
				<option value="om"><?php _e("Oman", "wp-google-maps"); ?></option>
				<option value="pk"><?php _e("Pakistan", "wp-google-maps"); ?></option>
				<option value="pw"><?php _e("Palau", "wp-google-maps"); ?></option>
				<option value="ps"><?php _e("Palestine", "wp-google-maps"); ?></option>
				<option value="pa"><?php _e("Panama", "wp-google-maps"); ?></option>
				<option value="pg"><?php _e("Papua New Guinea", "wp-google-maps"); ?></option>
				<option value="py"><?php _e("Paraguay", "wp-google-maps"); ?></option>
				<option value="pe"><?php _e("Peru", "wp-google-maps"); ?></option>
				<option value="ph"><?php _e("Philippines", "wp-google-maps"); ?></option>
				<option value="pn"><?php _e("Pitcairn Islands", "wp-google-maps"); ?></option>
				<option value="pl"><?php _e("Poland", "wp-google-maps"); ?></option>
				<option value="pt"><?php _e("Portugal", "wp-google-maps"); ?></option>
				<option value="pr"><?php _e("Puerto Rico", "wp-google-maps"); ?></option>
				<option value="qa"><?php _e("Qatar", "wp-google-maps"); ?></option>
				<option value="ie"><?php _e("Republic of Ireland", "wp-google-maps"); ?></option>
				<option value="mk"><?php _e("Republic of Macedonia", "wp-google-maps"); ?></option>
				<option value="cg"><?php _e("Republic of the Congo", "wp-google-maps"); ?></option>
				<option value="ro"><?php _e("Romania", "wp-google-maps"); ?></option>
				<option value="ru"><?php _e("Russia", "wp-google-maps"); ?></option>
				<option value="rw"><?php _e("Rwanda", "wp-google-maps"); ?></option>
				<option value="re"><?php _e("Réunion", "wp-google-maps"); ?></option>
				<option value="bl"><?php _e("Saint Barthélemy", "wp-google-maps"); ?></option>
				<option value="sh"><?php _e("Saint Helena", "wp-google-maps"); ?></option>
				<option value="kn"><?php _e("Saint Kitts and Nevis", "wp-google-maps"); ?></option>
				<option value="lc"><?php _e("Saint Lucia", "wp-google-maps"); ?></option>
				<option value="mf"><?php _e("Saint Martin", "wp-google-maps"); ?></option>
				<option value="pm"><?php _e("Saint Pierre and Miquelon", "wp-google-maps"); ?></option>
				<option value="vc"><?php _e("Saint Vincent and the Grenadines", "wp-google-maps"); ?></option>
				<option value="ws"><?php _e("Samoa", "wp-google-maps"); ?></option>
				<option value="sm"><?php _e("San Marino", "wp-google-maps"); ?></option>
				<option value="sa"><?php _e("Saudi Arabia", "wp-google-maps"); ?></option>
				<option value="sn"><?php _e("Senegal", "wp-google-maps"); ?></option>
				<option value="rs"><?php _e("Serbia", "wp-google-maps"); ?></option>
				<option value="sc"><?php _e("Seychelles", "wp-google-maps"); ?></option>
				<option value="sl"><?php _e("Sierra Leone", "wp-google-maps"); ?></option>
				<option value="sg"><?php _e("Singapore", "wp-google-maps"); ?></option>
				<option value="sx"><?php _e("Sint Maarten", "wp-google-maps"); ?></option>
				<option value="sk"><?php _e("Slovakia", "wp-google-maps"); ?></option>
				<option value="si"><?php _e("Slovenia", "wp-google-maps"); ?></option>
				<option value="sb"><?php _e("Solomon Islands", "wp-google-maps"); ?></option>
				<option value="so"><?php _e("Somalia", "wp-google-maps"); ?></option>
				<option value="za"><?php _e("South Africa", "wp-google-maps"); ?></option>
				<option value="gs"><?php _e("South Georgia", "wp-google-maps"); ?></option>
				<option value="kr"><?php _e("South Korea", "wp-google-maps"); ?></option>
				<option value="ss"><?php _e("South Sudan", "wp-google-maps"); ?></option>
				<option value="es"><?php _e("Spain", "wp-google-maps"); ?></option>
				<option value="lk"><?php _e("Sri Lanka", "wp-google-maps"); ?></option>
				<option value="sd"><?php _e("Sudan", "wp-google-maps"); ?></option>
				<option value="sr"><?php _e("Suriname", "wp-google-maps"); ?></option>
				<option value="sj"><?php _e("Svalbard and Jan Mayen", "wp-google-maps"); ?></option>
				<option value="sz"><?php _e("Swaziland", "wp-google-maps"); ?></option>
				<option value="se"><?php _e("Sweden", "wp-google-maps"); ?></option>
				<option value="ch"><?php _e("Switzerland", "wp-google-maps"); ?></option>
				<option value="sy"><?php _e("Syria", "wp-google-maps"); ?></option>
				<option value="st"><?php _e("São Tomé and Príncipe", "wp-google-maps"); ?></option>
				<option value="tw"><?php _e("Taiwan", "wp-google-maps"); ?></option>
				<option value="tj"><?php _e("Tajikistan", "wp-google-maps"); ?></option>
				<option value="tz"><?php _e("Tanzania", "wp-google-maps"); ?></option>
				<option value="th"><?php _e("Thailand", "wp-google-maps"); ?></option>
				<option value="bs"><?php _e("The Bahamas", "wp-google-maps"); ?></option>
				<option value="gm"><?php _e("The Gambia", "wp-google-maps"); ?></option>
				<option value="tg"><?php _e("Togo", "wp-google-maps"); ?></option>
				<option value="tk"><?php _e("Tokelau", "wp-google-maps"); ?></option>
				<option value="to"><?php _e("Tonga", "wp-google-maps"); ?></option>
				<option value="tt"><?php _e("Trinidad and Tobago", "wp-google-maps"); ?></option>
				<option value="tn"><?php _e("Tunisia", "wp-google-maps"); ?></option>
				<option value="tr"><?php _e("Turkey", "wp-google-maps"); ?></option>
				<option value="tm"><?php _e("Turkmenistan", "wp-google-maps"); ?></option>
				<option value="tc"><?php _e("Turks and Caicos Islands", "wp-google-maps"); ?></option>
				<option value="tv"><?php _e("Tuvalu", "wp-google-maps"); ?></option>
				<option value="ug"><?php _e("Uganda", "wp-google-maps"); ?></option>
				<option value="ua"><?php _e("Ukraine", "wp-google-maps"); ?></option>
				<option value="ae"><?php _e("United Arab Emirates", "wp-google-maps"); ?></option>
				<option value="uk"><?php _e("United Kingdom", "wp-google-maps"); ?></option>
				<option value="us"><?php _e("United States", "wp-google-maps"); ?></option>
				<option value="uy"><?php _e("Uruguay", "wp-google-maps"); ?></option>
				<option value="uz"><?php _e("Uzbekistan", "wp-google-maps"); ?></option>
				<option value="vu"><?php _e("Vanuatu", "wp-google-maps"); ?></option>
				<option value="ve"><?php _e("Venezuela", "wp-google-maps"); ?></option>
				<option value="vn"><?php _e("Vietnam", "wp-google-maps"); ?></option>
				<option value="wf"><?php _e("Wallis and Futuna", "wp-google-maps"); ?></option>
				<option value="eh"><?php _e("Western Sahara", "wp-google-maps"); ?></option>
				<option value="ye"><?php _e("Yemen", "wp-google-maps"); ?></option>
				<option value="zm"><?php _e("Zambia", "wp-google-maps"); ?></option>
				<option value="zw"><?php _e("Zimbabwe", "wp-google-maps"); ?></option>
				<option value="ax"><?php _e("Åland Islands", "wp-google-maps"); ?></option>
			</select>
		</fieldset>
		<fieldset>
			<label><?php _e("Show distance in", "wp-google-maps"); ?></label>
			<div class="switch">
				<input type="checkbox" name="store_locator_distance" class="postform cmn-toggle cmn-toggle-yes-no"/>
				<label class="cmn-override-big-wide" 
					for="store_locator_distance" 
					data-on="<?php _e("Miles","wp-google-maps"); ?>"
					data-off="<?php _e("Kilometers","wp-google-maps"); ?>">
				</label>
			</div>
		</fieldset>
		<fieldset>
			<label><?php _e("Default radius", "wp-google-maps"); ?></label>
			<div>
				<input name="store_locator_default_radius" type="number" min="1" max="300" value="10"/>
				
				<span class="default-radius-units"></span>
			</div>
		</fieldset>
		<fieldset>
			<label><?php _e("Query string", "wp-google-maps"); ?></label>
			<input name="store_locator_query_string"/>
		</fieldset>
		<fieldset>
			<label><?php _e("Default address", "wp-google-maps"); ?></label>
			<input name="store_locator_default_address"/>
		</fieldset>
		<fieldset>
			<label><?php _e("Not found message", "wp-google-maps"); ?></label>
			<input name="store_locator_not_found_message"/>
		</fieldset>
		<fieldset class="wpgmza-free-version-only">
			<label><?php _e("Show bouncing icon", "wp-google-maps"); ?></label>
			<div class="switch">
				<input type="checkbox" name="store_locator_bounce" class="postform cmn-toggle cmn-toggle-round-flat"/>
				<label for="store_locator_bounce" 
					data-on="<?php _e('Yes', 'wp-google-maps'); ?>" 
					data-off="<?php _e('No', 'wp-google-maps'); ?>">
				</label>
			</div>
		</fieldset>
		<p class="wpgmza-free-version-only">
			<em>
				<?php _e('View', 'wp-google-maps'); ?>
				<a href="http://wpgmaps.com/documentation/store-locator" target="_blank">
					<?php _e('Store Locator Documentation', 'wp-google-maps'); ?>
				</a>
			</em>
		</p>
	</div>
	
	<h3>
		<i class="fa fa-minus-square" aria-hidden="true"></i>
		<i class="fa fa-plus-square" aria-hidden="true"></i>
	
		<?php
		_e("Advanced Settings","wp-google-maps");
		?>
	</h3>
	<div id="advanced-settings" data-wpgmza-wp-action-before="wpgmza_map_editor_settings_advanced_before" data-wpgmza-wp-action-after="wpgmza_map_editor_settings_advanced_after">
		<fieldset>
			<label><?php _e("Enable Bicycle Layer?", "wp-google-maps"); ?></label>
			<div class="switch">
				<input type="checkbox" name="bicycle" class="postform cmn-toggle cmn-toggle-yes-no"/>
				<label class="cmn-override-big" 
					for="bicycle"
					data-on="<?php _e('Yes', 'wp-google-maps'); ?>" 
					data-off="<?php _e('No', 'wp-google-maps'); ?>">
				</label>
			</div>
		</fieldset>
		<fieldset class="wpgmza-engine-google-maps-only">
			<label><?php _e("Enable Traffic Layer?", "wp-google-maps"); ?></label>
			<div class="switch">
				<input type="checkbox" name="traffic" class="postform cmn-toggle cmn-toggle-yes-no"/>
				<label class="cmn-override-big" 
					for="traffic"
					data-on="<?php _e('Yes', 'wp-google-maps'); ?>" 
					data-off="<?php _e('No', 'wp-google-maps'); ?>">
				</label>
			</div>
		</fieldset>
		<fieldset class="wpgmza-engine-google-maps-only">
			<label><?php _e("Enable Public Transport Layer?", "wp-google-maps"); ?></label>
			<div class="switch">
				<input type="checkbox" name="transport" class="postform cmn-toggle cmn-toggle-yes-no"/>
				<label class="cmn-override-big" 
					for="transport"
					data-on="<?php _e('Yes', 'wp-google-maps'); ?>" 
					data-off="<?php _e('No', 'wp-google-maps'); ?>">
				</label>
			</div>
		</fieldset>
		<fieldset>
			<label><?php _e("Allowed Zoom Range", "wp-google-maps"); ?></label>
			
			<input name="min_zoom" type="hidden" value="1"/>
			<input name="max_zoom" type="hidden" value="21"/>
		
			<div id="zoom-range-slider"/>
		</fieldset>
		<fieldset class="wpgmza-engine-google-maps-only">
			<label for="show_points_of_interest">
				<?php
				_e('Show Points of Interest?', 'wp-google-maps');
				?>
			</label>
			<input type="checkbox" name="show_points_of_interest"/>
		</fieldset>
		
		<div class="update-nag update-att wpgmza-free-version-only">
			<i class="fa fa-arrow-circle-right"> </i>
			
			<?php
			_e("Get the rest of these advanced features with the Pro version for only", 'wp-google-maps');
			?>
			
			<a href="<?php
			echo WPGMZA\Plugin::getProLink(array(
				'utm_source'	=> 'plugin',
				'utm_medium'	=> 'link',
				'utm_campaign'	=> 'advanced'
			));
			?>">
				$39.99 <?php _e('once off', 'wp-google-maps'); ?>
			</a>
			
			<?php
			_e('Support and updates included forever', "wp-google-maps");
			?>
		</div>
		
		<fieldset>
			<label><?php _e("Default Marker Image", "wp-google-maps"); ?></label>
			<input class="wpgmza-free-version-only" type="file" disabled/>
			<div class="wpgmza-marker-icon-picker wpgmza-pro-version-only" data-input-name="upload_default_marker"/>
		</fieldset>
		
		<fieldset>
			<label><?php _e("Enable Marker Labels", "wp-google-maps"); ?></label>
			<input name="enable_marker_labels" type="checkbox"/>
		</fieldset>
		<fieldset>
			<label><?php _e("Marker Label Characters", "wp-google-maps"); ?></label>
			<input name="marker_label_characters" type="text" value="123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ&#x3B1;&#x3B2;&#x3B3;&#x3B4;&#x3B5;&#x3B6;&#x3B7;&#x3B8;&#x3B9;&#x3BA;&#x3BB;&#x3BC;&#x3BE;&#x3C0;&#x3C1;&#x3C3;&#x3C4;&#x3C5;&#x3C6;&#x3C7;&#x3C8;&#x3C9;&#x393;&#x394;&#x398;&#x39B;&#x39E;&#x3A0;&#x3A3;&#x3A6;&#x3A8;&#x3A9;"/>
			
			<!-- αβγδεζηθικλμξπρστυφχψωΓΔΘΛΞΠΣΦΨΩ -->
		</fieldset>
		
		<fieldset>
			<label><?php _e("Show User's Location", "wp-google-maps"); ?></label>
			<div class="switch grey-out wpgmza-geolocation-setting">
				<input type="checkbox" name="show_user_location" class="cmn-toggle cmn-toggle-yes-no" disabled/>
				<label class="cmn-override-big" 
					for="transport"
					data-on="<?php _e('Yes', 'wp-google-maps'); ?>" 
					data-off="<?php _e('No', 'wp-google-maps'); ?>">
				</label>
			</div>
		</fieldset>
		<fieldset>
			<label><?php _e("Default User Location Icon","wp-google-maps"); ?></label>
			<input class="wpgmza-free-version-only" type="file" disabled/>
			<div class="wpgmza-marker-icon-picker wpgmza-pro-version-only" data-input-name="upload_default_ul_marker"/>
		</fieldset>
		
		<fieldset>
			<label><?php _e("KML/GeoRSS URL", "wp-google-maps"); ?></label>
			<div>
				<input name="kml" disabled/> 
				<div>
					<?php
					_e("The KML/GeoRSS layer will over-ride most of your map settings","wp-google-maps");
					?>
					<br/>
					<?php
					_e("For multiple sources, separate each one by a comma","wp-google-maps");
					?>
				</div>
			</div>
		</fieldset>
		
		<fieldset>
			<label><?php _e("Fusion table ID", "wp-google-maps"); ?></label>
			<div>
				<input name="fusion" disabled/>
				<div>
					<?php
					_e("Read data directly from your Fusion Table. For more information, see <a href='http://googlemapsmania.blogspot.com/2010/05/fusion-tables-google-maps-api.html'>http://googlemapsmania.blogspot.com/2010/05/fusion-tables-google-maps-api.html</a>","wp-google-maps");
					?>
				</div>
			</div>
		</fieldset>
		
		<fieldset>
			<label><?php _e('Infowindow Style', 'wp-google-maps'); ?></label>
			<div class="wpgmza-info-window-picker"/>
		</fieldset>
	</div>
	
	<h3>
		<i class="fa fa-minus-square" aria-hidden="true"></i>
		<i class="fa fa-plus-square" aria-hidden="true"></i>
	
		<?php
		_e("Marker Listing Options","wp-google-maps");
		?>
	</h3>
	<div id="marker-listing-options" data-wpgmza-wp-action-before="wpgmza_map_editor_settings_markerlisting_options_before" data-wpgmza-wp-action-after="wpgmza_map_editor_settings_markerlisting_options_after">
		<div class="update-nag update-att wpgmza-free-version-only">
			<i class="fa fa-arrow-circle-right"> </i>
			
			<?php
			_e("Enable Marker Listing with the", 'wp-google-maps');
			?>
			
			<a href="<?php
			echo WPGMZA\Plugin::getProLink(array(
				'utm_source'	=> 'plugin',
				'utm_medium'	=> 'link',
				'utm_campaign'	=> 'advanced'
			));
			?>">
				<?php _e('Pro version for only $39.99 once off.', 'wp-google-maps'); ?>
			</a>
			
			<?php
			_e('Support and updates included forever', "wp-google-maps");
			?>
		</div>
		
		<fieldset>
			<label><?php _e("List Markers", "wp-google-maps"); ?></label>
			<div>
				<ul class="marker-listing-styles grey-out">
					<li>
						<label>
							<input type="radio" name="marker_listing_style" value="0" checked/>
							<img 
								src="<?php echo WPGMZA_BASE; ?>images/marker_list_0.png" 
								title="<?php _e('No marker listing', 'wp-google-maps'); ?>"
								/>
						</label>
					</li>
					<li>
						<label>
							<input type="radio" name="marker_listing_style" value="1"/>
							<img 
								src="<?php echo WPGMZA_BASE; ?>images/marker_list_1.png"
								title="<?php _e('Basic table', 'wp-google-maps'); ?>"
								/>
						</label>
					</li>
					<li>
						<label>
							<input type="radio" name="marker_listing_style" value="4"/>
							<img 
								src="<?php echo WPGMZA_BASE; ?>images/marker_list_2.png"
								title="<?php _e('Basic list', 'wp-google-maps'); ?>"
								/>
						</label>
					</li>
					<li>
						<label>
							<input type="radio" name="marker_listing_style" value="2"/>
							<img 
								src="<?php echo WPGMZA_BASE; ?>images/marker_list_3.png"
								title="<?php _e('Advanced table', 'wp-google-maps'); ?>"
								/>
						</label>
					</li>
					<li>
						<label>
							<input type="radio" name="marker_listing_style" value="3"/>
							<img 
								src="<?php echo WPGMZA_BASE; ?>images/marker_list_4.png"
								title="<?php _e('Carousel', 'wp-google-maps'); ?>"
								/>
						</label>
					</li>
					<li>
						<label class="wpgmza-open-template-picker wpgmza-glow" data-template-picker-target="marker_listing_template_id"
						data-template-picker-type="marker-listing"
						>
							<input type="radio" name="marker_listing_style" value="template"/>
							<img src="<?php echo WPGMZA_BASE; ?>images/marker-listing-template.png"
								title="<?php _e('Use Template', 'wp-google-maps'); ?>"/>
						</label>
						
						<input name="marker_listing_template_id" type="hidden"/>
					</li>
				</ul>
				
				<div>
					<?php
					_e('Your selection', 'wp-google-maps');
					?>:
					<strong class="wpgmza-marker-listing-style">
						<?php 
						_e('No marker listing', 'wp-google-maps'); 
						?>
					</strong>
				</div>
			</div>
		</fieldset>
		
		<!--<fieldset>
			<label><?php _e('Marker Listing Placement', 'wp-google-maps'); ?></label>
			<div class="switch">
				<input type="checkbox" name="marker_listing_position" class="postform cmn-toggle cmn-toggle-yes-no"/>
				<label class="cmn-override-big-wide" 
					for="marker_listing_position" 
					data-on="<?php _e('Above Map', 'wp-google-maps'); ?>" 
					data-off="<?php _e('Below Map', 'wp-google-maps'); ?>"/>
			</div>
		</fieldset>-->
		<fieldset>
			<label><?php _e("Order markers by", "wp-google-maps"); ?></label>
			<div>
				<select disabled name="order_markers_by" data-wpgmza-wp-filter="wpgmza_order_markers_by_setting_filter">
					<option value="1"><?php _e("ID", "wp-google-maps"); ?></option>
					<option value="2"><?php _e("Title", "wp-google-maps"); ?></option>
					<option value="3"><?php _e("Address", "wp-google-maps"); ?></option>
					<option value="4"><?php _e("Description", "wp-google-maps"); ?></option>
					<option value="5"><?php _e("Category", "wp-google-maps"); ?></option>
				</select>
				<select disabled name="order_markers_choice">
					<option value="1"><?php _e("Ascending", "wp-google-maps"); ?></option>
					<option value="2"><?php _e("Descending", "wp-google-maps"); ?></option>
				</select>
			</div>
		</fieldset>
		<!--<fieldset>
			<label><?php _e("Move list inside map", "wp-google-maps"); ?></label>
			<div>
				<div>
					<div class='switch'>
						<input disabled type='checkbox' value='1' class='cmn-toggle cmn-toggle-round-flat' name="push_in_map"/> <label></label>
					</div>
					<?php
					_e("Move your marker list inside the map area","wp-google-maps");
					?>
				</div>
				<div>
					<?php
					_e("Placement", "wp-google-maps");
					?>
					<select name="push_in_map_placement">
						<option value="1">Top Center</option>
						<option value="2">Top Left</option>
						<option value="3">Top Right</option>
						<option value="4">Left Top </option>
						<option value="5">Right Top</option>
						<option value="6">Left Center</option>
						<option value="7">Right Center</option>
						<option value="8">Left Bottom</option>
						<option value="9">Right Bottom</option>
						<option value="10">Bottom Center</option>
						<option value="11">Bottom Left</option>
						<option value="12">Bottom Right</option>
					</select>
				</div>
				<div>
					<?php
					_e('Container Width', 'wp-google-maps');
					?>
					<input name="push_in_map_width" placeholder="<?php _e('% or px', 'wp-google-maps'); ?>" value="50%"/>
					<em>
						<?php
						_e('Set as % or px, eg. 30% or 400px', 'wp-google-maps');
						?>
					</em>
				</div>
				<div>
					<?php
					_e('Container Height', 'wp-google-maps');
					?>
					<input name="push_in_map_height" placeholder="<?php _e('% or px', 'wp-google-maps'); ?>" value="50%"/>
				</div>
			</div>
		</fieldset>-->
		<fieldset>
			<label><?php _e("Filter by category", "wp-google-maps"); ?></label>
			<div>
				<div class='switch'>
					<input type='checkbox' class='cmn-toggle cmn-toggle-round-flat' disabled name="marker_listing_filter_by_category"/> 
					<label for='marker_listing_filter_by_category'></label> 
				</div>
				<?php 
				_e("Allow users to filter by category?","wp-google-maps"); 
				?>
			</div>
		</fieldset>
		
		<div class="feature-section three-col wpgmza-free-version-only">
			<div class="col">
				<div class="wpgmza-promo">
					<img src="<?php echo WPGMZA_BASE . "images/marker-listing-basic.jpg" ?>"/>
					<div class="wpgmza-promo-overlay">
						<h4><?php _e("Basic", "wp-google-maps"); ?></h4>
						<p>
							<?php
							_e('Show a basic list of your markers', "wp-google-maps");
							?>
						</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="wpgmza-promo">
					<img src="<?php echo WPGMZA_BASE . "images/marker-listing-carousel.jpg" ?>"/>
					<div class="wpgmza-promo-overlay">
						<h4><?php _e("Carousel", "wp-google-maps"); ?></h4>
						<p>
							<?php
							_e('Beautiful, responsive, mobile-friendly carousel marker listing', "wp-google-maps");
							?>
						</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="wpgmza-promo">
					<img src="<?php echo WPGMZA_BASE . "images/marker-listing-advanced.jpg" ?>"/>
					<div class="wpgmza-promo-overlay">
						<h4><?php _e("Tabular", "wp-google-maps"); ?></h4>
						<p>
							<?php
							_e('Advanced, tabular marker listing functionality with real time filtering', "wp-google-maps");
							?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	

</div>