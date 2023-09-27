<?php

$id = $_GET["id"];
session_start();
$user_id = $_SESSION['id'];

if ($user_id) {
  include "../services/conexion.php";
  include "../services/favorites.php";


  agregarLibroFavorito($user_id, $id);
}

header("Location: ./index.php");
