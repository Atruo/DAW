<!DOCTYPE html>
<html lang="es">
<!-- La cabecera -->
<head>
<meta charset="utf-8" />
<meta name="generator" content="Bloc de notas" />
<meta name="author" content="Sergio Luján Mora" />
<meta name="keywords" content="HTML5, web" />
<meta name="description" content="Plantilla base de una página creada con HTML5" />
<link rel="stylesheet" href="CSS/index.css">
<link rel="stylesheet" type="text/css" href="CSS/print.css" media="print" />
<link rel="alternate stylesheet" type="text/css" href="CSS/contraste.css" title="Estilo de alto contraste DAW" />
<link rel="stylesheet" href="css/entypo.css">
<title>Plantilla base de HTML5</title>
</head>
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
