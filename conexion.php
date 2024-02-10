<?php
$serverName = "PCE412";
$connectionOptions = array(
    "Database" => "Prueba",
    "IntegratedSecurity" => true
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
} else {
    echo "Conexión establecida.<br />";
}

// A partir de aquí puedes ejecutar consultas SQL y trabajar con la base de datos

// Por ejemplo, ejecutar una consulta simple
$sql = "SELECT * FROM Usuarios";
$result = sqlsrv_query($conn, $sql);

if ($result === false) {
    die(print_r(sqlsrv_errors(), true));
}

while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    echo $row['columna1'] . "<br />";
}

sqlsrv_free_stmt($result);
sqlsrv_close($conn);
?>
