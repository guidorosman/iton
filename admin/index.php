<?php session_start();
require '../db.php';
require '../functions.php';
require 'config.php';

$session = checkSession();
if (!$session){
    header('Location: ' . RUTA);
}

$stmt = $conn->prepare("SELECT * FROM articles");
$stmt->execute();
$articles = $stmt->fetchAll();

require '../views/admin_index.view.php';
?>