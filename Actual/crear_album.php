<?php
require_once('header.inc');
require_once('actualizarfecha.inc');
?>
<!-- El cuerpo -->
<body>
  <?php
  require_once('barra_nav.inc');
  ?>


  <form class="form_relleno" action="crear_album.php" method="post" id="form_registro">
    <p><label>Titulo: <input type="text" name="titulo" value=""></label></p>

    <p>  <label for="desc">Descripción: </label><textarea name="desc" rows="8" cols="80" id="desc"></textarea></p>
    <input type="submit" name="crear" value="Crear">
  </form>
  <?php
  if (!empty($_POST['titulo']) && !empty($_POST['desc'])) {
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
    $titulo = $_POST["titulo"];
    $desc = $_POST["desc"];
    $sentencia = "INSERT INTO albumes values(null, '$titulo', '$desc', $id)";
    if(!($resultado = $mysqli->query($sentencia))) {
      echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
      echo '</p>';
      exit;
    }
    echo "Album creado con éxito, ahora puedes añadir una foto dirigiendote al apartado 'Añadir Foto'";
  }
  require_once('footer.inc');
   ?>
</body>
</html>
