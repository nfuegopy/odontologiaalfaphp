<!-- ciudad.php -->
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <h2>Registro de Ciudad</h2>
    <form action="../conexion/guardar_ciudad.php" method="POST">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="form-group">
        <label for="pais_id">País:</label>
        <select class="form-control" name="pais_id" required>
      
          <?php
          include_once "../conexion/cargar_pais.php";
          foreach ($paises as $pais) {
              echo '<option value="' . $pais['id'] . '">' . $pais['nombre'] . '</option>';
          }
          ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</body>
</html>
