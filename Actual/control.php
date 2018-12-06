<?php

require_once('base_datos.inc');

 // Ejecuta una sentencia SQL

 $sentencia = 'SELECT NomUsuario, Clave, Estilo  FROM usuarios';
 if(!($resultado = $mysqli->query($sentencia))) {
   echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
   echo '</p>';
   exit;
 }

 $usuario = $_POST['usuario'];
 $clave = $_POST['psw'];
   while ($fila = $resultado->fetch_assoc()) {
     if ($fila['NomUsuario'] == $usuario && $fila['Clave'] == $clave) {
       $control = true;
       break;
     }
   }










 if ($control == true) {
   $host = $_SERVER['HTTP_HOST'];
   $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
   $extra = 'index.php';
   $date = date('d/m/Y H:i:s');
   session_start();
   $_SESSION["autenticado"]= "SI";
   if (isset($_POST['marcado'])) {
      $galleta_psw = $_POST['psw'];
      if(isset($_COOKIE['recuerda_psw'])){// Caduca en 90 dias
        setcookie('recuerda_psw', $galleta_psw, time() + 90 * 24 * 60 * 60);
      }else{// Caduca en 90 dias
        setcookie('recuerda_psw', $galleta_psw, time() + 90 * 24 * 60 * 60);
      }
      if(isset($_COOKIE['fecha'])){// Caduca en 90 dias
        setcookie('fecha', $date, time() + 90 * 24 * 60 * 60);
      }else{// Caduca en 90 dias
        setcookie('fecha', $date, time() + 90 * 24 * 60 * 60);
      }
   }
   $galleta_usu = $_POST['usuario'];

   if(isset($_COOKIE['recuerda_usu'])){// Caduca en 90 dias
     setcookie('recuerda_usu', $galleta_usu, time() + 90 * 24 * 60 * 60);
   }else{// Caduca en 90 dias
     setcookie('recuerda_usu', $galleta_usu, time() + 90 * 24 * 60 * 60);
   }

   header("Location: http://$host$uri/$extra");
   exit;
 }else  {
   $_SESSION['message'] = 'bad';
   $host = $_SERVER['HTTP_HOST'];
   $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
   $extra = 'index.php?message=badrequest';
   header("Location: http://$host$uri/$extra");
   exit;
 }

?>
