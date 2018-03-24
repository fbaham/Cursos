<?php require 'views/header.php' ?>

<div class="contenedor">

  <?php foreach ($posts as $post): ?>

    <div class="post">
      <article>
        <h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a></h2>
        <p class="fecha"><?php echo $post['fecha']; ?></p>
        <div class="thumb">
          <a href="#">
            <img src="<?php echo RUTA; ?>img/<?php echo $post['thumb']; ?>" alt="">
          </a>
          <p class="extracto"><?php echo $post['extracto']; ?></p>
          <a href="single.php?id=<?php echo $post['fecha']; ?>" class="continuar">Seguir leyendo</a>
        </div>
      </article>
    </div>

  <?php endforeach; ?>


<?php require 'views/paginacion.php' ?>
</div>
<?php require 'views/footers.php' ?>
