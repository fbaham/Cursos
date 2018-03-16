<?php
#arreglo
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
#agregar elemento a arreglo
$semana[7] = 'Lumingo';
#otra forma de declarar un arreglo
$arreglo = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];
#arreglo con valores de multiples tipos
$arreglo2 = array('strings', 1, array('asd',123),true);
#recorrer un arreglo
echo $semana[0]. '<br>';
echo $semana[1]. '<br>';
echo $semana[2]. '<br>';
echo $semana[3]. '<br>';
echo $semana[4]. '<br>';
echo $semana[5]. '<br>';
echo $semana[6]. '<br>';
?>