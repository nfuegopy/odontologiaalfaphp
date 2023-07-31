<?php
include('conexion.php');

$nombre = $_POST['nombre'];
$pais_id = $_POST['pais_id'];

$sql = "INSERT INTO ciudad (nombre, pais_id) VALUES (?, ?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$nombre, $pais_id]);

echo 'Ciudad registrada correctamente';
?>
