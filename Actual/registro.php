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
    <p><label>Nombre: <input type="text" name="nombre" value=""></label></p>
    <p><label>Usuario: <input type="text" name="usu" value=""></label></p>

    <p><label>Contraseña: <input type="password" name="psw" value=""></label></p>

    <p><label>Repetir Contraseña: <input type="password" name="psw2" value=""></label></p>

    <p><label>Email: <input type="text" name="email" value=""></label></p>

    <p><label>Sexo: <select name="sexo">
          <option value=1>Masculino</option>
          <option value=2>Femenino</option>
          <option value=0>No Contestar</option>
        </select></label></p>

    <p><label>Fecha Nacimiento: <input type="date" name="nacido" value=""></label></p>
    <p><label>Pais de Residencia: <select name="pais">
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
        <p><label>Estilo: <select name="estilo">
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
    <p><label>Ciudad de Residencia: <input type="text" name="ciudad" value=""></label></p>
     <p><label>Foto Perfil: <input type="file" name="foto_perfil"></label></p>

    <input type="submit" name="registrarse" value="Registrarse">
  </form>
  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
