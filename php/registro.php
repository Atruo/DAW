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
    <p><label>Usuario: <input type="text" name="nombre" value=""></label></p>

    <p><label>Contraseña: <input type="password" name="psw" value=""></label></p>

    <p><label>Repetir Contraseña: <input type="password" name="psw2" value=""></label></p>

    <p><label>Email: <input type="text" name="email" value=""></label></p>

    <p><label>Sexo: <select name="sexo">
          <option value="Masculino">Masculino</option>
          <option value="Femenino">Femenino</option>
          <option value="ninguno">No Contestar</option>
        </select></label></p>

    <p><label>Fecha Nacimiento: <input type="date" name="nacido" value=""></label></p>
    <p><label>Pais de Residencia: <input type="text" name="pais" value=""></label></p>
    <p><label>Ciudad de Residencia: <input type="text" name="ciudad" value=""></label></p>
     <p><label>Foto Perfil: <input type="file" name="foto_perfil"></label></p>

    <input type="submit" name="registrarse" value="Registrarse">
  </form>
  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
