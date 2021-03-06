<?php
include('./config/config.php');

include './environment/envParser.php';
    (new DotEnv(__DIR__ . '/.env'))->load();

$currentPage = $pages['/'];

if (isset($_GET['page'])) {
	if (isset($pages[$_GET['page']]) && file_exists("./src/pages/{$pages[$_GET['page']]['file']}.php")) {
		$currentPage = $pages[$_GET['page']];
	}

	else { 
		$currentPage = $not_found_page;
		header("HTTP/1.0 404 Not Found");
	}
}

include('./src/pages/index.php');
