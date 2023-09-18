<?php

function registerUser($username, $password, $email)
{
  global $conn;

  // Verificar si el usuario ya existe en la base de datos
  $sql = "SELECT id FROM usuarios WHERE nombre = ? OR email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $username, $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    return false;
  }

  // Insertar el nuevo usuario en la base de datos
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  $sql = "INSERT INTO usuarios (nombre, contraseña, email) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $username, $hashedPassword, $email);

  if ($stmt->execute()) {
    return true;
  } else {
    return false;
  }
}

function loginUser($username, $password)
{
  global $conn;

  // Buscar el usuario en la base de datos
  $sql = "SELECT id, username, password FROM usuarios WHERE username = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row["password"])) {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}
