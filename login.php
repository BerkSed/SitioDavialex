<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>login</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
  </head>
  <style>
    .bg-mitad {
      background: linear-gradient(to bottom, #212529 50%, #fff 50%);
    }
  </style>
  <body
    class="bg-mitad d-flex align-items-center justify-content-center vh-100"
  >
    <div class="card fw-bolder" style="width: 25rem">
      <div class="card-body">
        <div class="text-center">
          <img src="img/user (1).png" alt="" width="160" class="mx-auto mb-4" />
        </div>
        <form class="">
          <div class="mb-3">
            <label for="usuario" class="fw-bolder form-label">Email:</label>
            <input
              type="text"
              class="form-control"
              id="usuario"
              placeholder="Ingrese su usuario"
            />
          </div>
          <div class="mb-3">
            <label for="contrasena" class="fw-bolder form-label"
              >Contraseña:</label
            >
            <input
              type="password"
              class="form-control"
              id="contrasena"
              placeholder="Ingrese su contraseña"
            />
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary fw-bolder">
              Entrar
            </button>
            <div class="mb-3">
              <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
          </div>
        </form>
        <div></div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
