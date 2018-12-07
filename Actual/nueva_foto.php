<?php
require_once('header.inc');
require_once('actualizarfecha.inc');
?>
<!-- El cuerpo -->
<body>
  <?php
  require_once('barra_nav.inc');
  ?>


  <form class="form_relleno" action="nueva_foto.php" method="post" id="form_registro">
    <p><label>Título: <input type="text" name="titulo" value=""></label></p>
    <p><label>Descripción: <input type="text" name="descripcion" value=""></label></p>
    <p><label>Alternativo: <input type="text" name="alternativo" value=""></label></p>
    <p><label>Fecha: <input type="date" name="fecha" value=""></label></p>
    <p><label>Pais: <select name="pais">
      <?php
          require_once('base_datos.inc');

          // Ejecuta una sentencia SQL
          $sentencia = 'SELECT * FROM paises order by NomPais asc';
          if(!($resultado = $mysqli->query($sentencia))) {
            echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
            echo '</p>';
            exit;
          }
             while($fila = $resultado->fetch_assoc()) {
               echo '<option value="'.$fila['IdPais'].'">'.$fila['NomPais'].'</option>';
             }
             echo "  </select></label></p>";
             echo '  <p><label>Album: <select name="album">';
              $sentencia = 'SELECT * FROM albumes';
              if(!($resultado = $mysqli->query($sentencia))) {
                echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
                echo '</p>';
                exit;
              }
                 while($fila = $resultado->fetch_assoc()) {
                   echo '<option value="'.$fila['IdAlbum'].'">'.$fila['Titulo'].'</option>';
                 }
              echo "  </select></label></p>";


       ?>
    <p><label>Foto: <input type="file" name="foto"></label></p>
    <input type="submit" name="registrarse" value="Registrarse">
  </form>
  <?php
    if (!empty($_POST['titulo']) && !empty($_POST['descripcion']) && !empty($_POST['fecha']) && !empty($_POST['pais']) && !empty($_POST['foto'])&& !empty($_POST['alternativo'])&& !empty($_POST['album'])) {
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
      $titulo = $_POST['titulo'];
      $desc = $_POST['descripcion'];
      $fecha = $_POST['fecha'];
      $pais = $_POST['pais'];
      $foto = $_POST['foto'];
      $alternativo = $_POST['alternativo'];
      $album = $_POST['album'];
      $fecha = date("Y-m-d", strtotime($fecha));
      $actual = date('Y-m-d H:i:s');
      $sentencia = "INSERT INTO fotos values(null, '$titulo', '$desc','$fecha',$pais,$album,'$foto','$alternativo','$actual', $id)";
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
