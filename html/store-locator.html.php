<div class="store-locator" data-wpgmza-layout-element="store-locator" data-wpgmza-wp-filter-prepend="wpgmza_map_store_locator_container_prepend" data-wpgmza-wp-filter-append="wpgmza_map_store_locator_container_append">
	<fieldset>
		<label name="store_locator_query_string"></label>
		<div>
			<input name="store_locator_address"/>
			<button 
				data-wpgmza-wp-filter="wpgmza_use_my_location_text_filter" 
				id="sl_use_my_location_2" 
				class="sl_use_loc wpgmza-use-my-location wpgmza-pro-version-only" 
				type="button"
				mid="2" 
				title="<?php _e('Use my location', 'wp-google-maps'); ?>">
				<i class="fa fa-crosshairs" aria-hidden="true"></i>
			</button>
			
			<p class="error" data-wpgmza-wp-filter="wpgmza_store_locator_error_filter" >
				<i class="fa fa-ban" aria-hidden="true"></i>
				<?php
				_e("Sorry, we couldn't find that address", "wp-google-maps");
				?>
			</p>
			<p class="no-results">
				<i class="fa fa-info-circle" aria-hidden="true"></i>
				<span name="store_locator_not_found_message"/>
			</p>
		</div>
	</fieldset>
	<fieldset class="wpgmza-pro-version-only wpgmza_store_locator_title_search">
		<label name="store_locator_name_string"></label>
		<input name="store_locator_title_search_term"/>
	</fieldset>
	<fieldset class="store_locator_radius">
		<label data-wpgmza-wp-filter="wpgmza_radius_label_filter" >
			<?php _e('Radius', 'wp-google-maps'); ?>:
		</label>
		<div>
			<input name="store_locator_radius" type="number" min="1" max="300" value="10"/>
			<span class="store_locator_radius_units"/>
		</div>
	</fieldset>
	<fieldset>
		<label></label>
		<button type="button" class="button button-primary wpgmza-submit" data-wpgmza-wp-filter="wpgmza_store_locator_search_button_text_filter" >
			<?php _e('Search', 'wp-google-maps'); ?>
		</button>
		<button type="button" class="button button-primary wpgmza-reset" data-wpgmza-wp-filter="wpgmza_store_locator_reset_button_text_filter" >
			<?php _e('Reset', 'wp-google-maps'); ?>
		</button>
	</fieldset>
</div>