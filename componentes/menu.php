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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Sonrisas Mia Charlotte</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="referencial.php">Referencial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registroconsulta.php">Registro de Consulta</a>
            </li>
          </ul>
          <a class="nav-link" href="index.php" style="margin-right: 4px;">Menú</a>
        </div>
      </div>
    </nav>
    <div class="container mt-4">
    </div>
  </div>
</body>
</html>
