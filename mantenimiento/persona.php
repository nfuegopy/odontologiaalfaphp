<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
   <link rel="stylesheet" href="..\css\bootstrap.min.css">

  <style>
  
    body {
      background-color: #f8f9fa;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    .card-title {
      font-size: 28px;
      color: #007bff;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
  </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Crear Persona</h2>
            <form action="guardar_persona.php" method="POST">
              <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required />
              </div>
              <div class="form-group">
                <label for="cargo">Cargo:</label>
                <input type="text" class="form-control" name="cargo" />
              </div>
              <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <select class="form-control" name="ciudad">
                  <option value="1">Ciudad A</option>
                  <option value="2">Ciudad B</option>
                  <!-- Agrega más opciones según tus datos de ciudades -->
                </select>
              </div>
              <div class="form-group">
                <label for="usuario">Usuario:</label>
                <select class="form-control" name="usuario">
                  <option value="1">Usuario A</option>
                  <option value="2">Usuario B</option>
                  <!-- Agrega más opciones según tus datos de usuarios -->
                </select>
              </div>
              <div class="form-group">
                <label for="especialidad">Especialidad:</label>
                <select class="form-control" name="especialidad">
                  <option value="1">Especialidad A</option>
                  <option value="2">Especialidad B</option>
                  <!-- Agrega más opciones según tus datos de especialidades -->
                </select>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

