<?php
$aquiles = array('telefono' => '54221419', 'edad' => 28, 'apellido' => 'Bailoyo', 'pais' =>'Chile');
#puedo acceder mediante un parametro establecido
echo $aquiles['telefono'] . '<br>';
echo $aquiles['edad'] . '<br>';
echo $aquiles['apellido'] . '<br>';
echo $aquiles['pais'] . '<br>';
#puedo cambiar el valor accediento mediante su parametro
$aquiles['telefono'] = '55221419';
echo 'El telefono nuevo de Aquiles es: '.$aquiles['telefono']

?>