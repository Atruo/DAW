<?php
require_once('header.inc');
require_once('actualizarfecha.inc');
?>
<!-- El cuerpo -->
<body>
  <body>
  <?php
  require_once('barra_nav.inc');
  ?>

  <form class="form_relleno" action="res_busqueda.php" method="post" id="form_buscar">
    <label>Título: <input type="text" name="titulo" value=""></label>
    <label><p>Fecha: <input type="date" name="fecha" value=""></p></label>
    <label><p>País: <select name="pais">
      <option value="-1">No filtrar</option>

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


       ?>

        </select></label></p>

    <input type="submit" name="buscar" value="Buscar" id="boton_buscar" class="botones">
  </form>

  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
