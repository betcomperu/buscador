<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DECISIÓN DE CASARSE</title>
</head>
<body>
  <h1>Resultado de la decisión:</h1>

<?php 

class Probando{

  private $resultado;
  public function procesando($resultado){
    if ($resultado == 0) {
      echo '<font color ="blue"; font-size:14px>Ingrese el resultado para saber la respuesta !! </font>';
    }elseif ($resultado == 1) {
      echo '<font color ="green"; font-size:18px>NOS CASAMOS </font>';
    }else{
      echo '<font color ="red"; font-size:18px>LO POSTERGAMOS </font>';
    }
    }
   }

?>
<!-- Formulario con combo box -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="respuesta">¿Sí o No?</label><br>
  <select id="respuesta" name="respuesta">
    <option value="0">Selecciona una respuesta</option>
    <option value="1">Sí</option>
    <option value="2">No</option>
  </select>
  <br><br>
  <input type="submit" value="Enviar">
</form>
<?php 

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener el valor seleccionado
  $valor = $_POST["respuesta"];
  //var_dump ($valor);

  // Llamar a la función de la clase
  $obj = new Probando();
  echo "<br>";
  $obj->procesando($valor);
}
?>

</body>
</html>



