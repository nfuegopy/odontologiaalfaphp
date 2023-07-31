<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="notification alert alert-success" id="notificationMessage" style="display: none;"></div>

  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Crear Usuario</h2>
            <form id="userForm" class="ajax-form" method="POST" action="../conexion/guardar_usuario.php">
              <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required />
              </div>
              <div class="form-group">
                <label for="correo">Correo electrónico:</label>
                <input type="email" class="form-control" name="correo" required />
              </div>
              <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" class="form-control" name="contrasena" required />
              </div>
              <div class="form-group">
                <label for="confirmar_contrasena">Confirmar Contraseña:</label>
                <input type="password" class="form-control" name="confirmar_contrasena" required />
              </div>
              <div class="form-group">
                <label for="role">Rol:</label>
                <select class="form-control" name="role" id="roleSelect">
                 
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


<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    // Cargar los roles desde carga_roles.php y generar las opciones del select
    $.ajax({
      type: "GET",
      url: "../conexion/carga_roles.php",
      dataType: "json",
      success: function(roles) {
        var options = '';
        roles.forEach(function(role) {
          options += '<option value="' + role.id + '">' + role.nombre + '</option>';
        });
        $("#roleSelect").html(options);
      },
      error: function(xhr, status, error) {
        console.log("Error al cargar los roles: " + status + ", " + error);
      }
    });

    // Enviar el formulario a través de AJAX
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
            window.location.href = "../mantenimiento/usuario.php";
          }, 2000);
        },
        error: function(xhr, status, error) {
          // Mostrar la notificación de error similar al formulario de creación de roles
          $("#notificationMessage").text("Error al enviar la solicitud: " + status + ", " + error).removeClass("alert-success").addClass("alert-danger").show();
          setTimeout(function() {
            $("#notificationMessage").fadeOut();
          }, 3000);
        }
      });
    });
  });
</script>


</body>
</html>
