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
  if (!empty($_POST["nombre"])&& !empty($_POST["email"])&& !empty($_POST["psw"]) && !empty($_POST["psw2"])&& !empty($_POST["sexo"])&& !empty($_POST["nacido"]) && !empty($_POST["pais"])) {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $psw = $_POST["psw"];
    $psw2 = $_POST["psw2"];
    $sexo = $_POST["sexo"];
    $nacido = $_POST["nacido"];
    $pais = $_POST["pais"];
    $ciudad = $_POST["ciudad"];
    if ($psw != $psw2) {
      echo "<p class = 'modal_registro'>Las contraseñas no coinciden. <a href='./registro.php'>Arréglalo</a>.</p>";
    }else {
      echo "<div id='datos_registro'><p>Tu nombre es: $nombre </p> <p> Tu email: $email </p> <p> Tu sexo: $sexo </p> <p>Nacido el $nacido en $ciudad - $pais </p></div>";
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
