<?php
$arreglo = array(
  'nombre' => 'Francisco',
  'apellido' => 'Bahamondes'
);

//extrae el contenido de un arreglo en variables
extract($arreglo);
$nombre = 'Javier';
echo $nombre;
echo "<br>";
print_r($arreglo);
?>
