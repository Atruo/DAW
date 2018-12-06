<?php
require_once('header.inc');
require_once('actualizarfecha.inc');
?>
<!-- El cuerpo -->
<body>
  <?php
  require_once('barra_nav.inc');

  if (!isset($_SESSION['autenticado'])) {
    $_SESSION['autenticado']='NO';
  }
  if ($_SESSION["autenticado"] != "SI") {
    echo '<h3>Debes iniciar sesión para acceder a esta página</h3>';
  }else {
    $titulo = $_GET["titulo"];
    $fecha = $_GET["fecha"];
    $pais = $_GET["pais"];
    $id = $_GET["id"];
    $url ='';

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

    // Ejecuta una sentencia SQL
    $sentencia = 'SELECT IdFoto,Titulo, Descripcion, fotos.FRegistro, Fichero, Alternativo, fotos.Pais, NomUsuario, Album  FROM fotos, usuarios where IdUsuario = fotos.Usuario';
    if(!($resultado = $mysqli->query($sentencia))) {
      echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
      echo '</p>';
      exit;
    }
     while($fila = $resultado->fetch_assoc()) {
       if ($fila['IdFoto'] == $id) {
         echo '<div id="info_foto">
             <img src='.$fila['Fichero'].'';
             echo ' alt="'.$fila['Alternativo'].'" style="width:200px;">';
             echo '<p>'.$titulo.'</p>
             <p>'.$fecha.'</p>
             <p>'.$pais.'</p>
             <p>'.$fila['Album'].'</p>
             <p>'.$fila['NomUsuario'].'</p>';


           echo "</div>";
           break;
       }
     }




  }
  ?>
