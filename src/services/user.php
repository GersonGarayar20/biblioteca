<?php

function registerUser($username, $password, $email)
{
  global $conn;

  // Verificar si el usuario ya existe en la base de datos
  $sql = "SELECT id FROM users WHERE name = ? OR email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $username, $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    return false; // El usuario ya existe, no se pudo registrar
  }

  // Insertar el nuevo usuario en la base de datos
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  $sql = "INSERT INTO users (name, password, email) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $username, $hashedPassword, $email);

  if ($stmt->execute()) {
    // El usuario se registró exitosamente, obtén los datos del usuario
    $sql = "SELECT * FROM users WHERE name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row; // Devuelve los datos del usuario registrado
    }
  }

  return false; // No se pudo registrar o no se encontraron datos del usuario
}

function loginUser($username, $password)
{
  global $conn;

  // Buscar el usuario en la base de datos
  $sql = "SELECT id, name, password FROM users WHERE name = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row["password"])) {
      return $row;
    } else {
      return false;
    }
  } else {
    return false;
  }
}
