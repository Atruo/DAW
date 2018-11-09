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
    <p><label>Titulo: <input type="text" name="titulo" value=""></label></p>

    <p>  <label for="desc">Descripción: </label><textarea name="name" rows="8" cols="80" id="desc"></textarea></p>
    <input type="submit" name="crear" value="Crear">
  </form>
  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
