<?php 
	
	$strPath = "../../../../wp/wp-load.php";
	
	require_once $strPath;

	echo "Sökväg till wp-load.php = " . $strPath . "<br>";
	
	$strBlogName = get_bloginfo('name');
	echo "Namn på siten = " . $strBlogName;

?>