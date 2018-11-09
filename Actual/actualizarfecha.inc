
<?php
$date = date('d/m/Y H:i:s');
if (isset($_COOKIE['recuerda_psw'])) {
  if ($_COOKIE['recuerda_psw']!= '') {
    setcookie('fecha', $date, time() + 90 * 24 * 60 * 60);
  }
}

 ?>
