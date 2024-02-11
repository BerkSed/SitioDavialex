<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DAVIALEX | Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    <!-- icheck bootstrap -->
    <link
      rel="stylesheet"
      href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />
    <!-- Theme style -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <style>
      .bg-mitad {
        background: linear-gradient(to bottom, #212529 50%, #fff 50%);
      }
    </style>
  </head>
  <body class="bg-mitad hold-transition login-page">
    <div class="login-box">
      <div class="login-logo fw-bolder">
        <a class="text-warning" href="index.html">DAVIALEX</a>
      </div>
      <!-- /.login-logo -->
      <div class="card text-center">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Inicia sesión para iniciar</p>

          <form action="validar.php" method="get">
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email" id="email" name="email"required  />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input
                type="password"
                class="form-control"
                placeholder="Password"
                id="pass"
                name="pass"
                required
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="text-center">
                <button
                  type="submit"
                  class="btn btn-warning btn-block fw-bolder"
                >
                  Entrar
                </button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <!-- /.social-auth-links -->

          <p class="mb-1">
            <a href="recuperar.php">¿Se te olvido tu contraseña?</a>
          </p>
          <p class="mb-0">
            <a href="register.php" class="text-center">Resgistrar</a>
          </p>
          <a class="btn btn-warning" href="index.html"
            ><i class="fa-solid fa-arrow-left"></i> Regresar</a
          >
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>

    <!-- Modal de error -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Error de inicio de sesión</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Email o contraseña incorrectos. Inténtalo de nuevo.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script>
      function reloadPage() {
        location.reload();
      }

      $(document).ready(function () {
        const modal = $('#errorModal');

        if (window.location.hash === '#modal') {
          modal.modal('show');
        }

        // Redirigir a login.php cuando se haga clic fuera del modal o en el botón de cierre
        $(document).on('click', function (e) {
          if ($(e.target).is(modal) && modal.hasClass('show')) {
            modal.modal('hide');
            window.location.href = 'login.php';
          }
        });

        const closeButton = modal.find('[data-dismiss="modal"]');
        closeButton.on('click', function () {
          modal.modal('hide');
          window.location.href = 'login.php';
        });
      });
    </script>
  </body>
</html>
