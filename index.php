<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Login</h2>
            <?php
              // Mostrar mensaje de error si es necesario
              if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo '<div class="alert alert-danger">Credenciales inválidas. Por favor, intenta de nuevo.</div>';
              }
            ?>
           <form action="conexion/login.php" method="POST">
  <div class="form-group">
    <label for="username">Nombre de usuario:</label>
    <input type="text" class="form-control" id="username" name="username" required />
  </div>
  <div class="form-group">
    <label for="password">Contraseña:</label>
    <input type="password" class="form-control" id="password" name="password" required />
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
  </div>
</form>
          </div>
        </div>
      </div>
