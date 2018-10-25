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
  <a href="index.php" class="titulo"><h1 class="Titulo">PI - Pictures & Images</h1></a>
  <nav>
      <input type="checkbox" class="burger_check" id="burger">
      <ul class="sidenav">
        <li><label for="burger"  id="hamburguesita">&equiv;</label></li>
        <li><a href="./index.php" ><span class="icon-home"></span><span class="nombre_nav"> Inicio</span></a></li>
        <li><a href="./registro.php"><span class="icon-user-add"></span><span class="nombre_nav"> Registro</span></a> </li>
        <li><a href="./buscar.php"><span class="icon-search"></span><span class="nombre_nav"> Buscar</span></a> </li>
        <li><a href="./usuario_registrado.html" class="active"><span class="icon-user"></span><span class="nombre_nav"> Menú Usuario</span></a></li>
      </ul>
  </nav>

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

  <footer>
    ©PI-Pictures&Images
  </footer>
</body>
</html>
