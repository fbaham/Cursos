<?php 

$amigo = array('telefono' => 54221419, 'edad' => 28, 'pais' => 'Chile');
$semana = array('lunes', 'martes', 'miercoles','jueves','viernes','sabado','domingo');

extract($amigo);
echo $telefono;
echo "<br>";
$ultimo_día = array_pop($semana);

foreach ($semana as $dia) {
	echo $dia . '<br>';
}
echo "$ultimo_día";
echo "<br>";
$semana[6] = $ultimo_día;
echo join(' - ', $semana);
echo "<br>";
echo count($semana);
echo "<br>";
// sort($semana);
// echo join(' - ', $semana);
// echo "<br>";
// rsort($semana);
// echo join(' - ', $semana);
// echo "<br>";

$semana_reverse =  array_reverse($semana);
echo join(', ', $semana_reverse);

?>