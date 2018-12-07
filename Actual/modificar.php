<?php
require_once('header.inc');
require_once('actualizarfecha.inc');
?>
<!-- El cuerpo -->
<body>
  <?php
  require_once('barra_nav.inc');
  require_once('base_datos.inc');

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

    $fila = $resultado->fetch_assoc();
    $estilo_actual = $fila['Nombre'];
      echo '<form class="form_relleno" action="modificar.php" method="post" id="form_registro">';
      echo '<p><label>Nombre: '.$fila['NomUsuario'].' <input type="text" name="nombre" value=""></label></p>';
      echo '<p><label>Email: '.$fila['Email'].' <input type="text" name="email" value=""></label></p>';
      echo '<p><label>FNacimiento: '.$fila['FNacimiento'].' <input type="date" name="nacimiento" value=""></label></p>';
      echo '<p><label>Ciudad: '.$fila['Ciudad'].' <input type="text" name="ciudad" value=""></label></p>';
      echo '<p><label>Pais: '.$fila['NomPais'].' <select name="pais">';
      $sentencia = 'SELECT * FROM paises order by NomPais asc';
      if(!($resultado = $mysqli->query($sentencia))) {
        echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
        echo '</p>';
        exit;
      }
        echo '<option value="0"> Seleccionar</option>';
         while($fila = $resultado->fetch_assoc()) {
           echo '<option value="'.$fila['IdPais'].'">'.$fila['NomPais'].'</option>';
         }
      echo "</select></label></p>";

        echo '<p><label>Estilo: '.$estilo_actual.' <select name="estilo">';
      $sentencia = 'SELECT * FROM estilos';
      if(!($resultado = $mysqli->query($sentencia))) {
        echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
        echo '</p>';
        exit;
      }
      echo '<option value="0"> Seleccionar</option>';
         while($fila = $resultado->fetch_assoc()) {
           echo '<option value="'.$fila['IdEstilo'].'">'.$fila['Nombre'].'</option>';
         }


      echo "  </select></label></p>";
      echo '<p><label>Contraseña para confirmar: <input type="password" name="psw" value=""></label></p>';
      echo '<input type="submit" name="modificar" value="Modificar">';
      echo "  </form>";

    }

  ?>



  <?php
    $datos = $_COOKIE['recuerda_usu'];
    require_once('base_datos.inc');
     $sentencia = "SELECT Pais, Estilo, Clave FROM usuarios WHERE NomUsuario = '$datos' ";
     if(!($resultado = $mysqli->query($sentencia))) {
       echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
       echo '</p>';
       exit;
     }
     $fila = $resultado->fetch_assoc();
     $paiss = $fila['Pais'];
     $estiloo = $fila['Estilo'];
     $psw = $fila['Clave'];


  if (!empty($_POST['nombre']) && preg_match("/^[A-Za-z0-9]{3,15}$/",$_POST['nombre']) && $_POST['psw'] == $psw) {

   $nombre = $_POST['nombre'];
   $sentencia = "UPDATE usuarios SET NomUsuario = '$nombre' WHERE NomUsuario = '$datos' ";
   if(!mysqli_query($mysqli, $sentencia)) {
     echo mysqli_error($mysqli);
     die("Error: no se pudo realizar la inserción");
   }
    setcookie('recuerda_usu', $nombre, time() + 90 * 24 * 60 * 60);
      $datos = $nombre;
   // Cierra la conexión con la base de datos

   echo "<p>Nombre actualizado</p>";
  }

    $punto = explode(".",$_POST['email']);
  if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)&& $_POST['psw'] == $psw && strlen($punto[count($punto)-1])>1 && strlen($punto[count($punto)-1])<5) {

   $nombre = $_POST['email'];
   $sentencia = "UPDATE usuarios SET Email = '$nombre' WHERE NomUsuario = '$datos' ";
   if(!mysqli_query($mysqli, $sentencia)) {
     echo mysqli_error($mysqli);
     die("Error: no se pudo realizar la inserción");
   }

   // Cierra la conexión con la base de datos

   echo "<p>Email actualizado</p>";
  }
  if (!empty($_POST['nacimiento'])&& $_POST['psw'] == $psw) {

   $nombre = $_POST['nacimiento'];
   $sentencia = "UPDATE usuarios SET FNacimiento = $nombre WHERE NomUsuario = '$datos' ";
   if(!mysqli_query($mysqli, $sentencia)) {
     echo mysqli_error($mysqli);
     die("Error: no se pudo realizar la inserción");
   }

   // Cierra la conexión con la base de datos


   echo "<p>FNacimiento actualizado</p>";
  }

  if (!empty($_POST['ciudad'])&& $_POST['psw'] == $psw) {

   $nombre = $_POST['ciudad'];
   $sentencia = "UPDATE usuarios SET Ciudad = '$nombre' WHERE NomUsuario = '$datos' ";
   if(!mysqli_query($mysqli, $sentencia)) {
     echo mysqli_error($mysqli);
     die("Error: no se pudo realizar la inserción");
   }


   echo "<p>Ciuad actualizado</p>";
  }

  if (!empty($_POST['pais']) && $_POST['pais']!=0 && $_POST['psw'] == $psw) {

   $nombre = $_POST['pais'];
   $sentencia = "UPDATE usuarios SET Pais = $nombre WHERE NomUsuario = '$datos' ";
   if(!mysqli_query($mysqli, $sentencia)) {
     echo mysqli_error($mysqli);
     die("Error: no se pudo realizar la inserción");
   }

   // Cierra la conexión con la base de datos

   echo "<p>Pais actualizado</p>";
  }

  if (!empty($_POST['estilo']) && $_POST['estilo']!=0 && $_POST['psw'] == $psw) {


   $nombre = $_POST['estilo'];
   $sentencia = "UPDATE usuarios SET Estilo = $nombre WHERE NomUsuario = '$datos' ";
   if(!mysqli_query($mysqli, $sentencia)) {
     echo mysqli_error($mysqli);
     die("Error: no se pudo realizar la inserción");
   }

   // Cierra la conexión con la base de datos

   echo "<p>Estilo actualizado</p>";
   header("Refresh:0");
  }
  mysqli_close($mysqli);
  require_once('footer.inc');
   ?>
</body>
</html>
