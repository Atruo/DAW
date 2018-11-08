<?php
require_once('header.inc');
?>
<!-- El cuerpo -->
<body>
  <?php
  require_once('barra_nav.inc');
  ?>

  <?php

  $color = $_POST["colorAlbum"];
  $copias = $_POST["copias"];
  $resolucion = $_POST["resolucion"];
  $precio = 0.8+0.25;
  //numero de paginas será 10, es decir 0.08 por página (0.8)
  //numero de imagenes = 5, es decir, 0.25
  if($color == 2){
    $precio = $precio +0.25;
  }
  if ($resolucion > 300) {
    $precio = $precio +0.1;
  }
  $precio = $precio * $copias;
  echo "Solicitud registrada con éxito. Precio de la solicitud: $precio €";
  ?>

  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
