<?php 
session_start();
require 'db.php';
require 'functions.php';
require 'admin/config.php';

$idArticle = idArticle($_GET['id']);

$stmt = $conn->prepare("SELECT * FROM articles WHERE id=:id");
$stmt->execute(['id' => $idArticle]);
$article = $stmt->fetch();

if (!$article) {
	header('Location: index.php');
}

require 'views/single.view.php';

?>