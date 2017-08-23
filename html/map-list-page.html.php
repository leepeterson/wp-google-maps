<div>
	<h2>
		<?php
		_e("My Maps",'wp-google-maps');
		?>
	</h2>
	
	<form method="POST">
		<input type="hidden" name="action" value="new"/>
		<input type="submit" value="<?php
			_e('Add New', 'wp-google-maps');
			?>" class="add-new-h2 wpgmza-pro-version-only"/>
			
		<a href="admin.php?page=wp-google-maps-menu&amp;action=wizard" class="add-new-h2 wpgmza-pro-version-only">
			<?php
			_e('Wizard', 'wp-google-maps');
			?>
		</a>
	</form>
	
	<div id="warning-container"></div>
	<div id="nag-container"></div>
	
	<div id="feedback-thanks" class="wpgm_notice_message">
		<?php
		_e("Thank you for your feedback!", "wp-google-maps");
		?>
	</div>
	
	<p class="wpgmza_upgrade_nag wpgmza-free-version-only">
		<i>
			<a target="_blank" 
				title="<?php _e('Pro Version', 'wp-google-maps'); ?>" 
				href="<?php 
				echo WPGMZA\Plugin::getProLink(array(
					'utm_source'	=> 'plugin',
					'utm_medium'	=> 'link',
					'utm_campagin'	=> 'mappage_1'
				));
			?>">
				<?php
				_e("Create unlimited maps","wp-google-maps");
				?>
			</a>
			
			<?php
			_e("with the","wp-google-maps");
			?>
			
			<a target="_blank" 
				title="<?php _e('Pro Version', 'wp-google-maps'); ?>" 
				href="<?php 
				echo WPGMZA\Plugin::getProLink(array(
					'utm_source'	=> 'plugin',
					'utm_medium'	=> 'link',
					'utm_campagin'	=> 'mappage_2'
				));
			?>">
				<?php
				_e("Pro Version","wp-google-maps");
				?>
			</a>
			
			<?php
			_e("of WP Google Maps for only","wp-google-maps");
			?>
			
			<strong>$39.99!</strong>
		</i>
	</p>
	
	<table class="wp-list-table widefat fixed wpgmza-listing">
		<thead data-wpgmza-wp-action-before="wpgmza_map_listing_header_before" data-wpgmza-wp-action-after="wpgmza_map_listing_header_after">
			<tr>
				<th scope="col" id="id" class="manage-column column-id sortable desc">
					<?php
					_e("ID","wp-google-maps");
					?>
				</th>
				<th scope="col" id="map_title" class="manage-column column-map_title sortable desc">
					<?php
					_e("Title","wp-google-maps");
					?>
				</th>
				<th scope="col" id="map_width" class="manage-column column-map_width">
					<?php
					_e("Width","wp-google-maps");
					?>
				</th>
				<th scope="col" id="map_height" class="manage-column column-map_height">
					<?php
					_e("Height","wp-google-maps");
					?>
				</th>
				<th scope="col" id="type" class="manage-column column-type sortable desc">
					<?php
					_e("Type","wp-google-maps");
					?>
				</th>
				<th scope="col" id="shortcode" class="manage-column column-type sortable desc">
					<?php
					_e("Shortcode","wp-google-maps");
					?>
				</th>
			</tr>
		</thead>
		<tbody id="the-list" class="list:wp_list_text_link wpgmza-map-list" data-wpgmza-wp-action-before="wpgmza_map_listing_body_after" data-wpgmza-wp-action-after="wpgmza_map_listing_body_after">
			<tr class="template">
				<td name="id"></td>
				<td>
					<strong>
						<big>
							<a class="title"></a>
							<br/>
						</big>
						<a class="edit"></a>
						<span class="wpgmza-pro-version-only">
							|
							<form method="POST" class="wpgmza-trash-map">
								<input type="hidden" name="action" value="trash"/>
								<input type="hidden" name="id"/>
								<input type="submit" value="<?php _e('Trash', 'wp-google-maps'); ?>"/>
							</form>
							|
							<form method="POST">
								<input type="hidden" name="action" value="duplicate"/>
								<input type="hidden" name="id"/>
								<input type="submit" value="<?php _e('Duplicate', 'wp-google-maps'); ?>"/>
							</form>
						</span>
					</strong>
				</td>
				<td name="width"></td>
				<td name="height"></td>
				<td name="type"></td>
				<td>
					<input readonly class="wpgmza_copy_shortcode" name="shortcode"/>
				</td>
			</tr>
		</tbody>
	</table>
	<p style="text-align: right;">
		<a href='http://www.wpgmaps.com/documentation/troubleshooting/'  target='_BLANK' title='<?php _e("WP Google Maps Troubleshooting Section"); ?>'>
			<?php
			_e("Problems with the plugin? See the troubleshooting manual.","wp-google-maps")
			?>
		</a>
	</p>
</div>