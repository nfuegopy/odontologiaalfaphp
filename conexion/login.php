<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    var_dump($_POST);  // Para depurar las variables POST

    $nombre_usuario = $_POST['username'];
    $contrasena = $_POST['password'];

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

    echo 'Conexión exitosa';  // Para depurar la conexión

    // Preparamos la consulta SQL para obtener las credenciales del usuario
    $sql = "SELECT nombre, contrasena FROM usuario WHERE nombre = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $nombre_usuario);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo 'Consulta exitosa';  // Para depurar la consulta
        $row = $result->fetch_assoc();
        $hash_contrasena = $row['contrasena'];

        // Verificamos las credenciales
        if (password_verify($contrasena, $hash_contrasena)) {
            var_dump(password_verify($contrasena, $hash_contrasena));  // Para depurar la verificación de la contraseña

            // Credenciales válidas, iniciar la sesión y redireccionar al menú
            $_SESSION['username'] = $nombre_usuario;
            header('Location: ../componentes/menu.php');
            exit;
        }
    }

    // Credenciales inválidas, redireccionar de nuevo al inicio de sesión con mensaje de error
    $conn->close();
    header('Location: index.php?error=1');
    exit;
}
?>
