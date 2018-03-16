<?php

$texto = '<b>hola</b> & ""';
$texto_dos = 'Hola';
$texto_tres = 'Hola Francisco';
echo htmlspecialchars($texto);
echo "<br>";
echo trim($texto_dos);
echo "<br>";
echo strlen($texto_tres);
echo "<br>";
echo substr($texto_tres,0,3);
echo "<br>";
echo strtoupper($texto_dos);
echo "<br>";
echo strtolower($texto_dos);
echo "<br>";
echo strrpos($texto_dos, 'o');

?>