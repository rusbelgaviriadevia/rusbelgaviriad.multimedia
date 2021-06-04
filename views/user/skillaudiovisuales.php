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
  <a target="galleria" href="http://localhost/Portafolio/Public/Videos/anillo.mov">
    <img src="http://http://localhost/Portafolio/Public/Videos/anillo.mov" alt="Anillo" width="600" height="400">
  </a>
  <div class="desc">Ejercicio animacion logo</div>
</div>

<div class="gallery">
  <a target="galleria" href="http://http://localhost/Portafolio/Public/Videos/Caminar.mov">
    <img src="http://localhost/Portafolio/Public/Videos/Caminar.mp4" alt="Caminar" width="600" height="400">
  </a>
  <div class="desc">Ejercicio generar movimiento</div>
</div>

<div class="gallery">
  <a target="galleria" href="http://localhost/Portafolio/Public/Videos/Bicicleta.mov">
    <img src="http://localhost/Portafolio/Public/Videos/Bicicleta.mov" alt="Bicicleta" width="600" height="400">
  </a>
  <div class="desc">Eejercicio rotacion</div>
</div>
</section>
<?php 
//Pie de la página
include ('templates/footer.php');
?>