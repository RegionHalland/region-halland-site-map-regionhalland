<?php

	/**
	 * @package Region Halland Site Map RegionHalland
	 */
	/*
	Plugin Name: Region Halland Site Map RegionHalland
	Description: Specialsida för att generera en site-map
	Version: 1.3.0
	Author: Roland Hydén
	License: GPL-3.0
	Text Domain: regionhalland
	*/

	add_filter('plugin_row_meta',  'my_plugin_site_map_regionhalland', 10, 2);
	
	function my_plugin_site_map_regionhalland ($links, $file) {
       $base = plugin_basename(__FILE__);
       if ($file == $base) {
               $links[] = '<a href="' . esc_url(plugins_url( '/region-halland-site-map-regionhalland/site-map/site-map.php' ) ) . '">' . __( 'Visa xml-site-map', 'regionhalland') . '</a>';
       }
       return $links;
    }
	
	// Metod som anropas när pluginen aktiveras
	function region_halland_site_map_regionhalland_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_site_map_regionhalland_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_site_map_regionhalland_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_site_map_regionhalland_deactivate');

?>