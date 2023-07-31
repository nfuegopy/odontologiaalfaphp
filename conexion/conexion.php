<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "odontologia";

// Establecer conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
