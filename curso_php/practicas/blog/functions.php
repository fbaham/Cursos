<?php

function conexion($bd_config){
  try {
    $conexion = new PDO('mysql:host=localhost;dbname=' . $bd_config['basededatos'], $bd_config['usuario'], $bd_config['pass']);
    return $conexion;
  } catch (PDOException $e) {
    return false;
  }
}

//limpia datos de caracteres especiales
function limpiar_datos($datos){
  $datos = trim($datos);
  $datos = stripslashes($datos);
  $datos = htmlspecialchars($datos);
  return $datos;
}

//obtiene numero de pagina a travez de la variable p
function pagina_actual(){
  return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

//obtiene posts disponibles para la pagina actual
function obtener_posts($post_por_pagina, $conexion){
  $inicio = (pagina_actual() > 1 ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0); //obtiene el primer post de la pagina
  $sentencia = $conexion -> prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina");
  $sentencia -> execute();
  return $sentencia -> fetchAll();
}

//retorna solo valores enteros
function id_articulo($id){
  return (int)limpiar_datos($id);
}

obtener_post_por_id($conexion, $id){
  $resultado = $conexion -> query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
  $resultado = $resultado->fetchAll();
  return ($resultado) ? $resultado : false;
}

?>
