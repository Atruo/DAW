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
    <label><p>País: <input type="text" name="pais" value=""></p></label>


    <input type="submit" name="buscar" value="Buscar" id="boton_buscar" class="botones">
  </form>

  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
