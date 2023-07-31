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

    $sql = "INSERT INTO role (nombre) VALUES ('$nombre')";

    if ($conn->query($sql) === TRUE) {
    
        echo 'Rol creado correctamente';

    } else {
      
        echo '<script>alert("Error al crear el rol: ' . $conn->error . '");</script>';
    }

 
    $conn->close();
}
?>
