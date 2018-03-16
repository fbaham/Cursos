<?php
#un arreglo multidimensional es un arreglo dentro de otro
$amigos = array(array('Alejandro',20,array('mas arreglos',array('otro arreglo')))#se pueden agregar multiples niveles
                ,array('Cesar',21)
                ,array('Manuel',18)
);
#acceder
echo $amigos[0][0].'<br>';
echo $amigos[1][0].'<br>';
echo $amigos[2][0].'<br>';
echo '<br>';
#acceder a otros multiniveles
echo $amigos[0][0].' '.$amigos[0][2][0].' '.$amigos[0][2][1][0];
?> 