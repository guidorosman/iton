<?php

function formatDate($date){
	$timestamp = strtotime($date);
	$months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

	$day = date('d', $timestamp);
	$month = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$date = $day . ' ' . $months[$month] . '  ' . $year;
	return $date;
}

function cleanData($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function idArticle($id){
	return (int)cleanData($id);
}

function checkSession(){
	if (isset($_SESSION['admin'])) {
        return true;
	}else{
        return false;
    }
}

function cantPages($articles_per_page, $conn){
	$cantArticles = $conn->prepare('SELECT FOUND_ROWS() as total');
	$cantArticles->execute();
	$cantArticles = $cantArticles->fetch()['total'];

	$cantPages = ceil($cantArticles / $articles_per_page);
	return $cantPages;
}

function currentPage(){
	return isset($_GET['p']) ? (int)$_GET['p']: 1; 
}

?>