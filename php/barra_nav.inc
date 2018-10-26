  <a href="index.php" class="titulo"><h1 class="Titulo">PI - Pictures & Images</h1></a>


<?php
session_start();
if (!isset($_SESSION['autenticado'])) {
  $_SESSION['autenticado']='NO';
}
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
if ($_SESSION["autenticado"] != "SI") {
  echo '<nav>
      <input type="checkbox" class="burger_check" id="burger">
      <ul class="sidenav">
        <li><label for="burger"  id="hamburguesita">&equiv;</label></li>
        <li><a href="./index.php" class="active"><span class="icon-home"></span><span class="nombre_nav"> Inicio</span></a></li>
        <li><a href="./registro.php"><span class="icon-user-add"></span><span class="nombre_nav"> Registro</span></a> </li>
        <li><a href="./buscar.php"><span class="icon-search"></span><span class="nombre_nav"> Buscar</span></a> </li>

        <div class="login_container">
          <form id="login_form" action="control.php" method="post">
            <label><input type="text" name="usuario" value="" placeholder="Usuario..." ></label>
            <label><input type="password" name="psw" value="" placeholder="Contraseña..." ></label>
            <label><input type="submit" name="login" value="Login" class="botones" ></label>
          </form>
        </div>

      </ul>
  </nav>';
}else {
  echo '<nav>
      <input type="checkbox" class="burger_check" id="burger">
      <ul class="sidenav">
        <li><label for="burger"  id="hamburguesita">&equiv;</label></li>
        <li><a href="./index.php" class="active"><span class="icon-home"></span><span class="nombre_nav"> Inicio</span></a></li>
        <li><a href="./buscar.php"><span class="icon-search"></span><span class="nombre_nav"> Buscar</span></a> </li>
        <li><a href="./usuario_registrado.php"><span class="icon-user"></span><span class="nombre_nav"> Menú Usuario</span></a></li>
        <li><a href="./cerrar_sesion.php"><span class="icon-logout"></span><span class="nombre_nav"> Cerrar Sesión</span></a></li>


      </ul>
  </nav>';
}

 ?>
