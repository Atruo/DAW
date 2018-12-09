<?php
require_once('header.inc');
?>
<!-- El cuerpo -->
<body>

<?php
require_once('barra_nav.inc');
require_once('fecha.inc');

 // Conecta con el servidor de MySQL
 require_once('base_datos.inc');

 // Ejecuta una sentencia SQL
 $sentencia = 'SELECT IdFoto, Titulo, FRegistro, NomPais, Fichero, Alternativo  FROM fotos, paises where Pais = IdPais  order by FRegistro desc LIMIT 6';
 if(!($resultado = $mysqli->query($sentencia))) {
   echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
   echo '</p>';
   exit;
 }
 echo '<h3>Últimas Fotos</h3><section id="ultimas_fotos">';
 $control = 1;
 $cont = 1;
   while($fila = $resultado->fetch_assoc()) {
     if ($control == 1) {
       echo '<article> <a href="./foto.php?num='.$cont.'&id='.$fila['IdFoto'].'&titulo='.$fila['Titulo'].'&fecha='.$fila['FRegistro'].'&pais='.$fila['NomPais'].'">';
       echo '<img src= "'.$fila['Fichero'].'" alt="'.$fila['Alternativo'].'" style="width:150px;">';
       echo "</a>";
       echo '<h4>'.$fila['Titulo'].'</h4>';
       echo '<p>'.$fila['FRegistro'].'</p>';
       echo '<p>'.$fila['NomPais'].'</p>';
       echo "</article>";
       $control = 2;
     }else {
       echo '<article> <a href="./foto.php?num='.$cont.'&id='.$fila['IdFoto'].'&titulo='.$fila['Titulo'].'&fecha='.$fila['FRegistro'].'&pais='.$fila['NomPais'].'">';
       echo '<img src= "'.$fila['Fichero'].'" alt="'.$fila['Alternativo'].'" style="height:100px;">';
       echo "</a>";
       echo '<h4>'.$fila['Titulo'].'</h4>';
       echo '<p>'.$fila['FRegistro'].'</p>';
       echo '<p>'.$fila['NomPais'].'</p>';
       echo "</article>";
       $control = 1;
     }
     $cont = $cont +1;

  }
  echo "</section>";
?>


<?php
require_once('footer.inc');
 ?>
</body>
</html>
