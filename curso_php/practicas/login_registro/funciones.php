<?php

function comprobar_session(){
  if(isset($_SESSION['usuario'])){
    header('location: index.php');
  }
}

function comprobar_session_index(){
  if (isset($_SESSION['usuario'])) {
    header('Location: contenido.php');
  }else{
    header('Location: registro.php');
  }
}

?>
