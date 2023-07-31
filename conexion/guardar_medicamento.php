<?php
// Verificamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtenemos los datos del formulario
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "odontologia";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificamos si la conexión fue exitosa
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Preparamos la consulta SQL
    $sql = "INSERT INTO medicamento (nombre, descripcion) VALUES ('$nombre', '$descripcion')";

    // Ejecutamos la consulta
    if ($conn->query($sql) === TRUE) {
        // Mostramos la notificación de éxito
        echo 'Medicamento creado correctamente';

    } else {
        // Mostramos la notificación de error
        echo '<script>alert("Error al crear el medicamento: ' . $conn->error . '");</script>';
    }

    // Cerramos la conexión
    $conn->close();
}
?>
