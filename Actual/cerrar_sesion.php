<?php
session_start();
$_SESSION['autenticado']='NO';
$host = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.php';

  unset($_COOKIE['recuerda_psw']);
  setcookie('recuerda_psw', '', time() - 3600); // empty value and old timestamp
  unset($_COOKIE['recuerda_usu']);
  setcookie('recuerda_usu', '', time() - 3600); // empty value and old timestamp
  unset($_COOKIE['fecha']);
  setcookie('fecha', '', time() - 3600); // empty value and old timestamp

header("Location: http://$host$uri/$extra");
exit;
?>
