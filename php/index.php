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
if (!empty($_GET['message'])) {
    echo '<p>Datos introducios incorrectos</p>';
}
?>


  <h3>Últimas Fotos</h3>
  <section id="ultimas_fotos">
      <article class="image fit">
        <a href="./foto.php?num=1">
          <img src="foto.jpg" alt="foto" style="width:150px;">
        </a>
        <h4>Título</h4>
        <p>Fecha</p>
        <p>País</p>
      </article>
      <article>
        <a href="./foto.php?num=2">
          <img src="foto2.jpg" alt="foto" style=" height:100px;">
        </a>
        <h4>Título</h4>
        <p>Fecha</p>
        <p>País</p>
      </article>
      <article>
        <a href="./foto.php?num=3">
          <img src="foto.jpg" alt="foto" style="width:150px;">
        </a>
        <h4>Título</h4>
        <p>Fecha</p>
        <p>País</p>
      </article>
      <article>
        <a href="./foto.php?num=4">
          <img src="foto2.jpg" alt="foto" style=" height:100px;">
        </a>
        <h4>Título</h4>
        <p>Fecha</p>
        <p>País</p>
      </article>
      <article>
        <a href="./foto.php?num=5">
          <img src="foto.jpg" alt="foto" style="width:150px;">
        </a>
        <h4>Título</h4>
        <p>Fecha</p>
        <p>País</p>
      </article>
      <article>
        <a href="./foto.php?num=6">
          <img src="foto2.jpg" alt="foto" style=" height:100px;">
        </a>
        <h4>Título</h4>
        <p>Fecha</p>
        <p>País</p>
      </article>
  </section>
<?php
require_once('footer.inc');
 ?>
</body>
</html>
