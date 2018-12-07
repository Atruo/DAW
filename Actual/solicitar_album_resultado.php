<?php
require_once('header.inc');
require_once('actualizarfecha.inc');
?>
<!-- El cuerpo -->
<body>
  <?php
  require_once('barra_nav.inc');
  ?>

  <?php

  $nombre = $_POST['nombre'];
  $titulo = $_POST['titulo'];
  $adicional = $_POST['adicional'];
  $email = $_POST['email'];
  $calle = $_POST['calle'];
  $ncalle = $_POST['ncalle'];
  $piso = $_POST['piso'];
  $puerta = $_POST['puerta'];
  $cpostal = $_POST['cpostal'];
  $localidad = $_POST['localidad'];
  $provincia = $_POST['busqueda_provincia'];
  $pais = $_POST['busqueda_pais'];
  $album = $_POST['album'];
  $fecha = $_POST['fecha'];
  $colorAlbum = $_POST['colorAlbum'];
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

  require_once('base_datos.inc');
  $datos = $_COOKIE['recuerda_usu'];
  $sentencia = "SELECT IdUsuario FROM usuarios WHERE NomUsuario = '$datos'";
  if(!($resultado = $mysqli->query($sentencia))) {
    echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
    echo '</p>';
    exit;
  }
  $fila = $resultado->fetch_assoc();
  $id = $fila['IdUsuario'];
  if (!empty($nombre) && !empty($titulo) && !empty($email) && !empty($fecha)) {
    $actual = date('Y-m-d H:i:s');
    $sentencia = "INSERT INTO solicitudes values(null, $album, '$nombre', '$titulo', '$adicional', '$email', '$calle', $ncalle, $piso, $puerta, $cpostal, '$localidad', '$provincia', $pais, '$color', $copias, $resolucion, '$fecha', $colorAlbum, '$actual', $precio)";
    if(!($resultado = $mysqli->query($sentencia))) {
      echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
      echo '</p>';
      exit;
    }
  }
  echo "<p id ='precio_album'>Solicitud registrada con éxito. Precio de la solicitud:<span id='precio'> $precio € </span></p>";
  ?>

  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
