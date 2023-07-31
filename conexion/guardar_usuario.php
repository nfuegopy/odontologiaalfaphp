<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtenemos los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $confirmar_contrasena = $_POST["confirmar_contrasena"];
    $role_id = $_POST["role"];

    // Verificar si las contraseñas coinciden
    if ($contrasena !== $confirmar_contrasena) {
        echo "Las contraseñas no coinciden.";
        exit;
    }

    // Encriptar la contraseña antes de guardar
    $hashed_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

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

    // Preparar la consulta SQL para guardar el usuario
    $stmt = $conn->prepare("INSERT INTO usuario (nombre, correo, contrasena, role_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $nombre, $correo, $hashed_contrasena, $role_id);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Usuario creado correctamente.";
    } else {
        echo "Error al crear el usuario: " . $conn->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>
