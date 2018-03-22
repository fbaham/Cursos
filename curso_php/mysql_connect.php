<?php

$conexion = mysqli_connect('localhost', 'root', '') or die('No se pudo conectar');
mysqli_select_db($conexion, 'prueba_datos');
$resultado = mysqli_query($conexion, 'SELECT * FROM usuarios'); //esta función solo se encarga de ejecutar la consulta


while ($fila = mysqli_fetch_array($resultado)) {
  echo $fila['nombre'];
  echo "<br>";
}

 ?>
