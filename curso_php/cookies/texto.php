<?php

if (isset($_COOKIE['font-size'])){
	$tamano = $_COOKIE['font-size'];
}else{
	$tamano = '15px';
}

$tamano = $_COOKIE['font-size'];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		p{
			font-size: <?php echo $tamano; ?>;
		}
	</style>
</head>
<body>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi incidunt tempora ea, libero, repudiandae accusantium reprehenderit enim ducimus? Nesciunt odio veritatis accusantium aperiam, fugiat nihil vitae. Consequuntur, sed atque officia!</p>
</body>
</html>
