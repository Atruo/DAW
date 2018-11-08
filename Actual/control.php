<?php
 /* Redirecciona a una página diferente que se encuentra en el directorio actual */
 $datos = array('usuario' => '123' ,'usuario2' => '123' ,'usuario3' => '123' );
 $control = false;
 foreach ($datos as $usuario=> $psw) {
   if ($usuario == $_POST['usuario'] && $psw == $_POST['psw']) {
     $control = true;
     break;
   }
 }
 if ($control == true) {
   $host = $_SERVER['HTTP_HOST'];
   $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
   $extra = 'index.php';
   session_start();
   $_SESSION["autenticado"]= "SI";
   if (isset($_POST['marcado'])) {
      $galleta_psw = $_POST['psw'];
      if(isset($_COOKIE['recuerda_psw'])){// Caduca en 90 dias
        setcookie('recuerda_psw', $galleta_psw, time() + 90 * 24 * 60 * 60);
      }else{// Caduca en 90 dias
        setcookie('recuerda_psw', $galleta_psw, time() + 90 * 24 * 60 * 60);
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
