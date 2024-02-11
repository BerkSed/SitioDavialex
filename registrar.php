<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];
    $telefono = $_POST['telefono'];

    // Verificar si las contraseñas coinciden
    if ($contrasena != $confirmar_contrasena) {
        echo "Las contraseñas no coinciden";
        exit;
    }

    // Hash de la contraseña
    $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

    // Insertar datos en la tabla "login"
    $sql_login = "INSERT INTO login (email, password, tipo_Usuario) VALUES ('$correo', '$contrasena_hash', 'Usuario')";

    if ($conn->query($sql_login) === TRUE) {
        // Insertar datos en la tabla "usuarios"
        $sql_usuarios = "INSERT INTO usuario (nombre, apellidos, fecha_Registro, telefono, habilitado, login_email) VALUES ('$nombre', '$apellidos',NOW(),'$telefono', 'Si', '$correo')";

            if ($conn->query($sql_usuarios) === TRUE) {
                // Usuario registrado exitosamente
                $mensaje = "Usuario registrado exitosamente";
            } else {
                $mensaje = "Error al registrar el usuario en la tabla 'usuarios': " . $conn->error;
            }
        } else {
            $mensaje = "Error al registrar el usuario en la tabla 'login': " . $conn->error;
        }

    // Cerrar la conexión
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body>
  <!-- Contenido de tu página aquí -->
  
  <?php include 'modal.php'; ?>
</body>
</html>