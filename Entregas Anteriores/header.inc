<!DOCTYPE html>
<html lang="es">
<!-- La cabecera -->
<head>
<meta charset="utf-8" />
<meta name="generator" content="Bloc de notas" />
<meta name="author" content="Sergio Luján Mora" />
<meta name="keywords" content="HTML5, web" />
<meta name="description" content="Plantilla base de una página creada con HTML5" />

<link rel="stylesheet" type="text/css" href="CSS/print.css" media="print" />
<?php
if (isset($_COOKIE['recuerda_usu'])){
  if ($_COOKIE['recuerda_usu'] =='usuario2' ) {

      echo '<link rel="stylesheet" href="CSS/contraste.css">';
    }else {
      echo '<link rel="stylesheet" href="CSS/index.css">';
    }
}else {
    echo '<link rel="stylesheet" href="CSS/index.css">';
}

 ?>
<link rel="alternate stylesheet" type="text/css" href="CSS/contraste.css" title="Estilo de alto contraste DAW" />
<link rel="stylesheet" href="css/entypo.css">
<title>Pictures & Images</title>
</head>
