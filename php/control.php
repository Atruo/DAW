<?php
 /* Redirecciona a una página diferente que se encuentra en el directorio actual */
 if ($_POST['usuario']=='pepe' && $_POST['psw']=='123') {
   $host = $_SERVER['HTTP_HOST'];
   $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
   $extra = 'index.php';
   session_start();
   $_SESSION["autenticado"]= "SI";
   header("Location: http://$host$uri/$extra");
   exit;
 }else {
   $_SESSION['message'] = 'bad';
   $host = $_SERVER['HTTP_HOST'];
   $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
   $extra = 'index.php?message=badrequest';
   header("Location: http://$host$uri/$extra");
   exit;
 }

?>
