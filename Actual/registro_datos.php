<?php
require_once('header.inc');
require_once('actualizarfecha.inc');
?>
<!-- El cuerpo -->
<body>
  <?php
  require_once('barra_nav.inc');
  ?>

  <?php
  if (!empty($_POST["nombre"])&& !empty($_POST["email"])&& !empty($_POST["estilo"])&& !empty($_POST["foto_perfil"])&& !empty($_POST["usu"])&& !empty($_POST["psw"]) && !empty($_POST["psw2"])&& !empty($_POST["sexo"])&& !empty($_POST["nacido"]) && !empty($_POST["pais"])) {
    $nombre = $_POST["nombre"];
    $usu = $_POST["usu"];
    $email = $_POST["email"];
    $psw = $_POST["psw"];
    $psw2 = $_POST["psw2"];
    $sexo = $_POST["sexo"];
    $nacido = $_POST["nacido"];
    $pais = $_POST["pais"];
    $ciudad = $_POST["ciudad"];
    $foto = $_POST["foto_perfil"];
    $estilo = $_POST["estilo"];

    if ($psw != $psw2) {
      echo "<p class = 'modal_registro'>Las contraseñas no coinciden. <a href='./registro.php'>Arréglalo</a>.</p>";


    }else {
      echo "<div id='datos_registro'><p>Tu nombre es: $nombre </p> <p> Tu email: $email </p> <p> Tu sexo: $sexo </p> <p>Nacido el $nacido en $ciudad - $pais </p></div>";
      require_once('base_datos.inc');
      // Sentencia SQL: inserta un nuevo libro
       $sentencia = "INSERT INTO usuarios VALUES (null, '$usu', '$psw', '$email', $sexo, $nacido, '$ciudad', $pais, 9,date('Y/m/d H:i:s'), $estilo )";
       // Ejecuta la sentencia SQL
       if(!mysqli_query($mysqli, $sentencia)) {
         echo mysqli_error($mysqli);
         die("Error: no se pudo realizar la inserción");
       }

       

       // Cierra la conexión con la base de datos
       mysqli_close($mysqli);
    }



  }else {
    echo "<p class = 'modal_registro'>Has dejado algún dato vacio, vuelve atrás y rellénalos todos</p>";
  }
  ?>

  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
