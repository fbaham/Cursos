<?php
// if(condicion){
//     //instrucciones
// }
$edad = 28;
$nombre = 'Francisco';
if($edad >= 18 && $nombre == 'Francisco'){
    echo '<h1>Bienvenido</h1>';
}
if($edad < 18 OR $nombre != 'Francisco'){
    echo '<h1>Eres menor de edad y/o no te llamas Francisco</h1>';
}
?>