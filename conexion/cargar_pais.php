<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "odontologia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT id, nombre FROM pais";
$result = $conn->query($sql);

$paises = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $paises[] = $row;
    }
}

$conn->close();

// Configurar las cabeceras para permitir el acceso CORS desde el archivo usuario.php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

echo json_encode($paises);
?>