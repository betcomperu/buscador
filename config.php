<?php
//Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "BuscadorAjax";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Seleccionar tabla
$table = "clientes";
?>
