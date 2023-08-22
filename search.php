<?php 
session_start();
require 'admin/config.php';
require 'functions.php';
require 'db.php';


// Comprobamos que haya contenido en GET
if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['search'])){
	$search = cleanData($_GET['search']);

	$stmt =$conn->prepare(
		"SELECT * FROM articles WHERE title LIKE :search or text Like :search"
	);
	$stmt->execute(array(':search' => "%$search%"));

	$results = $stmt->fetchAll();
	
	if (empty($results)) {
		$title = 'No articles found: ' . $search;
	} else {
		$title = 'Search results: ' . $search;
	}

} else {
	header('Location:' . RUTA . '/index.php');
}

require 'views/search.view.php';

?>