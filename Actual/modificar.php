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

  // Ejecuta una sentencia SQL
  if (!isset($_SESSION['autenticado'])) {
    $_SESSION['autenticado']='NO';
  }
  if ($_SESSION["autenticado"] != "SI") {
    echo '<h3>Debes iniciar sesión para acceder a esta página</h3>';
  }else {
    $datos = $_COOKIE['recuerda_usu'];
    $sentencia = "SELECT NomUsuario, Email, FNacimiento, Ciudad, NomPais, Nombre, Pais, Estilo FROM usuarios, estilos, paises where NomUsuario = '$datos'and  Estilo = IdEstilo and Pais = IdPais";
    if(!($resultado = $mysqli->query($sentencia))) {
      echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
      echo '</p>';
      exit;
    }
    echo "<h3> Estos son tus Datos: </h3>";
    echo "<div id = 'lista_estilos'>";
    while ($fila = $resultado->fetch_assoc()) {
      echo '<h4> <span>Nombre: </span>  '.$fila['NomUsuario'].' </h4>';
      echo '<h4> <span>Email: </span>  '.$fila['Email'].' </h4>';
      echo '<h4> <span>FNacimiento: </span>  '.$fila['FNacimiento'].' </h4>';
      echo '<h4> <span>Ciudad: </span>  '.$fila['Ciudad'].' </h4>';
      echo '<h4> <span>Pais: </span>  '.$fila['NomPais'].' </h4>';
      echo '<h4> <span>Estilo: </span>  '.$fila['Nombre'].' </h4>';

    }
    echo '</div>';

    }

  ?>



  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
