<?php
session_start();
?>
	<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="whidth=device-width, initial-escale=1.0"/>
	<title>Portafolio</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/Portafolio/Public/css/font.css"/>
	<link rel="stylesheet" type="text/css" href="http://localhost/Portafolio/Public/css/skill.css"/>
	<link rel="stylesheet" type="text/css" href="http://localhost/Portafolio/Public/css/style.css"/>
</head>
<body>
<header>
	<figure class="logo-marco">
		<img src="http://localhost/Portafolio/Public/images/logo-320.svg" alt="Rusbel" class="logo"/>
	</figure>
	<nav>
		<ul class="nav">
			<li><a href="http://localhost/Portafolio/views/user/index.php">Perfil</a></li>
			<li><a href="#portafolio">Portafolio</a>
				<ul>
					<li><a href="http://localhost/Portafolio/views/user/skillprogramacion.php">Programacion</a></li>
					<li><a href="http://localhost/Portafolio/views/user/skillaudiovisuales.php">Audiovisual</a></li>
					<li><a href="http://localhost/Portafolio/user/skilldiseño.php">Diseño</a></li>
				</ul>
			</li>
			<li><a href="http://localhost/Portafolio/views/user/contact.php">Contacto</a></li>
		</ul>
	</nav>

	<div class="user_img">
    <ul>
      <li>
      <figure>
        <?php

        if(isset($_SESSION['username']) && isset($sesion['Genero'])){
          $genre = $sesion['Genero'];
        }
         if ($genre == 'hombre') {
          echo '<img src="http://localhost/Portafolio/public/images/Registro/user.png" onclick="toggle()">';
        }elseif($genre == 'mujer'){
          echo '<img src="http://localhost/Portafolio/public/images/Registro/userw.png" onclick="toggle()">';
        } 
        ?>
      </figure>
      <ul>
        <input type="submit" name="toggle" value="x" class="buttonOff" onclick="toggle()"/>
       <li><a>Actualizar datos</a></li> <!-- javascrit-->
          <li><a>Cambiar imagen</a></li>
          </ul>
    </li>
       <li>
          <?php
          if(isset($_SESSION['username']) && isset($sesion['Genero'])){
             $nombre = $sesion['Nombre'];
              echo '<p>'. $nombre . '</p>';
            }
          ?>
        </li>
      </ul>
  	</div>
</header>