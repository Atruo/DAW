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

  <div id="enlaces_uReg">
    <a href="#">Modificar Datos</a>
    <a href="#">Darse de Baja</a>
    <a href="#">Visualizar Álbumes</a>
    <a href="./crear_album.php">Crear Álbum</a>
    <a href="./solicitar_album.php">Imprimir Álbum</a>
  </div>

  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
