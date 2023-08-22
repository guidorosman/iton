<?php 
session_start();
require '../db.php';
require '../functions.php';
require 'config.php';

checkSession();

// Comprobamos si los datos han sido enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$title = cleanData($_POST['title']);
	$extract = cleanData($_POST['extract']);
	// Con la funcion nl2br podemos transformar los saltos de linea en etiquetas <br>
	$text = $_POST['text'];
	$image = $_FILES['image']['tmp_name'];

	// Direccion final del archivo incluyendo el nombre
	# Importante recordar que este archivo se encuentra dentro de la carpeta admin, asi que
	# tenemos que concatenar al inicio '../' para bajar a la raiz de nuestro proyecto.
	$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['image']['name'];
	
	// Subimos el archivo
	move_uploaded_file($image, $archivo_subido);

	$stmt = $conn->prepare(
		'INSERT INTO articles (title, extract, text, image) 
		VALUES (:title, :extract, :text, :image)'
	);
	
	$stmt->execute(array(
		':title' => $title,
		':extract' => $extract,
		':text' => $text,
		':image' => $_FILES['image']['name']
	));
	
	header('Location: ' . RUTA . '/admin');
}

require '../views/create.view.php';

?>