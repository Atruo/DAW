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
  <?php
  require_once('barra_nav.inc');
  ?>


  <form class="form_relleno" action="registro_datos.php" method="post" id="form_registro">
    <p><label>Titulo: <input type="text" name="titulo" value=""></label></p>

    <p>  <label for="desc">Descripcción: </label><textarea name="name" rows="8" cols="80" id="desc"></textarea></p>
    <input type="submit" name="crear" value="Crear">
  </form>
  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
