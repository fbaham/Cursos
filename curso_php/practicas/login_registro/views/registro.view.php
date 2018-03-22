<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Registrate</title>
</head>
<body>
  <div class="contenedor">
    <h1 class="titulo">Registrate</h1>
    <hr class="border">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario" name="login">
      <div class="form-group">
        <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
      </div>
      <div class="form-group">
        <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password" placeholder="Contraseña">
      </div>
      <div class="form-group">
        <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder="Repetir contraseña">
      </div>
    </form>
  </div>
</body>
</html>
