<?php 
//Encabezado de la pagina
include ('templates/head.php');
?>
<div class="spacing-top">
<section class="sec-galleria">
	<frameset rows="15%,*,75">  
   	<frame src="skillprogramacion.html" name="galleria">  
</frameset>
	<div class="gallery">
  <a target="galleria" href="http://localhost/Portafolio/Public/images/Diseño/Ambigrama.png">
    <img src="http://localhost/Portafolio/Public/images/Diseño/Ambigrama.png" alt="Ambigrama" width="600" height="400">
  </a>
  <div class="desc">Ambigrama ejercicio con el nombre Rusbel</div>
</div>

<div class="gallery">
  <a target="galleria" href="http://localhost/Portafolio/Public/images/Diseño/Infografia.png">
    <img src="http://localhost/Portafolio/Public/images/Diseño/Infografia.png" alt="Infografia" width="600" height="400">
  </a>
  <div class="desc">Infografia Rusbel</div>
</div>

<div class="gallery">
  <a target="galleria" href="http://localhost/Portafolio/Public/images/Diseño/Poema.png">
    <img src="http://localhost/Portafolio/Public/images/Diseño/Poema.png" alt="Portada" width="600" height="400">
  </a>
  <div class="desc">Portade del poema</div>
</div>

<div class="gallery">
  <a target="galleria" href="http://localhost/Portafolio/Public/images/Diseño/Garfiel-art.png">
    <img src="http://localhost/Portafolio/Public/images/Diseño/Garfiel-art.png" alt="Garfiel" width="600" height="400">
  </a>
  <div class="desc">Dibujo a cuadros</div>
</div>
</section>
<?php 
//Pie de la página
include ('templates/footer.php');
?>