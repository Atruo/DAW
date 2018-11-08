<?php
require_once('header.inc');
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
   echo "Valores de búsqueda: titulo: $titulo  fecha: $fecha, pais: $pais"

   ?>
   <h3>Resultados de tu búsqueda:</h3>

   <section id="ultimas_fotos">
       <article class="image fit">
         <a href="./foto.php?num=1&titulo=Prueba&fecha=Fecha&pais=España">
           <img src="foto.jpg" alt="foto" style="width:150px;">
         </a>
         <h4>Prueba</h4>
         <p>Fecha</p>
         <p>España</p>
       </article>
       <article>
         <a href="./foto.php?num=2&titulo=Prueba&fecha=Fecha&pais=España">
           <img src="foto2.jpg" alt="foto" style=" height:100px;">
         </a>
         <h4>Prueba</h4>
         <p>Fecha</p>
         <p>España</p>
       </article>

  </section>
  <?php
  require_once('footer.inc');
   ?>
</body>
</html>
