<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <style>
    .notification {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      padding: 10px;
      background-color: #28a745;
      color: #ffffff;
      text-align: center;
      display: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Registrar País</h2>
            <form id="paisForm" class="ajax-form" method="POST" action="../conexion/cargapais.php">
              <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required />
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

  <div class="notification" id="notificationMessage"></div>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".ajax-form").submit(function(event) {
        event.preventDefault();
        $.ajax({
          type: "POST",
          url: $(this).attr("action"),
          data: $(this).serialize(),
          success: function(response) {
            $("#notificationMessage").text(response).show();
            setTimeout(function() {
              $("#notificationMessage").fadeOut();
            }, 3000);
            setTimeout(function() {
              window.location.href = "../mantenimiento/pais.php";
            }, 2000);
          },
          error: function(xhr, status, error) {
            console.log("Error al enviar la solicitud: " + status + ", " + error);
          }
        });
      });
    });
  </script>
</body>
</html>
