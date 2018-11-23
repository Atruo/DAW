<?php
require_once('header.inc');
require_once('actualizarfecha.inc');
?>
<!-- El cuerpo -->
<body>
  <?php
  require_once('barra_nav.inc');

  if (!isset($_SESSION['autenticado'])) {
    $_SESSION['autenticado']='NO';
  }
  if ($_SESSION["autenticado"] != "SI") {
    echo '<h3>Debes iniciar sesión para acceder a esta página</h3>';
  }else {

    echo '
      <div id="info_foto">
        <img src=';
         if(!empty($_GET["num"])){
           if ($_GET["num"]%2==0) {
           echo "foto2.jpg";
          }else {
            echo "foto.jpg";
          }
        }

        echo ' alt="foto" style="width:200px;">';

        $titulo = $_GET["titulo"];
        $fecha = $_GET["fecha"];
        $pais = $_GET["pais"];
        echo "<p>$titulo</p>
        <p>$fecha</p>
        <p>$pais</p>
        <p>Álbum</p>
        <p>Autor</p>";


      echo "</div>";



  }
  ?>
