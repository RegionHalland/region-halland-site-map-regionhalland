<?xml version="1.0" encoding="UTF-8"?>
<?php 
	
	define('ROOTPATH', __DIR__);
	$arrPath = explode("app",ROOTPATH);
	$strPath = $arrPath[0] . "\wp\wp-load.php";
	
	require_once $strPath;

	$args = array(
		'sort_order' => 'asc',
		'sort_column' => 'post_title',
		'hierarchical' => 1,
		'exclude' => '',
		'include' => '',
		'meta_key' => '',
		'meta_value' => '',
		'authors' => '',
		'child_of' => 0,
		'parent' => -1,
		'exclude_tree' => '',
		'number' => '',
		'offset' => 0,
		'post_type' => 'page',
		'post_status' => 'publish'
	);
	$myPages = get_pages($args);
?>	
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
	foreach ($myPages as $page) {
	 	$strPermaLink = get_permalink($page->ID);
	?>
	<url>
      <loc><?=$strPermaLink?></loc>
   </url>
	<?php } 
?>
</urlset>