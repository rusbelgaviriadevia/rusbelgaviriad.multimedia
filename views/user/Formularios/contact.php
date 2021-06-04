<div class="contact cont">
		<h2>CONTÁCTEME</h2>
		<p>Su mensaje sera contestado en el menor tiempo posible, puede tambien contactarme realizando el registro en la página</p>
		<p><a href="http://localhost/Portafolio/views/front/register.php" class="registrado">No estoy registrado!</a></p>
		<p><a href="http://localhost/Portafolio/views/front/login.php" class="registrado">Ya estoy registrado!</a></p>

		</div>
					
						<form name="register" method="post" action="http://localhost/Portafolio/app/Http/Controllers/Controller.php">
							<p>
								<input type="text" name="asunto_msg" placeholder="Asunto: " required>
							</p>
							<p>
								<textarea name="msg" rows="5" cols="100" required></textarea>
							</p>
							<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="genre" value="<?php echo $genre; ?>">
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>">

								<input type="submit" name="btn-msg" value="Enviar mensaje">
								<input type="reset" value="Limpiar datos">
							</p>
						</form>
		<div class="redes">
			<figure><a href=""><img src="http://localhost/Portafolio/Public/images/Redes/Behance.png" alt="Behance"/>	</a></figure>
			<figure>
				<a href=""><img src="http://localhost/Portafolio/Public/images/Redes/github.png" alt="github"/></a>
			</figure>
			<figure>
				<a href=""><img src="http://localhost/Portafolio/Public/images/Redes/Instagram.png" alt="Instagram"/></a>
			</figure>
			<figure>
				<a href="" target="_blank"><img src="http://localhost/Portafolio/Public/images/Redes/linkedin.png" alt="linkedin"/></a>
			</figure>
		</div>