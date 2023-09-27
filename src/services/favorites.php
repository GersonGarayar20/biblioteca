<?php

function agregarLibroFavorito($user_id, $book_id)
{
  global $conn;
  // Sanitizar la entrada para evitar SQL injection
  $user_id = $conn->real_escape_string($user_id);
  $book_id = $conn->real_escape_string($book_id);

  $sql = "INSERT INTO favorites (user_id, book_id) VALUES ('$user_id', '$book_id')";

  if ($conn->query($sql) === TRUE) {
    return true; // El libro se agregó a la lista de favoritos
  } else {
    return false; // Error al agregar el libro a la lista de favoritos
  }
}

function obtenerLibrosFavoritos($user_id)
{
  global $conn;
  // Sanitizar la entrada para evitar SQL injection
  $user_id = $conn->real_escape_string($user_id);

  $sql = "SELECT books.* FROM books
          JOIN favorites ON books.id = favorites.book_id
          WHERE favorites.user_id = '$user_id'";

  $result = $conn->query($sql);

  $librosFavoritos = array();

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $librosFavoritos[] = $row;
    }
  }

  return $librosFavoritos;
}
