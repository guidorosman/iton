<?php
session_start(); 
require 'db.php';
require 'functions.php';
require 'admin/config.php';

$start = (currentPage() > 1) ? (currentPage() * $blog_config['articles_per_page'] - $blog_config['articles_per_page']) : 0;

$stmt = $conn->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articles LIMIT {$start}, {$blog_config['articles_per_page']}");
$stmt->execute();
$articles = $stmt->fetchAll();

require 'views/index.view.php';

?>