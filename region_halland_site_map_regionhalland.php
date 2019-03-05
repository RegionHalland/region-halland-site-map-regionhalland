<?php

	/**
	 * @package Region Halland Site Map RegionHalland
	 */
	/*
	Plugin Name: Region Halland Site Map RegionHalland
	Description: Specialsida för att generera en site-map
	Version: 1.0.0
	Author: Roland Hydén
	License: MIT
	Text Domain: regionhalland
	*/

	function my_plugin_site_map_regionhalland($links) { 

		$links = array_merge( array( 
	 		'<a href="' . esc_url(plugins_url( '/region-halland-site-map-regionhalland/site-map/site-map.php' ) ) . '">' . __( 'Visa site-map', 'regionhalland') . '</a>'), $links ); 
	return $links; 
	}

	add_action( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'my_plugin_site_map_regionhalland'); 

	
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
?>