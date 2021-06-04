<?php 
//Encabezado de la pagina
include ('templates/head.php');
?>
<div class="spacing-top">
  <section class="sec-galleria">
  	<frameset rows="15%,*,75">  
     	<frame src="skillprogramacion.html" name="galleria"></frame>
  </frameset>
  	<div class="gallery">
    <a target="galleria" href="http://localhost/Portafolio/Public/images/Programacion/Landin-page.png">
      <img src="http://localhost/Portafolio/Public/images/Programacion/Landin-page.png" alt="Before" width="600" height="400">
    </a>
    <div class="desc">Pagina en HTML</div>
  </div>

  <div class="gallery">
    <a target="galleria" href="http://localhost/Portafolio/Public/images/Programacion/Mapa.png">
      <img src="http://localhost/Portafolio/Public/images/Programacion/Mapa.png" alt="Portafolio" width="600" height="400">
    </a>
    <div class="desc">Mapa de navegacion portafolio</div>
  </div>

  <div class="gallery">
    <a target="galleria" href="http://localhost/Portafolio/Public/images/Programacion/Mockup.png">
      <img src="http://localhost/Portafolio/Public/images/Programacion/Mockup.png" alt="Rusbel" width="600" height="400">
    </a>
    <div class="desc">Mockup del portafolio</div>
  </div>

  <div class="gallery">
    <a target="galleria" href="http://localhost/Portafolio/Public/images/Programacion/Laberinto.jpg">
      <img src="http://localhost/Portafolio/Public/images/Programacion/Laberinto.jpg" alt="Certificado" width="600" height="400">
    </a>
    <div class="desc">Certificado code</div>
  </div>
</section>
</div>
<?php 
//Pie de la página
include ('templates/footer.php');
?>