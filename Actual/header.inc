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
  require_once('base_datos.inc');
  $datos = $_COOKIE['recuerda_usu'];
  $sentencia = "SELECT IdUsuario FROM usuarios WHERE NomUsuario = '$datos'";
  if(!($resultado = $mysqli->query($sentencia))) {
    echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
    echo '</p>';
    exit;
  }
  $fila = $resultado->fetch_assoc();
  $id = $fila['IdUsuario'];
  $sentencia = "SELECT Fichero FROM usuarios, estilos WHERE IdUsuario = $id and Estilo = IdEstilo";
  if(!($resultado = $mysqli->query($sentencia))) {
    echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
    echo '</p>';
    exit;
  }

  $fila = $resultado->fetch_assoc();
  $estilo = (string)$fila['Fichero'];

      echo '<link rel="stylesheet" href="'.$estilo.'">';

}else {
    echo '<link rel="stylesheet" href="CSS/index.css">';
}

 ?>
<link rel="alternate stylesheet" type="text/css" href="CSS/contraste.css" title="Estilo de alto contraste DAW" />
<link rel="stylesheet" href="css/entypo.css">
<title>Pictures & Images</title>
</head>
