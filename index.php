<?php
include('./config/config.php');

$currentPage = $pages['/'];

if (isset($_GET['page'])) {
	if (isset($pages[$_GET['page']]) && file_exists("./src/pages/{$pages[$_GET['page']]['file']}.php")) {
		$currentPage = $pages[$_GET['page']];
	}

	else { 
		$currentPage = $hiba_oldal;
		header("HTTP/1.0 404 Not Found");
	}
}

include('./src/pages/index.php'); 
?>