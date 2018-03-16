<?php 
function calcular_area_triangulo($base, $altura){
	return ($base * $altura) / 2;
}


$area_triangulo = calcular_area_triangulo(10,10);

echo 'El area del triangulo corresponde a: ' . $area_triangulo . ' metros cuadrados';

 ?>