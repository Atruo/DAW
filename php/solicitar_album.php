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
  <div >
    <h3>Descripción de funcionamineto</h3>
    <table id="tabla">
      <tr>
        <td><strong>Num. Páginas  </strong></td>
        <td><strong>Resolución  </strong></td>
        <td><strong>Color (blanco/negro o color)  </strong></td>
        <td><strong>Precio</strong></td>
      </tr>
      <tr>
        <td>1-100</td>
        <td>150-300</td>
        <td>Color</td>
        <td>15€</td>
      </tr>
      <tr>
        <td>200-300</td>
        <td>300-900</td>
        <td>Blanco/Negro</td>
        <td>10€</td>
      </tr>
      <tr>
        <td>300-500</td>
        <td>300-900</td>
        <td>Color</td>
        <td>50€</td>
      </tr>
    </table>
  </div>
<br>

<form id="solicitar_album" action="solicitar_album_resultado.php" method="post">

<p>  <label>Nombre Completo(*): <input type="text" name="nombre" value="" maxlength="200" required></label></p>

  <p><label>Título Álbum(*): <input type="text" name="titulo" value="" maxlength="200" required></label></p>

  <p><label>Texto Adicional: <input type="text" name="adicional" value="" maxlength="4000"></label></p>

  <p><label>Email(*): <input type="text" name="email" value="" maxlength="200" required></label></p>

  <label>Calle: <input type="text" name="calle" value="" ></label>
  <label>Nº Calle: <input type="text" name="ncalle" value="" ></label>
  <label>Piso: <input type="text" name="piso" value=""></label>
  <p><label>Puerta:  <input type="text" name="puerta" value="" ></label></p>

  <label>Código Postal: <input type="text" name="cpostal" value="" ></label>
  <label>Localidad: <input type="text" name="localidad" value="" ></label>

  <label>Provincia:  <select id="busqueda_provincia">

 <option value='alava'>Álava</option>
 <option value='albacete'>Albacete</option>
 <option value='alicante'>Alicante/Alacant</option>
</select></label>

<p><label>País: <select id="busqueda_pais">

<option value='españa'>España</option>
<option value='francia'>Francia</option>
<option value='portugal'>Portugal</option>


</select></label></p>


<p><label>Color: <input type="color"></label></p>

  <p><label>Nº de Copias(*): <input type="number" min="1" name="copias" value="1" required></label></p>

<label>Resolución:  <input type="range" value="150" name="resolucion" id="resolucion"  min="150" max="900" step="150" onchange="document.getElementById('outresolucion').innerHTML=this.value"></label>

  <span id="outresolucion">150</span>
  <p><label>Álbum(*): <select  name="album" required>
          <option value="">Album1</option>
          <option value="2">Album2</option>
          <option value="3">Album3</option>

  </select></label></p>

  <p><label>Fecha: <input type="date" name="fecha" value=""></label></p>

<p><label>Color: <select  name="colorAlbum">
        <option value="1">Blanco/Negro</option>
        <option value="2">Color</option>
      </select></label></p>

<input type="submit" name="solicitar" value="Solicitar" class="botones">
</form>


<?php
require_once('footer.inc');
 ?>
</body>
</html>
