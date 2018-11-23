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
  $titulo = $_POST["titulo"];
  $fecha = $_POST["fecha"];
  $pais = $_POST["pais"];

   echo "Valores de búsqueda: titulo: $titulo  fecha: $fecha, pais: $pais";
   echo '<h3>Resultados de tu búsqueda:</h3>';
   echo '<section id="ultimas_fotos">';
   $mysqli = @new mysqli(
           'localhost',   // El servidor
           'root',    // El usuario
           '',          // La contraseña
           'pibd'); // La base de datos

   if($mysqli->connect_errno) {
     echo '<p>Error al conectar con la base de datos: ' . $mysqli->connect_error;
     echo '</p>';
     exit;
   }

   // Ejecuta una sentencia SQL
   $sentencia = 'SELECT IdFoto, Titulo, FRegistro, NomPais, Fichero, Alternativo  FROM fotos, paises where Pais = IdPais';
   if(!($resultado = $mysqli->query($sentencia))) {
     echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " . $mysqli->error;
     echo '</p>';
     exit;
   }
        $cont = 1;
        $control = 1;
       while($fila = $resultado->fetch_assoc()) {
         if ($titulo == $fila['Titulo'] || $fecha == $fila['FRegistro'] || $pais == $fila['NomPais'] ) {
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
         if ($titulo == '' && $fecha == '' && $pais == -1) {
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
       }

      echo ' </section>';

   ?>




  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
