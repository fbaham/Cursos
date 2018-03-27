<?php
//nombre de archivo
// echo pathinfo('documento.txt', PATHINFO_BASENAME);
//ruta de archivo
// echo pathinfo('documento.txt', PATHINFO_DIRNAME);
//extensión de archivo
// echo pathinfo('documento.txt', PATHINFO_EXTENSION);
//nombre de archivo directamente
// echo pathinfo('documento.txt', PATHINFO_FILENAME);

//busca archivos
// $resultados = glob('sessions/*.{php,txt}', GLOB_BRACE);
// echo "<pre>";
// print_r($resultados);

//omite ruta y solo muestra nombre de archivo
// echo basename('practicas/paginacion/index.php' ,'.php');

echo dirname('practicas/paginacion/index.php');

?>
