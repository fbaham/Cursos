<?php
#string: cadena de texto
$nombre = 'Francisco';
#integer: numeros enteros
$numero = 7;
#double: numeros con decimales
$numero_decimal = 7.7;
#boolean: vardadero o falso (true / false)
$verdadero = false;
#array: arreglo
#object: objeto
#class: clase
#null: cuando una variable no se le ha asigando ningún valor

echo "Hola, $nombre";
?>
<br>
<?php
echo 'Numero ' . $numero;
?>
<br>
<?php
echo gettype($nombre);
?>