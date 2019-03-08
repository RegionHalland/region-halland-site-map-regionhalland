<?php 
	
	define('ROOTPATH', __DIR__);
	$arrPath = explode("app",ROOTPATH);
	$strPath = $arrPath[0] . "wp\wp-load.php";
	
	require_once $strPath;

	echo "Sökväg till wp-load.php = " . $strPath . "<br>";
	
	$strBlogName = get_bloginfo('name');
	echo "Namn på siten = " . $strBlogName;

?>