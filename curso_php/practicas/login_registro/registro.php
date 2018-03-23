<?php session_start();

if(isset($_SESSION['usuario'])){
  header('location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);// EVITA LA INYECCION DE CODIGO
  $password = $_POST['password'];
  $password2 = $_POST['password2'];

  $errores = '';

  if (empty($usuario) or empty($password) or empty($password2)){
    $errores .= '<li>Por favor rellena todos los datos correctamente</li>';
  } else {
    try {
      $conexion = new PDO('mysql:host=localhost;dbname=curso_login', 'root', '');
    } catch (PDOException $e) {
      echo "Error: " . $e -> getMessage();
    }

    //Busca usuario en la base de datos
    $statement = $conexion -> prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
    //Se envía como dato el contenido de la variable y como indicador el parametro de la query
    $statement -> execute(array(':usuario' => $usuario));
    //Si la consulta devuelve una fila, el valor bool de $resultado será true
    $resultado = $statement -> fetch();

    if($resultado != false) {
      $errores .= '<li>El nombre de usuario ya existe</li>';
    }
    //echo $password . '<br />' . $password2 . '<br />';
    $password = hash('sha512', $password);
    //echo $password . '<br />' . $password2 . '<br />';
    $password2 = hash('sha512', $password2);
    //echo $password . '<br />' . $password2 . '<br />';

    if ($password != $password2) {
      $errores .= '<li>Las contraseñas no son iguales</li>';
    }
  }

  if ($errores = '') {
    $statement = $conexion -> prepare('INSERT INTO usuarios (id, usuario, pass) VALUES (null, :usuario, :pass);');
    $statement -> execute(array(
      ':usuario' => $usuario,
      ':pass' => $pass
    ));

    header('Location: login.php');

  }

}

require 'views/registro.view.php';

?>
