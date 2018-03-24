<?php require 'views/header.php' ?>

<div class="contenedor">

  <div class="post">
    <article>
      <h2 class="titulo"><a href="#">Título del articulo</a></h2>
      <p class="fecha">23 de marzo de 2018</p>
      <div class="thumb">
        <a href="#">
          <img src="<?php echo RUTA; ?>img/1.png" alt="">
        </a>
        <p class="extracto">Lorem ipsum dolor sit amet...</p>
        <a href="#" class="continuar">Seguir leyendo</a>
      </div>
    </article>
  </div>
  <div class="post">
    <article>
      <h2 class="titulo"><a href="">Título del articulo</a></h2>
      <p class="fecha">23 de marzo de 2018</p>
      <div class="thumb">
        <a href="#">
          <img src="<?php echo RUTA; ?>img/1.png" alt="">
        </a>
        <p class="extracto">Lorem ipsum dolor sit amet...</p>
        <a href="#" class="continuar">Seguir leyendo</a>
      </div>
    </article>
  </div>
<?php require 'views/paginacion.php' ?>
</div>
<?php require 'views/footers.php' ?>
