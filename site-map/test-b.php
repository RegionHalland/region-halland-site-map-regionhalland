<?php 
	
	$wp_did_header = true;
  require_once($_SERVER['DOCUMENT_ROOT'] . '/index.php');
  $matches = preg_grep('/wp-blog-header.php/', get_included_files());
  if (!empty($matches)) {
    	$abspath = dirname(reset($matches)) . '/';
    	define('ABSPATH', $abspath);
    	require_once(ABSPATH . 'wp-load.php');
  }
	
	$strBlogName = get_bloginfo('name');
	echo "Namn på siten = " . $strBlogName;

?>