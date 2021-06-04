<?php 
//Encabezado de la pagina
include ('templates/head.php');
if(isset($_GET['error'])){

	include ('../views/errors/errors.php');
}
?>
<section>
	<article class="initial">
		<div class="present">
		<div class="colum-1">
			<div>
				<h1>Rusbel Gaviria</h1>
				<p>
				Productor Multimedia. Colombia. Nací en Bogotá el 16 de agosto de 1986.</p>
			</div>
			<figure class="phot_fig"><img src="http://localhost/Portafolio/Public/images/fotoperfil.jpg" alt="Gaviria"/></figure>
		</div>
	<div class="colum-2">
		<p>Soy noble, me gusta establecer acciones sistemáticas y buen trabajo en equipo. vivo con mi madre.Juego  fútbol, ajedrez. Trabaje como ilumino-técnico en empresas que desarrollan eventos corporativos, fiestas y conciertos. actualmente estudio Entrenamiento en Programación en Campoalto. Para el 2023 construiré mi propia empresa. 
		</p>
	</div>
</div>
	</article>
		<article class="prog-enl">
			<figure class="Prog_fig">
				<img src="http://localhost/Portafolio/Public/images/Programacion/Landin-page.png"/>
			</figure>
			<div>
				<h2>Habilidades programación.</h2>
				<p>Diseño de páginas web, utilizando  HTML, CCS.</p>
			</div>
				

		</article>
		<article class="Aud-enl">
			<figure class="Prog_fig">
			<video controls>
  				<source src="http://localhost/Portafolio/Public/Videos/Bicicleta.mp4" type="video/mp4">
  				<!--<source src="movie.ogg" type="video/ogg">-->
				Su navegador no soporta el de vídeo
				</video>
			</figure>
			<div>
				<h2> Habilidades Audiovisual</h2>
				<p>Creación de Spot publicitario, Graphic Emotion y corto Audiovisual.</p>
			</div>
		</article>
		<article class="dis-enl">
			<figure class="Prog_fig">
				<img src="http://localhost/Portafolio/Public/images/Diseño/Ambigrama.png"/>
			</figure>
			<div>
				<h2>Habilidades  Diseño</h2>
				<p>Diseño web, Creación de logotipos, ilustración y dibujo a lapiz.</p>
			</div>
				

		</article>
	</article>
		<?php 

include ('Formularios/contact.php');
?>	
</section>
	<?php include ('templates/footer.php'); ?>