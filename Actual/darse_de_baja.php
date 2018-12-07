<?php
require_once('header.inc');
require_once('actualizarfecha.inc');
require_once('barra_nav.inc');
?>
<!-- El cuerpo -->
<body>


  <form class="form_relleno" action="darse_de_baja.php" method="post" id="form_registro">
    <?php
      require_once('base_datos.inc');
      $datos = $_COOKIE['recuerda_usu'];
      $sentencia = "SELECT NomUsuario, Email, FNacimiento, Ciudad, NomPais, Nombre, Pais, Estilo FROM usuarios, estilos, paises where NomUsuario = '$datos'and  Estilo = IdEstilo and Pais = IdPais";
      if(!($resultado = $mysqli->query($sentencia))) {
        echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
        echo '</p>';
        exit;
      }
      $fila = $resultado->fetch_assoc();
      echo '<h3>Estos son los datos que borraremos: </h3>';
      echo '<div id = "lista_estilos">';
      echo '<h4> <span>Nombre: </span>  '.$fila['NomUsuario'].' </h4>';
      echo '<h4> <span>Email: </span>  '.$fila['Email'].' </h4>';
      echo '<h4> <span>FNacimiento: </span>  '.$fila['FNacimiento'].' </h4>';
      echo '<h4> <span>Ciudad: </span>  '.$fila['Ciudad'].' </h4>';
      echo '<h4> <span>Pais: </span>  '.$fila['NomPais'].' </h4>';
      echo '<h4> <span>Estilo: </span>  '.$fila['Nombre'].' </h4>';

      $sentencia = "SELECT Titulo FROM usuarios, albumes where NomUsuario = '$datos'and  Usuario = IdUsuario";
      if(!($resultado = $mysqli->query($sentencia))) {
        echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
        echo '</p>';
        exit;
      }

       while($fila = $resultado->fetch_assoc()) {
           echo '<h4> <span>Album: </span>  '.$fila['Titulo'].' </h4>';
       }

      $sentencia = "SELECT COUNT(IdFoto) AS fotos FROM usuarios, fotos where NomUsuario = '$datos'and  Usuario = IdUsuario";
      if(!($resultado = $mysqli->query($sentencia))) {
        echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
        echo '</p>';
        exit;
      }
      $fila = $resultado->fetch_assoc();
        echo '<h4> <span>Fotos Totales: </span>  '.$fila['fotos'].' </h4>';
     ?>

    <input type="submit" name="borrar" value="Borrar">
      </div>
  </form>




  <?php

  if (isset($_POST['borrar'])) {
    $datos = $_COOKIE['recuerda_usu'];
    require_once('base_datos.inc');
    $sentencia = "SELECT IdUsuario FROM usuarios where NomUsuario = '$datos'";

    if(!($resultado = $mysqli->query($sentencia))) {
      echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
      echo '</p>';
      exit;
    }
      $fila = $resultado->fetch_assoc();
      $id = $fila['IdUsuario'];



      ///////////////////////////////////////////////////////////////////////////////////////////////////////////

      $sentencia = "DELETE FROM fotos  WHERE Album in (SELECT IdAlbum FROM albumes WHERE Usuario = $id)";
      if(!($resultado = $mysqli->query($sentencia))) {
        echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
        echo '</p>';
        exit;
      }

      $sentencia = "DELETE FROM solicitudes WHERE Album in (SELECT IdAlbum FROM albumes WHERE Usuario = $id)";
      if(!($resultado = $mysqli->query($sentencia))) {
        echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
        echo '</p>';
        exit;
      }

      $sentencia = "DELETE FROM albumes WHERE usuario in ($id)";
      if(!($resultado = $mysqli->query($sentencia))) {
        echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
        echo '</p>';
        exit;
      }

      $sentencia = "DELETE FROM usuarios WHERE IdUsuario in ($id)";
      if(!($resultado = $mysqli->query($sentencia))) {
        echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
        echo '</p>';
        exit;
      }




    $sentencia = "DELETE FROM usuarios where IdUsuario = $id";
    if(!($resultado = $mysqli->query($sentencia))) {
      echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
      echo '</p>';
      exit;
    }
    echo "<h3>Datos Borrados</h3>";
    $host = $_SERVER['HTTP_HOST'];
    $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'cerrar_sesion.php';
    header("Location: http://$host$uri/$extra");
  }

  require_once('footer.inc');
   ?>
</body>
</html>
