<?php
//revisa si el archivo existe
// if(file_exists('documento.txt')){
//   echo 'El archivo existe';
// } else {
//   echo 'El archivo no existe';
// }

//imprime el contenido del archivo
// echo file_get_contents('documento.txt');

//escribe en el archivo
// file_put_contents('documento.txt', "Hello world \n", FILE_APPEND)

//poner archivo en blanco
// file_put_contents('documento.txt', '');

//llenar el archivo con numeros del 1 al 10
// for ($i=1; $i <= 10 ; $i++) {
//   file_put_contents('documento.txt', "$i \n", FILE_APPEND);
// }

$archivo = file('documento.txt');
echo "<pre>";
print_r($archivo);

// echo $archivo[7];

?>
