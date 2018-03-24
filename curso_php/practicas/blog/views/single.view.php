<?php require 'views/header.php' ?>

<div class="contenedor">

  <div class="post">
    <article>
      <h2 class="titulo"><?php echo $post['titulo']; ?></h2>
      <p class="fecha"><?php echo $post['fecha']; ?></p>
      <div class="thumb">
          <img src="<?php echo RUTA; ?>img/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo']; ?>">
      </div>
      <p class="extracto"><?php echo $post['texto']; ?></p>
    </article>
  </div>
</div>
<?php require 'views/footers.php' ?>