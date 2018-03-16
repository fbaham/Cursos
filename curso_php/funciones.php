<?php

// count();
// sort(array);
// rsort(array);
// var_dump(expression);
// print_r(arg);

function saludo($nombre){
	return 'Saludos, '. $nombre .'! <br>';
}

function sumar($numero_uno, $numero_dos){
	$resultado = $numero_uno + $numero_dos;
	return $resultado;
}

echo saludo("Francisco");
echo saludo("Franco");
echo saludo("Fran");

$resultado = sumar(15,5);
echo $resultado;




?>