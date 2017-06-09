<?php

namespace WPGMZA;

require_once(WPGMZA_DIR . 'php/class.admin-page.php');

use Smart;

class MapListPage extends AdminPage
{
	public function __construct()
	{
		AdminPage::__construct();
		
		global $wpdb;
		global $WPGMZA_TABLE_NAME_MAPS;
		global $WPGMZA_MAP_TYPES;
		
		Plugin::$statistics->touch('list_maps_basic');
		
		$this->loadPHPFile(WPGMZA_DIR . 'html/map-list-page.html');
		
		// Feedback thank you
		if(!(isset($_COOKIE['wpgmza_feedback_thanks']) && $_COOKIE['wpgmza_feedback_thanks'] == 'true')
			&& $elem = $this->querySelector('#feedback-thanks')
			)
			$elem->remove();
		
		// List of maps
		$results = $wpdb->get_results("SELECT id, title, settings FROM $WPGMZA_TABLE_NAME_MAPS ORDER BY `id` DESC");
		
		$container = $this->querySelector('.wpgmza-listing>tbody');
		
		$template = $container->querySelector('tr.template');
		$template->remove();
		
		foreach($results as $item)
		{
			$item->settings = json_decode($item->settings);
			
			if(isset($item->settings->width))
				$item->width = $item->settings->width;
			if(isset($item->settings->height))
				$item->height = $item->settings->height;
			
			if(isset($item->settings->type))
				$item->type = $WPGMZA_MAP_TYPES[$item->settings->type];
			
			$item->shortcode = "[wpgmza id=\"{$item->id}\"]";
			
			$row = $template->cloneNode(true);
			$row->populate($item);
			
			foreach($row->querySelectorAll('a') as $a)
			{
				$a->setAttribute('href', '?page=wp-google-maps-menu&action=edit&map_id=' . $item->id);
				$a->setAttribute('title', __("Edit","wp-google-maps"));
				
				if($a->hasClass('title'))
					$a->appendText(stripslashes($item->title));
				else
					$a->appendText(__("Edit","wp-google-maps"));
			}
			
			$container->appendChild($row);
		}
	}
}

?>