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
      <li><a href="./index.php" class="active"><span class="icon-home"></span><span class="nombre_nav"> Inicio</span></a></li>
      <li><a href="./registro.php"><span class="icon-user-add"></span><span class="nombre_nav"> Registro</span></a> </li>
      <li><a href="./buscar.html"><span class="icon-search"></span><span class="nombre_nav"> Buscar</span></a> </li>

      <div class="login_container">
        <form id="login_form" action="control.php" method="post">
          <label><input type="text" name="usuario" value="" placeholder="Usuario..." ></label>
          <label><input type="password" name="psw" value="" placeholder="Contraseña..." ></label>
          <label><input type="submit" name="login" value="Login" class="botones" ></label>
        </form>
      </div>

    </ul>
</nav>



<?php
if (!empty($_GET['message'])) {
    echo '<p>Datos introducios incorrectos</p>';
}
?>


  <h3>Últimas Fotos</h3>
  <section id="ultimas_fotos">
      <article class="image fit">
        <a href="./foto.html">
          <img src="foto.jpg" alt="foto" style="width:150px;">
        </a>
        <h4>Título</h4>
        <p>Fecha</p>
        <p>País</p>
      </article>
      <article>
        <a href="./foto.html">
          <img src="foto.jpg" alt="foto" style="width:150px;">
        </a>
        <h4>Título</h4>
        <p>Fecha</p>
        <p>País</p>
      </article>
      <article>
        <a href="./foto.html">
          <img src="foto.jpg" alt="foto" style="width:150px;">
        </a>
        <h4>Título</h4>
        <p>Fecha</p>
        <p>País</p>
      </article>
      <article>
        <a href="./foto.html">
          <img src="foto.jpg" alt="foto" style="width:150px;">
        </a>
        <h4>Título</h4>
        <p>Fecha</p>
        <p>País</p>
      </article>
      <article>
        <a href="./foto.html">
          <img src="foto.jpg" alt="foto" style="width:150px;">
        </a>
        <h4>Título</h4>
        <p>Fecha</p>
        <p>País</p>
      </article>
      <article>
        <a href="./foto.html">
          <img src="foto.jpg" alt="foto" style="width:150px;">
        </a>
        <h4>Título</h4>
        <p>Fecha</p>
        <p>País</p>
      </article>
  </section>
  <footer>
    ©PI-Pictures&Images

  </footer>
</body>
</html>
