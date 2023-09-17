<?php
include "./conexion.php";



function registerUser($username, $password, $email)
{
  $conn = conexion();

  // Verificar si el usuario ya existe en la base de datos
  $sql = "SELECT id FROM usuarios WHERE username = ? OR email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $username, $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    return "El usuario o el correo electrónico ya están registrados.";
  }

  // Insertar el nuevo usuario en la base de datos
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  $sql = "INSERT INTO usuarios (username, password, email) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $username, $hashedPassword, $email);

  if ($stmt->execute()) {
    return "Registro exitoso.";
  } else {
    return "Error al registrar el usuario.";
  }
}

function loginUser($username, $password)
{
  $conn = conexion();

  // Buscar el usuario en la base de datos
  $sql = "SELECT id, username, password FROM usuarios WHERE username = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row["password"])) {
      return "Inicio de sesión exitoso. ¡Bienvenido, " . $row["username"] . "!";
    } else {
      return "Contraseña incorrecta.";
    }
  } else {
    return "Usuario no encontrado.";
  }
}
