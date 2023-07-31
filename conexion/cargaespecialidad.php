<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "odontologia";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $sql = "INSERT INTO especialidad (nombre) VALUES ('$nombre')";
    if ($conn->query($sql) === TRUE) {
        echo 'Especialidad creada correctamente';
    } else {
        echo '<script>alert("Error al crear la especialidad: ' . $conn->error . '");</script>';
    }
    $conn->close();
}
?>
