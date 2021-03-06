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

  <?php

  $color = $_POST["colorAlbum"];
  $copias = $_POST["copias"];
  $resolucion = $_POST["resolucion"];
  $precio = 0;
  //numero de paginas será 10, es decir 0.08 por página (0.8)
  //numero de imagenes = 5, es decir, 0.25
  if($color == 2){
    $precio = $precio +0.25;
  }
  if ($resolucion > 300) {
    $precio = $precio +0.1;
  }
  $precio = $precio * $copias;
  echo "Solicitud registrada con éxito. Precio de la solicitud: $precio €";
  ?>

  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
