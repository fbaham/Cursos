<?php  

//No se puede acceder a las variables que se encuentran dentro de una función a menos que se use un return
//de igual modo, una función no puede acceder a una variable que se encuentre fuera de ella a menos que esta se pase como parametro


$numero = 7;

function mostrarNumero($numero){
	echo $numero;
}

mostrarNumero($numero);


?>