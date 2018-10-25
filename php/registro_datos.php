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
        <li><a href="./registro.php"class="active"><span class="icon-user-add"></span><span class="nombre_nav"> Registro</span></a> </li>
        <li><a href="./buscar.php"><span class="icon-search"></span><span class="nombre_nav"> Buscar</span></a> </li>
        <li><a href="./usuario_registrado.html"><span class="icon-user"></span><span class="nombre_nav"> Menú Usuario</span></a></li>
      </ul>
  </nav>

  <?php
  if (!empty($_POST["nombre"])&& !empty($_POST["email"])&& !empty($_POST["psw"]) && !empty($_POST["psw2"])&& !empty($_POST["sexo"])&& !empty($_POST["nacido"]) && !empty($_POST["pais"])) {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $psw = $_POST["psw"];
    $psw2 = $_POST["psw2"];
    $sexo = $_POST["sexo"];
    $nacido = $_POST["nacido"];
    $pais = $_POST["pais"];
    $ciudad = $_POST["ciudad"];
    if ($psw != $psw2) {
      echo "Las contraseñas no coinciden. Arréglalo";
    }else {
      echo "Tu nombre es: $nombre , con email: $email , sexo: $sexo , nacido el $nacido en $ciudad - $pais";
    }

  }else {
    echo "Has dejado algún dato vacio, vuelve atrás y rellénalos todos";
  }
  ?>

  <footer>
    ©PI-Pictures&Images
  </footer>
</body>
</html>
