<?php
$meses = array('Enero', 'Febrero', 'Marzo', 'Abril'
,'Mayo', 'Junio', 'Julio', 'Agosto'
,'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

$numeros = array(1,22,23,10,9,43,2,100,502);

// sort($meses); #ordena alfabeticamente
rsort($meses); #ordena alfabeticamente en reversa
sort($numeros); #ordena según valor
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <?php
        foreach($meses as $mes){
            echo '<li>'.$mes.'</li>'; #muestra el valor de cada elemento guardado en el arreglo en la variable mes
        }
        ?>
    </ul>
    <br>
    <h1>Numeros</h1>
    <ul>
        <?php
        foreach($numeros as $numero){
            echo '<li>'.$numero.'</li>'; #muestra el valor de cada elemento guardado en el arreglo en la variable mes
        }
        ?>
    </ul>
</body>
</html>