<?php
$meses = array('Enero', 'Febrero', 'Marzo', 'Abril'
                ,'Mayo', 'Junio', 'Julio', 'Agosto'
                ,'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
//echo count($meses);
#se crea una variable y se almacena el resultado de count - 1
$ultimo_mes = count($meses) - 1;
echo $meses[$ultimo_mes];
?>