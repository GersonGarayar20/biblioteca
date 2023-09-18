<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "biblioteca";
$port = "3307";

$conn = new mysqli($hostname, $username, $password, $database, $port);

if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
