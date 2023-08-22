<?php
session_start(); 
require 'db.php';
require 'functions.php';
require 'admin/config.php';

if(checkSession()){
    header('Location: admin/');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$user = cleanData($_POST['user']);
	$pass = cleanData($_POST['pass']);
	$pass = hash('sha512', $pass);
  
    $stmt = $conn->prepare('SELECT * FROM users WHERE user = :user AND pass = :pass');
	$stmt->execute(array(':user' => $user,':pass' => $pass));
	$user = $stmt->fetch();

	if ($user !== false) {
		$_SESSION['admin'] = $user['user'];
		header('Location: admin/');
	} else {
		$errores = '<li>Data incorrect</li>';
	}
}

require 'views/login.view.php';

?>