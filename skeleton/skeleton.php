<?php

class skeleton {

	function __construct() {
		/* MAINTENANCE SITE */
		$maintenance = false; 
		if ($maintenance == true) {
			if (file_exists('web/pag/maintenance.php')) {
				require_once 'web/pag/maintenance.php'; 
			} else {			
				require_once __DIR__.'/pag/maintenance.php'; 
			} 
			die();
		}
		/* GET PAGE */
		if (isset($_GET['page'])) {
			$page = urlencode($_GET['page']); 
		} else {
			$page = 'home'; 
		}
		if (!file_exists('web/pag/'.$page.'.php')) {
			if (!file_exists(__DIR__.'/pag/'.$page.'.php')) {
				$page = 'error';
			}
		}
		/* MYSQLI CONNECTION */
		if (!file_exists('web/.config/mysql-db.php')) {
			die('Database file configuration don´t exists');
		}
		$conn = file('web/.config/mysql-db.php', FILE_IGNORE_NEW_LINES);
		$mysqli = new mysqli($conn[0], $conn[1], $conn[2], $conn[3]);
		if($mysqli->connect_error) { 
			die('Database connection error'); 
		}
		$mysqli->set_charset($conn[5]);
		/*
		Include
		*/
		$sql_page = $mysqli->query("SELECT * FROM web_pages WHERE page = '$page' ") OR die('Database page error');
		$row_page = $sql_page->fetch_assoc();
		require __DIR__.'/inc/head.php';
		require __DIR__.'/inc/header.php';
		require __DIR__.'/inc/section.php';
		if (file_exists('web/pag/'.$page.'.php')) {
			include 'web/pag/'.$page.'.php';
		} else {
			include __DIR__.'/pag/'.$page.'.php';
		}
		require __DIR__.'/inc/footer.php';
		$mysqli->close();
		return;
	}

}
?>