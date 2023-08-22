<?php session_start();
require 'config.php';
require '../functions.php';
require '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$title = cleanData($_POST['title']);
	$extract = cleanData($_POST['extract']);
	$text = $_POST['text'];
	$id = cleanData($_POST['id']);
	$image_saved = $_POST['image'];
	$image = $_FILES['image'];

	if (empty($image['name'])) {
		$image = $image_saved;
	} else {
		$file_upload = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

		move_uploaded_file($_FILES['image']['tmp_name'], $file_upload);
		$image = $_FILES['image']['name'];

	}

	$statement = $conn->prepare('UPDATE articles SET title = :title, extract = :extract, text = :text, image = :image WHERE id = :id');
	$statement->execute(array(
		':title' => $title,
		':extract' => $extract,
		':text' => $text,
		':image' => $image,
		':id' => $id
	));

	header("Location: " . RUTA . '/admin');
} else {

	$idArticle = idArticle($_GET['id']);

    $stmt = $conn->prepare("SELECT * FROM articles WHERE id=:id");
    $stmt->execute(['id' => $idArticle]);
    $article = $stmt->fetch();

    if (!$article) {
        header('Location: ' . RUTA . '/admin/index.php');
    }
}

require '../views/edit.view.php';

?>