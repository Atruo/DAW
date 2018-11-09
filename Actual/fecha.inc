<?php

$date = date('d/m/Y H:i:s');

if (isset($_COOKIE['recuerda_psw'])) {
  if ($_COOKIE['recuerda_psw']!= '') {
    $ultima = $_COOKIE['fecha'];
    echo "<p id = 'echoFecha'>Tu última visita fue: $ultima </p>";
    setcookie('fecha', $date, time() + 90 * 24 * 60 * 60);
  }
}

 ?>
