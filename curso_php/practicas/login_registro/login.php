<?php session_start();

require 'funciones.php';
comprobar_session();

$errores = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_EMAIL);
  $password = $_POST['password'];
  $password = hash('sha512', $password);

  try {
    $conexion = new PDO('mysql:host=localhost;dbname=curso_login', 'root', '');
  } catch (PDOException $e) {
    echo "Error: " . $e -> getMessage();
  }

  $statement = $conexion -> prepare(
    'SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password'
  );
  $statement -> execute(array(
    ':usuario' => $usuario,
    ':password' => $password
  ));

  $resultado = $statement -> fetch();
  if($resultado != false){
    $_SESSION['usuario'] = $usuario;
    header('Location: index.php');
    // echo "Datos correctos";
  } else {
    $errores .= '<li>Datos incorrectos</li>';
  }

}

require 'views/login.view.php';

?>
