<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Galeria</title>
  <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <header>
    <div class="contenedor">
      <h1 class="titulo">Subir foto</h1>
    </div>
  </header>

  <div class="contenedor">
    <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

      <label for="foto">Selecciona tu foto</label>
      <input type="file" name="foto" id="foto" value="">

      <label for="titulo">Titulo de la foto</label>
      <input type="text" name="titulo" id="titulo" value="">

      <label for="texto">Descripcion:</label>
      <textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>
      <?php if (isset($error)): ?>
        <p class="error"><?php echo $error ?></p>
      <?php endif; ?>
      <input type="submit" class="submit" value="Subir foto">

    </form>
  </div>

  <footer>
    <p class="copyright">Galería creada por Francisco Bahamondes - <a href="https://fbcreativos.cl">fbcreativos.cl</a></p>
  </footer>

</body>
</html>
