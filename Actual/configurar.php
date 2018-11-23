<?php
require_once('header.inc');
require_once('actualizarfecha.inc');
?>
<!-- El cuerpo -->
<body>
  <?php
  require_once('barra_nav.inc');

  $mysqli = @new mysqli(
          'localhost',   // El servidor
          'root',    // El usuario
          '',          // La contraseña
          'pibd'); // La base de datos

  if($mysqli->connect_errno) {
    echo '<p>Error al conectar con la base de datos: ' . $mysqli->connect_error;
    echo '</p>';
    exit;
  }

  // Ejecuta una sentencia SQL
  $sentencia = 'SELECT *  FROM estilos';
  if(!($resultado = $mysqli->query($sentencia))) {
    echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
    echo '</p>';
    exit;
  }
  echo "<h3> Estos son los estilos: </h3>";
  echo "<div id = 'lista_estilos'>";
  while ($fila = $resultado->fetch_assoc()) {
    echo '<h4> <span>'.$fila['Nombre'].':</span>  '.$fila['Descripcion'].' </h4>';
  }
  echo '</div>';
  ?>



  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
