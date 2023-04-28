<?php 
require 'config.php'; // Nos conectamos a la base de datos

/* #Creamos un Array con los campos de la tabla
$colums = ['id','nombre','apellido','correo','ciudad','fecha_nacimiento'];
#Asignamos una variable a la tabla en uso;
$table = "clientes";
#Limpiamos los campos
$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;
#Creamos la consulta usando las variable arriba
$sql ="SELECT " . implode(", ", $colums) ." FROM $table"; */
// Obtener los términos de búsqueda desde la solicitud Ajax
if (isset($_GET['search_term'])) {
  $search_term = $_GET['search_term'];
} else {
  $search_term = '';
}
// Crear la consulta SQL con una cláusula WHERE que filtre los resultados según los términos de búsqueda
$sql = "SELECT * FROM clientes WHERE ID LIKE '%".$search_term."%' OR nombre LIKE '%".$search_term."%' OR apellido LIKE '%".$search_term."%' OR correo LIKE '%".$search_term."%' OR ciudad LIKE '%".$search_term."%' OR fecha_nacimiento LIKE '%".$search_term."%'";

// Ejecutar la consulta SQL
$result = $conn->query($sql);

// Crear un array para almacenar los resultados
$results_array = array();

// Recorrer los resultados y agregarlos al array
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    array_push($results_array, $row);
  }
}

// Devolver los resultados en formato JSON
echo json_encode($results_array);

// Cerrar la conexión a la base de datos
$conn->close();
?>

?>