<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "davialex";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Revisar la conexión
// if ($conn->connect_error) {
//     die("Conexión fallida: " . $conn->connect_error);
// } 
// echo "Conexión exitosa";
// ?>