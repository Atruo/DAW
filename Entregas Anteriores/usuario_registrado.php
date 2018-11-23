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
    $datos = $_COOKIE['recuerda_usu'];
    echo "<h4 style = 'text-align: center;'>Bienvenido $datos</h4>";
    echo '<div id="enlaces_uReg">
      <a href="#">Modificar Datos</a>
      <a href="#">Darse de Baja</a>
      <a href="#">Visualizar Álbumes</a>
      <a href="./crear_album.php">Crear Álbum</a>
      <a href="./solicitar_album.php">Imprimir Álbum</a>
    </div>';



  }

  require_once("footer.inc");
echo "</body>
</html>
";
  ?>
