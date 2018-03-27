<?php
require 'funciones.php';
$conexion = conexion('curso_galeria', 'root', '');

if(!$conexion){
  // Si la conexion falla, se envía a una página de error
  // header('Location: error.php');
  die();
}

//la variable $_FILES funciona de la misma manera que $_POST o $_GET, pero con archivos
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
  $check = @getimagesize($_FILES['foto']['tmp_name']);//foto es el nombre del input que recibe el archivo
  if($check != false){
    $carpeta_destino = 'img/';
    $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

    $statement = $conexion->prepare('
      INSERT INTO fotos (titulo, imagen, texto)
      VALUES (:titulo, :imagen, :texto)
    ');

    $statement->execute(array(
      ':titulo' => $_POST['titulo'],
      ':imagen' => $_FILES['foto']['name'],
      ':texto' => $_POST['texto']
    ));

    header('Location: index.php');
  } else {
    $error = 'El archivo no se pudo cargar';
  }
}

require 'views/subir.view.php';

?>
