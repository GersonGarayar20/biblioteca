<?php
function getAllBooks()
{
  global $conn;

  $sql = "SELECT * FROM books";
  $result = $conn->query($sql);

  $libros = array();

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $libros[] = $row;
    }
  }

  return $libros;
}

function getBookById($id)
{
  global $conn;
  // Sanitizar la entrada para evitar SQL injection
  $id = $conn->real_escape_string($id);

  $sql = "SELECT * FROM books WHERE id = '$id'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $libro = $result->fetch_assoc();
    return $libro;
  } else {
    return null; // No se encontró ningún libro con el ID especificado
  }
}

function searchBooks($termino)
{
  global $conn;
  // Sanitizar la entrada para evitar SQL injection
  $termino = $conn->real_escape_string($termino);

  $sql = "SELECT * FROM books WHERE 
          title LIKE '%$termino%' OR
          author LIKE '%$termino%' OR
          editorial LIKE '%$termino%'";

  $result = $conn->query($sql);

  $libros = array();

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $libros[] = $row;
    }
  }

  return $libros;
}
