<?php
require_once('header.inc');
require_once('actualizarfecha.inc');
?>
<!-- El cuerpo -->
<body>
  <?php
  require_once('barra_nav.inc');

  $mysqli = @new mysqli(
          'localhost',   // El servidor
          'daw',    // El usuario
          '',          // La contraseña
          'pibd'); // La base de datos

  if($mysqli->connect_errno) {
    echo '<p>Error al conectar con la base de datos: ' . $mysqli->connect_error;
    echo '</p>';
    exit;
  }
  $albumID = $_GET['id'];
  $usu = $_GET['usu'];
  // Ejecuta una sentencia SQL
   echo '<h3>Fotos: </h3><section id="ultimas_fotos">';
  $sentencia = "SELECT  IdFoto, fotos.Titulo, fotos.FRegistro, NomPais, fotos.Fichero, Alternativo   FROM usuarios,albumes,fotos, paises where usuarios.Pais = IdPais and IdAlbum = '$albumID' and IdUsuario ='$usu' and Album = '$albumID' ";
  if(!($resultado = $mysqli->query($sentencia))) {
    echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
    echo '</p>';
    exit;
  }
  echo "<h3> Estos son tús álbumes: </h3>";
  echo "<div id = 'lista_estilos'>";
  $control = 1;
  $cont = 1;
  while ($fila = $resultado->fetch_assoc()) {
    if ($control == 1) {
      echo '<article> <a href="./foto.php?num='.$cont.'&id='.$fila['IdFoto'].'&titulo='.$fila['Titulo'].'&fecha='.$fila['FRegistro'].'&pais='.$fila['NomPais'].'">';
      echo '<img src= "'.$fila['Fichero'].'" alt="'.$fila['Alternativo'].'" style="width:150px;">';
      echo "</a>";
      echo '<h4>'.$fila['Titulo'].'</h4>';
      echo '<p>'.$fila['FRegistro'].'</p>';
      echo '<p>'.$fila['NomPais'].'</p>';
      echo "</article>";
      $control = 2;
    }else {
      echo '<article> <a href="./foto.php?num='.$cont.'&id='.$fila['IdFoto'].'&titulo='.$fila['Titulo'].'&fecha='.$fila['FRegistro'].'&pais='.$fila['NomPais'].'">';
      echo '<img src= "'.$fila['Fichero'].'" alt="'.$fila['Alternativo'].'" style="height:100px;">';
      echo "</a>";
      echo '<h4>'.$fila['Titulo'].'</h4>';
      echo '<p>'.$fila['FRegistro'].'</p>';
      echo '<p>'.$fila['NomPais'].'</p>';
      echo "</article>";
      $control = 1;
    }
  }
    echo "</section>";
  ?>



  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
