<?php
function conexion()
{
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $database = "threeds";
  $port = "3306";

  $mysqli = new mysqli($hostname, $username, $password, $database, $port);

  if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
  }

  return $mysqli;
}
