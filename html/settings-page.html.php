<div>
	<h2><?php _e("WP Google Map Settings","wp-google-maps"); ?></h2>
	<div id="warning-container"></div>
	<form method="POST" class="wpgmza">
		<input type="hidden" name="action" value="wpgmza_save_settings"/>
	
		<div id="wpgmza-settings-tabs" data-wpgmza-wp-filter-prepend="wpgmza_map_settings_container_prepend" data-wpgmza-wp-filter-append="wpgmza_map_settings_container_append">
			<ul data-wpgmza-wp-filter-prepend="wpgmza_map_settings_tabs_prepend" data-wpgmza-wp-filter-append="wpgmza_map_settings_tabs_append">
				<li>
					<a href="#maps">
						<?php
						_e('Maps', 'wp-google-maps');
						?>
					</a>
				</li>
				<li>
					<a href="#infowindows">
						<?php
						_e('InfoWindows', 'wp-google-maps');
						?>
					</a>
				</li>
				<li>
					<a href="#markerlisting">
						<?php
						_e('Marker Listing', 'wp-google-maps');
						?>
					</a>
				</li>
				<li>
					<a href="#advanced">
						<?php
						_e('Advanced', 'wp-google-maps');
						?>
					</a>
				</li>
			</ul>
			
			<div id="maps" data-wpgmza-wp-filter-prepend="wpgmza_map_settings_maps_prepend" data-wpgmza-wp-filter-append="wpgmza_map_settings_maps_append">
				<h3><?php _e('Map Settings', 'wp-google-maps'); ?></h3>
				<fieldset>
					<label><?php _e('Engine', 'wp-google-maps'); ?></label>
					<select name="engine">
						<option selected value="open-street-map">OpenStreetMap</option>
						<option value="google-maps">Google Maps</option>
					</select>
				</fieldset>
				<fieldset>
					<label><?php _e("General Map Settings","wp-google-maps") ?></label>
					<div>
						<div>
							<div class="switch">
								<input name="map_full_screen_control" type="checkbox" class="cmn-toggle cmn-toggle-round-flat" value="yes"/>
								<label for="map_full_screen_control"></label>
							</div>
							<?php
							_e("Disable Full Screen Control","wp-google-maps");
							?>
						</div>
						
						<div class="wpgmza-engine-not-open-street-map">
							<div class="switch">
								<input name="map_streetview" type="checkbox" class="cmn-toggle cmn-toggle-round-flat" value="yes"/>
								<label></label>
							</div>
							<?php
							_e("Disable StreetView","wp-google-maps");
							?>
						</div>
						
						<div>
							<div class="switch">
								<input name="map_zoom" type="checkbox" class="cmn-toggle cmn-toggle-round-flat"/>
								<label></label>
							</div>
							<?php
							_e("Disable Zoom Controls","wp-google-maps");
							?>
						</div>
						
						<div class="wpgmza-engine-not-open-street-map">
							<div class="switch">
								<input name="map_pan" type="checkbox" class="cmn-toggle cmn-toggle-round-flat" value="yes"/>
								<label></label>
							</div>
							<?php
							_e("Disable Pan Controls","wp-google-maps");
							?>
						</div>
						
						<div class="wpgmza-engine-not-open-street-map">
							<div class="switch">
								<input name="disable_map_type_controls" type="checkbox" class="cmn-toggle cmn-toggle-round-flat" value="yes"/>
								<label></label>
							</div>
							<?php
							_e("Disable Map Type Controls","wp-google-maps");
							?>
						</div>
						
						<div>
							<div class="switch">
								<input name="map_scroll" type="checkbox" class="cmn-toggle cmn-toggle-round-flat" value="yes"/>
								<label></label>
							</div>
							<?php
							_e("Disable Mouse Wheel Zoom","wp-google-maps");
							?>
						</div>
						
						<div>
							<div class="switch">
								<input name="map_draggable" type="checkbox" class="cmn-toggle cmn-toggle-round-flat" value="yes"/>
								<label></label>
							</div>
							<?php
							_e("Disable Mouse Dragging","wp-google-maps");
							?>
						</div>
						
						<div class="wpgmza-engine-not-open-street-map">
							<div class="switch">
								<input name="map_clickzoom" type="checkbox" class="cmn-toggle cmn-toggle-round-flat" value="yes"/>
								<label></label>
							</div>
							<?php
							_e("Disable Mouse Double Click Zooming","wp-google-maps");
							?>
						</div>
					</div>
				</fieldset>
				
				<div class="wpgmza-pro-settings-panel-container"></div>
				
				<fieldset>
					<label><?php _e("Troubleshooting Options","wp-google-maps"); ?></label>
					<div>
						<p>
							<span class="switch">
								<input name="force_jquery" type="checkbox" class="cmn-toggle cmn-toggle-yes-no"/>
								<label for="force_jquery"
									data-on="<?php _e("Yes", "wp-google-maps"); ?>"
									data-off="<?php _e("No", "wp-google-maps"); ?>">
								</label>
							</span>
							<span>
								<?php
								_e("Over-ride current jQuery with version 1.11.3 (Tick this box if you are receiving jQuery related errors after updating to WordPress 4.5)", 'wp-google-maps');
								?>
							</span>
						</p>
						<p class="wpgmza-engine-google-maps-only">
							<span class="switch">
								<input name="remove_api" type="checkbox" class="cmn-toggle cmn-toggle-yes-no" value="yes"/>
								<label for="remove_api"
									data-on="<?php _e("Yes", "wp-google-maps"); ?>"
									data-off="<?php _e("No", "wp-google-maps"); ?>">
								</label>
							</span>
							<span>
								<?php
								_e("Do not load the Google Maps API (Only check this if your theme loads the Google Maps API by default)", 'wp-google-maps');
								?>
							</span>
						</p>
					</div>
				</fieldset>
				
				<fieldset class="wpgmza-engine-google-maps-only">
					<label>
						<?php
						_e("Use Google Maps API","wp-google-maps");
						?>
					</label>
					<select name="api_version">
						<option value="3.25">3.25 <?php _e('(Retired)', 'wp-google-maps'); ?></option>
						<option value="3.26">3.26 <?php _e('(Retired)', 'wp-google-maps'); ?></option>
						<option value="3.27">3.27 <?php _e('(Frozen)', 'wp-google-maps'); ?></option>
						<option value="3.28">3.28</option>
						<option value="3.exp">3.29 <?php _e('(Experimental)', 'wp-google-maps'); ?></option>
					</select>
				</fieldset>
				
				<fieldset>
					<label>
						<?php
						_e("Lowest level of access to the map editor","wp-google-maps");
						?>
					</label>
					<select name="access_level">
						<option value="manage_options">
							<?php
							_e("Admin", "wp-google-maps");
							?>
						</option>
						<option value="edit_pages">
							<?php
							_e("Editor", "wp-google-maps");
							?>
						</option>
						<option value="publish_posts">
							<?php
							_e("Author", "wp-google-maps");
							?>
						</option>
						<option value="edit_posts">
							<?php
							_e("Contributor", "wp-google-maps");
							?>
						</option>
						<option value="read">
							<?php
							_e("Subscriber", "wp-google-maps");
							?>
						</option>
					</select>
				</fieldset>
				
				<fieldset>
					<label>
						<?php
						_e("Enable Usage Tracking","wp-google-maps");
						?>
					</label>
					
					<div>
						<span class="switch">
							<input name="enable_usage_tracking" type="checkbox" class="cmn-toggle cmn-toggle-yes-no" value="yes"/>
							<label for="enable_usage_tracking"
								data-on="<?php _e("Yes", "wp-google-maps"); ?>"
								data-off="<?php _e("No", "wp-google-maps"); ?>">
							</label>
						</span>
						
						<div>
							<?php
							_e("Allow us to anonymously track how you use your maps and we will send you a 15% Sola Plugins coupon as a token of our gratitude (Coupon will be sent to the administrator's email address)", 'wp-google-maps');
							?>
						</div>
					</div>
					
					<!-- TODO: There is an input here with no name, which I believe means it won't be sent in the form
					
					<input type='hidden' id='wpgmza_admin_email_coupon' value='".get_option('admin_email')."' />
					
					-->
				</fieldset>
				
				<fieldset>
					<label>
						<?php
						_e("Disable Two-Finger Pan","wp-google-maps");
						?>
					</label>
					<div>
						<div class="switch">
							<input name="force_greedy_gestures" type="checkbox" class="cmn-toggle cmn-toggle-yes-no" value="yes"/>
							<label for="force_greedy_gestures"
								data-on="<?php _e("Yes", "wp-google-maps"); ?>"
								data-off="<?php _e("No", "wp-google-maps"); ?>">
							</label>
						</div>
						
						<div>
							<?php
							_e("Removes the need to use two fingers to move the map on mobile devices", "wp-google-maps");
							?>
						</div>
					</div>
				</fieldset>

				<fieldset>
					<label>
						<?php
						_e("Load all markers by default","wp-google-maps");
						?>
					</label>
					<div>
						<div class="switch">
							<input name="load_all_markers" type="checkbox" class="cmn-toggle cmn-toggle-yes-no" value="yes"/>
							<label for="load_all_markers"
								   data-on="<?php _e("Yes", "wp-google-maps"); ?>"
							data-off="<?php _e("No", "wp-google-maps"); ?>">
							</label>
						</div>

						<div>
							<?php
							_e("Please note this is not recommended for maps with a large number of markers", "wp-google-maps");
							?>
						</div>
					</div>
				</fieldset>
			</div>
			<div id="infowindows" data-wpgmza-wp-filter-prepend="wpgmza_map_settings_infowindows_prepend" data-wpgmza-wp-filter-append="wpgmza_map_settings_infowindows_append">
				<h3>
					<?php
					_e("Marker InfoWindow Settings");
					?>
				</h3>
				<fieldset>
					<label>
						<?php
						_e("Open Marker InfoWindows by","wp-google-maps");
						?>
					</label>
					<div>
						<div>
							<input type="radio" name="info_window_open_by" value="1"/> Click
						</div>
						<div>
							<input type="radio" name="info_window_open_by" value="2"/>
							Hover
						</div>
					</div>
				</fieldset>
				<fieldset>
					<label>
						<?php
						_e("Disable InfoWindows","wp-google-maps");
						?>
					</label>
					<input name="disable_infowindows" type="checkbox" value="1"/>
				</fieldset>
			</div>
			<div id="markerlisting" data-wpgmza-wp-filter-prepend="wpgmza_map_settings_markerlisting_prepend" data-wpgmza-wp-filter-append="wpgmza_map_settings_markerlisting_append">
				<h3>
					<?php
					_e("Marker Listing Settings","wp-google-maps");
					?>
				</h3>
				<p>
					<?php
					_e("Changing these settings will alter the way the marker list appears on your website.","wp-google-maps");
					?>
				</p>
				<div class="update-nag update-att wpgmza-free-version-only">
					<i class="fa fa-arrow-circle-right"></i>
					<a target="_blank" href="<?php 
						echo WPGMZA\Plugin::getProLink(array(
							'utm_source'	=> 'plugin',
							'utm_medium'	=> 'link',
							'utm_campaign'	=> 'mlisting_settings'
						));
						?>">
						<?php
						_e('Add Beautiful Marker Listings', 'wp-google-maps');
						?>
					</a>
					<?php
					_e('to your maps with the Pro version for only $39.99 once off. Support and updates included forever.');
					?>
				</div>
				
				<h4>
					<?php
					_e("Advanced Marker Listing","wp-google-maps");
					?>
				</h4>
				<fieldset>
					<label>
						<?php
						_e("Column settings","wp-google-maps");
						?>
					</label>
					<div>
						<div>
							<div class="switch">
								<input type="checkbox" class="cmn-toggle cmn-toggle-round-flat" name="marker_listing_hide_icon" disabled/>
								<label></label>
							</div>
							<?php
							_e("Hide the Icon column","wp-google-maps");
							?>
						</div>
						<div>
							
							<div class="switch">
								<input type="checkbox" class="cmn-toggle cmn-toggle-round-flat" name="marker_listing_hide_title" disabled/>
								<label></label>
							</div>
							<?php
							_e("Hide the Title column","wp-google-maps");
							?>
						</div>
						<div>
							
							<div class="switch">
								<input type="checkbox" class="cmn-toggle cmn-toggle-round-flat" name="marker_listing_hide_address" disabled/>
								<label></label>
							</div>
							<?php
							_e("Hide the Address column","wp-google-maps");
							?>
						</div>
						<div>
							
							<div class="switch">
								<input type="checkbox" class="cmn-toggle cmn-toggle-round-flat" name="marker_listing_hide_categories" disabled/>
								<label></label>
							</div>
							<?php
							_e("Hide the Category column","wp-google-maps");
							?>
						</div>
						<div>
							<div class="switch">
								<input type="checkbox" class="cmn-toggle cmn-toggle-round-flat" name="marker_listing_hide_description" disabled/>
								<label></label>
							</div>
							<?php
							_e("Hide the Description column","wp-google-maps");
							?>
						</div>
						
						<div>
							<div class="switch">
								<input type="checkbox" class="cmn-toggle cmn-toggle-round-flat" name="marker_listing_hide_link" disabled/>
								<label></label>
							</div>
							<?php
							_e("Hide the Marker Link","wp-google-maps");
							?>
						</div>
						<div>
							<div class="switch">
								<input type="checkbox" class="cmn-toggle cmn-toggle-round-flat" name="marker_listing_hide_directions" disabled/>
								<label></label>
							</div>
							<?php
							_e("Hide the Directions Link","wp-google-maps");
							?>
						</div>
						<div>
							<div class="switch">
								<input type="checkbox" class="cmn-toggle cmn-toggle-round-flat" name="marker_listing_hide_pic" disabled/>
								<label></label>
							</div>
							<?php
							_e("Hide the Image","wp-google-maps");
							?>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<label>
						<?php
						_e('Show X items by default', 'wp-google-maps');
						?>
					</label>
					<select name="marker_listing_default_num_items">
						<option value="5">5</option>
						<option value="10">10</option>
						<option value="25">25</option>
						<option value="50">50</option>
						<option value="100">100</option>
						<option value="-1">ALL</option>
					</select>
				</fieldset>
				
				<h4>
					<?php
					_e("Carousel Marker Listing","wp-google-maps");
					?>
				</h4>
				<fieldset>
					<label>
						<?php
						_e("Theme selection","wp-google-maps");
						?>
					</label>
					<select name="carousel_markerlist_theme" disabled>
						<option value="sky" selected="">Sky</option>
						<option value="sun">Sun</option>
						<option value="earth">Earth</option>
						<option value="monotone">Monotone</option>
						<option value="pinkpurple">PinkPurple</option>
						<option value="white">White</option>
						<option value="black">Black</option>
						<option value="glass">Glass</option>
					</select>
				</fieldset>
				<fieldset>
					<label>
						<?php
						_e("Carousel settings","wp-google-maps");
						?>
					</label>
					<div>
						<div>
							<div class="switch">
								<input type="checkbox" class="cmn-toggle cmn-toggle-round-flat" name="carousel_lazyload" disabled/>
								<label></label>
							</div>
							<?php
							_e("Enable lazyload of images","wp-google-maps");
							?>
						</div>
						<div>
							<div class="switch">
								<input type="checkbox" class="cmn-toggle cmn-toggle-round-flat" name="carousel_autoheight" disabled/>
								<label></label>
							</div>
							<?php
							_e("Enable autoheight","wp-google-maps");
							?>
						</div>
						<div>
							<div class="switch">
								<input type="checkbox" class="cmn-toggle cmn-toggle-round-flat" name="carousel_pagination" disabled/>
								<label></label>
							</div>
							<?php
							_e("Enable pagination","wp-google-maps");
							?>
						</div>
						<div>
							<div class="switch">
								<input type="checkbox" class="cmn-toggle cmn-toggle-round-flat" name="carousel_navigation" disabled/>
								<label></label>
							</div>
							<?php
							_e("Enable navigation","wp-google-maps");
							?>
						</div>
						<div>
							<div class="switch">
								<input type="checkbox" class="cmn-toggle cmn-toggle-round-flat" name="carousel_loop" disabled/>
								<label></label>
							</div>
							<?php
							_e("Enable loop","wp-google-maps");
							?>
						</div>
						<div>
							<input type="number" name="carousel_items" min="1" value="5" disabled/>
							<label></label>
							<?php
							_e("Items","wp-google-maps");
							?>
						</div>
						<div>
							<input type="number" name="carousel_autoplay" min="1" disabled/>
							<?php
							_e("Autoplay after x milliseconds (1000 = 1 second)", "wp-google-maps");
							?>
						</div>
					</div>
				</fieldset>
			</div>
			<div id="advanced" data-wpgmza-wp-filter-prepend="wpgmza_map_settings_advanced_prepend" data-wpgmza-wp-filter-append="wpgmza_map_settings_advanced_append">
				<h3>
					<?php
					_e("Advanced Settings","wp-google-maps");
					?>
				</h3>
				<h4>
					<?php
					_e("Google Maps API Key","wp-google-maps");
					?>
				</h4>
				<fieldset>
					<label>
						<?php
						_e('Google Maps API Key (required)', 'wp-google-maps');
						?>
					</label>
					<input name="google_maps_api_key"/>
				</fieldset>

				<h4>
					<?php
					_e("Custom CSS","wp-google-maps");
					?>
				</h4>
				<fieldset>
					<label>
						<?php
						_e("Custom CSS","wp-google-maps");
						?>
					</label>
					<!-- TODO: v6 calls stripslashes on custom_css, is this still necessary? Might need to do it at migration stage -->
					<textarea name="custom_css"></textarea>
				</fieldset>

				<h4>
					<?php
					_e("Custom JavaScript","wp-google-maps");
					?>
				</h4>
				
				<fieldset>
					<label>
						<?php
						_e("Custom JavaScript","wp-google-maps");
						?>
					</label>
					<textarea name="custom_js"></textarea>
				</fieldset>
				<fieldset>
					<label>
						<?php
						_e("Custom JavaScript Dependencies","wp-google-maps");
						?>
					</label>
					<div>
						<input name="custom_js_dependencies" />
						<br/>
						<small>
							<?php
							_e('Comma separated script handles', 'wp-google-maps');
							?>
						</small>
					</div>
				</fieldset>
				
				<fieldset>
					<label>
						<?php
						_e("Use Legacy HTML", "wp-google-maps");
						?>
					</label>
					<div>
						<input name="use_legacy_html" type="checkbox"/>
						<div>
							<?php
							_e('Use this setting if you have been using Custom CSS for earlier versions of WP Google Maps and would like to preserve the plugins appearance', 'wp-google-maps');
							?>
						</div>
					</div>
				</fieldset>
				
				<fieldset>
					<label>
						<?php
						_e("Always load scripts", "wp-google-maps");
						?>
					</label>
					<div>
						<input name="always_load_scripts" type="checkbox"/>
						<div>
							<?php
							_e('Use this setting if you have any pages which my load the map as part of an AJAX call. The scripts will need to be loaded in order for the map to load', 'wp-google-maps');
							?>
						</div>
					</div>
				</fieldset>
				
				<fieldset>
					<label>
						<?php
						_e("Developer mode", "wp-google-maps");
						?>
					</label>
					<div>
						<input name="developer_mode" type="checkbox"/>
						<div>
							<?php
							_e('Disable Friendly Errors and allow the development tools to catch the error instead. This setting is intended for developers only', 'wp-google-maps');
							?>
						</div>
					</div>
				</fieldset>
				
			</div>
		</div>
		
		<input type='submit' class='button-primary' value='<?php _e("Save Settings","wp-google-maps"); ?> &raquo;' />
	</form>
</div>