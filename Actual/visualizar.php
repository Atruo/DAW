<?php
require_once('header.inc');
require_once('actualizarfecha.inc');
?>
<!-- El cuerpo -->
<body>
  <?php
  require_once('barra_nav.inc');

  require_once('base_datos.inc');

  // Ejecuta una sentencia SQL
    $datos = $_COOKIE['recuerda_usu'];
  $sentencia = "SELECT Titulo, Usuario, IdUsuario, Descripcion, IdAlbum  FROM usuarios,albumes where usuarios.IdUsuario = albumes.Usuario and NomUsuario = '$datos'" ;
  if(!($resultado = $mysqli->query($sentencia))) {
    echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
    echo '</p>';
    exit;
  }
  echo "<h3> Estos son tús álbumes: </h3>";
  echo "<div id = 'lista_estilos'>";
  while ($fila = $resultado->fetch_assoc()) {
    echo '<h4> <a href = "./fotos_album.php?id='.$fila['IdAlbum'].'&usu='.$fila['IdUsuario'].'">'.$fila['Titulo'].':</a>  '.$fila['Descripcion'].' </h4>';
  }
  echo '</div>';
  ?>



  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
