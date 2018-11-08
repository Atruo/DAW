<?php
require_once('header.inc');
?>
<!-- El cuerpo -->
<body>
  <?php
  require_once('barra_nav.inc');
  ?>

  <div id="info_foto">
    <img src=<?php if(!empty($_GET['num'])){if ($_GET['num']%2==0) {
      echo "foto2.jpg";
    }else {
      echo "foto.jpg";
    }}?> alt="foto" style="width:200px;">
    <?php
    $titulo = $_GET['titulo'];
    $fecha = $_GET['fecha'];
    $pais = $_GET['pais'];
    echo "<p>$titulo</p>
    <p>$fecha</p>
    <p>$pais</p>
    <p>Álbum</p>
    <p>Autor</p>";
     ?>

  </div>
  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
