<?php
require_once('header.inc');
require_once('actualizarfecha.inc');
require_once('barra_nav.inc');
?>
<!-- El cuerpo -->
<body>

  <form class="form_relleno" action="configurar.php" method="post" id="form_registro">
    <p><label>Estilos: <select name="estilos">
      <?php
         require_once('base_datos.inc');

          // Ejecuta una sentencia SQL
          $sentencia = 'SELECT * FROM estilos';
          if(!($resultado = $mysqli->query($sentencia))) {
            echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
            echo '</p>';
            exit;
          }
             while($fila = $resultado->fetch_assoc()) {
               echo '<option value="'.$fila['IdEstilo'].'">'.$fila['Nombre'].'</option>';
             }


       ?>

        </select></label></p>


    <input type="submit" name="actualizar" value="Actualizar">
  </form>




  <?php
  if (isset($_POST['estilos'])) {
    require_once('base_datos.inc');
    $estilo = $_POST['estilos'];
    $datos = $_COOKIE['recuerda_usu'];
     // Ejecuta una sentencia SQL
     $sentencia = "UPDATE usuarios SET Estilo = $estilo WHERE NomUsuario = '$datos' ";
     if(!mysqli_query($mysqli, $sentencia)) {
       echo mysqli_error($mysqli);
       die("Error: no se pudo realizar la inserción");
     }
     // Cierra la conexión con la base de datos
     mysqli_close($mysqli);
     echo "Estilo actualizado";

  }
  require_once('footer.inc');
   ?>
</body>
</html>
