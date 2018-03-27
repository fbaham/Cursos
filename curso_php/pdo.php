<?php

// $id = $_GET['id'];
// $id = $_GET['nombre'];
// $id = $_GET['correo'];

try{
  $conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
  // echo "Conexion Ok";

  // $resultados = $conexion->query('SELECT * FROM usuarios');
  // $resultados = $conexion->query("SELECT * FROM usuarios WHERE id = $id");
  // //$resultados = $conexion->query('INSERT INTO usuarios VALUES(null, "Pedro","pedro@test.cl");');
  //
  // foreach ($resultados as $key) {
  //   echo $key['id'] . " - " . $key['nombre'];
  //   echo "<br>";
  // }

  //Prepare Statement
  // $statement = $conexion -> prepare('SELECT * FROM usuarios-- WHERE id = :id');
  // $statement -> execute(array(
  //   ':id' => $id
  // ));
  // $resultados = $statement -> fetchAll();
  // echo "<pre>";
  // print_r($resultados);
  // echo "</pre>";
  //
  // foreach ($resultados as $key) {
  //   print_r($key);
  //   echo '<br>';
  //   # code...
  // }
  //
  // foreach ($resultados as $key) {
  //   echo $key['nombre'] . '<br>';
  //   # code...
  // }


  $statement = $conexion -> prepare('INSERT INTO usuarios VALUES(null, "Jose", "jose@test.cl");');
  $statement -> execute();

  $resultados = $statement->fetchAll();
  foreach ($resultados as $key) {
    echo $key['nombre'] . '<br>';
  }

  }catch(PDPException $e){
    echo "Error" . $e -> getMessage();
  }

 ?>
