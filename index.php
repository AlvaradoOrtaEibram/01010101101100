<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="responsive.css" />   
    <title>Papeler&iacute;a</title>
  </head>
  <body>
   <?php include ('componentes/nav.php') ?>
    <header>
      <div class="header-intro">
        <h1>Lo que busques, lo tenemos</h1>
        <p>Tenemos los mejores precios de menudeo y mayoreo en artículos escolares y de <br>oficina</p>
        <a href="Articulos.php" class="cta-header">
            <span aria-hidden="true" class="circle">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text">Busca aquí</span>
          </a>
      </div>
    </header>
    <?php include ('componentes/side-menu.php') ?>
    <h1 class="slider-title">Contenido Destacado</h1>
    <div class="contenedor-slider">
      <div class="nextbtn">></div>
      <div class="prevbtn"><</div>
      <div class="slider">
        <div class="item-slider">
          <img src="https://media.informabtl.com/wp-content/uploads/2018/08/regreso-a-clases-retail.jpg" alt="">
        </div>
        <div class="item-slider">
        <img src="https://www.papeleradabo.mx/images/5.jpg" alt="">

        </div>
        <div class="item-slider">
        <img src="https://i.ytimg.com/vi/c1JbwFQaQ8k/maxresdefault.jpg" alt="">

        </div>
        <div class="item-slider">
        <img src="https://media-adsa.camilyo.software/media-adsa/static/4029/433.jpg" alt="">

        </div>
        
      </div>
    </div>
  </body>
  <script src="script.js"></script>
</html>

<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>

<?php include ('componentes/footer.php') ?>
