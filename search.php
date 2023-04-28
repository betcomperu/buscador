<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "Buscadorajax";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener la cadena de búsqueda desde la petición Ajax
$search = $_GET["search"];

// Consulta SQL para buscar clientes que coinciden con la cadena de búsqueda
$sql = "SELECT * FROM clientes WHERE nombre LIKE '%$search%' OR apellido LIKE '%$search%' OR DNI LIKE '%$search%'";
$result = $conn->query($sql);

// Generación de la tabla de resultados HTML
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apellido"] . "</td><td>" .$row["DNI"] . "</td><td>". $row["correo"] . "</td><td>" . $row["ciudad"] . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='5'>No se encontraron resultados.</td></tr>";
}

$conn->close();
?>
