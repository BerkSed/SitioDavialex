<?php
// Incluir el archivo de conexión
include 'conexion.php';

$user=$_REQUEST['email'];
$pswd=$_REQUEST['pass'];

$sql="SELECT * FROM `login`, usuario WHERE login.email ='$user' AND login.password ='$pswd' AND usuario.habilitado ='SI'";

$consulta = $conn->query($sql);

if ($resultado = mysqli_fetch_array($consulta)) {
    header('Location: productos.html');
} else {
    // Inicio de sesión fallido, redireccionamos a la página de inicio con el parámetro showModal
    header('Location: login.php#modal');
    exit();
  }
?>