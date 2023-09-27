<?php

$id = $_GET["id"];

include "../services/conexion.php";
include "../services/book.php";

$book = getBookById($id);

if ($book !== null) {
  $book_title = $book["title"];
  $book_pdf = $book["pdf_url"];
} else {
  header("Location: ./404.php");
}

?>



<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $book_title ?></title>
  <style>
    iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
    }
  </style>
</head>

<body>
  <?php
  // Ruta al archivo PDF que deseas mostrar
  $pdfFilePath = '../assets/books/' . $book_pdf;

  // Comprueba si el archivo PDF existe
  if (file_exists($pdfFilePath)) {
    echo '<iframe src="' . $pdfFilePath . '" frameborder="0"></iframe>';
  } else {
    echo 'El archivo PDF no se encontró.';
  }
  ?>
</body>

</html>