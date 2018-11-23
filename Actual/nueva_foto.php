<?php
require_once('header.inc');
require_once('actualizarfecha.inc');
?>
<!-- El cuerpo -->
<body>
  <?php
  require_once('barra_nav.inc');
  ?>


  <form class="form_relleno" action="registro_datos.php" method="post" id="form_registro">
    <p><label>Título: <input type="text" name="titulo" value=""></label></p>

    <p><label>Descripción: <input type="text" name="descripcion" value=""></label></p>



    <p><label>Email: <input type="text" name="email" value=""></label></p>


    <p><label>Fecha: <input type="date" name="fecha" value=""></label></p>
    <p><label>Pais: <select name="pais">
      <?php
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
          $sentencia = 'SELECT * FROM paises';
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
  require_once('footer.inc');
   ?>
</body>
</html>
