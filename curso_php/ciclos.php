<?php
// for($i = 1 ; $i <= 10 ; $i++){
//     //instrucciones
// }

// while(true){
//     //instrucciones
// }

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril'
,'Mayo', 'Junio', 'Julio', 'Agosto'
,'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

for($i = 0 ; $i < count($meses) ; $i++){
    echo $meses[$i].'<br>';
}

$contador = 0;
while($contador < count($meses)){
    echo $meses[$contador].'<br>';
    $contador++;
}

// do{
//
// }while(false);
$alejandro = array('telefono'=>54221418, 'edad'=>25, 'pais'=>'Chile');

//con break se deja de ejecutar el ciclo
//con continue podemos saltar a la siguiente iteración del ciclo sin romperlo
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Meses</h1>
    <ul>
        <?php
        foreach($meses as $mes){
            echo '<li>'.$mes.'</li>';
        }
        ?>
    </ul>
    <h1>Datos</h1>
    <ul>
        <?php
        foreach($alejandro as $dato => $valor){
            echo '<li>'.$dato.': '.$valor.'</li>';
        }
        ?>
    </ul>
</body>
</html>