<div class="spacing-top">
<div class="register">
			<fieldset>
					<legend>Para ver mis trabajos por favor registrarse:</legend>
						<form name="register" method="post" action="../../app/Http/Controllers/Controller.php">
							
								<select name="genre" required>
									<option value="hombre">Hombre</option>
									<option value="mujer">Mujer</option>
									<option value="genero" selected>Genero</option>
								</select>
								<p>
									<input type="radio" name="person" value="Company"/>
									<label>Empresa</label>
									
								
									<input type="radio" name="person" value="natural"/>
									<label>Persona natural</label>
								</p>
									
								<input type="text" name="nombre" placeholder="Usuario.." required>
								<input type="email" name="correo" placeholder="Correo electronico.." required>
								<input type="password" name="password" placeholder="Contraseña.." >
								<input type="password" name="conf_pass" placeholder="Confirmar contraseña.." required>
							<p>Sus datos personales se usaran para respaldar su experiencia en este sitio web, para administrar el acceso a su cuenta y para otros fines descriptos en nuestra <a href="" class="polipriv">politica de privacidad!</a></p>
								<input type="submit" name="btn-register" value="Registrar usuario">
						</form>
			</fieldset>
			<p><a href="http://localhost/Portafolio/views/front/login.php" class="registrado">Ya estoy registrado!</a></p>
	</div>
</div>