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
    <p><label>Usuario: <input type="text" name="nombre" value=""></label></p>

    <p><label>Contraseña: <input type="password" name="psw" value=""></label></p>

    <p><label>Repetir Contraseña: <input type="password" name="psw2" value=""></label></p>

    <p><label>Email: <input type="text" name="email" value=""></label></p>

    <p><label>Sexo: <select name="sexo">
          <option value="Masculino">Masculino</option>
          <option value="Femenino">Femenino</option>
          <option value="ninguno">No Contestar</option>
        </select></label></p>

    <p><label>Fecha Nacimiento: <input type="date" name="nacido" value=""></label></p>
    <p><label>Pais de Residencia: <input type="text" name="pais" value=""></label></p>
    <p><label>Ciudad de Residencia: <input type="text" name="ciudad" value=""></label></p>
     <p><label>Foto Perfil: <input type="file" name="foto_perfil"></label></p>

    <input type="submit" name="registrarse" value="Registrarse">
  </form>
  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
